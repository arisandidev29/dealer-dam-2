<header class="fixed left-0 z-50 top-0 w-screen ">
   <div class="navbar bg-red-600">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16"
                    />
                </svg>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52"
            >
                <li><a>Product</a></li>
                <li><a>Contact Us</a></li>
                <li>
                    <a href="">
                        <label
                            class="input hidden md:flex input-bordered items-center gap-2"
                        >
                            <input
                                type="text"
                                class="input-xs md:input-md"
                                placeholder="Search"
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
                    </a>
                </li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl"
            >Daya <span class="text-yellow-400 hover:bg-none">Motor</span></a
        >
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-yellow-100">
            <li><a>Product</a></li>
            <li><a>Contact Us</a></li>
        </ul>
    </div>
    <div class="navbar-end flex gap-4">
        {{-- search --}}

        <div class=" md:hidden dropdown dropdown-bottom dropdown-end">
            <div tabindex="0" role="button" class="">
                <i
                    class="fa-solid fa-magnifying-glass text-white block md:hidden"
                ></i>
            </div>
            <ul
                tabindex="0"
                class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52"
            >
                <li>
                   <form action="">
                       <input type="text" placeholder="Cari Produk " class="input input-sm w-full max-w-xs"  />
                   </form>
                </li>
            </ul>
        </div>

        <label
            class="input hidden md:input-md w-24 md:w-auto md:flex input-bordered items-center gap-2"
        >
            <input
                type="text"
                class="input-xs md:input-md"
                placeholder="Search"
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

        <a class="btn bg-orange-600 text-white hover:bg-yellow-300">Login</a>
    </div>
</div> 
</header>

