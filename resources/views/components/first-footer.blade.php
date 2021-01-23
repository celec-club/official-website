<div>
    @if(Request::is("courses") == false)
    <div class="row col-md-12 align-items-center justify-content-center ">
        <a class="gotopbtn " href="#"><i class="fas fa-arrow-up"></i></a>
    </div>
    @endif

    <footer id="contact" container-fluid >
       
            <div class="row footer" >
                <div class="col-sm-6" data-aos="fade-left" data-aos-duration="1500">
                    <div class="email">
                        <h3>Email</h3>
                        <p>usthb.celec@gmail.com</p>
                   </div>
                   <div class="location">
                        <h3>location</h3>
                        <p> labo n°13 Faculté d'Électronique et d'Informatique ,USTHB , Bab Ezzouar, Algérie</p>
                    </div>
                
                    <div class="media">
                        <a href="https://www.facebook.com/CELECUSTHB/"> <i class="fab fa-facebook"></i></a>
                        <a href="#"> <i class="fab fa-instagram"></i></a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/channel/UCtSDj0OaHveDGL9FNq4vVCQ" target="blank"> <i class="fab fa-youtube"></i> </a>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="fade-right" data-aos-duration="1500">
                    @livewire("contact", ["ip" => Request::ip()])
                </div>
            </div>
        
    </footer>
</div>