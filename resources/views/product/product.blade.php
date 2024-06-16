<x-applayout>
	<div class="mt-20 w-[90%] mx-auto">
		<div class="max-w-xs text-sm breadcrumbs">
			<ul>
				<li><a href="{{ route('products') }}">Produk</a></li>
				<li><a href="">{{ $product->name }}</a></li>
			</ul>
		</div>


		<h2 class="my-12 text-2xl md:text-4xl text-red-500 text-center">{{ $product->name }}</h2>

		<img
			class="w-full md:w-[40%] my-4 md:my-8 mx-auto"
			src="{{ asset('storage/'.$product->images) }}"
			alt="{{ $product->name }}"
		/>

		<h3 class="text-xl md:text-2xl text-center my-4">
			Harga <span class="font-semibold">Rp. {{ Number::format($product->price) }}</span>
		</h3>

		<div class="grid gap-4 my-4">
			<div
				tabindex="0"
				class="collapse collapse-plus border border-base-300 bg-base-200"
			>
				<div class="collapse-title text-xl font-medium">Mesin</div>
				<div class="collapse-content">
					<div class="overflow-x-auto">
						<table class="table table-zebra">
							<tbody>
								<!-- row 1 -->
								<tr>
									<th>Tipe mesin</th>
									<td>{{ $product->tipe_mesin }}</td>
								</tr>
								<!-- row 3 -->
								<tr>
									<th>Kopling</th>
									<td>{{ $product->kopling }}</td>
								</tr>
								<tr>
									<th>Busi</th>
									<td>{{ $product->busi }}</td>
								</tr>
								<tr>
									<th>sistem bahan bakar</th>
									<td>{{ $product->sistem_bahan_bakar }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div
				tabindex="0"
				class="collapse collapse-plus border border-base-300 bg-base-200"
			>
				<div class="collapse-title text-xl font-medium">
					Rangka dan Kaki - Kaki
				</div>
				<div class="collapse-content">
					<div class="overflow-x-auto">
						<table class="table table-zebra">
							<tbody>
								<!-- row 1 -->
								<tr>
									<th>Tipe Rangka</th>
									<td>{{ $product->tipe_rangka }}</td>
								</tr>
								<!-- row 2 -->
								<tr>
									<th>Ukuran Ban Depan</th>
									<td>{{ $product->ukuran_ban_depan }}</td>
								</tr>
								<!-- row 3 -->
								<tr>
									<th>Rem Depan</th>
									<td>{{ $product->ukuran_ban_belakang}}</td>
								</tr>
								
								<tr>
									<th>sistem bahan bakar</th>
									<td>{{ $product->sistem_bahan_bakar }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-applayout>
