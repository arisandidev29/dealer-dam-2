<x-admin-layout>
	<div class="text-sm breadcrumbs my-4">
		<ul>
			<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li><a href="{{ route('dashboard.customers') }}">Customers</a></li>
		</ul>
	</div>

	<div class="flex justify-between">
		<h1 class="text-red-500 text-2xl font-semibold">Customers</h1>
		<a href="{{ route('dashboard.customers.create') }}"
			><button class="btn text-white bg-orange-500">
				New Customers
			</button></a
		>
	</div>

	<div class="my-4 ">
		<label class="input input-bordered flex items-center gap-2">
			<input type="text" class="grow" placeholder="Search" />
			<svg
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 16 16"
				fill="currentColor"
				class="w-4 h-4 opacity-70"
			>
				<path
					fill-rule="evenodd"
					d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
					clip-rule="evenodd"
				/>
			</svg>
		</label>
		<div class="overflow-x-auto">
			<table class="table">
				<!-- head -->
				<thead>
					<tr>
						<th></th>
						<th>Name</th>
						<th>Email</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<!-- row 1 -->
					<tr>
						<th>1</th>
						<td>Cy Ganderton</td>
						<td>example@gmail.com</td>
						<td class="text-red-500 font-semibold hover:underline">
							<a
								href="{{ route('dashboard.customers.edit', '1') }}"
								class="flex gap-2 items-center"
							>
								Edit
								<svg
									class="w-4 fill-current"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 512 512"
								>
									<!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path
										d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"
									/>
								</svg>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</x-admin-layout>
