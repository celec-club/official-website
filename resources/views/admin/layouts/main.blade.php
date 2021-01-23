<!DOCTYPE html>
<html>
<head>
	<title>Admin Login @yield("title")</title>
	<!-- CSS only -->
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	@if(Request::is("admin/users/show") OR Request::is("admin/formation/emails"))
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />
	@else
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	@endif
	@livewireStyles
</head>
<body>
	@if(Request::is("admin/users/show") == false AND isset($users) AND Request::is("admin/login") == false)
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">CELEC</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		        <a class="nav-link @if(Request::is('admin/dashboard')) active @endif" aria-current="page" href="{{url('admin/dashboard')}}">Home</a>
		        <a class="nav-link" href="{{url('admin/users/show')}}">users (Total: {{$users}})</a>
		        <a class="nav-link @if(Request::is('admin/messages*')) active @endif" href="{{url('admin/messages/show')}}">Messages (Total: 
		        	@if(is_int($messages)) {{$messages}} @else {{$messages->count()}} @endif
		        )</a>
		        <a class="nav-link" href="{{url('admin/formation/emails')}}">Formation emails</a>
		      </div>
		    </div>
		  </div>
		</nav>
	@endif
	@yield("content")
</body>
@livewireScripts
@if(Request::is("admin/users/show") == false OR Request::is("admin/formation/emails") == false)
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endif
</html>