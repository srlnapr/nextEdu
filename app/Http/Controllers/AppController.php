<?php

namespace App\Http\Controllers;

use App\Models\HasilTes;
use Illuminate\Support\Facades\DB;
use App\Models\Jurusan;
use App\Models\Artikel;
use App\Models\Rule;
use App\Models\Pertanyaan;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'hasilTes', 'artikel', 'about', 'forwardChaining', 'forwardChainingGuest']);
    }

    public function index()
    {
        $user = User::all();
        $jurusan = Jurusan::all();
        $artikel = Artikel::all();
        $hasilTes = HasilTes::all();
        return view('pages.home', [
            'user' => $user,
            'jurusan' => $jurusan,
            'artikel' => $artikel,
            'hasilTes' => $hasilTes
        ]);
    }

    public function hasilTes()
    {
        $hasilTes = HasilTes::all(); // Mengambil semua hasil tes dari database
        return view('pages.hasilTes', compact('hasilTes')); // Mengirim data ke view
    }

    public function diagnosis()
    {
        $jurusans = Jurusan::all();
        $pertanyaans = Pertanyaan::all();
        return view('pages.diagnose', [
            "pertanyaans" => $pertanyaans,
            'pertanyaanInfo' => $pertanyaans,
            'jurusanInfo' => $jurusans,
        ]);
    }

    public function artikel()
    {
        $artikel = Artikel::orderby('jurusan_id');
        $jurusans = Jurusan::all();

        if (request('search')) {
            $artikel->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.medicinesPage', [
            'artikel' => $artikel->paginate(8)->withQueryString(),
            'jurusans' => $jurusans
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function logicRelation()
    {
        $jurusans = Jurusan::all();
        $pertanyaans = Pertanyaan::all();
        $rules = Rule::all();

        $jurusanRelation = [];
        for ($i = 0; $i < count($jurusans); $i++) {
            $jurusanRelation[$i]['id'] = $jurusans[$i]['id'];
            $jurusanRelation[$i]['name'] = $jurusans[$i]['jurusan'];
            $jurusanRelation[$i]['rules'] = [];

            for ($j = 0; $j < count($pertanyaans); $j++) {
                $rule = 0;
                for ($k = 0; $k < count($rules); $k++) {
                    if (
                        $rules[$k]['pertanyaan_id'] == $pertanyaans[$j]['id'] &&
                        $rules[$k]['jurusan_id'] == $jurusans[$i]['id']
                    ) {
                        $rule = $rules[$k]['rule_value'];
                        break;
                    }
                }
                $jurusanRelation[$i]['rules'][] = $rule ?: 0;
            }
        }

        return view('components.admin.rules.view', [
            'jurusanRelations' => $jurusanRelation,
            'pertanyaansInfo' => $pertanyaans,
            'jurusansInfo' => $jurusans,
        ]);
    }

    public function edit(int $id)
    {
        $pertanyaans = Pertanyaan::all();
        $rules = Rule::all();
        $jurusans = Jurusan::all();
        $jurusan = DB::table('jurusan')->where('id', '=', $id)->first();

        $jurusanDetail = [
            "id" => $jurusan->id,
            "jurusan_code" => $jurusan->jurusan_code,
            "name" => $jurusan->jurusan,
            "rules" => [],
        ];

        foreach ($pertanyaans as $pertanyaan) {
            $rule = collect($rules)->firstWhere(fn($r) => $r->pertanyaan_id == $pertanyaan->id && $r->jurusan_id == $jurusan->id);
            $jurusanDetail['rules'][] = $rule->rule_value ?? 0;
        }

        return view('components.admin.rules.edit', [
            'jurusanDetails' => $jurusanDetail,
            'jurusansInfo' => $jurusans,
            'pertanyaansInfo' => $pertanyaans,
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->data;

        foreach ($data as $item) {
            Rule::updateOrCreate(
                [
                    'jurusan_id' => $item['jurusanId'],
                    'pertanyaan_id' => $item['pertanyaanId'],
                ],
                [
                    'rule_value' => $item['value']
                ]
            );
        }

        return response()->json([
            'status' => 200,
            'message' => 'Rule base was updated successfully',
        ], 200);
    }

    public function forwardChaining(Request $request, string $id)
    {
        $data = $request->data;
        $rules = Rule::all();
        $jurusans = Jurusan::all();

        usort($data, fn($a, $b) => $a['pertanyaanId'] - $b['pertanyaanId']);

        $result = 'Salah jurusan ';
        foreach ($jurusans as $jurusan) {
            $matched = collect($rules)
                ->where('jurusan_id', $jurusan->id)
                ->zip($data)
                ->every(fn($pair) => $pair[0]['pertanyaan_id'] == $pair[1]['pertanyaanId'] && $pair[0]['rule_value'] == $pair[1]['value']);

            if ($matched) {
                $result = $jurusan->jurusan;
                break;
            }
        }

        HasilTes::create([
            'user_id' => $id,
            'result' => $result
        ]);

        return response()->json([
            'status' => 200,
            'user_id' => $id,
            'result' => $result
        ], 200);
    }

    public function forwardChainingGuest(Request $request)
    {
        return response()->json([
            'status' => 200,
            'message' => 'masuk guest',
            'data' => $request->data
        ], 200);
    }
}
