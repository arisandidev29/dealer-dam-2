<x-admin-layout>
	<div class="text-sm breadcrumbs my-4">
		<ul>
			<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li><a href="{{ route('dashboard.customers') }}">User</a></li>
		</ul>
	</div>

	<div class="flex justify-between">
		<h1 class="text-red-500 text-2xl font-semibold">User</h1>
	</div>

	<div class="overflow-x-auto">
		<table class="table">
			<!-- head -->
			<thead>
				<tr>
					<th></th>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>2</th>
					<td>Hart Hagerty</td>
					<td>Desktop Support Technician</td>
					<td>
						<form action="">
							<select
								class="select select-bordered select-warning w-full max-w-xs"
							>
								<option>Admin</option>
								<option>Editor</option>
								<option>Customers</option>
							</select>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</x-admin-layout>
