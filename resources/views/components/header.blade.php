<header class="fixed top-0 left-0 w-screen z-40">
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
                <div class="flex-1 px-2 mx-2 text-white text-2xl">
                    Dealer <span class="text-yellow-500"> DAM</span>
                </div>
                <div class="flex-none hidden lg:block">
                    <ul class="menu menu-horizontal text-white">
                        <!-- Navbar menu content here -->
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a >Product</a></li>
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
                    <a href=""
                        ><button
                            class="btn bg-orange-500 text-white border-none"
                        >
                            Login
                        </button></a
                    >
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
                <li class="bg-red-500 text-white rounded-sm"><a href="{{ route('home') }}">Home</a></li>
                <li class="bg-red-500 text-white rounded-sm"><a>Product</a></li>
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
