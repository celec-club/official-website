@extends("admin.layouts.main")
@section("title", "formation emails")
@section("content")
	<div class="container mx-auto my-10">	
		<div class="felx mb-4">
			<livewire:formation-emails exportable='true' searchable="email" hide="updated_at" />
		</div>
	</div>
@endsection