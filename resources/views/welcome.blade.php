<x-applayout >
    <main>
        <section
            class="hero min-h-screen"
            style="
                background-image: url(https://images.unsplash.com/photo-1453951115017-aa1460aa6973?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            "
        >
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md lg:max-w-full">
                    <h1 class="mb-5 text-4xl md:text-6xl font-bold">
                        Temukan <span class="text-red-500">Motor</span> Impian
                        Mu <span class="text-red-500">Sekarang !</span>
                    </h1>
                    <p class="mb-5">
                        "menjadi Solusi Terpercaya untuk kebutuhan Sepeda Motor
                        Honda Anda"
                    </p>
                    <button class="btn bg-orange-500 border-none">
                        See Our Product
                    </button>
                </div>
            </div>
        </section>

        <section class="max-w-screen-lg mx-auto my-12 md:my-24 px-6">
            <h1 class="text-2xl md:text-4xl text-red-500 font-semibold">
                Siapa Kami ?
                <hr class="w-20 mt-4 h-4 bg-red-500 rounded-lg" />
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <p class="leading-8 mt-6 text-sm md:text-base text-justify">
                    Daya Motor (DAM) adalah dealer motor honda yang didirikan
                    pada tahun 2018, yang merupakan dealer motor honda cabang
                    Tidore yang berpusat di Ternante, Dealer motor DAM berlokasi
                    di Jl. Kemakmuran, Indonesianan, Kota Tidore Kepulauan,
                    Maluku Utara, bertujuan Untuk memberikan akases motor idaman
                    untuk masyarakat Tidore
                </p>

                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.542900912633!2d127.45228407375767!3d0.6732259633795813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x329cc98a6598003d%3A0xf833bfcc34adc889!2sDealer%20DAM%20Tidore!5e0!3m2!1sid!2sid!4v1717745415680!5m2!1sid!2sid"
                        class="aspect-video w-full mt-6"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                    <small class="text-center mt-2 block"
                        >Lokasi Dealer DAM TIdore</small
                    >
                </div>
            </div>
        </section>

        <section class="max-w-screen-lg mx-auto my-12 md:my-24 px-6">
            <div class="stack">
                <div
                    class="bg-red-500 relative grid grid-cols-1 md:grid-cols-2 gap-4 items-center place-content-center rounded-lg p-6"
                >
                    {{-- oval --}}
                    <img
                        src="{{ asset('storage/Oval 4.svg') }}"
                        alt="oval"
                        class="absolute right-5 -top-10 w-20"
                    />
                    <img
                        src="{{ asset('storage/Oval 4.svg') }}"
                        alt="oval"
                        class="absolute left-5 -bottom-10 w-20"
                    />
                    {{-- end oval --}}
                    <div class="hidden md:flex justify-center items-center">
                        <img
                            src="{{ asset('storage/visi img.png') }}"
                            alt=""
                            class="md:w-1/2 my-4"
                        />
                    </div>

                    <div class="text-white">
                        <div>
                            <h2
                                class="text-2xl md:text-4xl text-center md:text-left"
                            >
                                Visi
                            </h2>
                            <p
                                class="leading-7 my-4 text-justify text-sm md:text-base"
                            >
                                " Menjadi perusahan yang handal dan terpercaya
                                dalam memenuhi kebutuhan dan harapan konsumen
                                untuk memiliki sepeda motor honda dan layan
                                purnajual "
                            </p>
                        </div>
                        <div>
                            <h2
                                class="text-2xl md:text-4xl text-center md:text-left"
                            >
                                Misi
                            </h2>
                            <ul
                                class="list-inside list-disc my-4 flex flex-col gap-2 md:gap-4 text-sm md:text-base"
                            >
                                <li>
                                    terbaik sehingga dapat memberikan pengalaman
                                    yang berkesan bagi pelanggan
                                </li>
                                <li>
                                    Membangun tim serta jaringan yang kompeten
                                    dan bersemagat
                                </li>
                                <li>Membangun budaya improvement</li>
                                <li>
                                    Memperkuat teknologi informasi untuk
                                    menopang operasion yang handal
                                </li>
                                <li>
                                    Membangun kepercayaan antara stakeholder
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-500 rounded-lg w-full h-40">2</div>
                <div class="bg-orange-500 rounded-lg w-full h-40">3</div>
            </div>
        </section>

        <section class="max-w-screen-lg mx-auto my-12 md:my-24 px-6">
            <h1 class="text-2xl md:text-4xl text-red-500 font-semibold">
                Kenapa Memilih kami ?
                <hr class="w-20 mt-4 h-4 bg-red-500 rounded-lg" />
            </h1>
            <div class="my-4 grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4">
                <div class="card bg-base-100 shadow-xl border-solid border-red-500 border-2">
                    <div class="card-body">
                        <div class="w-16 p-4 bg-red-500 rounded-md"><img src="{{ asset('storage/Key.png') }}" alt=""></div>
                        <h2 class="card-title">Terjamin</h2>
                        <p>Semua produk bersumber dari penyedia yang terbukti aman dan sesuai standart</p>
                        
                    </div>
                </div>

                 <div class="card bg-base-100 shadow-xl border-solid border-red-500 border-2">
                    <div class="card-body">
                        <div class="w-16 p-4 bg-red-500 rounded-md"><img src="{{ asset('storage/Safe .png') }}" alt=""></div>
                        <h2 class="card-title">Aman</h2>
                        <p>Semua produk bersumber dari penyedia yang terbukti aman dan sesuai standart</p>
                        
                    </div>
                </div>

                 <div class="card bg-base-100 shadow-xl border-solid border-red-500 border-2">
                    <div class="card-body">
                        <div class="w-16 p-4 bg-red-500 rounded-md"><img src="{{ asset('storage/Collaboration.png') }}" alt=""></div>
                        <h2 class="card-title">Terpercaya</h2>
                        <p>Semua produk bersumber dari penyedia yang terbukti aman dan sesuai standart</p>
                        
                    </div>
                </div>

                

            </div>
        </section>
    </main>
</x-applayout>
