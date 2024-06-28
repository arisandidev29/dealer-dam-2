<x-admin-layout>
	{{-- {{ dd($visitorData) }} --}}
	<div class="flex gap-2 py-4 px-4 w-full rounded-lg bg-slate-300 my-2">
		@if(auth()->user()->images)
		<div class="avatar">
			<div class="w-12 rounded-full">
				<img
					src="{{ asset('storage/user/' . auth()->user()->images) }}"
				/>
			</div>
		</div>
		@else
		<div  class="avatar  placeholder">
            <div class="bg-neutral text-neutral-content w-12 rounded-full">
                <span x-data class="text-xl" x-text="getInitials('{{ auth()->user()->name }}')"><p></p>
                 </span>
            </div>
        </div>

        @endif

		<div class="dark:text-slate-800">
			<h3 class="text-lg font-semibold">Welcome</h3>
			<p class="text-xs">{{ auth()->user()->name }}</p>
		</div>
		<p class="grow text-right text-sm self-center dark:text-slate-800">Account type <span class="badge badge-neutral">{{ auth()->user()->getRoleNames()->first() }}</span> </p>
	</div>

	<!-- stat dashboard -->
	<div class="stats shadow grid gap-4 my-6">
		<div class="stat">
			<div class="stat-figure text-primary">
				<svg
					class="inline-block w-8 h-8 fill-current stroke-current"
					xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 448 512"
				>
					<path
						d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"
					/>
				</svg>
			</div>
			<div class="stat-title">Total Product</div>
			<div class="stat-value text-primary">{{ $totalProduct }}</div>
			<div class="stat-desc">public product</div>
		</div>

		<div class="stat">
			<div class="stat-figure text-secondary">
				<svg
					class="inline-block w-8 h-8 fill-current stroke-current"
					xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 448 512"
				>
					<!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
					<path
						d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152z"
					/>
				</svg>
			</div>
			<div class="stat-title">Visitor</div>
			<div class="stat-value text-secondary">{{ $totalVisitor }}</div>
			<div class="stat-desc"></div>
		</div>
	</div>
	<div>
		<canvas id="myChart"></canvas>
	</div>
</x-admin-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

	  function getInitials(name) {
        let names = name.split(' ')
        let initials = names[0].substring(0, 1).toUpperCase();

        if(names.length > 1) {
            initials += names[names.length - 1].substring(0, 1).toUpperCase();
        }

        return initials;
    }


	const ctx = document.getElementById("myChart");

	new Chart(ctx, {
		type: "bar",
		options: {
			animation: false,
		},
		data: {
			labels: [
				@foreach($visitorData as $visitor)
					"{{  $visitor['bulan'] }}" ,
				@endforeach
			],
			datasets: [
				{
					label: "Data Visitor {{ now()->year }}",
					data: [
							@foreach($visitorData as $visitor)
								"{{ $visitor['ip']  }}" , 
							@endforeach

						],
					borderWidth: 1,
				},
			],
		},
		options: {
			scales: {
				y: {
					beginAtZero: true,
				},
			},
		},
	});
</script>
