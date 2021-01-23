@extends("templates.main")
@section("title", "CELEC CLUB - events")
@section("content")
    <!--********************* upcoming event ********************* -->
    <div class="container-fluid" style="margin-top: 15%;">
        <div class="row">
            <!--droite phone-->
            <div class="col-md-5 col-12 pictphone" > 
                <img  src="resources/images/sarah.png" style="width: 100%; height: 100%;"> 
            </div>
            <!--gauche-->
            <div class="col-md-7 col-12"> 
                <div class="row">
                    <!-- partie 1 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 col-12" data-aos="fade-right" data-aos-duration="1900">
                               <p class="P1">Événements:</p> 
                            </div>
                            <div class="col-md-3 col-3 droite" style="background-color: #bef7ff;margin-left: 0%;height: 25px;border-radius: 60px;margin-top: 1.5%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2 offset-md-2 web" style="background-color:#bef7ff;height: 20px;border-radius: 60px;margin-top: -1.5%;margin-bottom: 2.5%;">
                             </div>
                           
                            <div class="col-md-2 offset-md-2 col-3 phone" style="background-color:#bef7ff;height: 20px;border-radius: 60px;margin-top: 2%;">
                            </div>
                        </div>
                    </div>
                    <!--partie 2-->
                    <div class="col-md-9 col-offset-3 col-12 description" data-aos="fade-right" data-aos-duration="1900">
                        <p>CELEC fait de l’organisation, de conférences, de compétitions et d'évènements l’une des activités phare de notre club.</p>
                         
                     </div>
                    <!--partie 3 -->
                    <div class="col-md-12" id="phoneversion" data-aos="fade-left" data-aos-duration="1900">
                        <div class="row">
                            <div class="col-md-2 offset-md-2 " style="background-color:#bef7ff;height: 40px;border-radius: 60px;margin-top: 1.5%;">
                            </div> <div class="col-md-8"></div>
                            <div class="col-md-2 offset-md-9 " style="background-color:#bef7ff;height: 40px;border-radius: 60px;">
                            </div> <div class="col-md-1"></div>
                            <div class="col-md-4 offset-md-4 " style="background-color:#bef7ff;height: 40px;border-radius: 60px;">
                            </div> <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--droite web-->
            <div class="col-md-5 col-12 pictweb" data-aos="fade-down" data-aos-duration="1900"> 
                <img src="resources/images/sarah.png" style="width: 100%; height: 100%;"> 
            </div>
            <!-- Arrow-->
            <div class="arrow" data-aos="fade-down" data-aos-duration="1900">
              <img src="resources/images/arow.png" alt="Scroll-Down" style="width: 50px; height: 50px;" >
             </div>
        </div>
    </div>
    <!--********************* Cards ********************* -->
    <div class="container-fluid" id="cards" >
        <div class="row cards123" >
            <div class="col-md-3 mt-3 col-12 offset-1 card1" data-aos="fade-down" data-aos-duration="1900" >
                <img src="resources/images/logos/junction.svg" style="width: 50px; height: 50px;" alt="junction" class="logo2">
                <h1 style="color:white;">Junction x Algeries</h1>
                <p style="color:white; ">
                    Junction a débuté en finland et au fil des années, cet événement a pris de l’ampleur
                à l’international depuis 2018, et dans le but de faire découvrir le plaisir du hackathon aux
                communautés locales et leur permettre eux aussi d’innover et réussir.

                </p>
                <a href="#">  Découvrire </a>
            </div>
            <div class="col-md-3 mt-3 col-12 card2" data-aos="fade-up" data-aos-duration="1900">
                <img src="resources/images/logos/django1.svg" alt="Django girls " class="logo1"  >
                <h1>Django girls </h1>
                <p style="margin-bottom: 26%;">
                    Django Girls est un évènement international, de concept polonais, créé par la
                    communauté Django Girls, aidant les femmes à organiser des ateliers de
                    programmation à but non lucratif dans plus de 90 pays.

                </p>
                <a href="#" >Découvrir </a>
            </div>
            <div class="col-md-3 mt-3 col-12 card3" data-aos="fade-down" data-aos-duration="1900">
                <div class="logo1">C-tech</div>
                <h1 style="color: white; font-size: 30px;" class="logo2">C-Tech</h1>
                <p style="color: white; margin-bottom: 23%;">
                    C-tech est une  journée de conférences à thème  animée par les plus grands chercheurs et spécialistes de notre ère. Il s’agit d'une succession de présentations experte dans un domaine technologique précis.</p>   
                <a href="# " >Découvrir </a>
            </div>
        </div>
    </div>
@endsection