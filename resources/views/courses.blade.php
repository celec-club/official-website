@extends("templates.main")
@section("title", "CELEC CLUB - learn")
@section("content")
	    <div class="container-fluid bg_cour" style="background-color: #6789EA ;height: 100vh;">
       <div class="row">
          <!--gauche-->
          <div class="col-md-8 col-11 text" data-aos="fade-right" data-aos-duration="1500">
             <p class="titre">AMÉLIOREZ VOS COMPÉTENCES <br> AVEC NOS COURS</p>

          </div>
          <!--droite-->
          <div class="col-md-12 col-12">       
             <a href="#tab" class="btn" style="color: white;" data-aos="fade-up" data-aos-duration="1500">commencer</a> 
             <img src="resources/images/lump.svg" class="lump">
          </div>
       </div>
    </div>
    <!--*************************** slide cours *******************************-->
   <div class="container-fluid">
      <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-duration="3000">
             <p class="cours" id="cour" > COURS </p>
          </div>
          <!-- slide cours -->
         <div class="col-md-12">

            <div class="tab" id="tab" >

                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-justified " style="height: 150px; background-color: transparent;font-weight: bold; margin-top: 2%;">
                  
                  <li class="nav-item nav1 active" data-aos="fade-up" data-aos-duration="3000">
                    <a class="nav-link " data-toggle="tab" href="#app-dev">
                      <img  src="resources/images/mobile_app.svg" alt="mobile_app" style="margin-left: 5px;margin-bottom: 5px;">
                    </a>
                  
                  </li>
                  <li class="nav-item nav1" data-aos="fade-up" data-aos-duration="2200">
                    <a class="nav-link" data-toggle="tab" href="#arduino">
                      <img  src="resources/images/processor.svg" alt="">
                    </a>
                    
                  </li>
                  <li class="nav-item nav1" data-aos="fade-up" data-aos-duration="2000">
                      <a class="nav-link" data-toggle="tab" href="#web-dev" style="margin-top: 5px;margin-bottom: 5px;">
                          <img   src="resources/images/web-programming.svg"  alt="web-dev">
                      </a>
                      
                  </li>
                  <li class="nav-item nav1" data-aos="fade-up" data-aos-duration="1500">
                      <a class="nav-link" data-toggle="tab" href="#prog-l"style="margin-top: 5px;margin-bottom: 5px;">
                          <img  src="resources/images/programming-language.svg" alt="prog-l">
                      </a>
                    
                  </li>
                </ul>
               
              
                <!-- Tab panes -->
                <div class="tab-content" >
                 
                  <div id="app-dev" class=" tab-pane active " data-aos="fade-up" data-aos-duration="1500" ><br>
                  
                    <div class="col-md-12">
                    <p class="T">Développement des applications Mobiles avec Flutter</p>
                    <p class="discription">Une application mobile est un logiciel applicatif développé pour un appareil  électronique mobile,<br> tel qu'un assistant personnel,  un téléphone portable, un smartphone, un baladeur numérique, une tablette  tactile,<br> ou encore certains ordinateurs fonctionnant avec le système  d'exploitation Windows Phone ou Chrome OS.</p>
                    <p class="T1">videos</p>   
                    </div>

                    <div class="container">
                        
                      <div class="row">
                       <!-- video carousel-->
                          <div class="col-md-12">
                              
                              <div class="carousel slide" data-ride="carousel" id="app">
                                 
                                  <!-- Indicators -->
                                  <ul class="carousel-indicators">
                                      <li data-target="#app" style="background-color: #3665e6fa;" data-slide-to="0" class="active"></li>
                                      <li data-target="#app" style="background-color: #3665e6fa;" data-slide-to="1"></li>
                                      <li data-target="#app" style="background-color: #3665e6fa;" data-slide-to="2"></li>
                                  </ul>
                                  <div class="carousel-inner">
                                      
                                          <div class="carousel-item active">
                                              <div class="row">
                                                  <div class="col-md-4"> 
                                                      <a href="#">
                                                          <span class="img-text ">
                                                              <iframe class="img-resposive v1" src="https://www.youtube.com/embed/iQbrwCtqNvM?list=PL-GJ1nK6QiB9WXB6n_gphrkhKns8raz_9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                                                          </span>
                                                      </a>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <a href="#">
                                                          <span class="img-text">
                                                              <iframe class="img-resposive v1" src="https://www.youtube.com/embed/i-eMgWw2Fms?list=PL-GJ1nK6QiB9WXB6n_gphrkhKns8raz_9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                    </span>
                                                      </a>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <a href="#">
                                                          <span class="img-text">
                                                              <iframe class="img-resposive v1" src="https://www.youtube.com/embed/O8AAXuIVMR0?list=PL-GJ1nK6QiB9WXB6n_gphrkhKns8raz_9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                          </span>
                                                      </a>
                                                  </div>
                                                  
                                              </div>
                                          </div>
              
                                          <div class="carousel-item">
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <a href="#">
                                                          <span class="img-text">
                                                              <iframe class="img-resposive v1" src="https://www.youtube.com/embed/iQbrwCtqNvM?list=PL-GJ1nK6QiB9WXB6n_gphrkhKns8raz_9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
              
                                                          </span>
                                                      </a>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <a href="#">
                                                          <span class="img-text">
                                                              <iframe class="img-resposive v1" src="https://www.youtube.com/embed/iQbrwCtqNvM?list=PL-GJ1nK6QiB9WXB6n_gphrkhKns8raz_9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
              
                                                          </span>
                                                      </a>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <a href="#">
                                                          <span class="img-text">
                                                              <iframe class="img-resposive v1" src="https://www.youtube.com/embed/iQbrwCtqNvM?list=PL-GJ1nK6QiB9WXB6n_gphrkhKns8raz_9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
              
                                                          </span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
              
                                          <div class="carousel-item">
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <a href="#">
                                                          <span class="img-text">
                                                              <iframe class="img-resposive v1" src="https://www.youtube.com/embed/iQbrwCtqNvM?list=PL-GJ1nK6QiB9WXB6n_gphrkhKns8raz_9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
              
                                                          </span>
                                                      </a>
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                          
                                      
                                  </div>
                                  <!-- Left and right controls -->
                                  <a class="carousel-control-prev prev" href="#app" data-slide="prev">
                                      <span class="carousel-control-prev-icon"></span>
                                  </a>
                                  <a class="carousel-control-next next" href="#app" data-slide="next">
                                      <span class="carousel-control-next-icon"></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                      
                    </div>
              
              
                  </div>
                  <div id="arduino" class="tab-pane fade in "><br>
                    <div class="col-md-12">
                        <p class="T">Formation Arduino</p>
                        <p class="discription">Le système Arduino est conçu d’une plateforme Open Source installée sur une carte programmée à microcontroleur AVR permettant l’écriture, la compilation et le test d’un programme  <br>Suivez les cours pour apprendre les bases d'Arduino. </p>
                        <p class="T1">videos</p>  
                    </div>
      

                      <div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="carousel slide" data-ride="carousel" id="ar">
                                     
                                      <!-- Indicators -->
                                      <ul class="carousel-indicators">
                                          <li data-target="#ar" style="background-color: #3665e6fa;" data-slide-to="0" class="active"></li>
                                          <li data-target="#ar" style="background-color: #3665e6fa;" data-slide-to="1"></li>
                                      
                                      </ul>
                                      <div class="carousel-inner">
                                          
                                              <div class="carousel-item active">
                                                  <div class="row">
                                                      <div class="col-md-4"> 
                                                          <a href="#">
                                                              <span class="img-text ">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/DMqS0Do77AM?list=PL-GJ1nK6QiB-dHo1a34OhG-C6vAgC0eUU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                    </span>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1"  src="https://www.youtube.com/embed/lluHM38MCDQ?list=PL-GJ1nK6QiB-dHo1a34OhG-C6vAgC0eUU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/6kimT8Ymsaw?list=PL-GJ1nK6QiB-dHo1a34OhG-C6vAgC0eUU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                    </span>
                                                          </a>
                                                      </div>
                                                      
                                                  </div>
                                              </div>
              
                                              <div class="carousel-item">
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/1jMYaokBs40?list=PL-GJ1nK6QiB-dHo1a34OhG-C6vAgC0eUU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/872GJ4EhjpU?list=PL-GJ1nK6QiB-dHo1a34OhG-C6vAgC0eUU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/W2WNFjWnBQY?list=PL-GJ1nK6QiB-dHo1a34OhG-C6vAgC0eUU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
              
                                             
                                              
                                          
                                      </div>
                                      <!-- Left and right controls -->
                                      <a class="carousel-control-prev prev" href="#ar" data-slide="prev">
                                          <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next next" href="#ar" data-slide="next">
                                          <span class="carousel-control-next-icon"></span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                  
                  </div>
                  <div id="web-dev" class=" tab-pane fade in"><br>
                    <div class="col-md-12">
                        <p class="T">Formation HTML & CSS</p>
                        <p class="discription">Le développement Web est le codage ou la programmation qui permet de faire fonctionner un site Web,<br> selon les exigences du propriétaire. <br> Suivez les cours pour apprendre les bases de ceation d'un site web</p>
                        <p class="T1">videos</p>
                    </div>
    

                      <div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="carousel slide" data-ride="carousel" id="web">
                                     
                                      <!-- Indicators -->
                                      <ul class="carousel-indicators">
                                          <li data-target="#web" style="background-color: #3665e6fa;" data-slide-to="0" class="active"></li>
                                          <li data-target="#web" style="background-color: #3665e6fa;" data-slide-to="1"></li>
                                          <li data-target="#web" style="background-color: #3665e6fa;" data-slide-to="2"></li>
              
                                      </ul>
                                      <div class="carousel-inner">
                                          
                                              <div class="carousel-item active">
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/zyY3TuRIFKc?list=PL-GJ1nK6QiB-scQjzBPIjnXn1LBs_Zx80" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/gdvI_53wgCY?list=PL-GJ1nK6QiB-scQjzBPIjnXn1LBs_Zx80" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                    </span>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/rHZ39SPLvic?list=PL-GJ1nK6QiB-scQjzBPIjnXn1LBs_Zx80" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
              
                                              <div class="carousel-item">
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/Vkpj5DhaG1U?list=PL-GJ1nK6QiB-scQjzBPIjnXn1LBs_Zx80" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/8bCs75wNuxE?list=PL-GJ1nK6QiB-scQjzBPIjnXn1LBs_Zx80" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/QTLXOymzI6w?list=PL-GJ1nK6QiB-scQjzBPIjnXn1LBs_Zx80" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                      
                                                  </div>
                                              </div>
                                              <div class="carousel-item">
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/ytP01giHnXQ?list=PL-GJ1nK6QiB-scQjzBPIjnXn1LBs_Zx80" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                              </span>
                                                          </a>
                                                      </div>
                                                      
                                                  </div>
                                              </div>
                                              
                                          
                                      </div>
                                      <!-- Left and right controls -->
                                      <a class="carousel-control-prev prev" href="#web" data-slide="prev">
                                          <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next next" href="#web" data-slide="next">
                                          <span class="carousel-control-next-icon"></span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                    
                  
                  
                  
                  
                  </div>
                
                  <div id="prog-l" class=" tab-pane fade in"><br>
                      
                    <div class="col-md-12">
                        <p class="T">Formation MATLAB</p>
                        <p class="discription">MATLAB est un langage de script émulé par un environnement de développement du même nom , il est utilisé à des fins de calcul numérique. Développé par la société The MathWorks, MATLAB permet de manipuler des matrices, d'afficher des courbes et des données, de mettre en œuvre des algorithmes, de créer des interfaces utilisateurs.</p>
                        <p class="T1">videos</p>
                    </div>
    
                      <div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="carousel slide" data-ride="carousel" id="prog">
                                     
                                      <!-- Indicators -->
                                      <ul class="carousel-indicators">
                                          <li data-target="#prog" style="background-color: #3665e6fa;" data-slide-to="0" class="active"></li>
                                  
              
                                      </ul>
                                      <div class="carousel-inner">
                                          
                                              <div class="carousel-item active">
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/QRReC7NlJRU?list=PL-GJ1nK6QiB9qCLi9XlnuaMG9y_yStY6d" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="#">
                                                              <span class="img-text">
                                                                  <iframe class="img-resposive v1" src="https://www.youtube.com/embed/JlVaYBxEOW8?list=PL-GJ1nK6QiB9qCLi9XlnuaMG9y_yStY6d" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                                                          </span>
                                                          </a>
                                                      </div>
                                                      
                                                  </div>
                                              </div>
              
                                              
                                          
                                      </div>
                                      <!-- Left and right controls -->
                                      <a class="carousel-control-prev prev" href="#prog" data-slide="prev">
                                          <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next next" href="#prog" data-slide="next">
                                          <span class="carousel-control-next-icon"></span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                  </div>
              </div>
              </div>
              
         </div>
          <div class="col-md-12">
            <a class="gotopbtn " href="#"><i class="fas fa-arrow-up"></i></a>
          </div>
      </div>
     
   
</div>
   
   </div>
@endsection