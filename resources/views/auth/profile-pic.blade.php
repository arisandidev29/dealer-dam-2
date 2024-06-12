<x-applayout header="{{ false }}" footer="{{ false }}">
	<div class="max-w-xs  mx-auto p-6 ">

		<form action="" class="mt-8 grid gap-4">
			<div class="w-64 aspect-square grid place-content-center mx-auto rounded-full overflow-hidden border-slate-500 border-2 border-solid">
				<svg class="w-full mx-auto aspect-square object-cover" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>	
			</div>

			<h1 class="text-4xl text-red-500">Pilih foto profile</h1>	

			<div class="flex gap-4 justify-center">
				<button type="button" id="default_pic" class="btn bg-slate-500">Default</button>
				<button class="btn bg-orange-500">Change</button>
			</div>

			<a href="" class="text-red-500 text-center mt-4">Lewati</a>

		</form>
	</div>
</x-applayout>