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

	<form action="" class="max-w-md gap-4 grid">
		<div class="grid gap-6">
			<label for="name">
				<p class="text-sm">Name</p>
				<input
					type="text"
					placeholder="Type Name here"
					class="input input-bordered w-full"
				/>
			</label>

			<label for="email">
				<p class="text-sm">Email</p>
				<input
					type="email"
					placeholder="Type Email here"
					class="input input-bordered w-full"
				/>
			</label>
		</div>

		<button class="btn bg-orange-500 text-white ">Create</button>
	</form>
</x-admin-layout>
