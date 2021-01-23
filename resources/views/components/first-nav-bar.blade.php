<div>
    <nav  >
  
        <input type="checkbox" id ="nav-toggle">
        <div class="logo" data-aos="fade-down" data-aos-duration="1900"> <a  href="{{url('/')}}#slider"> <img src="resources/images/logos/celec_bleu.png" style="width : 50px; height : 60px;" alt="Logo CELEC"> </a> </div>
        <ul class="linkes" >
          <li data-aos="fade-down" data-aos-duration="1900"> <a href=" @if(Request::is('/') == false){{url('/')}}@endif#video">A propos</a></li>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="@if(Request::is('/') == false){{url('/')}}@endif#activite">Activités</a></li>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="@if(Request::is('/') == false){{url('/')}}@endif#member">Membre</a></li>
          <li data-aos="fade-down" data-aos-duration="1900" class="glow"> <a href="@if(Request::is('/') == false){{url('/')}}@endif#inscrire">Inscription</a></li>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="{{url('gallerie')}}">Gallerie</a></li>

          <li data-aos="fade-down" data-aos-duration="1900"> <a href="{{url('events')}}">Evénement</a></li>
          <div class="dropdown">
            <button class="dropbtn" data-aos="fade-down" data-aos-duration="1900">Formations <i class="fa fa-sort-desc" aria-hidden="true"></i></button>
            <div class="dropdown-content">
              <a href="{{url('courses')}}">Enligne</a>
              <a href="{{url('formation')}}">Présentiel</a>
              
            </div>
          </div>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="@if(Request::is('/') == false){{url('/')}}@endif#contact">contact</a></li>
        </ul>
        <label for="nav-toggle" class="icon-barger">
        
            <i class="fa fa-bars fa-2x" aria-hidden="true"></i>


        </label>
      </nav>
    @if(Request::is("learn"))
      <style type="text/css">
        .nav-link {
          color: white !important;
        }
      </style>
    @endif
</div>