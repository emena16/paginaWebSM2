<?php 
    $titulo = "Inicio";
    require('includes/header.php');
?>

<main>
    <!--? slider Area Start-->
    <div class="slider-area  slider-height position-relative" data-background="assets/img/hero/h1_hero.png">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption">
                        <span>El Mejor Servicio</span>
                        <h1 data-animation="fadeInLeft" data-delay=".4s">Servicios Tecnológicos</h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">Soluciones creativas e innovadoras para hacer que tú negocio crezca.</p>
                        <!-- Hero Btn -->
                        <a href="#" class="btn"  data-animation="fadeInLeft" data-delay=".9s" >Explorar Servicios</a>
                    </div>
                    <div class="hero-img">
                        <img src="assets/img/hero/h1_hero1.png" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
        <!-- Video icon -->
        <div class="video-icon" >
            <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Services Area Start -->
    <section class="services-section section-padding30 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Nuestro Servicio</span>
                        <h2>Damos vida a las ideas combinando años de experiencias de nuestro talentoso equipo de desarrolladores.</h2>
                    </div> 
                </div>
            </div>
            <div class="services-active">
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/team1.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">App Developer</a></h3>
                            <p>The automated process starts as soon <br>as your clothes go into the machine.</p>
                            <a href="#" class="btn btn3">Pedro Mixtega Hdz.</a>
                        </div>
                    </div>
                </div>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/team2.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">Web Developer</a></h3>
                            <p>The automated process starts as soon <br>as your clothes go into the machine.</p>
                            <a href="#" class="btn btn3">C. Daritza Sartillo</a>
                        </div>
                    </div>
                </div>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/team3.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">Backend Developer</a></h3>
                            <p>The automated process starts as soon <br>as your clothes go into the machine.</p>
                            <a href="#" class="btn btn3">Jose E Mena</a>
                        </div>
                    </div>
                </div>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/team2.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">Database Developer</a></h3>
                            <p>The automated process starts as soon <br>as your clothes go into the machine.</p>
                            <a href="#" class="btn btn3">Citlalli Serrano</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Area End -->
    <!--! About Area Start 01 -->
    <section class="about-area fix">
        <!--Right Contents  -->
        <div class="about-img">
            
        </div>
        <!-- left Contents -->
        <div class="about-details">
            <div class="right-caption">
                <!-- Section Tittle -->
                <div class="section-tittle mb-50">
                    <h2>Nuestra<br>Filosofía</h2>
                </div>
                <div class="about-more">
                    <p>Es impensable una evolución en las empresas separada de Internet y las nuevas tecnologías, debido a la tendencia que se muestra la cual indica que vamos camino a una sociedad en la que los dispositivos serán tan fáciles de utilizar que pronto pasarán a formar parte del día a día de los empleados, mejorando así su calidad de vida laboral.</p>
                    <p class="pera-bottom">Utilizamos las mejores tecnologías que más se adapten a las necesidades de nuestros clientes, desarrollando un software funcional hecho a media.</p>
                    <div class="footer-tittles">
                        <p>CEO, Consultor</p>
                        <h2>J. Eduardo Mena</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End-->
    <!--! About Area Start 02-->
    <div class="about-area2">
        <!-- left Contents -->
        <div class="about-details2">
            <div class="right-caption2">
                <!-- Section Tittle -->
                <div class="section-tittle mb-50">
                    <h2>Soluciones creativas<br>hechas por expertos</h2>
                </div> 
                <!-- collapse-wrapper -->
                <div class="collapse-wrapper">
                    <div class="accordion" id="accordionExample">
                        <!-- single-one -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Starts the automated process.</a>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    The automated process starts as soon as 
                                    your clothes go into the machine. Duis cursus, mi 
                                    quis viverra ornare.                                   
                                </div>
                            </div>
                        </div>
                        <!-- single-two -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">The automated process starts.</a>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    The automated process starts as soon as 
                                    your clothes go into the machine. Duis cursus, mi 
                                    quis viverra ornare.
                                </div>
                            </div>
                        </div>
                        <!-- single-three -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Automated process starts.</a>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    The automated process starts as soon as 
                                    your clothes go into the machine. Duis cursus, mi 
                                    quis viverra ornare.
                                </div>
                            </div>
                        </div>
                        <!-- single-four -->
                        <div class="card">
                            <div class="card-header" id="headingfouree">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">Process the automated magic.</a>
                                </h2>
                            </div>
                            <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree" data-parent="#accordionExample">
                                <div class="card-body">
                                    The automated process starts as soon as 
                                    your clothes go into the machine. Duis cursus, mi 
                                    quis viverra ornare.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Right Contents  -->
        <div class="about-img2">
            <div class="info-man2">
                <div class="head-cap2">
                    <img src="assets/img/icon/quality.svg" alt="">
                    <h3>900+</h3>
                </div>
                <p>Interdum nulla, ut commodo<br>diam libero vitae erat.</p>
            </div>
            <div class="info-man2 info-man3">
                <div class="head-cap2">
                    <img src="assets/img/icon/heart.svg" alt="">
                    <h3>95%</h3>
                </div>
                <p>Interdum nulla, ut commodo<br> diam libero vitae erat.</p>
            </div>
        </div>
    </div>
    <!-- About Area End-->
    <!--? Testimonial Area Start -->
    <section class="testimonial-area testimonial-padding fix" data-background="assets/img/gallery/section_bg03.png">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class=" col-lg-9">
                    <div class="about-caption">
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Robart Brown</span>
                                        <p>Creative designer at Colorlib</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Robart Brown</span>
                                        <p>Creative designer at Colorlib</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Testimonial Area End -->
    <!-- Home Blog Start -->
    <section class="home-blog section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Case studies</span>
                        <h2>Some great stuffs we have done</h2>
                    </div> 
                </div>
            </div>
            <div class="blog-active">
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blogs1.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Starts the automated process.</a></h5>
                        <p>The automated process starts as soon as your  clothes go into the machine.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blogs2.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Starts the automated process.</a></h5>
                        <p>The automated process starts as soon as your  clothes go into the machine.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blogs3.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Starts the automated process.</a></h5>
                        <p>The automated process starts as soon as your  clothes go into the machine.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blogs2.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Starts the automated process.</a></h5>
                        <p>The automated process starts as soon as your  clothes go into the machine.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Blog End -->
    <!--? Office environment  Start-->
    <section class="office-environments section-bg2 section-padding40"  data-background="assets/img/gallery/section_bg02.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="office-pera">
                        <div class="section-tittle">
                            <h2 class="mb-30">Office <br>Environment</h2>
                            <p>The automated process starts as soon as 
                                your clothes go into the machine. Duis cursus, mi quis 
                                viverra ornare, eros dolor interdum nulla, ut commodo 
                                diam libero vitae erat. Aenean faucibus nibh et justo 
                                cursus id rutrum lorem imperdiet. Nunc ut sem vitae 
                            risus tristique posuere.</p>

                            <p>Interdum nulla, ut commodo diam libero vitae erat. 
                                Aenean faucibus nibh et justo cursus id rutrum lorem 
                            imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Office environment  End-->
    <!--? Team Ara Start -->
    <section class="team-area section-padding40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Expertos</span>
                        <h2>Nuestros Consultores</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team2.png" alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Daritza Sartillo</a></h3>
                            <p>Senior Web Developer</p>
                        </div>
                        <!-- Blog Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team1.png" alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Pedro Mixtega</a></h3>
                            <p>Senior App Developer</p>
                        </div>
                        <!-- Blog Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team4.png" alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Citlalli Serrano</a></h3>
                            <p>Senior Database Especialist</p>
                        </div>
                        <!-- Blog Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team3.png" alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">J. Eduardo Mena</a></h3>
                            <p>Senior Backend Developer</p>
                        </div>
                        <!-- Blog Social -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Ara End -->
    <!--? Want To work -->
    <section class="wantToWork-area section-bg2"  data-background="assets/img/gallery/section_bg01.png">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Need a consulting services?</h2>
                            <p>The automated process starts as soon as your clothes go into the machine. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="#" class="btn w-btn wantToWork-btn mr-20">Make an Appointment</a>
                        <a href="#" class="btn2 w-btn wantToWork-btn"><i class="fas fa-phone"></i> (89) 673 378-309</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
</main>

<?php require('includes/footer.php'); ?>