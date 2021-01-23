<!DOCTYPE html>
<html>
<head>
	<title>Formation</title>
	<meta charset="utf-8">
	<link rel="icon" href="resources/images/logos/celec_blanc.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="resources/css/formation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  @livewireStyles
</head>
<body >

<!--comming soon-->
<div class="row commingsoon">
  <span class="circle"></span>
  <span class="msg">Bientôt disponible</span>
  <span class="notifymsg">être Averti Quand Il Est Prêt</span>
  <span class="field">
    @livewire("formation-mail-getter")
  </span>
</div>

  <div class="container-fluid banner">
    <div class="row">
    <div class="col-md-12">
      <!--navbar-->
      <nav >
        <input type="checkbox" id ="nav-toggle">
        <div class="logo" data-aos="fade-down" data-aos-duration="1900"> <a  href="index.html#slider"> <img src="resources/images/logos/celec_blanc.png" style="width : 50px; height : 60px;" alt="Logo CELEC"> </a> </div>
        <ul class="linkes" >
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="index.html#video">A propos</a></li>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="index.html#activite">Activités</a></li>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="index.html#comp">Membre</a></li>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="index.html#inscrire">Inscription</a></li>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="#">Gallerie</a></li>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="eventssa.html">Evénement</a></li>
         
          <div class="dropdown">
            <button class="dropbtn" data-aos="fade-down" data-aos-duration="1900">Formations <i class="fa fa-sort-desc" aria-hidden="true"></i></button>
            <div class="dropdown-content">
              <a href="cours.html">Enligne</a>
              <a href="#">Présentiel</a>
            </div>
          </div>
          <li data-aos="fade-down" data-aos-duration="1900"> <a href="#contact">contact</a></li>
        </ul>
        <label for="nav-toggle" class="icon-barger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        
        </label>
      </nav>

<!--forms-->
<div class="login1 container-fluid">
<div class="row">
<h1>Formations</h1>

<div class="text_box"> 
 	<input type="text" name="" placeholder="Nom et Prénom">
 </div>
 <div class="text_box"> 
         <input type="text" name="" placeholder="Date de naissance">
     </div>

<div class="text_box">
 <input type="text" name="" placeholder="E-mail">
</div>


<div class="text_box">
  <input type="text" placeholder="Université">
 </div>
 <div class="text_box">
  <input type="text" placeholder="Spécialité">
 </div>
 <div class="text_box">
  <input type="text" placeholder="Motivation">
 </div>
 <div class="envo1">
<input type="file" name="file" id="file" class="inputfile"/>
 <label for="file">Votre CV</label>
</div>


</div></div>

<div class="login2 container">
<div class="row">
  
  <div class="text_box"> 
     <input type="text" name="" placeholder="nivau détude">
   </div>
   <div class="text_box"> 
           <input type="te" name="" placeholder="Compétance">
       </div>
  
  <div class="text_box">
    <select name="Type-de-stage" id="Type-de-stage" class="select">
      <option disabled selected>Type de stage</option>
      <option value="fin_d'études">Fin d'études</option>
      <option value="pratique">Pratique</option>
      <option value="expérience">Expérience</option>
  </select>
  </div>
  
  
  <div class="text_box">
    <input type="number" placeholder="Duré du stage(mois)">
   </div>
   <div class="text_box">
    <input type="text" placeholder="Date du stage">
   </div>.
   
   <div class="bouton envo2">
    <input type="button" value="envoyé">
   </div>
  </div>
  </div>
  
  </div>
  </div>
   </div>
  





   
</body>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@livewireScripts
@stack("scripts")
<script type="text/javascript">
  window.addEventListener('mail-created', event => {
    alert(event.detail.message);
        });
</script>
</html>