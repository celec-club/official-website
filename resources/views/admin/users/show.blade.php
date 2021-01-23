@extends("admin.layouts.main")
@section("title", "users")
@section("content")
	<div class="container mx-auto my-10">	
		<div class="felx mb-4">
			{{ $acceptedCount }} / {{$count}} Accepted
			<livewire:users-datatables exportable='true' searchable="firstname,lastname"/>
		</div>
	</div>
@endsection