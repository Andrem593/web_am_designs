<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>AM DESINGS | Desarrollo web a tu medida</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <a href="#intro" class="scrollto my-auto"><img src="img/logo-am.png" alt="logo am desings" class="img-fluid" ></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">inicio</a></li>
          <li><a href="#about">Sobre nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portafolio</a></li>
          <li><a href="#team">Equipo</a></li>
          {{-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> --}}
          <li><a href="#contact">Contáctanos</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/coding.png"  alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Brindamos<br><span>Soluciones</span><br>para su negocio!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Contactar</a>
          <a href="#services" class="btn-services scrollto">Nuestros servicios</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Sobre Nosotros</h3>
          <p>Somos una pequeña empresa dedicada a ofrecer soluciones tecnologicas.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              Nuestro equipo de desarrolladores está comprometido con el desarrollo de sistemas y tecnologias que sirven para mejorar los procesos internos de tu negocio, tenemos
              amplia experiencia en el desarrollo de los siguientes tipo de sistemas:
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="#">E-commerce</a></h4>
              <p class="description">Consiste en el marketing y venta de productos o servicios a través de Internet. En definitiva, se basa en la migración del comercio tradicional a Internet, pero con aspectos específicos como su logística o los medios de pago. </p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-cash-register"></i></div>
              <h4 class="title"><a href="#">Punto de Venta</a></h4>
              <p class="description">Sistema para la administración de pequeños negocios con funciones de control de inventario, ganancias, registro de ventas y compras.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="#">Aplicaciones Web</a></h4>
              <p class="description">Nos enfomas en desarrollar aplicaciones web's que cumplan con todos los requerimientos del clientes para automizar procesos dentro de su negocio.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/equipo.svg" class="w-100" alt="equipo de trabajo de AM DESINGS">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/contact.svg" class="w-100" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>¿Cómo puedo empezar a realizar mi proyecto con AM DESIGNS?</h4>
            <p>
              Puedes ponerte en contacto con nosotros por cualquiera de los siquientes medios de comunicación, y te realizaremos la cotización de forma inmediata.
            </p>
            <div class="row">
                <div class="col" style="font-size: 40px"><a class="ec-list"data-number="593967402331"
                    data-message="¡Hola! Quiero cotizar un proyecto"><i class="fab fa-whatsapp"></i></a></div>
                <div class="col" style="font-size: 40px">
                    <a href="tel:0967402331"><i class="fa fa-phone-square-alt"></i></a>
                </div>
                <div class="col" style="font-size: 40px">
                    <a href="mailto:mendoza.andres1996@gmail.com?Subject=Cotizacion%20de%20proyecto"><i class="far fa-envelope"></i></a>
                </div>
                <div class="col" style="font-size: 40px">
                    <a href="https://www.linkedin.com/in/andres-mendoza-sofware-developer/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/tecnology.svg" class="w-100" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Tecnologías con la que trabajamos para brindarte un mejor servicio.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus perspiciatis dolorem assumenda accusantium iure non quisquam cum dolores minus.
                Eligendi iusto perferendis corrupti autem, ad accusantium saepe obcaecati dolor recusandae!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos, voluptate! Deleniti repellat officiis saepe vero dignissimos sed in nisi,
                porro alias laboriosam assumenda ratione eius minima numquam autem, maxime architecto!</p>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Servicios</h3>
          <p>Conoce el catálogo de los servicios que brindamos.</p>
        </header>

        <div class="row mb-4">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fas fa-laptop-code" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="#">Aplicaciones Web's</a></h4>
              <p class="description">Ofrecemos aplicaciones desarrolladas a medida que cumplan con todos los requerimientos y funciones solicitadas por el cliente.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fas fa-mobile-alt" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="#">Aplicaciones Moviles</a></h4>
              <p class="description">Ofrecemos el desarrollo de app´s hibridas, que sean compatibles con IOS y Android usando la tecnologia de React Native o Flutter.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="#">Landing Page</a></h4>
              <p class="description"> Ofrecemos Paginas web´s de aterrizaje o informativas para dar a conocer tu negocio y sea posicionado en la red.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="#">E-Commerce</a></h4>
              <p class="description">Ofrecemos tiendas virtuales desarrolladas con WordPress, Woocomerce o Shopify para la implementación de tu negocio</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>¿Por qué elegirnos?</h3>
          <p>Te presentamos algunas de las razones por la cual elegirnos para desarrollar tu proyecto.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-user-tie"></i>
              <div class="card-body">
                <h5 class="card-title">Asesoría Personalizada</h5>
                <p class="card-text">Ofrecemos guiarte en la idea inicial de tu proyecto, para poder darte un producto final como tú lo esperas.</p>
                <a class="readmore ec-list" data-number="593967402331"
                data-message="¡Hola! quiero saber mas de ustedes">Saber más </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-headset"></i>
              <div class="card-body">
                <h5 class="card-title">Atención 24/7</h5>
                <p class="card-text">Soporte personalizado las 24 horas antes, durante y despues del desarrollo.</p>
                <a class="readmore ec-list" data-number="593967402331"
                data-message="¡Hola! quiero saber mas de ustedes">Saber más </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-dollar"></i>
              <div class="card-body">
                <h5 class="card-title">Precio Justo</h5>
                <p class="card-text">Siempre ofrecemos un MVP para que tu proyecto se ajuste a tu presupuesto y cumpla con todos tus requerimientos.</p>
                <a class="readmore ec-list" data-number="593967402331"
                data-message="¡Hola! quiero saber mas de ustedes">Saber más </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">30</span>
            <p>Clientes</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">43</span>
            <p>Proyectos</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">580</span>
            <p>Horas de Soporte</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>App´s Desarrolladas</p>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Portafolio de Servicios</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-app">App's</li>
              <li data-filter=".filter-card">E-commerce</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="Sistemas de punto de venta diseñado por AM Desings">
              <div class="portfolio-info">
                <h4><a href="#">Punto de Venta</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/goodcat.jpg" class="img-fluid" alt="Landing page de goodcat diseñada por AM Desings">
              <div class="portfolio-info">
                <h4><a href="#">Web GoodCat</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/goodcat.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/streak_am.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Sistemas de Gestión</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/streak_am.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/laterra.jpg" class="img-fluid" alt="e-commerce realizado para LATERRA por AM Desings">
              <div class="portfolio-info">
                <h4><a href="#">LATERRA</a></h4>
                <p>e-commerce</p>
                <div>
                  <a href="img/portfolio/laterra.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/propieta.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Propieta</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/propieta.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/ditribrands.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Sistema de Administración</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/ditribrands.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web_ibizza.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Ibizza</a></h4>
                <p>e-commerce</p>
                <div>
                  <a href="img/portfolio/web_ibizza.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web_PROPIETA.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Propieta</a></h4>
                <p>e-commerce</p>
                <div>
                  <a href="img/portfolio/web_PROPIETA.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Testimonios</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Carlos Rodriguez</h3>
                <h4>cliente</h4>
                <p>
                    Cuando iniciamos teníamos la convicción de que nuestra empresa se diera a conocer por medio de una página web profesional y redes sociales, con AM Designs lo hemos conseguido, gracias al soporte que nos han dado.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Mariuxi Chimbo</h3>
                <h4>cliente</h4>
                <p>
                    La experiencia ha sido muy buena ya que han sido muy atentos con nosotros, todas las preguntas que hemos hecho han sido respondidas y nos han aconsejado sobre lo que debemos hacer con nuestra página web.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Diana Alvarez</h3>
                <h4>Cliente</h4>
                <p>
                    Trabajamos con AM Designs por su atención cercana, su trato, su positivismo y su entusiasmo a la hora de hacer su trabajo. Nuestra empresa ha ingresado al mundo digital.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Johanna Garcia</h3>
                <h4>Emprendedora</h4>
                <p>
                    Hace un tiempo nos hicieron nuestra sistema web y, desde entonces, le dan mantenimiento con una profesionalidad, rapidez en los cambios y dedicación. Los felicito.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Equipo</h3>
          <p>Tenemos un gran equipo que trabaja por tus proyectos.</p>
        </div>

        <div class="row d-flex justify-content-center">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Andrés Mendoza</h4>
                  <span>Software Developer</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/andres-mendoza-sofware-developer/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/andres.software.developer/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/andrem593/"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Christian Ramos</h4>
                  <span>Software Developer</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/christian-ramos-59726b67/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/crismas06"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/andrem593/"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Genesis Vera</h4>
                  <span>Contadora</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/genesis-vera-61602b122/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/genesis.vera.169"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/andrem593/"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Nuestros Clientes</h3>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contáctanos</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127586.12305516894!2d-79.96683676208328!3d-2.1281795613302767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d13b584adec6d%3A0xe4cf0e497f3b66fe!2sAM%20DESINGS!5e0!3m2!1ses!2sec!4v1646679887869!5m2!1ses!2sec"  style="border:0; width: 100%; height: 312px;" allowfullscreen loading="lazy"></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Urbanización Toledo,Guayaquil</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>andres@amdesings.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+593 967402331</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escribenos tus comentarios aquí" placeholder="Escribenos tus comentarios aquí"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar mensaje</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
              <div class="p-2">
                  <img src="img/logo_alterno.png" alt="logo alterno am desings" class="img-fluid text-center" width="180rem">
              </div>
            <p>Somos una empresa de diseño y desarrollo web comprometida a cumplir siempre con las expectativas de los clientes.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Paginas</h4>
            <ul>
              <li><a href="#intro">Inicio</a></li>
              <li><a href="#about">Sobre nosotros</a></li>
              <li><a href="#services">Servicios</a></li>
              <li><a href="#portfolio">Portafolio</a></li>
              <li><a href="#team">Equipo</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contáctanos</h4>
            <p>
                Urbanización Toledo <br>
                Guayaquil, Guayas<br>
              Ecuador <br>
              <strong>Teléfono:</strong> +593 967402331<br>
              <strong>Email:</strong>
              andres@amdesings.com<br>
            </p>

            <div class="social-links">
              <a href="https://www.linkedin.com/in/andres-mendoza-sofware-developer/" class="twitter"><i class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.facebook.com/andres.software.developer" class="facebook"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.instagram.com/andrem593/" class="google-plus"><i class="fa-brands fa-instagram"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Nuestras Noticias</h4>
            <p>Regístrate en nuestras noticias para mantenerte al día sobre ofertas, descuentos y promociones en nuestros servicios.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Suscribirte">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>AM DESIGNS</strong>. 2022
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
