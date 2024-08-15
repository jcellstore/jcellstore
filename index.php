<?php 
include "conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>JCELL STORE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/JCELLSTORE.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top" size="40"> JCELL STORE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#page-top">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                       
                    
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets/img/logos/rep.png');">
            <div class="container">
                <div class="masthead-subheading">JCELL STORE!</div>
                <div class="masthead-heading text-uppercase">Restaurando Dispositivos, Renovando Sonrisas</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Leer Más</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Ofrecemos servicios de reparación.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Reparaciones de celulares</h4>
                        <p class="text-muted">Reparamos de cualquier problema de tu celular, desde cambios de pantalla del hardware hasta el software.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Reparaciones de computadoras</h4>
                        <p class="text-muted">Ademas de reparación de celulares, también damos servicios de reparaciones para computadoras.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Desbloqueos</h4>
                        <p class="text-muted">Además hacemos desbloqueos de celulares.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Productos</h2>
                    
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/CEL.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Celulares</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/FUN.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fundas</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/AUDI.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Audifonos</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                                  
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/COMP.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Computadoras</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Acerca de</h2>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/logo.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>¿Quienes Somos?</h4>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Somos un negocio que ofrece servicios de reparaciones de celulares, desde cambios de pantalla hasta reparaciones del software. 
                                Contamos con profesionales y una rápidez realmente buena, hacemos reparaciones y terminamos el mismo día. 
                             No esperes más y visitanos.
                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/objetivo.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Nuestro Objetivo</h4>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nuestro Objetivo es garantizar la tranquilidad de nuestros clientes, sabiendo que estám en buenas manos y que cualquier eventualidad será atendida con prontitud y eficacia ¡Su satisfacción es nuestra prioridad! </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/ubi.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Ubicación Y Numero de Contacto</h4>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nos ubicamos en calle Hidalgo #435 colonia Centro en Reynosa, Tamaulipas con CP. 88500!
                                Llamanos o envia un mensaje al </br> Tel: 899 777 8683 
                            </p></div>
                                <a href="https://www.google.com/maps/place/C.+Hidalgo+435,+Zona+de+Tolerancia,+88500+Reynosa,+Tamps./data=!4m2!3m1!1s0x866508ccfb84b203:0xa4a5ea4f99cbbc8e?sa=X&ved=1t:242&ictx=111))">UBICACIÓN JCELL STORE </a>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/forms.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <h4>Formularios</h4>
                                
                            </div>
                            <div class="timeline-body" ><p class="text-muted">Los formularios nos ayudan a saber que tan satisfecho esta nuestro cliente con nuestros servicios y productos</p></div>
                        </div>
                    
                </ul>
            </div>
        </section>
    
        <!-- Clients-->   
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Formulario de Contacto</h2>
                    <h3 class="section-subheading text-muted">Para más información, por favor llene lo siguiente:.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->

                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Agrega tu nombre *" data-sb-validations="required" data-sb-can-submit="no">
                                <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Agrega tu correo electronico *" data-sb-validations="required,email" data-sb-can-submit="no">
                                <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un correo electronico.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Correo electronico no valido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Agrega tu telefono *" data-sb-validations="required" data-sb-can-submit="no">
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un número de telefono.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Agrega un mensaje *" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Agrega un comentario.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Gracias por enviar </div>
                            Por favor, nos gustaria que respondas el siguiente formulario:
                            <br>
                            <a href="https://form.jotform.com/241655667788880">https://form.jotform.com/241655667788880</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error de mensaje!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar</button></div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-lg-start">Copyright &copy; 2024</div>
                    <div class="col-lg-3 text-lg-start">Distribuido por JCELLSTORE</div>
                    <div class="col-lg-3 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/jcell_storee/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=61557006006241"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Politica de Privacidad</a>
                        <a class="link-dark text-decoration-none" href="#!">Terminos de Uso</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">CELULARES</h2>
                                    <p class="item-intro text-muted">Celulares a un buen precio!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/celu.jpg" alt="..." />
                                    <p>En JCELL STORE se venden celulares de cualquier marca, ya sea Apple, Samsung, Motorola, Xiaomi, entre otros, puedes ir al local para buscar tu marca favorita a un buen precio!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Todos
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Ilustración y Promoción
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar Apartado
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">FUNDAS</h2>
                                    <p class="item-intro text-muted">Para celulares y Computadoras.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/fundas.jpg" alt="..." />
                                    <p > En JCELL STORE no solo se venden telefonos celulares, si no que también de fundas y más accesorios para telefono y computadoras. Ven y prueba una exoeriencia maravillosa al buscar tu funda deseada!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Todos
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Promoción
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar Apartado
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">AUDIFONOS</h2>
                                    <p class="item-intro text-muted">Alambricos, Inalambricos y de Casco o Gamers.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/cascos.jpg" alt="..." />
                                    <p>En JCELL STORE se venden audifonos de alambricos, inalambricos y de casco. Además los precios son realmente accesibles. visita nuestro local y busca tus audifonos ideales!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Todos
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Publicidad
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar Apartado
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Computadoras</h2>
                                    <p class="item-intro text-muted">Laptops y más.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/lap.jpeg" alt="..." />
                                    <p>En JCELL STORE también se venden computadoras o laptops para uso personal o profesional, visita nuestro local para saber más!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Todos
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Publicidad
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar Apartado
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
