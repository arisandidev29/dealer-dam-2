<x-admin-layout>
	<div class="text-sm breadcrumbs my-4">
		<ul>
			<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li><a href="{{ route('dashboard.customers') }}">Customers</a></li>
			<li>
				<a href="{{ route('dashboard.customers.create') }}">Create</a>
			</li>
		</ul>
	</div>

	<div class="flex justify-between">
		<h1 class="text-red-500 text-2xl font-semibold">Create Customers</h1>
	</div>

	@if(session("status"))
		<div role="alert" class="alert alert-success my-4">
		  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
		  <span>{{ session("status") }}</span>
		</div>
	@endif

	<form action="{{ route('dashboard.customer.create') }}" method="post" class="max-w-md gap-4 grid">
		@csrf
		<div class="grid gap-6">
			<div>
				<label for="name">
					<p class="text-sm">Name</p>
					<input
						type="text"
						placeholder="Type Name here"
						class="input input-bordered w-full"
						name="name"
						value="{{ old("name") }}"
					/>
				</label>

				@error('name')
					<p class="text-red-500 my-1 text-sm md:text-base">{{ $message  }}</p>
				@enderror	
			</div>
			
			<div>
				<label for="email">
					<p class="text-sm">Email</p>
					<input
						type="email"
						placeholder="Type Email here"
						class="input input-bordered w-full"
						name="email"
						value="{{ old("email") }}"
					/>
				</label>

				@error('email')
					<p class="text-red-500 my-1 text-sm md:text-base">{{ $message  }}</p>
				@enderror	
			</div>
			
		</div>

		<button class="btn bg-orange-500 text-white ">Create</button>
	</form>
</x-admin-layout>
