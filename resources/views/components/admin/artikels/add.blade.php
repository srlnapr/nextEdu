{{-- @dd($diseasesInfo); --}}

@extends('pages.adminDashboard')

@section('content')
  <div class="w-full self-center px-4">
    <div class="flex flex-wrap">
      <div class="self-center lg:w-2/3">
        <div class="space-beetween flex">
          <h1 class="text-2xl font-bold text-primary lg:text-3xl">
            Add <span class="text-secondary">Artikel</span>
          </h1>
          <button
            class="btnnn ml-5 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
            <a href="/artikels">Back</a>
          </button>
        </div>
        <form class="mt-5" method="post" action="/artikels">
          @csrf
          <div class="w-full lg:mx-auto">
            <div class="mb-4 w-full px-4">
              <label for="jurusan_id" class="text-base font-bold text-primary lg:text-xl">
                Jurusan
              </label>
              <select name="jurusan_id" id="jurusan_id"
                class="@error('jurusan_id') border-red-500 @else border-[#BBBBBB] @enderror w-full rounded-sm border bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500">
                @foreach ($jurusansInfo as $jurusan)
                  <option value="{{ $jurusan['id'] }}">{{ $jurusan['jurusans'] }}</option>
                @endforeach
              </select>
              @error('jurusan_id')
                <p class="mt-2 text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4 w-full px-4">
              <label for="name" class="text-base font-bold text-primary lg:text-xl">
                Name
              </label>
              <input type="text" id="name" name="name" value="{{ @old('name') }}"
                class="@error('name') border-red-500 @else border-[#BBBBBB] @enderror w-full rounded-sm border bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500" />
              @error('name')
                <p class="mt-2 text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4 w-full px-4">
              <label for="description" class="text-base font-bold text-primary lg:text-xl">
                Description
              </label>
              <textarea id="description " name="description"
                class="@error('description') border-red-500 @else border-[#BBBBBB] @enderror h-[100px] w-full rounded-sm border bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500">{{ @old('description') }}</textarea>
              @error('description')
                <p class="mt-2 text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4 w-full px-4">
              <label for="composition" class="text-base font-bold text-primary lg:text-xl">
                Composition
              </label>
              <input type="text" id="composition " name="composition" value="{{ @old('composition') }}"
                class="@error('composition') border-red-500 @else border-[#BBBBBB] @enderror w-full rounded-sm border bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500" />
              @error('composition')
                <p class="mt-2 text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4 w-full px-4">
              <label for="dose" class="text-base font-bold text-primary lg:text-xl">
                Dose
              </label>
              <input type="text" id="dose " name="dose" value="{{ @old('dose') }}"
                class="@error('dose') border-red-500 @else border-[#BBBBBB] @enderror w-full rounded-sm border bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500" />
              @error('dose')
                <p class="mt-2 text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mt-10 w-full px-4">
              <button type="submit"
                class="btnn w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
                Add Artikel
              </button>
            </div>
          </div>
        </form>

      </div>
      <div class="hidden w-full self-center md:block lg:w-1/3">
        <div class="mt-10 lg:right-0">
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_thkzdgrl.json" background="transparent"
            speed="0.5" style="width: 300px; height: 300px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
      </div>
    </div>
  </div>
@endsection
