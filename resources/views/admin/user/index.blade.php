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


	@if(session("status"))
		<div role="alert" class="alert alert-success my-4">
		  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
		  <span>{{ session("status") }}</span>
		</div>
	@endif

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
				@php
					$no = 1;
				@endphp
				@foreach($users as $user)
				<tr>
					<th>{{ $no++ }}</th>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
				<td>
						<form x-data x-ref="form" action="{{ route('changeRole') }}" method="post" class="change_role">
							@csrf
							<select 
								class="select select-bordered select-warning w-full max-w-xs" x-on:change="$refs.form.submit()" name="role" @disabled(auth()->user()->name == $user->name) 
							>
								<option value="admin" @selected($user->hasRole("admin"))>Admin</option>
								<option value="editor"  @selected($user->hasRole("editor"))>Editor</option>
								<option value="customer"  @selected($user->hasRole("customer"))>Customers</option>

							</select>

							<input type="hidden" value="{{ $user->id }}" name="id">
						</form>
					</td>
					<td>
						<button class="btn btn-error text-white" @disabled(auth()->user()->name == $user->name) >
							<a href="">Delete</a>
						</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</x-admin-layout>
<script>
	
</script>