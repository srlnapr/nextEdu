@extends('pages.adminDashboard')

@section('content')
  <div class="w-full self-center px-4">
    <div class="flex flex-wrap">
      <div class="self-center lg:w-2/3">
        <div class="space-beetween flex">
          <h1 class="text-2xl font-bold text-primary lg:text-3xl">
            Edit <span class="text-secondary">Pertanyaans</span>
          </h1>
          <button
            class="btnnn ml-5 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
            <a href="/pertanyaans">Back</a>
          </button>
        </div>
        <form class="mt-5" method="post" action="/pertanyaans/{{ $pertanyaan['id'] }}">
          @method('put')
          @csrf
          <div class="w-full lg:mx-auto">
            <div class="mb-4 w-full px-4">
              <label for="pertanyaans_code" class="text-base font-bold text-primary lg:text-xl">
                Pertanyaans Code
              </label>
              <input type="text" id="pertanyaans_code" name="pertanyaans_code"
                value="{{ @old('pertanyaans_code', $pertanyaan['pertanyaans_code']) }}"
                class="@error('pertanyaans_code') border-red-500 @else border-[#BBBBBB] @enderror w-full rounded-sm border bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500" />
              @error('pertanyaans_code')
                <p class="mt-2 text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4 w-full px-4">
              <label for="pertanyaans" class="text-base font-bold text-primary lg:text-xl">
                Pertanyaans
              </label>
              <input type="text" id="pertanyaans " name="pertanyaans" value="{{ @old('pertanyaans', $pertanyaan['pertanyaans']) }}"
                class="@error('pertanyaans') border-red-500 @else border-[#BBBBBB] @enderror w-full rounded-sm border bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500" />
              @error('pertanyaans')
                <p class="mt-2 text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mt-10 w-full px-4">
              <button type="submit"
                class="btnn w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
                Edit Pertanyaans
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="hidden w-full self-center md:block lg:w-1/3">
        <div class="mt-10 lg:right-0">
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_krkiex3w.json" background="transparent"
            speed="1" style="width: 300px; height: 300px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
      </div>
    </div>
  </div>
@endsection
