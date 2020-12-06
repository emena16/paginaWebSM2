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
                        <p data-animation="fadeInLeft" data-delay=".6s">Soluciones creativas e innovadoras que generan gran rentabilidad.</p>
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
                            <h3><a href="#">App Mobile Developer</a></h3>
                            <p>The automated process starts as soon <br>as your clothes go into the machine.</p>
                            <a href="#" class="btn btn3">Pedro Mixtega</a>
                        </div>
                    </div>
                </div>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/team2.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">Web Developer</a></h3>
                            <p>The automated process starts as soon <br>as your clothes go into the machine.</p>
                            <a href="#" class="btn btn3">Daritza Sartillo</a>
                        </div>
                    </div>
                </div>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/team3.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">Backend Developer</a></h3>
                            <p>The automated process starts as soon <br>as your clothes go into the machine.</p>
                            <a href="#" class="btn btn3">Jose E. Mena</a>
                        </div>
                    </div>
                </div>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/team2.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">SCRUM Manager</a></h3>
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
                <div class="about-more text-justify">
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
                                    <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Servicios de asesoramiento para proyectos estratégicos.</a>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Somos una empresa de servicios de asesoramiento para proyectos estratégicos, diseño y despliegue de infraestructuras de sistemas, servidores y gestión de almacenamiento.                                 
                                </div>
                            </div>
                        </div>
                        <!-- single-two -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Aportamos a las empresas soluciones completas.</a>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Nos esforzamos en ofrecer un alto grado de valor añadido en todos los proyectos en los que estamos involucrados, proponiendo soluciones eficaces que maximicen la inversión realizada.
                                </div>
                            </div>
                        </div>
                        <!-- single-three -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Más allá de las tendencias dominantes.</a>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Nuestro cometido es orientar en sus decisiones a nuestros clientes convirtiéndonos en su socio tecnológico.
                                </div>
                            </div>
                        </div>
                        <!-- single-four -->
                        <div class="card">
                            <div class="card-header" id="headingfouree">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">Queremos ser la primera opción de las empresas en su camino hacia la transformación digital.</a>
                                </h2>
                            </div>
                            <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Nuestra visión de las TI es la de un mundo en continuo cambio que brinda un gran número de oportunidades.
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
                                    <p>El vino es un portal que puede transportarnos a otro lugar y enterrarnos bajo su suelo. Es beber cultura y tradiciones del pueblo y las manos que le dieron vida.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/lz-log-neg.png" width="82px" height="82px" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Germán Molina</span>
                                        <p>CEO Lazarus Bar</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>FEPRO como impulsor de ideas es una de las joyas que ofrece a los estudiantes de la facultad de ciendias de computacion, la expericia de exponer proyectos a empresarios y pode inpulsarlos a ser lideres en el area de TI.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Yalú Galicia</span>
                                        <p>Cordinadora General de FEPRO</p>
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
                        <span>Casos de éxito</span>
                        <h2>Algunas cosas geniales que hemos hecho</h2>
                    </div> 
                </div>
            </div>
            <div class="blog-active">
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/back-lazarus.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">LAZARUS BAR.</a></h5>
                        <p>Uno de nuestros primeros clientes satisfechos por el trabajo de nuestro equipo.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/environment.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Ennvironment Monitor.</a></h5>
                        <p>Un sistema de monitoreo ambiental para pacientos con cuidados intencivos.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img width="80%" height="80%" src="assets/img/gallery/citii.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Sistema CITII BUAP 2019</a></h5>
                        <p>Sistema de gestión de asistentes e invitados al congreso con sede en BUAP.</p>
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
                            <p> Web Developer</p>
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
                            <p> App Mobile Developer</p>
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
                            <p>SCRUM Manager</p>
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
                            <p> Backend Developer</p>
                        </div>
                        <!-- Blog Social -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Ara End -->
    
</main>

<?php require('includes/footer.php'); ?>