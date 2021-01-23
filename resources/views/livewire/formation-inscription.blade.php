<div class="container-fluid banner">
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="login1 container-fluid">
	    			<div class="row">
	    				<h1>Formations</h1>
					    <div class="text_box"> 
					     	<input wire:model.lazy="fullname" type="text" name="" placeholder="Nom et Prénom">
					     </div>
					     	@error('fullname') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
				     	<div class="text_box"> 
				             <input wire:model.lazy="birthday" type="text" name="" placeholder="Date de naissance">
				         </div>
				             @error('birthday') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
					    <div class="text_box">
					     	<input wire:model.lazy="email" type="text" name="" placeholder="E-mail">
					    </div>
					     	@error('email') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
					    <div class="text_box">
					      	<input wire:model.lazy="university" type="text" placeholder="Université">
					    </div>
					      	@error('university') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
					     <div class="text_box">
					      	<input wire:model.lazy="study_field" type="text" placeholder="Spécialité">
					     </div>
					      	@error('study_field') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
					     <div class="text_box">
					      	<input wire:model.lazy="motivation" type="text" placeholder="Motivation">
					     </div>
					      	@error('motivation') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
					     <div class="envo1">
						    <input wire:model="cv" type="file" name="file" id="file" class="inputfile"/>
						    <label for="file">Votre CV</label>
						    @error('cv') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
					    </div>
	    			</div>
	    		</div>
		    	<div class="login2 container">
		    		<div class="row">
				      	<div class="text_box"> 
				         	<input wire:model.lazy="study_level" type="text" name="" placeholder="nivau détude">
				       </div>
				         	@error('study_level') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
				       <div class="text_box"> 
				        	<input type="text" wire:model.lazy="comptence" name="" placeholder="Compétance">
				       </div>
				        	@error('comptence') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
				      <div class="text_box">
				        <select wire:model.lazy="type" name="Type-de-stage" id="Type-de-stage" class="select">
				          <option disabled selected>Type de stage</option>
				          <option value="fin_d'études">Fin d'études</option>
				          <option value="pratique">Pratique</option>
				          <option value="expérience">Expérience</option>
				      </select>
				      </div>
				      @error('type') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
				      <div class="text_box">
				        	<input type="number" wire:model.lazy="duration" placeholder="Duré du stage(mois)">
				      </div>
				        	@error('duration') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
				       <div class="text_box">
				        	<input wire:model.lazy="date" type="text" placeholder="Date du stage">
				       </div>
				        @error('date') <div class="invalid-feedback" style="color:red; margin-bottom: 3%;">{{ $message }}</div> @enderror
				       <div class="bouton envo2">
					        <input style="cursor: pointer;" {{-- wire:loading.attr="disabled" --}} wire:click="submit" type="button" value="envoyé">
				       </div>
		      		</div>
		      	</div>
	    	</div>
		</div>
</div>
	@push("scripts")
    <script type="text/javascript">
        window.addEventListener('birthday-error', event => {
            Swal.fire({
              title: 'Error!',
              text: event.detail.message,
              icon: 'error',
              confirmButtonText: 'Cool'
            });
        });

        window.addEventListener('user-created', event => {
            Swal.fire(
              'Amazing!',
              event.detail.message,
              'success'
            ).then((result) => {
                  if (result.isConfirmed) {
                        window.location.replace("{{url('/')}}");
                  }
            });
        });
    </script>
@endpush