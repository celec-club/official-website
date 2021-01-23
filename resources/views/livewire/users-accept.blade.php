<div>
	
	    <div class="flex space-x-1 justify-around">
	        @if($activated == false)
    		    <button wire:click="accept({{ $id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    		        Accept!
    		    </button>
    		 @else
    		    The user is activated
    		 @endif
		    &nbsp;
		    @if($have_card == false OR is_null($have_card))
    		    <button wire:click="addCard({{ $id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
    		        Add card
    		    </button>
		    @endif
		</div>
	
</div>
