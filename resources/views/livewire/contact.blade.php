<div x-data="{name : null, email : null, message : null}">
    <form method="POST" wire:submit.prevent="submit">
        @csrf
        <div class="login">
            <h2>Nous contacter</h2>
            <div class="text_box"> 
                <input x-on:change="name = 'noEmpty'" wire:model.lazy="name" type="text"  placeholder="Nom" style="width: 100% !important;">
            </div>
            <div class="text_box">
                <input x-on:change="email = 'noEmpty'" wire:model.lazy="email" type="email" name="" placeholder="E-mail" style="width: 100% !important;">
            </div>
            <div class="text_box">
                <input x-on:change="message = 'noEmpty'" wire:model.lazy="message" type="text" name="" placeholder="Votre message" style="width: 100% !important;">
            </div>
            <div class="bouton">
                <input wire:click="submit" x-bind:disabled="name !== 'noEmpty' || email !== 'noEmpty' || message !== 'noEmpty'" type="button" value="Envoyer">
            </div>
        </div>
    </form>
</div>
@push("scripts")
    <script type="text/javascript">
        window.addEventListener('message-sended', event => {
            Swal.fire(
              'Amazing!',
              'Merci de nous avoir contactés, nous vous répondrons dans les plus brefs délais',
              'success'
            )
        });
    </script> 
@endpush