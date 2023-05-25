<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QR Viajes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-festava-live.css" rel="stylesheet">
</head>
<body>
    <main>
        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Bienvenido a Safe Journey!</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    Safe Journey
                </a>

                <a href="{{route('login')}}" class="btn custom-btn d-lg-none ms-auto me-4">Login</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Servicios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Caracteristicas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Juevos y Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Sorteos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contacto</a>
                        </li>
                    </ul>

                    <a href="{{route('login')}}" class="btn custom-btn d-lg-block d-none">Iniciar sesión</a>
                </div>
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>Seguimiento GPS y control estudiantil</small>

                        <h1 class="text-white mb-5">Seguridad y tranquilidad</h1>

                        <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <div class="date-wrap">
                            <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                Pretemporada 2024
                            </h5>
                        </div>

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                Argentina, Brasil, Chile & Uruguay
                            </h5>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/pexels-2022395.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">Safe Journey: Monitoreo de Viajes Estudiantiles</h2>
                            <p class="text-white">Safe Journey ofrece una solución integral para el control y monitoreo de
                                viajes estudiantiles. Proporcionamos a los padres la tranquilidad de estar informados sobre el
                                estado y ubicación de sus hijos durante todo el viaje.</p>
                            <h6 class="text-white mt-4">Experiencia Única para Estudiantes</h6>
                            <p class="text-white">Nuestro producto brinda a los estudiantes una experiencia inolvidable y
                                segura, con juegos, eventos y sorteos exclusivos.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="images/pexels-alexander-suhorucov-6457579.jpg" class="about-image img-fluid">
                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>
                                <div class="ms-4">
                                    <h3>Un Momento Feliz</h3>
                                    <p class="mb-0">Vive una experiencia de viaje estudiantil increíble con nosotros</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="features-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">
        
                    <div class="col-12 text-center">
                        <h2 class="mb-4">Características</h2>
                    </div>
        
                    <div class="col-lg-6 col-12">
                        <div class="feature-item">
                            <i class="feature-icon bi bi-geo"></i>
                            <h4 class="feature-title">Localización en tiempo real</h4>
                            <p class="feature-desc">Mantén un seguimiento preciso de la ubicación de los estudiantes en todo
                                momento mediante la tecnología de localización GPS.</p>
                        </div>
                    </div>
        
                    <div class="col-lg-6 col-12">
                        <div class="feature-item">
                            <i class="feature-icon bi bi-envelope"></i>
                            <h4 class="feature-title">Mailing service para padres</h4>
                            <p class="feature-desc">Envía actualizaciones periódicas sobre la ubicación de los estudiantes a los
                                padres a través de correo electrónico, brindándoles tranquilidad durante el viaje.</p>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>


        <section class="schedule-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">Juegos y Eventos</h2>
                    </div>

                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="schedule-table table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Miércoles</th>
                                        <th scope="col">Jueves</th>
                                        <th scope="col">Viernes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Día 1</th>
                                        <td class="table-background-image-wrap pop-background-image">
                                            <h3>Explorando Buenos Aires</h3>
                                            <p class="mb-2">5:00 - 7:00 PM</p>
                                            <p>Actividad por Lecf</p>
                                            <div class="section-overlay"></div>
                                        </td>
                                        <td></td>
                                        <td class="table-background-image-wrap rock-background-image">
                                            <h3>Aventura en las Cataratas del Iguazú</h3>
                                            <p class="mb-2">7:00 - 11:00 PM</p>
                                            <p>Actividad por Flight XP</p>
                                            <div class="section-overlay"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Día 2</th>
                                        <td style="background-color: #ECC9C7"></td>
                                        <td>
                                            <h3>Explorando la Naturaleza en Bariloche</h3>
                                            <p class="mb-2">6:30 - 9:30 PM</p>
                                            <p>Actividad por Christian Valverde</p>
                                        </td>
                                        <td style="background-color: #D9E3DA"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Día 3</th>
                                        <td class="table-background-image-wrap country-background-image">
                                            <h3>Aventura en Salta y Jujuy</h3>
                                            <p class="mb-2">4:30 - 7:30 PM</p>
                                            <p>Actividad por Christian Valverde</p>
                                            <div class="section-overlay"></div>
                                        </td>
                                        <td style="background-color: #D1CFC0"></td>
                                        <td>
                                            <h3>Explorando la Historia en Córdoba</h3>
                                            <p class="mb-2">6:00 - 10:00 PM</p>
                                            <p>Actividad por Sitio Web</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="pricing-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Sorteos</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>
                                    <h3><small>Rifa Early 24</small> $2500</h3>

                                    <p>Incluye cosas geniales:</p>
                                </div>

                                <p class="pricing-tag ms-auto">Ahorro <span>-50%</span></h2>
                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">Entrada para el sorteo</li>
                                <li class="pricing-list-item">Oportunidad de ganar premios increíbles</li>
                                <li class="pricing-list-item">Acceso exclusivo a contenido adicional</li>
                                <li class="pricing-list-item">Participación en experiencias interactivas</li>
                            </ul>
                            <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                                <span>Comprar</span>
                                <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="16" cy="16" r="15.5"></circle>
                                        <line x1="10" y1="18" x2="16" y2="12"></line>
                                        <line x1="16" y1="12" x2="22" y2="18"></line>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>
                                    <h3><small>Rifa Premium 24</small> $4600</h3>

                                    <p>¿Qué hace que una rifa sea premium?</p>
                                </div>
                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">Entrada para el sorteo</li>
                                <li class="pricing-list-item">Doble oportunidad de ganar premios exclusivos</li>
                                <li class="pricing-list-item">Acceso ilimitado a contenido premium</li>
                                <li class="pricing-list-item">Asistencia prioritaria al soporte técnico</li>
                                <li class="pricing-list-item">Participación en experiencias VIP</li>
                            </ul>

                            <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                                <span>Comprar</span>
                                <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="16" cy="16" r="15.5"></circle>
                                        <line x1="10" y1="18" x2="16" y2="12"></line>
                                        <line x1="16" y1="12" x2="22" y2="18"></line>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">¿Interesado? Hablemos!</h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                                role="tablist">
                                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactForm" type="button" role="tab"
                                    aria-controls="nav-ContactForm" aria-selected="false">
                                    <h5>Contact Form</h5>
                                </button>

                                <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactMap" type="button" role="tab"
                                    aria-controls="nav-ContactMap" aria-selected="false">
                                    <h5>Google Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                    role="form">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <input type="text" name="contact-name" id="contact-name"
                                                    class="form-control" placeholder="Apellido y Nombre" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email_confirm" id="email_confirm" pattern="[^ @]*@[^ @]*" class="form-control"
                                                placeholder="Confirmar Email" required>
                                        </div>
                                    </div>
                                        <input type="text" name="company" id="company"
                                            class="form-control" placeholder="Compañía de viajes" required>

                                        <textarea name="contact-message" rows="3" class="form-control"
                                            id="message" placeholder="Mensaje"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Enviar mensaje</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                                aria-labelledby="nav-ContactMap-tab">
                                <iframe class="google-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9973.935139763645!2d-58.37723076244997!3d-34.6156628931986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca0b848a9dd7%3A0x1112df6d9b03716e!2sBuenos%20Aires%2C%20Argentina!5e0!3m2!1sen!2sus!4v1670350240632!5m2!1sen!2sus"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">Safe Journey</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-apple"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Inicio</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Nosotros</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Artists</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Schedule</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Pricing</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 090-080-0760" class="site-footer-link">
                            090-080-0760
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:hello@company.com" class="site-footer-link">
                            hello@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Silang Junction South, Tagaytay, Cavite, Philippines</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                        <span>Our Maps</span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">Copyright © 2023 Safe Journey</p>
                    </div>

                    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Privacy Policy</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Your Feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>