@extends("admin.layouts.main")
@section("title", "messages")
@section("content")
	<div class="container mt-5">
		<div class="row">
			@foreach($messages as $message)
				<div class="col mt-3">
					<div class="card" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title">{{$message->name}}:</h5>
					    <h6 class="card-subtitle mb-2 text-muted">IP: {{$message->ip}} / {{$message->created_at}}</h6>
					    <p class="card-text">{{$message->message}}</p>
					    <a href="mailto:{{$message->email}}" class="card-link">{{$message->email}}</a>
					  </div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="row mt-5">
			<div class="col">
				{{ $messages->links() }}
			</div>
		</div>
	</div>
@endsection