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
                if (!$rule) {
                    array_push($jurusanRelation[$i]['rules'], 0);
                } else {
                    array_push($jurusanRelation[$i]['rules'], $rule);
                }
            }
        }

        $jurusanRelations = $jurusanRelation;
        $artikelInfo = Artikel::all();
        $usersInfo = User::all();


        return view('components.admin.rules.view', [
            'jurusanRelations' => $jurusanRelations,
            'pertanyaasnInfo' => $pertanyaans,
            'jurusansInfo' => $jurusans,
            'Info' => $artikelInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    public function edit(int $id)
    {
        $pertanyaans = Pertanyaan::all();
        $rules = Rule::all();
        $jurusans = Jurusan::all();
        $jurusan = DB::table('jurusan')->where('id', '=', $id)->get()[0];

        $jurusanDetail = array(
            "id" => "$jurusans->id",
            "jurusan_code" => $jurusan->jurusans_code,
            "name" => $jurusan->jurusans,
            "rules" => [],
        );

        for ($i = 0; $i < count($pertanyaans); $i++) {
            $rule = 0;
            for ($j = 0; $j < count($rules); $j++) {
                if (
                    $rules[$j]['pertanyaan_id'] == $pertanyaans[$i]['id'] &&
                    $rules[$j]['jurusan_id'] == $jurusans->id
                ) {
                    $rule = $rules[$j]['rule_value'];
                    break;
                }
            }

            if (!$rule) {
                array_push($jurusanDetail['rules'], 0);
            } else {
                array_push($jurusanDetail['rules'], $rule);
            }
        }
        // dd($diseaseDetail);

        $jurusanDetails = $jurusanDetail;
        $artikelInfo = Artikel::all();
        $usersInfo = User::all();


        return view('components.admin.rules.edit', [
            'jurusanDetails' => $jurusanDetails,
            'jurusansInfo' => $jurusans,
            'pertanyaansInfo' => $pertanyaans,
            'artikelInfo' => $artikelInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->data;

        for ($i = 0; $i < count($data); $i++) {
            Rule::updateOrCreate(
                [
                    'jurusan_id' => $data[$i]['jurusanId'],
                    'pertanyaan_id' => $data[$i]['pertanyaanId'],
                ],
                [
                    'rule_value' => $data[$i]['value']
                ]
            );
        }

        return response()->json([
            'status' => 200,
            'message' => 'Rule base was updated successfully',
        ], 200);

        // return redirect('/rules')->with('success', 'Rule base was updated successfully');
    }

    public function forwardChaining(Request $request, string $id)
    {
        $data = $request->data;
        $rules = Rule::all();
        $jurusans = Jurusan::all();

        usort($data, function ($a, $b) {
            return $a['pertanyaanId'] - $b['pertanyaanId'];
        });

        $result = '';
        for ($i = 0; $i < count($jurusans); $i++) {
            $stats = '';
            $test = [];
            for ($j = 0; $j < count($rules); $j++) {
                if ($jurusans[$i]['id'] == $rules[$j]['jurusan_id']) {
                    array_push($test, [
                        'pertanyaanId' => $rules[$j]['pertanyaan_id'],
                        'value' => $rules[$j]['rule_value']
                    ]);
                }
            }
            for ($k = 0; $k < count($test); $k++) {
                if (
                    $test[$k]['pertanyaanId'] == $data[$k]['pertanyaanId'] &&
                    $test[$k]['value'] == $data[$k]['value']
                ) {
                    $stats = 'berhasil';
                } else {
                    $stats = 'gagal';
                    break;
                }
            }
            if ($stats == 'berhasil') {
                $result = $jurusans[$i]['jurusan'];
                break;
            } else {
                $result = 'Salah jurusan ';
            }
        }

        HasilTes::create([
            'user_id' => $id,
            'result' => $result
        ]);

        return response()->json([
            'status' => 200,
            'user_id' => $id,
            'stats' => $stats,
            'result' => $result,
            'test' => $test,
            'data' => $data
        ], 200);
    }

    //     public function forwardChainingGuest(Request $request)
//     {
//         return response()->json([
//             'status' => 200,
//             'message' => 'masuk guest',
//             'data' => $request['data']
//         ], 200);
//     }
}