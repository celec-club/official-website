<!-- This will require the template located in resources/views/templates/main.blade.php -->
@extends("templates.main")

<!-- This will replaced in the main.blade.php -->
@section("title", "CELEC CLUB")
@section("content")
    <div id="demo" class="carousel slide" >

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="0" class="active"></li>
          <li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="1"></li>
          <li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="2"></li>
        </ul>
     
       <!--slider-->
    
    <div id="demo" class="carousel slide" >

        <!-- Indicators 
        <ul class="carousel-indicators">
          <li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="0" class="active"></li>
          <li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="1"></li>-->
         <!--<li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="2"></li>-->  
        </ul>
        
    <!-- slider -->
    <div class="carousel-inner slidershow">
            <div class="carousel-item active ">
                <div class="row s1">
                    <!--Welcom-->
                    <div class="col-sm-6 d-flex flex-column  align-items-center justify-content-center" style="z-index: 1;" data-aos="fade-up" data-aos-duration="3000">
                        <h2>Bienvenue AU <span ></span> <br> <span >celec club</span> </h2>
                        <div class="cloud5" data-aos="fade-left" data-aos-duration="1700"></div>
                        <div class="cloud6" data-aos="fade-right" data-aos-duration="1700"></div>
                        <div class="cloud10" data-aos="fade-left" data-aos-duration="1700"></div>
                        <div class="cloud11" data-aos="fade-right" data-aos-duration="1700"></div>
                        
                        <div class="arow">
                            <a href="#video">
                            <img src="resources/images/arrow.svg" >
                           </a>
                        </div>
                    </div>
                    <!--gif-->
                    <div class="col-sm-6 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                    <video src="resources/images/gif1.mp4" class="gif1" autoplay loop></video>
                    <div class="cloud1" data-aos="fade-left" data-aos-duration="1700"></div>
                    <div class="cloud2" data-aos="fade-right" data-aos-duration="1700"></div>
                    <div class="cloud3" data-aos="fade-left" data-aos-duration="1700"></div>
                    <div class="cloud4" data-aos="fade-right" data-aos-duration="1700"></div>
-
                    </div>
                </div>
            </div>
            <!--django
            <div class="carousel-item" >

            <div class="row s2">
                    <div class="col-sm-1"></div>
                    <div  class="col-sm-1 d-flex align-items-center justify-content-center">
                        <div class="line"></div>
                    </div>
                    
                    <div class="col-sm-5 d-flex flex-column  align-items-start justify-content-center" data-aos="fade-up" data-aos-duration="1700">
                        <h2>django <br> <span >girls</span> </h2>
                        <button type="button" class="btn btn-warning" style="color: white;">decouvrire</button>
                        
 
                    </div>
                    
                    <div class="col-sm-5 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1700">
                        <video src="resources/images/django2.mp4" class="gif2" autoplay loop></video>
                    </div>
                </div>
            
            </div>-->
            <!--junction
            <div class="carousel-item">
                <div class="row s3">
                    <div class="col-sm-1"></div>
                    <div  class="col-sm-1 d-flex align-items-center justify-content-center">
                    <div class="line"></div>
                    </div>
                    
                    <div class="col-sm-4 d-flex flex-column  align-items-start justify-content-center" data-aos="fade-up" data-aos-duration="1700">
                        <h2>junction <br> <span >algiers</span> </h2>
                        <button type="button" class="btn" style="background-color: #6789EA;color: white;">decouvrire</button>
                        
                    </div>
                    
                    <div class="col-sm-5 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1700">
                        <video src="resources/images/junction1.mp4" class="gif3" autoplay loop></video>

                    </div>
                </div>
            
            </div> -->
        </div>

    </div>
    <!--a propos-->
    <section  class="v-header">
        <div class="fullscreen-video-wrap">
            <div id="video">
                <video id="bgvid" autoplay loop muted playsinline style="max-width: 100%; ">
                    <source src="resources/images/video-about.mp4" type="video/mp4">
                </video>
            </div>
            <div class="header-overlay">
                
            </div>

            <div class="caption text-center" >
                <h1 data-aos="fade-right" data-aos-duration="2000" class="apropos">A propos de nous</h1>
                <p data-aos="fade-left" data-aos-duration="1900" >Celec est un club scientifique basé au  sein de  la faculté d’électronique et d’informatique <br> de l’usthb 
                    Il existe depuis  1987,dans le but de rapprocher les étudiants du monde professionnel, <br> en les  aidant à accroître et à développer leurs potentiel, grâce à  un apport matériel<br> et un  accompagnement complémentaires  à la formation universitaire .
                </p>
            </div>
        </div>
    </section>
    <section id="activite">
     <!--activitéss-->
     <div class="container-fluid" >
            <div class="row" >
                <h2 class="col-sm-12 d-flex align-items-center justify-content-center activité"  style="margin:5% 0 4% 0; color: white;" data-aos="fade-down" data-aos-duration="1700">Nos activités</h2>
            </div>

            <div class="row">
                <div id="formation"  class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-down" data-aos-duration="1700" >
                <img src="resources/images/formation.svg" alt="formation" style="max-width: 60%;">
                <h1>Formation</h1>
                <p>Nous prodiguons  aux jeunes  étudiants<br> universitaires  plusieurs , workshops,<br> formations, et enseignements, dans<br> différents domaines relatifs<br> à la  technologie, tout en suivant<br> son évolution.
                </p>
                </div>
                
                <div id="conf" class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-down" data-aos-duration="1700">
                    <img src="resources/images/conf.svg" alt="formation"  style="max-width: 60%;">
                    <h1>Conférences</h1>
                    <p>Nous organisons régulièrement, des <br> conférences, séminaires et colloques <br>
                        animées par les experts les <br> plus brillants   de notre époque
                    </p>
                </div> 
                <div id="sortie" class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-down" data-aos-duration="1700">
                    <img src="resources/images/sortie.svg" alt="formation"  style="max-width: 60%;">
                    <h1 class="text-center">Sorties éducatives</h1>
                    <p>Pour une expérience plus  réaliste, les sorties et les visites de différents 
                        lieux d’exercices de différentes  entités professionnelles sont un véritable atout, d'où l'intérêt du Club Celec dans leurs organisations.
                    </p>
                </div>                    
            </div>

            <div class="row">
                <div id="formation"  class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-down" data-aos-duration="1700">
                <img src="resources/images/projet.svg" alt="formation" style="max-width: 60%;">
                <h1 class="text-center">Réalisation de projets </h1>
                <p>Confection et fabrication  de différents  prototypes et projets, permettant ainsi la  concrétisation de  toute idée de conception électronique ou informatique.</p>

                </div>
                
                <div id="conf" class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-down" data-aos-duration="1700">
                    <img  class="comp" src="resources/images/conf.svg" alt="formation" style="max-width: 60%;" >
                    <h1>Compétitions</h1>
                    <p style=" width: 300px;">Nos compétences vont au delà des murs de notre atelier car à travers 
                        CELEC, nous  avons la chance  de représenter notre université l’ USTHB et notre pays l'ALGÉRIE au cours de nos participations aux différentes compétitions nationales et internationales .
                        </p>             
                </div> 
                <div id="sortie" class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-down" data-aos-duration="1700">
                    <img src="resources/images/sortie.svg" alt="formation"  style="max-width: 60%;">
                    <h1>Organisation Evenmentiel</h1>
                    <p> Manager l’entière opération de l’organisation d'événements technologique 
                        est l’une des activités phare du club CELEC, c’est un moyen des plus efficient d’exploiter et d’exposer nos compétences 
                        </p>
                </div>                    
            </div>
    </div>
       <div id="member" >
        <div  data-aos="fade-up" data-aos-duration="1700">
            <h2 class="col-sm-12 d-flex text-center align-items-center justify-content-center membre-du-bureau" style="padding: 0%; color: white;">Membre du Bureau</h2>
        </div>
        <div data-aos="fade-up" data-aos-duration="1200">
            <h3 class="col-sm-12 d-flex  text-center align-items-center justify-content-center" style="padding: 0%; color: white;" data-aos="fade-right" data-aos-duration="1700">les membres administratifs du club celec pour l'année 2020/2021</h3>   
        </div>
    </div>
    </section>
    <!--****cards***-->
    <section id="member_photo  "  >
    
        <div class=" cards "  >
            <!--imen-->

        <div data-aos="fade-down" data-aos-duration="1700">
            <div class="card">
                <div class="imgbx">
                <img src="resources/images/members/imene.jpg">
                </div>
                <div class="content">
                    <h2>Gherbi Imene </h2>
                    <p class="job">Présidente du club</p>
                <a  href="mailto:imenegherbi00@gmail.com"> <p>imenegherbi00@gmail.com</p></a>  
                <a target="blank" style="width: 50px; height: 50px;" href="https://www.linkedin.com/in/imene-gherbi-9a1aa2162/"> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>

                </div>
                </div>
            </div>
            <!--KHADRAOUI Ibrahim-->
            <div data-aos="fade-up" data-aos-duration="1700">
                <div class="card">
                    <div class="imgbx" >
                        <img style=" margin-left: 5px; width: 200px;  height:220px; " src="resources/images/members/khadraoui.jpg">
                    </div>
                    <div class="content">
                        <h2>KHADRAOUI Ibrahim</h2>
                        <p class="job">Vice president du club <br> <a  href="mailto: khadraouiibrahim@gmail.com"> khadraouiibrahim@gmail.com</a></p>    
                        <a target="blank" style="width: 50px; height: 50px;" href="https://www.linkedin.com/in/ibrahim-khadraoui"> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                        
                    </div>
                </div>
            </div>
            <!--Réda boularbi-->
        
                <div data-aos="fade-up" data-aos-duration="1700">
                <div class="card">
                <div class="imgbx" style="  width: 200px; height:200px; " >
                    <img src="resources/images/members/boularbi 2.jpg">
                </div>

                <div class="content">
                    <h2>Reda Boularbi</h2>
                    <p class="job">Secrétaire général du club</p>
                <a href="mailto: reda.tzr@gmail.com">  <p>reda.tzr@gmail.com</p></a> 
                    <a target="blank" style=" margin-right: 2px;width: 50px; height: 50px;" href="https://www.linkedin.com/in/r%C3%A9da-boularbi/"> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                    
                </div>
                </div>
                </div>
        
                
            <!--LOUNIS Mohamed-->

            <div data-aos="fade-down" data-aos-duration="1700">
            <div class="card">
                <div class="imgbx" style="left: 24px;">
                    <img src="resources/images/members/lounis.jpg">
                </div>
                <div class="content">
                    <h2>LOUNIS Mohamed</h2>
                    <p class="job">Secrétaire général adjoint</p>
                    <a href="mailto: Lounismohamedanis@gmail.com">  <p>Lounismohamedanis@gmail.com</p></a>
                    <a target="blank" style="width: 50px; height: 50px;" href="https://www.linkedin.com/in/mohamed-anis-b738771a8"> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>

                </div>
            </div>
            </div>
        </div>
    </section>
    <section >
        <div id="inscrire" class="container-fluid">
            <div class="row ">
                <h2 class="col-sm-12 d-flex align-items-center justify-content-center title" style="margin:5% 0 5% 0; color: #122D42; text-align: center;font-size: 42px;" data-aos="fade-up" data-aos-duration="1700">Vous pouvez nous rejoindre</h2>
            </div>
            <div class="row">
                
                <div id="conf" class="col-sm-6 d-flex flex-column align-items-center ">
                    <div class="build" data-aos="fade-down" data-aos-duration="1700">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_cOIcXb.json"  background="rgba(0, 0, 0, 0)"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
                    </div>
                    <a href="{{url('register')}}"><button type="button" class="btn" style="background-color: #6789EA;color: white; font-size: 14pt;">inscrire</button></a> 

                </div> 

                <div id="inscrire-text" class="col-sm-6 d-flex flex-column align-items-center justify-content-center" >
                    <h2 data-aos="fade-down" data-aos-duration="1700">INSCRIPTIONS POUR <br> REJOINDRE LE CLUB</h2>
                    <p style="text-align: center;" data-aos="fade-up" data-aos-duration="1700" >Vous pouvez bénéficier d’une <br>formation,  de sorties éducatives, <br> d’une participation à des concours <br> et à des conférences</p>

                </div>

            </div>
        </div>
    </section>

    
    <!--sponsors-->
    <div class="partner-area">
        <div class="container-fluid">
            <h3 class="PA">Nos supporteurs</h3>
            <section class="logo-area slider">
                <div class="slide" style="margin-top: 4px;"><a href="https://www.ieee.org/" target="blank"> <img src="resources/images/logos/ieee.svg" alt="IEE" width="130" height="60" style="margin-top: 4%;"></a></div>
                <div class="slide"><a href="https://www.usthb.dz/fr"  target="blank"> <img src="resources/images/logos/usthb.svg" alt="USTHB" width="110" height="100" ></a></div>
                <div class="slide" style="margin-top: 20px;"><a target="blank" href="https://www.intel.com/content/www/us/en/homepage.html"><img src="resources/images/logos/intel.png" alt="intel"  width="120"  ></a></div>
                <div class="slide" style="margin-top: -13px;"><a  target="blank" href="https://app.hackjunction.com/events/junction-2020-connected"><img src="resources/images/logos/junction.svg" alt="junction connected"  width="120" ></a></div>
                <div class="slide"><a  target="blank" href="https://github.com/"><img src="resources/images/logos/github.svg" alt="github"  width="120" height="90"></a></div>
                <div class="slide"><a  target="blank" href="https://djangogirls.org/algiers/"><img src="resources/images/logos/django1.svg" alt="djangogirls" width="210" height="90"></a></div>
                <div class="slide"><a  target="blank" href="https://dzhoster.com/"><img src="resources/images/logos/dz_hoster.svg" alt="" width="200" height="90"></a></div>
                <div class="slide"><a  target="blank" href="http://www.wilaya-alger.dz/fr/?fbclid=IwAR1piqZ-GtvtHMd-cqpIHCrBN0MhmCz_LLHcqyp0pIfS4KlQZLz6sV5b3Q4"><img src="resources/images/logos/wilaya_alger.svg" alt=""  width="100" height="90" ></a></div>
                <div class="slide"><a  target="blank" href="http://www.aagee.dz/"><img src="resources/images/logos/aagee.svg" alt="AAGEE"  width="100" ></a></div>
                <div class="slide"><a   target="blank" href="https://startup.dz/?fbclid=IwAR332ShuDqi_lBMyzgqSrDMuLJHcwwC3AnntYQY4Z7FQlq0p0_Ci1hUIwJA"><img src="resources/images/logos/RebAlger.svg" alt="wilaya_alger"  width="100" height="90"></a></div>
            </section>
           
        </div>
       
    </div>
@endsection