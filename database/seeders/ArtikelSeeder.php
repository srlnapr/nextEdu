<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     Artikel::create([
    //         'nama_jurusan_id' => 1,
    //         'name' => 'Kurikulum Merdeka di SMA: Kenali Karakteristik dan Strukturnya',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Kurikulum Merdeka memberikan ruang lebih luas untuk pengembangan keterampilan yang dibutuhkan di dunia kerja, memberikan pengalaman belajar yang lebih relevan.',
    //         'composition' => 'Sistem pembelajaran berbasis proyek, fleksibel, dan berbasis kompetensi akan membekali siswa dengan keterampilan praktis.',
    //         'dose' => 'Diharapkan siswa dapat mengembangkan berbagai keterampilan sosial dan profesional untuk siap menghadapi tantangan pekerjaan.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 2,
    //         'name' => 'Memilih Jurusan Studi di SMA',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Memilih jurusan yang tepat di SMA merupakan langkah awal yang penting dalam merencanakan karier masa depan, karena ini akan mempengaruhi peluang pendidikan dan pekerjaan di masa depan.',
    //         'composition' => 'Jurusan IPA, IPS, dan Bahasa menawarkan berbagai keterampilan yang relevan dengan berbagai pilihan karier profesional yang berbeda.',
    //         'dose' => 'Penting untuk memilih jurusan yang sesuai dengan minat dan bakat agar lebih siap dalam menghadapi dunia kerja.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 3,
    //         'name' => 'Efektivitas Kebijakan Penghapusan Jurusan IPA, IPS, dan Bahasa di SMA',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Keputusan untuk menghapus pemisahan jurusan di SMA dapat memberikan fleksibilitas lebih besar bagi siswa untuk mengeksplorasi berbagai bidang ilmu dan keterampilan.',
    //         'composition' => 'Kebijakan ini mendukung pengembangan keterampilan siswa secara lebih luas dan multidisipliner, yang dibutuhkan di dunia kerja yang semakin kompleks.',
    //         'dose' => 'Siswa yang memiliki kesempatan untuk belajar berbagai bidang secara bersamaan dapat menjadi lebih siap beradaptasi dengan berbagai tantangan profesional.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 4,
    //         'name' => '20 Jurusan di SMK yang Paling Diminati dan Bergaji Tinggi',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Siswa SMK memiliki banyak pilihan jurusan yang sesuai dengan kebutuhan industri, di antaranya adalah jurusan teknik, kesehatan, dan desain yang menawarkan peluang karier yang sangat baik.',
    //         'composition' => 'Jurusan teknik dan otomotif sering kali menawarkan kesempatan karier yang stabil dengan penghasilan yang tinggi, terutama jika siswa menguasai keterampilan praktis dan teknis.',
    //         'dose' => 'Mengambil jurusan yang memiliki prospek karier yang jelas dan sesuai dengan perkembangan teknologi adalah langkah penting untuk kesuksesan profesional.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 5,
    //         'name' => 'Belajar Apa Aja Sih, di Sekolah Menengah Kejuruan (SMK)?',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Di SMK, siswa belajar berbagai keterampilan praktis yang langsung dapat diterapkan di dunia kerja, mulai dari teknisi, desainer, hingga pekerja sektor kreatif lainnya.',
    //         'composition' => 'SMK menawarkan pendidikan yang langsung terhubung dengan kebutuhan pasar kerja, memberikan keterampilan yang sangat dicari oleh berbagai industri.',
    //         'dose' => 'Dengan keterampilan yang tepat, lulusan SMK dapat langsung bekerja di berbagai bidang atau melanjutkan pendidikan ke jenjang yang lebih tinggi untuk meningkatkan karier mereka.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 6,
    //         'name' => '10 Pekerjaan Terbaik untuk Lulusan SMA/SMK, Bisa Sukses Gapai Karier Impian!',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Lulusan SMA dan SMK memiliki peluang besar untuk meraih karier impian, baik di dunia profesional maupun di bidang wirausaha.',
    //         'composition' => 'Pekerjaan seperti manajer proyek, desainer grafis, hingga teknisi memiliki prospek yang sangat baik dengan potensi penghasilan yang tinggi.',
    //         'dose' => 'Penting untuk memanfaatkan kesempatan belajar yang ada di sekolah dan memperluas keterampilan dengan mengikuti pelatihan atau magang di bidang yang diminati.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 7,
    //         'name' => 'Tantangan bagi Lulusan SMA dan SMK: Kesiapan Menghadapi Dunia Kerja',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Lulusan SMA dan SMK sering menghadapi tantangan dalam memasuki dunia kerja, seperti kurangnya pengalaman praktis dan persaingan ketat di pasar kerja.',
    //         'composition' => 'Penting bagi mereka untuk terus mengembangkan keterampilan yang relevan, seperti keterampilan teknis dan soft skills seperti komunikasi dan teamwork.',
    //         'dose' => 'Menjadi fleksibel dan beradaptasi dengan kebutuhan industri yang terus berkembang adalah kunci untuk sukses dalam karier.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 7,
    //         'name' => 'Peluang Karier Siswa SMK Setelah Lulus, Apa Saja Ya?',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Siswa SMK memiliki banyak peluang karier setelah lulus, dengan beberapa di antaranya dapat langsung memasuki dunia kerja atau melanjutkan pendidikan ke perguruan tinggi.',
    //         'composition' => 'Pekerjaan di bidang teknik, otomotif, dan desain grafis sangat diminati dan dapat menawarkan gaji yang kompetitif.',
    //         'dose' => 'Peluang untuk bekerja di perusahaan besar atau memulai usaha sendiri juga terbuka lebar bagi lulusan SMK yang memiliki keterampilan dan pengetahuan yang memadai.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 7,
    //         'name' => 'Masa Depan Setelah SMA: Antara Kuliah dan Berdaya Mandiri',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Setelah lulus SMA, siswa harus memilih antara melanjutkan pendidikan ke perguruan tinggi atau langsung bekerja untuk meraih kemandirian finansial.',
    //         'composition' => 'Keputusan ini bergantung pada minat, kemampuan finansial, dan tujuan karier di masa depan.',
    //         'dose' => 'Penting untuk mengeksplorasi semua pilihan dan memilih yang terbaik berdasarkan kebutuhan pribadi dan aspirasi karier.',
    //     ]);
    //     Artikel::create([
    //         'nama_jurusan_id' => 7,
    //         'name' => 'Lulus SMA Kerja atau Kuliah? Pahami Kekurangan dan Kelebihannya!',
    //         'img' => 'https://source.unsplash.com/w8p9cQDLX7I',
    //         'description' => 'Memilih antara langsung bekerja atau melanjutkan pendidikan setelah SMA adalah keputusan besar yang harus dipikirkan matang-matang.',
    //         'composition' => 'Bekerja segera setelah lulus memberikan keuntungan finansial dan pengalaman praktis, namun kuliah dapat membuka peluang karier yang lebih luas dengan gelar yang relevan.',
    //         'dose' => 'Penting untuk mempertimbangkan prospek karier jangka panjang dan minat pribadi dalam mengambil keputusan tersebut.',
    //     ]);
     }
}
