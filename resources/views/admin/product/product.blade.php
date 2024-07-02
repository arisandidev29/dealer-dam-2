<x-admin-layout>

	<div class="text-sm breadcrumbs my-4">
		<ul>
			<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li><a href="{{ route('dashboard.product') }}">Product</a></li>
		</ul>
	</div>


	@if(session("status"))
		<div role="alert" class="alert alert-success my-4">
		  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
		  <span>{{ session("status") }}</span>
		</div>
	@endif

	<div class="flex justify-between">
		<h1 class="text-red-500 text-2xl font-semibold">Product</h1>
		<a href="{{ route('dasboard.product.create') }}"
			><button class="btn text-white bg-orange-500">
				New Product
			</button></a
		>
	</div>

	<div class="my-6 stats stats-vertical w-full lg:stats-horizontal shadow">
		<div class="stat">
			<div class="stat-title">Total Product</div>
			<div class="stat-value">{{ $totalProduct }}</div>
		</div>

		<div class="stat">
			<div class="stat-title">Product Inventory</div>
			<div class="stat-value">{{ $productInventory  }}</div>
		</div>

		<div class="stat">
			<div class="stat-title">Avarage Price</div>
			<div class="stat-value">Rp. {{ Number::format($averagePrice ?? 0) }}</div>
		</div>
	</div>

	<div x-init="" x-data="{
		paginateProducts : {{ json_encode($paginateRroducts) }}.data,
		allProducts : {{ $allProducts }},
		search : '',
		data : [],
		checkAll : false,
		get filteredProduct () {
			if(this.search == '') {
				return this.paginateProducts;
			}
			return this.allProducts.filter(product => product.name.toLowerCase().includes(this.search.toLowerCase()))
		},

		changeData(checked,id) {
			// console.log($checked)	
			console.log(checked);
			this.data = [...this.data,checked];
		},
		isChecked() {
			 return document.querySelectorAll('.checkbox-item:checked').length > 0;
		}
	}" >
		<form action="">
			<label
				class="input input-bordered flex items-center gap-2 w-full md:w-64"
			>
				<input type="text" class="grow" placeholder="Search" x-model="search"/>
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
		</form>
			<div class="overflow-x-auto">
			<table class="table">
				<!-- head -->
				<thead>
					<tr>
						<th>
							<label>
								<input type="checkbox" class="checkbox" x-model="checkAll"/>
							</label>
						</th>
						<th>Name</th>
						<th>Visibility</th>
						<th>Price</th>
						<th>Quantity</th>
						<th></th>
						<th >
							<form x-show="checkAll  " action="{{ route('dashboard.product.delete') }}" method="post">
										@csrf
										@method("delete")
										<input type="hidden" name="id">
										<button class="btn text-white btn-error">Delete All </button>
							</form>
						</th>
					</tr>
				</thead>

				<tbody>
					<template 
					x-for="(product,index) in filteredProduct"

					>
						<tr>
						<th>
							<label x-data="{checked : false}">
								<input type="checkbox" class="checkbox checkbox-item" :checked="checkAll ?? checked" @change="changeData($event.target.getAttribute('checked'))"  />
							</label>
						</th>
						<td>
							<div class="flex items-center gap-3">
								<div class="avatar">
									<div class="mask mask-squircle w-12 h-12">
										<img
											:src=" '{{ asset("storage/") }}/' + product.images "
										/>
									</div>
								</div>
								<div>
									<div class="font-bold" x-text="product.name"></div>
									<div class="text-sm opacity-50" x-text="product.year"></div>
								</div>
							</div>
						</td>
						<td>
							{{-- public --}}
							<div  :class="product.visibility == 'public' ? ' flex gap-2 items-center' : 'hidden'">
								<svg
									class="fill-slate-800 dark:fill-white w-6"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 448 512"
								>
									
									<path
										d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"
									/>
								</svg>

								<p class="text-xs">public</p>
							</div>

							{{-- private --}}
							<div :class="product.visibility == 'private' ? ' flex gap-2 items-center' : 'hidden'">
								<svg
									class="fill-slate-800 dark:fill-white w-[1.2rem]"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 384 512"
								>
									<!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
									<path
										d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"
									/>
								</svg>

								<p class="text-xs">private</p>
							</div>
						</td>
						<td x-text=" new Intl.NumberFormat( 'id',
							{
								style : 'currency',
								currency : 'IDR'
							}

						).format(product.price)"></td>
						<td x-text="product.quantity"></td>
						<td
							class="text-red-500 font-semibold hover:underline "
						>

							<a :href="'{{ url('/') }}/dashboard/product/' + product.id + '/edit'" class="flex gap-2 items-center">
								Edit
								<svg
									class="w-4 fill-current"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 512 512"
								>
									<path
										d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"
									/>
								</svg>
							</a>
						</td>
						<td  x-data="{ modal : 'modal_' + product.id }">
							<button class="btn btn-error text-white" @click="showDialog(modal)">delete</button>
							<dialog  :id="modal" class="modal">
							  <div class="modal-box text-center">
							    <h3 class="font-bold text-lg text-center">Alert ‼️ </h3>
							    <p class="py-4" x-text="'are your sure delete ' + product.name + ' 🤔'"></p>
							    <div class="modal-action justify-center">
							      <form action="{{ route('dashboard.product.delete') }}" method="post">
										@csrf
										@method("delete")
										<input type="hidden" :value="product.id" name="id">
										<button class="btn text-white btn-error">Delete it !</button>
									</form>
							      <form method="dialog">
							        <button class="btn">Close</button>
							      </form>
							    </div>
							  </div>
							</dialog>
							
						</td>		
					</tr>					
					</template>
					
					

					<!-- foot -->
				</tbody>

				<tfoot>
					<th>
						<label>
							<input type="checkbox" class="checkbox"  />
						</label>
					</th>
					<th>Name</th>
					<th>Visibility</th>
					<th>Price</th>
					<th >Quantity</th>
					<th ></th>
				</tfoot>
			</table>

		</div>
	</div>
			{{ $paginateRroducts->links() }}
	
</x-admin-layout>
<script>
	function showDialog(el) {
		document.querySelector('#' + el).showModal();
	}	
</script>