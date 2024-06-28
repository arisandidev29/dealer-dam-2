<header class="fixed top-0 left-0 w-screen z-40">
    {{-- {{ Auth::user()->getRoleNames()  }} --}}
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="w-full navbar bg-red-500">
                <div class="flex-none lg:hidden">
                    <label
                        for="my-drawer-3"
                        aria-label="open sidebar"
                        class="btn btn-square btn-ghost"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block w-6 h-6 stroke-current"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            ></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1 grow px-2 mx-2 text-white text-2xl">
                    <a href="{{ route('home') }}">
                        Dealer <span class="text-yellow-500"> DAM</span>
                    </a>
                </div>
                <div class="flex-none hidden lg:block">
                    <ul class="menu menu-horizontal text-white">
                        <!-- Navbar menu content here -->
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('products') }}">Product</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="flex gap-4">
                    <label
                        class="hidden md:flex input input-bordered items-center gap-2"
                    >
                        <input
                            type="text"
                            class="grow"
                            placeholder="Cari produk"
                        />
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="w-4 h-4 opacity-70"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </label>
                    <div class="flex gap-2 items-center ">
                        @if(Auth::check())
         
                            <div class="dropdown dropdown-bottom dropdown-end">
                            @if(auth()->user()->images) 
                              <div tabindex="0" role="button" class="btn m-1 hover:bg-transparent bg-transparent h-full border-none">
                                  <div class="avatar">
                                      <div class="w-12 md:w-16 rounded-full">
                                        <img src="{{ asset('storage/'. auth()->user()->images) }}" />
                                      </div>
                                 </div>
                              </div>
                            @else
                                <div tabindex="0" role="button" class="avatar  placeholder">
                                  <div class="bg-neutral text-neutral-content w-12 rounded-full">
                                    <span x-data class="text-xl" x-text="getInitials('{{ auth()->user()->name }}')"><p></p>
                                    </span>
                                  </div>
                                </div>
                            @endif
                              <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 ">
                                <li class="text-center flex items-baseline font-bold ">
                                    <p class="my-0">{{ Auth::user()->name }}</p>
                                </li>


                                @hasanyrole('admin|editor')
                                <li>
                                    <a href="{{ route('dashboard') }}">
                                        Dashboard
                                    </a>     
                                </li>
                                @endhasanyrole

                                <li>
                                    <a href="{{ route('logout') }}">
                                      Logout
                                    </a>
                                  </li>
                              </ul>
                            </div> 
                        @else
                            <a href="{{ route('login') }}"
                            >
                            <button
                                class="btn bg-orange-500 text-white border-none"
                            >
                                Login
                            </button></a
         jk               >
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-side z-50">
            <label
                for="my-drawer-3"
                aria-label="close sidebar"
                class="drawer-overlay"
            ></label>
            <ul class="menu p-4 w-80 min-h-full bg-base-200 gap-4">
                <!-- Sidebar content here -->
                <li class="bg-red-500 text-white rounded-sm">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="bg-red-500 text-white rounded-sm">
                    <a href="{{ route('products') }}">Product</a>
                </li>
                <li class="bg-red-500 text-white rounded-sm">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li>
                    <label class="input input-bordered flex items-center gap-2">
                        <input
                            type="text"
                            class="grow"
                            placeholder="cari Produk"
                        />
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="w-4 h-4 opacity-70"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </label>
                </li>
            </ul>
        </div>
    </div>
</header>
<script>

    function getInitials(name) {
        let names = name.split(' ')
        let initials = names[0].substring(0, 1).toUpperCase();

        if(names.length > 1) {
            initials += names[names.length - 1].substring(0, 1).toUpperCase();
        }

        return initials;
    }
   

</script>