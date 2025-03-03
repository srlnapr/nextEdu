@php
  $person = $hasilTes->where('user_id', auth()->user()->id);
  // dd($person);
  foreach ($person as $p) {
      // echo $p;
  }
@endphp

@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-20">
    <div class="container">
      <div class="flex flex-col lg:flex-row">
        <div class="w-full self-center px-4">
          <h1 class="text-base font-medium text-primary md:text-xl">
            Welcome to
            <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">Next<span class="text-primary">Edu</span>.
            </p>
          </h1>
          <h2 class="mb-3 mt-2 text-lg font-light text-primary lg:text-2xl">Welcome to Dashboard, <span
              class="font-bold capitalize">
              <span class="font-bold capitalize">{{ auth()->user()->name }}</span>.
          </h2>
          @if(count($person))
          <p class="mb-1 text-red-500">
            *Disclaimer*Hasil deteksi jurusan hanya berdasarkan analisis kualitatif. 
            Disarankan untuk datang ke bimbingan konseling atau lembaga pendidikan terkait 
            untuk mendapatkan hasil yang lebih akurat dan berbasis kuantitatif.
          </p>
          @else
          <p class="mb-3 text-slate-500">
            Anda dapat melihat semua detail Anda di sini.
          </p>
          @endif
        </div>

        <div class="grid w-full grid-cols-2 gap-1 self-center px-4">
          <div class="rounded-[4px] border border-blue-500 bg-blue-200 px-3 py-6 text-center">
            <p class="font-base pb-2 text-base text-primary lg:text-xl">
              Sudah Dideteksi
            </p>
            <h1 class="text-2xl font-bold text-primary">
              @if (count($person))
                {{ count($person) }}x
              @else
                <span class="text-slate-500">0x</span>
              @endif
            </h1>
          </div>
          <div class="rounded-[4px] border border-violet-500 bg-violet-200 p-3 py-5 text-center">
            <p class="font-base pb-2 text-base text-primary lg:text-xl">
              Hasil Terbaru
            </p>
            <h1 class="text-2xl font-bold text-primary">
              @if (count($person))
                {{ $p['result'] }}
              @else
                <span class="text-slate-500">Tidak Ada Hasil</span>
              @endif
            </h1>
          </div>
        </div>
      </div>
      @include('components.user.result')
    </div>
  </section>
@endsection
