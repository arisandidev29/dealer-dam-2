<x-applayout header="{{ false }}" footer="{{ false }}">
	<div class="min-h-screen grid grid-cols-1 md:grid-cols-2">
		<div
			class="hidden md:grid bg-gradient-to-br place-content-center items-center text-center from-red-500 to-orange-500 gap-4"
		>
			<svg class="w-24 fill-white mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2v82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9V380.8c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg>
			<h2 class="text-5xl text-white">Join Us</h2>
			<p class="text-lg">Sudah Punay akun ?</p>
			<a href="{{ route('login') }}"
				><button class="btn">Sing in</button></a
			>
		</div>
		<div class="p-6 mt-8">
			<a href="{{ route('home') }}">
				<div class="flex-1 px-2 mx-2 text-red-500 text-2xl">
					Dealer <span class="text-yellow-500"> DAM</span>
				</div>
			</a>
			<hr />

			<h2
				class="text-center  text-2xl md:text-4xl text-red-500 my-2 md:my-4 mt-6 md:mt-8"
			>
				Create Your Account
			</h2>

			<form action="" class="grid gap-4 max-w-xs mx-auto">
				<div>
					<p>Nama</p>
					<label class="input input-bordered flex items-center gap-2">
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
							class="grow"
							placeholder="Name"
						/>
					</label>
				</div>

				<div>
					<p>Email</p>
					<label class="input input-bordered flex items-center gap-2">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 16 16"
							fill="currentColor"
							class="w-4 h-4 opacity-70"
						>
							<path
								d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z"
							/>
							<path
								d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z"
							/>
						</svg>
						<input type="text" class="grow" placeholder="Email" />
					</label>
				</div>

				<div>
					<p>Password</p>
					<label class="input input-bordered flex items-center gap-2">
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
						<input
							type="password"
							class="grow"
							placeholder="password"
						/>
					</label>
				</div>

				<button class="btn bg-orange-500 text-white">Register</button>

				<p class=" block md:hidden text-red-500 text-center text-xs italic mt-6">sudah punya akun ? <a href="{{ route('login') }}">sing in disini</a> </p>	
			</form>
		</div>
	</div>
</x-applayout>
