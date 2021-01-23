@extends("admin.layouts.main")
@section("title", "login")
@section("content")
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 m-5">
				@if ($errors->any())
			    	<div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				<form method="POST" action="{{ url('admin/login') }}">
				@csrf
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Email address</label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Password</label>
				    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection