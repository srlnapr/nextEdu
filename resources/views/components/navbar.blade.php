<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
  <div class="container">
      <div class="relative flex w-full items-center justify-between">
          <div class="flex items-center lg:hidden">
              <button id="hamburger" name="hamburger" type="button" class="block">
                  <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                  <span class="hamburger-line transition duration-300 ease-in-out"></span>
                  <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
              </button>
          </div>

          <div class="px-4">
              <a href="/">
                  <img src="{{ asset(path: 'logo.png') }}" alt="Logo" class="h-16 w-auto">
              </a>
          </div>

          <nav id="nav-menu"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none flex-grow">
              <ul class="block lg:flex">
                  <li class="group">
                      <a href="/" class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Beranda</a>
                  </li>
                  <li class="group">
                      <a href="/diagnose" class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Tes
                          Minatmu</a>
                  </li>
                  <li class="group">
                      <a href="/about" class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Edubot</a>
                  </li>
                  <li class="group">
                      <a href="/medicinesPage" class="text-dark mx-8 flex py-2 text-base group-hover:text-secondary">Artikel</a>
                  </li>

                  <li class="lg:hidden block">  <div class="flex flex-col">
                          @if (auth()->user() !== null)
                          <form action='/logout' method="post" class="px-8 py-2">
                              @csrf
                              <button type="submit"
                                  class="btnnn rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black w-full">
                                  Logout
                              </button>
                          </form>
                          @else
                          <a href="/login"
                              class="btnnn rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black block mx-8 my-2">
                              Login
                          </a>
                          <a href="/register"
                              class="btnnn rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black block mx-8 my-2">
                              Register
                          </a>
                          @endif
                      </div>
                  </li>

              </ul>
          </nav>

          <div class="ml-auto flex items-center px-4 lg:flex hidden space-x-3">
            @if (auth()->user() !== null)
            <form action='/logout' method="post">
              @csrf
              <button type="submit"
                class="btnnn rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
                Logout
              </button>
            </form>
            @else
            <div class="flex space-x-3">
              <a href="/login"
                class="btnnn rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
                Login
              </a>
              <a href="/register"
                class="btnnn rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
                Register
              </a>
            </div>
            @endif
          </div>
          
      </div>
  </div>
</header>