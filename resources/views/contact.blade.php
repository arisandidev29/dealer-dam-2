<x-applayout>
	<div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-screen-lg mx-auto px-10 mt-16 py-8">
		<div>
			<h1 class="text-red-500 text-2xl  md:text-4xl text-center md:text-left">Contact Us</h1>

			<p class=" mt-6 text-justify md:text-left ">
				Butuh Komunikasi langsung dengan kita ? tanya detail produk atau
				informasi yang tidak tercantum di website
			</p>
		</div>
		<form action="" class="flex flex-col  gap-4  ">
			<label for="name">
				<input
				type="text"
				placeholder="Name"
				class="input input-bordered w-full"
			/>
			</label>

			<label class="input input-bordered flex items-center gap-2 max-w-lg">
				<input type="text" class=" max-w-lg" placeholder="Email" />
			</label>

			<label for="message">
				<textarea class="textarea  input-bordered h-24 w-full max-w-lg" placeholder="Pesan"></textarea>
			</label>

			<button class="btn bg-orange-500 px-6 w-max text-white " >Send</button>
		</form>
	</div>
</x-applayout>
