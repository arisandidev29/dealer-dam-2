<x-applayout header="{{ false }}" footer="{{ false }}">
	<div class="min-h-screen grid grid-cols-1 md:grid-cols-2">
		<div class="p-6 mt-8">
			<a href="{{ route('home') }}">
				<div class="flex-1 px-2 mx-2 text-red-500 text-2xl">
					Dealer <span class="text-yellow-500"> DAM</span>
				</div>
			</a>
			<hr>

			<h2 class=" text-center  text-2xl  md:text-4xl text-red-500 my-2 md:my-4 mt-6 md:mt-8">Sing in</h2>
			<form action="{{ route('doLogin') }}" method="post" class="mt-4 md:mt-8 max-w-xs mx-auto">
				@csrf
				@if(session("status"))
						<div role="alert" class="alert alert-error my-2">
						  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
						  <span>{{ session("status") }}</span>
						</div>
				@endif

				<div class="mb-4 md:mb-6">
					<p class="text-base md:text-lg">Username</p>
					<label class="input input-bordered input-sm md:input-lg flex items-center gap-2">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 16 16"
							fill="currentColor"
							class="w-4 h-4 opacity-70"
						>
							<path
								d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z"
							/>
						</svg>
						<input
							type="text"
							class=" grow"
							placeholder="Username"
							name="username"
							value="{{ old("username") }}"
						/>
					</label>

					@error('username')
						<p class="text-red-500 text-sm md:text-base mt-1">{{ $message }}</p>
					@enderror
				</div>

				<div>
					<p class="text-base md:text-lg">Password</p>
					<label class="input input-bordered input-sm md:input-lg flex items-center gap-2">

						<svg
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 16 16"
							fill="currentColor"
							class="w-4 h-4 opacity-70"
						>
							<path
								fill-rule="evenodd"
								d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
								clip-rule="evenodd"
							/>
						</svg>
						<input type="password" class="grow" placeholder="password" name="password" />
					</label>
					@error('password')
						<p class="text-red-500 text-sm md:text-base mt-1">{{ $message }}</p>
					@enderror
				</div>

				<button
					class="btn btn-md md:btn-lg bg-orange-500 text-white w-full mt-4 md:mt-8"
				>
					Login
				</button>

				<div class="flex justify-between mt-4 items-center">
					<label class="cursor-pointer label gap-2 md:gap-4">
						<span class="label-text">Remember me</span>
						<input
							type="checkbox"
							checked="checked"
							class="checkbox checkbox-xs md:checkbox-md checkbox-warning"
							name="remember"
						/>
					</label>

					<a href="" class=" text-sm md:text-base text-slate-500 italic  ">Lupa Password</a>
				</div>

					<p class=" block md:hidden text-red-500 text-center text-xs italic mt-6">belum punya akun ? <a href="{{ route('register') }}">sing up disini</a> </p>	
			</form>
		</div>
		<div
			class="hidden md:grid bg-gradient-to-tl  place-content-center items-center text-center from-red-500 to-orange-500 gap-4"
		>
			<svg class="w-32 mx-auto fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" ><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
			<h2 class="text-5xl text-white">Welcome to login</h2>
			<p class="text-lg">Belum Punya Akun ?</p>
			<a href="{{ route('register') }}"><button class="btn">Sing Up</button></a>
		</div>
	</div>
</x-applayout>
