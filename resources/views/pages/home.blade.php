{{-- @dd($disease); --}}
{{-- @dd($user); --}}

@extends('layouts.app')

@section('content')
<section class="pt-28 pb-24 lg:pt-36 lg:pb-32 bg-backgroundLight">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <div class="flex flex-wrap space-x-2">
                    <h1 class="text-6xl font-bold text-gray-900 dark:text-white" data-aos="fade-up">Temukan</h1>
                    <h1 id="typing-text" class="text-6xl font-bold text-purple-900" data-aos="fade-up"
                        data-aos-delay="100"></h1>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const text = "Jurusanmu"; // Teks yang akan diketik
                            const typingElement = document.getElementById("typing-text");
                            let index = 0;
                            let isDeleting = false;
                    
                            function typeText() {
                                if (!isDeleting) {
                                    // Ketik teks satu per satu
                                    typingElement.innerHTML = text.substring(0, index);
                                    index++;
                    
                                    // Jika sudah selesai, mulai hapus setelah jeda
                                    if (index > text.length) {
                                        isDeleting = true;
                                        setTimeout(typeText, 1000); // Tunggu sebelum menghapus
                                    } else {
                                        setTimeout(typeText, 150); // Kecepatan mengetik
                                    }
                                } else {
                                    // Hapus teks satu per satu
                                    typingElement.innerHTML = text.substring(0, index);
                                    index--;
                    
                                    // Jika sudah terhapus semua, mulai mengetik lagi
                                    if (index === 0) {
                                        isDeleting = false;
                                    }
                                    setTimeout(typeText, 100); // Kecepatan menghapus
                                }
                            }
                    
                            typeText(); // Mulai animasi mengetik
                        });
                    </script>
                    <h1 class="text-6xl font-bold text-gray-900" data-aos="fade-up" data-aos-delay="200">Sekarang</h1>
                </div>

                <p class="mt-6 mb-3 max-w-md text-slate-500" data-aos="fade-up" data-aos-delay="300">
                    Temukan informasi lengkap seputar jurusan yang sesuai dengan minat dan bakatmu.
                </p>

                <div class="mb-5 flex flex-col md:flex-row" data-aos="fade-up" data-aos-delay="400">
                    <button type="button"
                        class="flex items-center gap-2 text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">
                        Lihat potensimu
                        <svg class="rtl:rotate-180 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <img src="/assets/element1.png" alt="element1" class="absolute top-12 left-1/2 transform -translate-x-1/2"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="1200" data-aos-anchor-placement="top-bottom"
                data-aos="zoom-in">

            <div style="position: relative; text-align: right; margin-left: 80px; margin-right: 10px;">
                <img src="/assets/gambar1.png" class="float-animation" alt="gambar1" width="500px" height="600px"
                    data-aos="zoom-in" data-aos-delay="600">
            </div>
        </div>
    </div>
</section>
<section id="tutorial"
    class="pt-16 pb-20 lg:pt-24 lg:pb-28 bg-backgroundPrimary h-[600px] max-w-screen overflow-hidden">
    <div class="container">
        <!-- Header Section -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-5xl font-black mb-4">Hal yang perlu <span class="text-purpleMain">dilakukan</span></h2>
            <p class="text-gray-600 max-w-2xl text-2xl mx-auto">
                Kami memastikan Anda menemukan jurusan yang tepat dengan perencanaan matang dan sesuai dengan kebutuhan
                Anda.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-purpleMain" data-aos="fade-right">
                <div class="mb-4">
                    <svg class="w-8 h-8 text-purpleMain" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14v4a2 2 0 01-2 2H7a2 2 0 01-2-2v-4m14-2H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-purpleMain">Daftar Account</h3>
                <p class="text-gray-600 mb-4">
                    Daftar akunmu untuk mendapatkan hasil jurusanmu
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-purpleMain" data-aos="fade-up">
                <div class="mb-4">
                    <svg class="w-8 h-8 text-purpleMain" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-purpleMain">Pembayaran</h3>
                <p class="text-gray-600 mb-4">
                    Pembayaran dengan mudah agar kamu bisa melakukan tes minatmu
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-purpleMain" data-aos="fade-left">
                <div class="mb-4">
                    <svg class="w-8 h-8 text-purpleMain" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-purpleMain">Lihat Hasil</h3>
                <p class="text-gray-600 mb-4">
                    Setelah itu kamu bisa menyaksikan hasil dari tes minatmu
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Tambahkan script AOS sebelum </body> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
            duration: 1000, // Durasi animasi dalam milidetik
            easing: 'ease-in-out', // Efek transisi animasi
            once: false, // Biarkan animasi berjalan setiap kali masuk viewport
            mirror: true // Animasi tetap berjalan saat scroll ke atas
        });
</script>


<section id="tentang" class="pt-16 pb-20 lg:pt-24 lg:pb-28 bg-backgroundLight h-[600px] max-w-screen overflow-hidden">
    <div class="container grid lg:grid-cols-12 gap-8">
        <!-- Kolom Kiri: Teks -->
        <div class="lg:col-span-7">
            <h1 class="text-4xl font-bold tracking-tight md:text-5xl">
                Apa itu <span class="italic">Jurusanku</span>?
            </h1>
            <p class="text-gray-600 md:text-lg my-6">
                Sebuah website yang dirancang untuk membantu kamu menemukan jurusan yang paling sesuai dengan minat dan
                bakatmu menggunakan sistem pakar. Sistem ini menggabungkan pengetahuan dari para ahli di bidang
                pendidikan dan algoritma canggih untuk memberikan rekomendasi jurusan yang paling tepat.
            </p>
            <a href="#"
                class="inline-flex items-center px-5 py-3 text-base font-medium text-white rounded-lg bg-purpleMain hover:bg-purple-700 focus:ring-4 focus:ring-purple-300">
                Selengkapnya
            </a>
        </div>

        <!-- Kolom Kanan: Maskot & Floating Cards -->
        <div class="lg:col-span-5 flex justify-center items-center relative">
            <!-- Maskot -->
            <img src="{{ asset(path: 'assets/jurpan-home.png') }}" alt="Jurusanku Owl Mascot"
                class="w-[320px] md:w-[400px] lg:w-[450px] z-10 relative">

            <!-- Floating Cards -->
            <!-- Card 1: Penilaian Terbaik -->
            <div class="floating-card absolute top-8 left-0 bg-white p-3 rounded-lg shadow-lg w-[140px] z-20">
                <h4 class="text-xs font-semibold mb-1">Penilaian Terbaik</h4>
                <div class="flex gap-1 text-sm">
                    <!-- Mengecilkan emoji -->
                    <span>😍</span>
                    <span>😊</span>
                    <span>😄</span>
                    <span>😃</span>
                    <span>😀</span>
                </div>
            </div>

            <!-- Card 2: Masukan Positif -->
            <div
                class="floating-card absolute top-0 right-0 translate-x-2 -translate-y-2 bg-white p-4 rounded-lg shadow-lg w-[200px] whitespace-normal z-20">
                <h3 class="text-lg font-bold text-purpleMain mb-1">95%</h3> <!-- Font lebih kecil -->
                <p class="text-gray-600 text-sm font-semibold">Masukan Positif</p>
                <p class="text-xs text-gray-500">Pemberian masukan positif membawa dampak baik untuk perkembangan
                    website ini.</p>
            </div>


            <!-- Card 3: Total Pengguna -->
            <div
                class="floating-card absolute top-[80%] right-1/4 transform -translate-y-1/3 translate-x-12 bg-white p-4 rounded-lg shadow-lg w-[250px] whitespace-normal z-20">
                <h3 class="text-lg font-bold text-purpleMain mb-1">30,000+</h3> <!-- Font lebih kecil -->
                <p class="text-gray-600 text-sm font-semibold">Total Pengguna</p>
                <p class="text-xs text-gray-500">Total penggunaan Jurusanku sebagai penentu masa depan mereka.</p>
            </div>


        </div>


</section>


<section id="prospek" class="pt-16 pb-20 lg:pt-24 lg:pb-28 bg-backgroundPrimary h-[600px] max-w-screen overflow-hidden">
    <img src="{{ asset(path: 'assets/background.png') }}" alt="Background Prospek"
        class="absolute  w-full h-full max-h-[500px] object-cover z-[1]">

    <div class="container mx-auto px-4">
        {{-- Header Section --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Top peluang <span class="text-indigo-600">jurusan</span></h2>
            <p class="text-gray-600">
                Jurusan yang banyak diminati dengan prospek kuliah dan kerja terbaik
            </p>
        </div>

        {{-- Cards Container --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            {{-- Card 1 - Sistem IT --}}
            <a href="#" class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('assets/prospek1.png') }}"
                    alt="Sistem IT">
                <div class="p-4 flex justify-between items-center">
                    <h3 class="text-xl font-semibold">Sistem IT</h3>
                    <span class="text-orange-500 font-medium">01</span>
                </div>
            </a>

            {{-- Card 2 - Bisnis --}}
            <a href="#" class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('assets/prospek2.png') }}"
                    alt="Bisnis">
                <div class="p-4 flex justify-between items-center">
                    <h3 class="text-xl font-semibold">Bisnis</h3>
                    <span class="text-orange-500 font-medium">02</span>
                </div>
            </a>

            {{-- Card 3 - Perkantoran --}}
            <a href="#" class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('assets/prospek3.png') }}"
                    alt="Perkantoran">
                <div class="p-4 flex justify-between items-center">
                    <h3 class="text-xl font-semibold">Perkantoran</h3>
                    <span class="text-orange-500 font-medium">03</span>
                </div>
            </a>
        </div>
    </div>
</section>
{{-- Section 1: Hal yang didapatkan --}}
<section id="fitur" class="pt-16 pb-20 lg:pt-24 lg:pb-28 bg-backgroundLight h-[600px] max-w-screen overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
            <div class="space-y-6">
                <div class="max-w-xl">
                    <h2 class="text-5xl font-bold mb-4">Hal yang <span
                            class="text-indigo-600 text-purpleMain">didapatkan</span></h2>
                    <p class="text-gray-600 mb-8">
                        Kamu akan mendapatkan beberapa hal yang bermanfaat untuk jenjangmu kedepan
                    </p>
                </div>

                <div class="space-y-4">
                    {{-- Feature 1 --}}
                    <div class="flex items-start gap-4 p-4 bg-white rounded-lg hover:shadow-md transition">
                        <div class="p-2 bg-indigo-100 rounded-lg">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-indigo-600">Jurusan yang sesuai</h3>
                            <p class="text-gray-600">Kamu akan mendapatkan hasil jurusan sesuai dengan minat bakat kamu
                            </p>
                        </div>
                    </div>

                    {{-- Feature 2 --}}
                    <div class="flex items-start gap-4 p-4 bg-white rounded-lg hover:shadow-md transition">
                        <div class="p-2 bg-indigo-100 rounded-lg">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-indigo-600">Prospek Kerja</h3>
                            <p class="text-gray-600">Jurusan yang telah dianalisis akan memiliki berapa persen prospek
                                kerja</p>
                        </div>
                    </div>

                    {{-- Feature 3 --}}
                    <div class="flex items-start gap-4 p-4 bg-white rounded-lg hover:shadow-md transition">
                        <div class="p-2 bg-indigo-100 rounded-lg">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-indigo-600">Chat Bot</h3>
                            <p class="text-gray-600">Chat Bot AI untuk menemukan jawaban yang cepat</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('assets/fitur.png') }}" alt="Video Preview" class="w-full h-auto">
            </div>
            >
        </div>
    </div>
</section>

<section id="testimoni" class="pt-20 pb-24 lg:pt-28 lg:pb-32 bg-backgroundLight h-auto max-w-screen overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-14 items-center"> <!-- Kurangi gap agar lebih rapat -->
            
            <!-- Bagian Kiri -->
            <div class="ml-10 lg:ml-20"> <!-- Geser lebih ke kanan -->
                <h2 class="text-4xl font-bold mb-3">Testimoni</h2> <!-- Perkecil ukuran teks -->
                <h3 class="text-4xl font-bold text-indigo-600 mb-6">jurusanku.</h3> <!-- Perkecil ukuran teks -->
                <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                    <!-- Perkecil paragraf -->
                    Sebuah ucapan kepuasan oleh customer yang pernah melakukan tes minat di nextEdu.
                </p>
                <div class="flex gap-6"> <!-- Sesuaikan jarak tombol -->
                    <button id="prevBtn" class="p-3 rounded-full border border-gray-400 hover:bg-gray-200 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextBtn" class="p-3 rounded-full bg-indigo-600 text-white hover:bg-indigo-700 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>



            <!-- Bagian Testimoni -->
            <div class="relative w-full max-w-lg">
                <!-- Perbesar container -->
                <!-- Testimoni Aktif -->
                <div class="bg-white p-8 rounded-lg shadow-xl transition-all duration-500 relative z-10"
                    id="testimonial">
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed" id="testiText">
                        "Hasil yang sangat memuaskan, pertanyaan yang disebutkan mudah dipahami, berkat nextEdu kini
                        saya belajar sesuai dengan minat saya."
                    </p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('assets/img/profile.jpg') }}" alt="Irfan" class="w-14 h-14 rounded-full"
                            id="testiImage">
                        <div>
                            <h4 class="text-lg font-semibold" id="testiName">Irfan</h4>
                            <p class="text-gray-600" id="testiSchool">SMP 1 Purwokerto</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni Berikutnya dengan Efek Bayangan -->
                <div class="absolute top-16 left-6 bg-white p-8 rounded-lg shadow-lg opacity-40 scale-95 transition-all duration-500 transform translate-x-4"
                    id="nextTestimonial">
                    <p class="text-lg text-gray-500 mb-6 leading-relaxed" id="nextTestiText">
                        "Tes minat ini sangat membantu saya dalam menentukan jurusan. Sekarang saya lebih yakin dengan
                        pilihan saya!"
                    </p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('assets/img/profile2.jpg') }}" alt="Aisyah" class="w-14 h-14 rounded-full"
                            id="nextTestiImage">
                        <div>
                            <h4 class="text-lg font-semibold" id="nextTestiName">Aisyah</h4>
                            <p class="text-gray-500" id="nextTestiSchool">SMA Negeri 3 Jakarta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const testimonials = [
        {
            text: "Hasil yang sangat memuaskan, pertanyaan yang disebutkan mudah dipahami, berkat nextEdu kini saya belajar sesuai dengan minat saya.",
            image: "{{ asset('assets/img/profile.jpg') }}",
            name: "Irfan",
            school: "SMP 1 Purwokerto"
        },
        {
            text: "Tes minat ini sangat membantu saya dalam menentukan jurusan. Sekarang saya lebih yakin dengan pilihan saya!",
            image: "{{ asset('assets/img/profile2.jpg') }}",
            name: "Aisyah",
            school: "SMA Negeri 3 Jakarta"
        },
        {
            text: "Menakjubkan! Tes ini membuat saya semakin mengenal potensi diri saya sendiri.",
            image: "{{ asset('assets/img/profile3.jpg') }}",
            name: "Budi",
            school: "SMA 2 Surabaya"
        }
    ];

    let currentIndex = 0;

    document.getElementById("prevBtn").addEventListener("click", function() {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial();
    });

    document.getElementById("nextBtn").addEventListener("click", function() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial();
    });

    function updateTestimonial() {
        // Testimoni utama
        document.getElementById("testiText").innerText = testimonials[currentIndex].text;
        document.getElementById("testiImage").src = testimonials[currentIndex].image;
        document.getElementById("testiName").innerText = testimonials[currentIndex].name;
        document.getElementById("testiSchool").innerText = testimonials[currentIndex].school;

        // Testimoni berikutnya dengan efek bayangan
        let nextIndex = (currentIndex + 1) % testimonials.length;
        document.getElementById("nextTestiText").innerText = testimonials[nextIndex].text;
        document.getElementById("nextTestiImage").src = testimonials[nextIndex].image;
        document.getElementById("nextTestiName").innerText = testimonials[nextIndex].name;
        document.getElementById("nextTestiSchool").innerText = testimonials[nextIndex].school;
    }
</script>

<script>
    const testimonials = [
            {
                text: "Hasil yang sangat memuaskan, pertanyaan yang disebutkan mudah dipahami, berkat nextEdu kini saya belajar sesuai dengan minat saya.",
                image: "{{ asset('assets/img/profile.jpg') }}",
                name: "Irfan",
                school: "SMP 1 Purwokerto"
            },
            {
                text: "Tes minat ini sangat membantu saya dalam menentukan jurusan. Sekarang saya lebih yakin dengan pilihan saya!",
                image: "{{ asset('assets/img/profile2.jpg') }}",
                name: "Aisyah",
                school: "SMA Negeri 3 Jakarta"
            },
            {
                text: "Menakjubkan! Tes ini membuat saya semakin mengenal potensi diri saya sendiri.",
                image: "{{ asset('assets/img/profile3.jpg') }}",
                name: "Budi",
                school: "SMA 2 Surabaya"
            }
        ];
    
        let currentIndex = 0;
    
        document.getElementById("prevBtn").addEventListener("click", function() {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateTestimonial();
        });
    
        document.getElementById("nextBtn").addEventListener("click", function() {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateTestimonial();
        });
    
        function updateTestimonial() {
            // Testimoni utama
            document.getElementById("testiText").innerText = testimonials[currentIndex].text;
            document.getElementById("testiImage").src = testimonials[currentIndex].image;
            document.getElementById("testiName").innerText = testimonials[currentIndex].name;
            document.getElementById("testiSchool").innerText = testimonials[currentIndex].school;
    
            // Testimoni berikutnya dengan efek bayangan
            let nextIndex = (currentIndex + 1) % testimonials.length;
            document.getElementById("nextTestiText").innerText = testimonials[nextIndex].text;
            document.getElementById("nextTestiImage").src = testimonials[nextIndex].image;
            document.getElementById("nextTestiName").innerText = testimonials[nextIndex].name;
            document.getElementById("nextTestiSchool").innerText = testimonials[nextIndex].school;
        }
</script>
</section>
 {{-- Section 3: Subscribe --}}
@endsection