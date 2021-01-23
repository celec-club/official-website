<div>
    <ul>
    	@foreach(json_decode($comptence) as $c)
    		<li>{{$c}}</li>
    	@endforeach
    </ul>
</div>
