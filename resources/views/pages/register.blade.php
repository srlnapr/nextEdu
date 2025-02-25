 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')

   <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
 </head>
 <body>
  <div class="container mx-auto">
    <div class="flex flex-col lg:flex-row bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl mx-auto">
      
      <!-- Form Login -->
      <div class="w-full lg:w-1/2 p-8">
        <div class="text-center mb-6">
          <img src="{{ asset('assets/logo-typo.png') }}" alt="nextEdu" class="h-12 mx-auto">
          <h2 class="text-xl font-semibold text-primary mt-2">Masuk ke akun Anda</h2>
        </div>
        
        <form action="/login" method="post">
          @csrf
          
          <!-- Email -->
          <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700" for="email">Email</label>
            <div class="flex items-center border rounded-lg bg-gray-100 px-3">
              <input type="email" id="email" name="email" placeholder="email@example.com"
                class="w-full bg-transparent border-none p-3 focus:outline-none"
                value="{{ old('email') }}">
              <span class="text-gray-500">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
            @error('email')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Password -->
          <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700" for="password">Password</label>
            <div class="flex items-center border rounded-lg bg-gray-100 px-3">
              <input type="password" id="password" name="password" placeholder="Enter your password"
                class="w-full bg-transparent border-none p-3 focus:outline-none">
              <span class="text-gray-500">
                <i class="fas fa-lock"></i>
              </span>
            </div>
            @error('password')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Lupa Password -->
          <div class="text-right mb-4">
            <a href="#" class="text-sm text-primary hover:underline">Lupa password?</a>
          </div>

          <!-- Tombol Login -->
          <button type="submit"
            class="w-full bg-primary text-white py-3 rounded-lg text-lg font-semibold hover:bg-purple-700 transition duration-300">
            Login
          </button>

          <!-- Signup -->
          <div class="text-center my-4 text-gray-500">Atau</div>
          <a href="/register"
            class="w-full border border-primary text-primary py-3 rounded-lg text-lg font-semibold text-center block hover:bg-primary hover:text-white transition duration-300">
            Signup
          </a>

          <!-- Login via Sosial Media -->
          <div class="text-center mt-4">
            <p class="text-sm text-gray-600">Atau, login melalui</p>
            <div class="flex justify-center space-x-4 mt-2">
              <a href="#" class="text-blue-600 hover:underline">Facebook</a>
              <a href="#" class="text-blue-500 hover:underline">LinkedIn</a>
              <a href="#" class="text-red-500 hover:underline">Google</a>
            </div>
          </div>
        </form>
      </div>

      <!-- Ilustrasi -->
      <div class="hidden lg:flex w-1/2 bg-gray-50 p-8 items-center justify-center">
        <img src="{{ asset('assets/loginimg.svg') }}" alt="Ilustrasi" class="max-w-sm">
      </div>

    </div>
  </div>
 </body>
 </html>
      
   