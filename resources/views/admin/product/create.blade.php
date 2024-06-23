<x-admin-layout>
	
	<div class="text-sm breadcrumbs my-4">
		<ul>
			<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li><a href="{{ route('dashboard.product') }}">Product</a></li>
			<li><a href="{{ route('dashboard.product') }}">create</a></li>
		</ul>
	</div>

	@if(session("status"))
		<div role="alert" class="alert alert-success my-4">
		  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
		  <span>{{ session("status") }}</span>
		</div>
	@endif


	<h1 class="text-red-500 text-2xl font-semibold">Create Product</h1>

	<div class="">
		<form method="post" action="{{ route('dashboard.product.store') }}" enctype="multipart/form-data" class="my-6 grow flex gap-4 flex-col-reverse md:flex-row  ">
			@csrf
			<div class="grid grid-cols-2 gap-4 grow">
				<div>
					<p class="text-sm">Name</p>
					<label class="input input-bordered flex items-center gap-2 @error('name') border-red-500 @enderror">
						<input
							type="text"
							class="grow"
							placeholder="BeAt"
							name="name"
							value="{{ old("name") }}"
						/>
					</label>
					@error('name')
								<p class="mt-1 text-red-500">{{ $message }}</p>
					@enderror
				</div>

				<div>
					<p class="text-sm">Year</p>
					<label class="input input-bordered flex items-center gap-2">
						<input
							type="number" 
							min="1900"
							max="2099" 
							step="1" 
							value="{{ old("year", '2024') }}"
							class="grow"
							placeholder="Year"
							name="year"
						/>
					</label>

				</div>

				<div >
					<p class="text-sm">Price</p>
					<label class="input input-bordered flex items-center gap-2 @error('name') border-red-500 @enderror">
						<input
							type="text"
							class="grow"
							placeholder="18000000"
							name="price"
							value="{{ old("price") }}"
						/>
					</label>
					@error('price')
								<p class="mt-1 text-red-500">{{ $message }}</p>
					@enderror
				</div>

				<div >
					<p class="text-sm">Quantity</p>
					<label class="input input-bordered flex items-center gap-2 @error('name') border-red-500 @enderror">
						<input
							type="text"
							class="grow"
							placeholder="10"
							name="quantity"
							value="{{ old("quantity") }}"
						/>
					</label>
					@error('quantity')
								<p class="mt-1 text-red-500">{{ $message }}</p>
					@enderror
				</div>

				{{-- file input --}}
				<div class="collapse collapse-arrow bg-base-200 col-span-2">
					<input type="radio" name="my-accordion-2" />
					<div
						class="collapse-title text-xl font-medium flex gap-4 items-center"
					>
						Images ( Max 2mb)
						<svg
							class="w-6 fill-current"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 512 512"
						>
							<!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path
								d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"
							/>
						</svg>
					</div>
					<div class="collapse-content">
						<div id="image_container" class="my-4 h-32 grid place-content-center">
							
						</div>
						<input
							type="file"
							class="file-input file-input-bordered w-full"
							name="images"
							id="file_upload"
						/>

						@error("images")
							<p class="text-red-500 mt-1 ">{{ $message }}</p>
						@enderror
					</div>
				</div>

				{{-- Mesin--}}

			
				<div
					class="collapse collapse-arrow bg-base-200 gap-2 col-span-2"
				>
					<input
						type="radio"
						name="my-accordion-4"
						checked="checked"
					/>
					<div
						class="collapse-title text-xl font-medium flex gap-4 items-center"
					>
						Mesin

						<svg
							class="w-6 fill-current"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 512 512"
						>
							<!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path
								d="M201.1 71.9c16.9-5 26.6-22.9 21.5-39.8s-22.9-26.6-39.8-21.5c-21.5 6.4-41.8 15.5-60.6 27C114.3 34 105.4 32 96 32C60.7 32 32 60.7 32 96c0 9.4 2 18.3 5.6 26.3c-11.5 18.7-20.6 39-27 60.6c-5 16.9 4.6 34.8 21.5 39.8s34.8-4.6 39.8-21.5c4.3-14.6 10.4-28.5 17.9-41.4c2 .2 4.1 .3 6.1 .3c35.3 0 64-28.7 64-64c0-2.1-.1-4.1-.3-6.1c12.9-7.5 26.8-13.6 41.4-17.9zm128-61.3c-16.9-5-34.8 4.6-39.8 21.5s4.6 34.8 21.5 39.8c14.6 4.3 28.5 10.4 41.4 17.9c-.2 2-.3 4.1-.3 6.1c0 35.3 28.7 64 64 64c2.1 0 4.1-.1 6.2-.3c7.5 12.9 13.6 26.8 17.9 41.4c5 16.9 22.9 26.6 39.8 21.5s26.6-22.9 21.5-39.8c-6.4-21.5-15.5-41.8-27-60.6c3.6-8 5.6-16.9 5.6-26.3c0-35.3-28.7-64-64-64c-9.4 0-18.3 2-26.3 5.6c-18.7-11.5-39-20.6-60.6-27zM71.9 310.9c-5-16.9-22.9-26.6-39.8-21.5s-26.6 22.9-21.5 39.8c6.4 21.5 15.5 41.8 27 60.6C34 397.7 32 406.6 32 416c0 35.3 28.7 64 64 64c9.4 0 18.3-2 26.3-5.6c18.7 11.5 39 20.6 60.6 27c16.9 5 34.8-4.6 39.8-21.5s-4.6-34.8-21.5-39.8c-14.6-4.3-28.5-10.4-41.4-17.9c.2-2 .3-4.1 .3-6.2c0-35.3-28.7-64-64-64c-2.1 0-4.1 .1-6.2 .3c-7.5-12.9-13.6-26.8-17.9-41.4zm429.4 18.3c5-16.9-4.6-34.8-21.5-39.8s-34.8 4.6-39.8 21.5c-4.3 14.6-10.4 28.5-17.9 41.4c-2-.2-4.1-.3-6.2-.3c-35.3 0-64 28.7-64 64c0 2.1 .1 4.1 .3 6.2c-12.9 7.5-26.8 13.6-41.4 17.9c-16.9 5-26.6 22.9-21.5 39.8s22.9 26.6 39.8 21.5c21.5-6.4 41.8-15.5 60.6-27c8 3.6 16.9 5.6 26.3 5.6c35.3 0 64-28.7 64-64c0-9.4-2-18.3-5.6-26.3c11.5-18.7 20.6-39 27-60.6zM192.8 256.8c0-15.6 5.6-29.9 14.9-41.1L223 231c6.6 6.6 17.8 1.9 17.8-7.4V163.2c0-5.7-4.7-10.4-10.4-10.4H169.9c-9.3 0-13.9 11.2-7.4 17.8l11.2 11.2c-17.9 19.8-28.9 46.2-28.9 75.1c0 43.6 24.9 81.3 61.1 99.8c11.8 6 26.3 1.4 32.3-10.4s1.4-26.3-10.4-32.3c-20.8-10.6-34.9-32.2-34.9-57zm93.1-58.6c20.8 10.6 34.9 32.2 34.9 57c0 15.6-5.6 29.9-14.9 41.1L290.6 281c-6.6-6.6-17.8-1.9-17.8 7.4v60.5c0 5.7 4.7 10.4 10.4 10.4h60.5c9.3 0 13.9-11.2 7.4-17.8l-11.2-11.2c17.9-19.8 28.9-46.2 28.9-75.1c0-43.6-24.9-81.3-61.1-99.8c-11.8-6-26.3-1.4-32.3 10.4s-1.4 26.3 10.4 32.3z"
							/>
						</svg>
					</div>
					<div class="collapse-content grid grid-cols-2 gap-2">
						<div>
							<input
								type="text"
								placeholder="Tipe Mesin"
								class="input input-bordered w-full @error('tipe_mesin') border-red-500 @enderror"
								name="tipe_mesin"
								value="{{ old("tipe_mesin") }}"
							/>
							@error('tipe_mesin')
								<p class="mt-1 text-red-500">{{ $message }}</p>
							@enderror
						</div>

						<div>
							<input
								type="text"
								placeholder="Kopling"
								class="input input-bordered w-full @error('kopling') border-red-500 @enderror"
								name="kopling"
								value="{{ old("kopling") }}"
							/>

							@error('kopling')
								<p class="mt-1 text-red-500">{{ $message }}</p>
							@enderror
						</div>
						<div>
							<input
								type="text"
								placeholder="Busi"
								class="input input-bordered w-full @error('busi') border-red-500 @enderror"
								name="busi"
								value="{{ old("busi") }}"
							/>
							@error('busi')
								<p class="mt-1 text-red-500">{{ $message }}</p>
							@enderror
						</div>
						
						<div>
							<input
								type="text"
								placeholder="sistem bahann bakar"
								class="input input-bordered w-full @error('sistem_bahan_bakar') border-red-500 @enderror"
								name="sistem_bahan_bakar"
								value="{{ old("sistem_bahan_bakar") }}"
							/>
							@error('sistem_bahan_bakar')
								<p class="mt-1 text-red-500">{{ $message }}</p>
							@enderror
						</div>	
						
					</div>
				</div>

				{{-- Rangka dan kaki--}}
				<div
					class="collapse collapse-arrow bg-base-200 gap-2 col-span-2"
				>
					<input
						type="radio"
						name="my-accordion-6"
						checked="checked"
					/>
					<div
						class="collapse-title text-xl font-medium flex gap-4 items-center"
					>
						Rangka Dan Kaki - Kaki
						<svg
							class="w-6 fill-current"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 512 512"
						>
							<!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path
								d="M448 96V224H288V96H448zm0 192V416H288V288H448zM224 224H64V96H224V224zM64 288H224V416H64V288zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"
							/>
						</svg>
					</div>
					<div class="collapse-content grid grid-cols-2 gap-2">
						<div>
								
							<input
								type="text"
								placeholder="Tipe Rangka"
								class="input input-bordered w-full @error('tipe_mesin') border-red-500 @enderror"
								name="tipe_rangka"
								value="{{ old("tipe_rangka") }}"
							/>

							@error("tipe_rangka")
								<p class="text-red-500 mt-1">{{ $message }}</p>
							@enderror
						</div>

						<div>
									
							<input
								type="text"
								placeholder="Ukuran Ban Belakang"
								class="input input-bordered w-full @error('ukuran_ban_belakang') border-red-500 @enderror"
								name="ukuran_ban_belakang"
								value="{{ old("ukuran_ban_belakang") }}"
							/>
							@error("ukuran_ban_belakang")
								<p class="text-red-500 mt-1">{{ $message }}</p>
							@enderror
						</div>

						<div>
							<input
								type="text"
								placeholder="Ukuran Ban Depan"
								class="input input-bordered w-full @error('ukuran_ban_depan') border-red-500 @enderror"
								name="ukuran_ban_depan"
								value="{{ old("ukuran_ban_depan") }}"
							/>			

							@error("ukuran_ban_depan")
								<p class="text-red-500 mt-1">{{ $message }}</p>
							@enderror
						</div>
						
						<div>
							<input
								type="text"
								placeholder="Sistem Pengereman"
								class="input input-bordered w-full @error('sistem_pengereman') border-red-500 @enderror"
								name="sistem_pengereman"
								value="{{ old("sistem_pengereman") }}"
							/>			
							@error("sistem_pengereman")
								<p class="text-red-500 mt-1">{{ $message }}</p>
							@enderror
						</div>	
						
					</div>
				</div>
				<button class="btn bg-orange-500 col-span-2 w-full md:w-max text-white">
					Add Product
				</button>
			</div>

			<div class="grid gap-4 h-max">
				<div class="card w-96 h-max bg-base-100 shadow-xl">
					<div class="card-body">
						<h2 class="card-title">Visibility</h2>
						<div class="card-actions my-4">
							<div class="flex gap-2 items-center">
								<span>private</span>
								<input
									type="checkbox"
									class="toggle toggle-warning"
									name="visibility"
									checked
								/>
								<span>public</span>
							</div>
						</div>
					</div>
				</div>

				<div class="card w-96 h-max bg-base-100 shadow-xl">
					<div class="card-body">
						<h2 class="card-title">Cateogry</h2>
						<div class="card-actions my-4">
							<select
								class="select select-bordered w-full max-w-xs"
								name="category"
							>
								@foreach($category as $c)
								<option value="{{ $c->id }}">{{ $c->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</x-admin-layout>
<script type="text/javascript">
	const fileUpload = document.querySelector("#file_upload");
	const imgContainer = document.querySelector("#image_container");

	fileUpload.addEventListener("change", () => {
		const file = fileUpload.files;
		if(file) {
			const fileReader = new FileReader();
			fileReader.onload = event => {
				const img = document.createElement("img");
				imgContainer.removeChild(imgContainer.firstChild);
				imgContainer.appendChild(img);
				img.setAttribute("src", event.target.result);
				img.classList.add("w-32")
			}

			fileReader.readAsDataURL(file[0]);
		}
	})	
</script>