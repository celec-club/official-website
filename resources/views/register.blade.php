@extends("templates.main")
@section("title", "CELEC CLUB - Inscription")
@section("content")
<div class="hero-text">
        <h1>Pré-Inscription</h1>
        <p>Les inscriptions pour adhérer à notre club CELEC sont enfin ouvertes pour 
            l’ensemble des étudiants de l’USTHB, qui visent à sculpter et à améliorer leurs 
            compétences dans les divers domaines ( programmation, design.....) et plus 
            spécialement l’ELECTRONIQUE, à travers les activités planifiées cette année 
            ( plusieurs surprises vous attendent ).
            Veuillez s'il vous plait remplir soigneusement ce formulaire.</p>
    </div>
    {{-- this will require the template located in resources/views/livewire/register.blade.php --}}
    @livewire("register")
@endsection