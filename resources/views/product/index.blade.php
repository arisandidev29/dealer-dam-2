<x-applayout>
	<div class="carousel w-full h-96 mt-16">
		<div id="slide1" class="carousel-item relative w-full">
			<img
				src="https://tunassaktihonda.id/wp-content/uploads/2022/02/lifestyle-banner-revisi-3-2-02022022-063110-1024x426.jpg"
				class="w-full object-cover"
			/>
			<div
				class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
			>
				<a href="#slide4" class="btn btn-circle">❮</a>
				<a href="#slide2" class="btn btn-circle">❯</a>
			</div>
		</div>
		<div id="slide2" class="carousel-item relative w-full">
			<img
				src="https://tunassaktihonda.id/wp-content/uploads/2022/02/lifestyle-banner-revisi-2-2-02022022-063124-1024x426.jpg"
				class="w-full object-cover"
			/>
			<div
				class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
			>
				<a href="#slide1" class="btn btn-circle">❮</a>
				<a href="#slide3" class="btn btn-circle">❯</a>
			</div>
		</div>
		<div id="slide3" class="carousel-item relative w-full">
			<img
				src="https://tunassaktihonda.id/wp-content/uploads/2022/02/lifestyle-banner-revisi-1-2-02022022-063116-1024x426.jpg"
				class="w-full object-cover"
			/>
			<div
				class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
			>
				<a href="#slide2" class="btn btn-circle">❮</a>
				<a href="#slide1" class="btn btn-circle">❯</a>
			</div>
		</div>
	</div>

	<div class="w-[90%] mx-auto py-6 mt-12">
		<h1 class="text-red-500 text-500 text-center text-3xl">
			Produk Terbaru
		</h1>

		<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
			@for($i = 1; $i <= 4; $i++)
			<div class="card bg-base-100 shadow-xl">
				<figure class="overflow-hidden">
					<img
						src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-beat-3-03062024-050824.png"
						alt="Shoes"
						class="hover:scale-125 duration-300 transition-all"
					/>
				</figure>
				<div class="card-body">
					<div class="flex gap-2 items-center">
						<h2 class="card-title">BeAT</h2>
						<span class="badge badge-primary">new</span>
					</div>
					<p class="text-xs md:text-base">Harga mulai</p>
					<h3 class="text-xs md:text-xl text-slate-800 font-semibold">
						Rp. 18,430,000
					</h3>
					<div class="card-actions justify-end">
						<button
							class="btn btn-sm md:btn-md bg-white text-red-500 border-red-500 border-solid border-2 hover:bg-red-500 hover:text-white"
						>
							Lihat Detail
						</button>
					</div>
				</div>
			</div>
			@endfor
		</div>

		<div id="category" class="my-8">
			<h2 class="text-xl md:text-3xl text-red-500 my-8 mt-12">
				Ekplore Produk by Kategori
			</h2>

			<div class="grid grid-cols-3 gap-4">
				<a href="">
					<div
						class="card card-compact md:card-normal bg-base-100 shadow-xl image-full"
					>
						<figure>
							<img
								src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/ahm-chic-2023-variant-web-stylish-green-reverse-2-26102023-030159.png"
								alt="matic"
								class="w-full"
							/>
						</figure>
						<div class="card-body">
							<h2
								class="card-title md:text-4xl md:text-center block"
							>
								Matic
							</h2>
							<p
								class="hidden md:block text-xs md:text-base text-justify"
							>
								kenyamanan dan fleksibilitas pada saat
								berkendara.
							</p>
						</div>
					</div>
				</a>

				<a href="">
					<div
						class="card card-compact md:card-normal bg-base-100 shadow-xl image-full"
					>
						<figure>
							<img
								src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-50845-24112022-071000.png"
								alt="Sport"
							/>
						</figure>
						<div class="card-body">
							<h2
								class="card-title md:text-4xl md:text-center block"
							>
								Sport
							</h2>
							<p class="hidden md:block">
								performa tinggi serta memiliki desain bodi yang
								besar
							</p>
							<div class="card-actions justify-end"></div>
						</div>
					</div>
				</a>

				<a href="">
					<div
						class="card card-compact md:card-normal bg-base-100 shadow-xl image-full"
					>
						<figure>
							<img
								src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/supra-gtr-150-4-27052021-092133.png"
								alt="Cup"
							/>
						</figure>
						<div class="card-body">
							<h2
								class="card-title md:text-4xl md:text-center block"
							>
								Cup
							</h2>
							<p class="hidden md:block">
								lebih hemat bahan bakar serta multifungsi
							</p>
							<div class="card-actions justify-end"></div>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="my-8">
			<h2 class="text-xl md:text-3xl text-red-500 my-8 mt-12">Semua Produk</h2>

			<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
				@for($i = 1; $i <= 4; $i++)
				<div class="card bg-base-100 shadow-xl">
					<figure class="overflow-hidden">
						<img
							src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-beat-3-03062024-050824.png"
							alt="Shoes"
							class="hover:scale-125 duration-300 transition-all"
						/>
					</figure>
					<div class="card-body">
						<div class="flex gap-2 items-center">
							<h2 class="card-title">BeAT</h2>
							<span class="badge badge-primary">new</span>
						</div>
						<p class="text-xs md:text-base">Harga mulai</p>
						<h3
							class="text-xs md:text-xl text-slate-800 font-semibold"
						>
							Rp. 18,430,000
						</h3>
						<div class="card-actions justify-end">
							<button
								class="btn btn-sm md:btn-md bg-white text-red-500 border-red-500 border-solid border-2 hover:bg-red-500 hover:text-white"
							>
								Lihat Detail
							</button>
						</div>
					</div>
				</div>
				@endfor
			</div>
		</div>
	</div>
</x-applayout>
