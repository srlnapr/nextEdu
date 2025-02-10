{{-- @dd($disease); --}}
{{-- @dd($user); --}}

@extends('layouts.app')

@section('content')
<section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-full self-center px-4 lg:w-1/2">

        <div class="flex flex-wrap space-x-1">
          <h1 class="text-6xl font-bold text-gray-900 dark:text-white block">Temukan</h1>
          <h1 class="text-6xl font-bold text-purple-900">Jurusanmu</h1>
          <h1 class="text-6xl font-bold text-gray-900">Sekarang</h1>
        </div>


        <p class="mt-6 mb-3 max-w-md text-slate-500">
          Temukan informasi lengkap seputar jurusan yang sesuai dengan minat dan bakatmu.
        </p>
        
        <div class="mb-5 flex flex-col md:flex-row">
          <button type="button" class="flex items-center gap-2 text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">
            Lihat potensimu
            <svg class="rtl:rotate-180 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
          </button>
          
            
        </div>

        @if (auth()->user() == null)

        @elseif (auth()->user() !== null && auth()->user()->is_admin == 1)
        <p class="mb-3 max-w-md text-slate-500">
          Wellcome back <span class="font-bold uppercase text-primary">{{ auth()->user()->name }}</span>. Go to <a
            href="/adminDashboard" class="font-bold capitalize text-secondary">{{ auth()->user()->name }}'s
            Dashboard</a>.
        </p>
        @elseif (auth()->user() !== null)
        <p class="mb-3 max-w-md text-slate-500">
          Wellcome back <span class="font-bold uppercase text-primary">{{ auth()->user()->name }}</span>. Go to <a
            href="/dashboard" class="font-bold capitalize text-secondary">{{ auth()->user()->name }}'s dashboard</a>.
        </p>
        @endif
        @include('components.userInfo')
      </div>
      <div
        class="bayangan hidden w-full self-center rounded-sm border-2 border-primary bg-white px-4 md:block lg:w-1/2">
        {{-- Lottie --}}
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://lottie.host/33d26164-5132-47c9-a5de-f9f9440da602/Uke0X1C7vH.json"
          background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay class="mx-auto">
        </lottie-player>
      </div>
    </div>
  </div>
</section>


<section id="definition" class="bg-[#f2f6fc] pb-16 pt-32 lg:pb-20">


</section>

<section id="prevent" class="pt-16">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="bayangan hidden w-full self-center rounded-sm border-2 border-primary bg-white p-4 md:block lg:w-1/4">
        {{-- Lottie --}}
        {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
        <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_hz2bzpsx.json" background="transparent"
          speed="1" style="width: 300px; height: 300px;" loop autoplay class="mx-auto"></lottie-player>
      </div>
      <div class="w-full self-center pl-8 pr-4 lg:w-3/4">
        <div class="w-full px-4">
          <div class="mb-5 max-w-xl">
            <h4 class="mb-2 text-lg font-semibold text-secondary">How to</h4>
            <h2 class="mt-1 mb-4 text-4xl font-bold text-primary lg:text-5xl">Prevent Diabetes?</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>


@endsection