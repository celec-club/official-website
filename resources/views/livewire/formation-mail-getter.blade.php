<div x-data="formation()">
	
    <input wire:model.debounce.defer="email" type="email" placeholder="Entrez Votre Email" style="color: white; padding-top: 2px;">
    <button x-on:click="send()" type="button" style="cursor: pointer; height: 40px;width: 160px;color: white; background-color: rgb(95, 91, 179);font-size: 12px;margin: auto; margin-right: 10%;margin-top: 2%; position: relative;">Entrez Votre Email</button>
    @if ($errors->any())
	    <div  style="color:red;" class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
</div>
@push("scripts")
	<script type="text/javascript">
		function formation() {
			return {
				send() {
					@this.submit()
				}
			}
		}

	</script>
@endpush