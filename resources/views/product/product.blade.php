<x-applayout>
	<div class="mt-20 w-[90%] mx-auto">
		<div class="max-w-xs text-sm breadcrumbs">
			<ul>
				<li><a href="{{ route('products') }}">Produk</a></li>
				<li><a href="">Nama Produk</a></li>
			</ul>
		</div>


		<h2 class="my-12 text-2xl md:text-4xl text-red-500 text-center">
			nama produk
		</h2>

		<img
			class="w-full md:w-1/2 mx-auto"
			src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-1400,f-auto,pr-true/uploads/product/feature/tampak-samping-1-14062023-040332.png"
			alt=""
		/>

		<h3 class="text-xl md:text-2xl text-center my-4">
			Harga <span class="font-semibold">Rp. 18,000,00</span>
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
									<td>Cy Ganderton</td>
								</tr>
								<!-- row 2 -->
								<tr>
									<th>Tipe mesin</th>
									<td>Purple</td>
								</tr>
								<!-- row 3 -->
								<tr>
									<th>Kopling</th>
									<td>Red</td>
								</tr>
								<tr>
									<th>Busi</th>
									<td>fdf</td>
								</tr>
								<tr>
									<th>sistem bahan bakar</th>
									<td>injeksi</td>
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
									<td>Cy Ganderton</td>
								</tr>
								<!-- row 2 -->
								<tr>
									<th>Ukuran Ban Depan</th>
									<td></td>
								</tr>
								<!-- row 3 -->
								<tr>
									<th>Rem Depan</th>
									<td></td>
								</tr>
								<tr>
									<th>Rem Belakang</th>
									<td>fdf</td>
								</tr>
								<tr>
									<th>sistem bahan bakar</th>
									<td>injeksi</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-applayout>
