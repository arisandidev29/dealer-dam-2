<x-applayout header="{{ false }}" footer="{{ false }}">
	{{-- {{ dd(auth()->user()) }} --}}
	<div class="max-w-xs  mx-auto p-6 ">

		<h1 class="text-4xl text-center text-red-500">Hello {{ auth()->user()->name }}</h1>		
		<form action="{{ route('changePicture') }}" method="post" enctype="multipart/form-data" class="mt-8 grid gap-4">
			@csrf
			<div class="w-64 aspect-square grid place-content-center mx-auto rounded-full " id="image_container">
				<img class="w-64" src="{{ asset('storage/circle-user-solid.svg') }}" alt="fdf" id="image_preview">
			</div>

			

			<h1 class="text-4xl text-red-500">Pilih foto profile</h1>	

			<div class="flex gap-4 justify-center">
				<label for="file_upload">
					<input type="file" hidden name="images" id="file_upload">
					<button type="button" id="default_pic" class="btn bg-slate-500" onclick="document.getElementById('file_upload').click()">Change</button>
				</label>
				
				<button class="btn bg-orange-500">Use Photo</button>
			</div>

			<a href="{{ route('home') }}" class="text-red-500 text-center mt-4">Skip</a>

		</form>
	</div>
</x-applayout>
<script type="text/javascript">
	const fileUpload = document.querySelector("#file_upload");
	const imgContainer = document.querySelector("#image_container");
	const imgPreview = document.querySelector("#image_preview");

	fileUpload.addEventListener("change", () => {
		const file = fileUpload.files;
		if(file) {
			const fileReader = new FileReader();
			fileReader.onload = event => {
				const img = document.createElement("img");
				imgPreview.setAttribute("src", event.target.result);

				
			}

			fileReader.readAsDataURL(file[0]);
		}
	})	
</script>