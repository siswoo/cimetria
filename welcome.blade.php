<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Haz parte del Primer Festival que conecta al talento TI con la industria que lo requiere.">
  <meta name="author" content="">
  <meta name="keywords" content="talentfest talent fest mintic ">
  <title>Talent Fest</title>

  <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">

  <!-- attach CSS styles -->


  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/owl.transitions.css" rel="stylesheet" />
  <link href="css/owl.carousel.css" rel="stylesheet" />
  <link href="css/owl.theme.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- <link href="css/style2.css" rel="stylesheet" /> -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .card-header {
      background-color: #f25421;
    }

    label {
      color: #000;
    }

    .form-control {
      color: #212529 !important;
    }

    .card-body {
      color: #000;
    }

    .modal-content {
      color: #000;
    }

    .modal-header {
      display: inherit;
    }

    .small-now-btn {
      background-color: #f25421;
      border-radius: 50px;
      color: #fff;
      display: inline-block;
      font-family: "Montserrat-bold";
      font-size: 10px;
      margin-left: 20px;
      padding: 10px 20px;
      text-transform: uppercase;
      border-width: 0px;
    }
  </style>
  <script>
    function sendViewVideo(slug_video, modal_display) {
      if (window.localStorage.getItem('user_id') == undefined) {
        return $('#myModal').modal('show');
      } else {
        $(`#${modal_display}`).modal('show');
        const url = 'https://www.talent-fest.com/api/UsersViewVideo';
        const data = {
          user_id: parseInt(window.localStorage.getItem('user_id')),
          slug_video: slug_video
        }
        const params = {
          headers: {
            "Content-Type": "application/json;",
            "Accept": "application/json;",
            "Access-Control-Allow-Origin": "*",
          },
          body: JSON.stringify(data),
          method: "POST"
        };

        fetch(url, params).then(function(response) {
          return response.json();
        }).then(function(data) {
          console.log(data);
        }).catch(function(error) {
          console.log(error.message);
        });
      }
    }
  </script>
</head>

<body>
  <div class="se-pre-con"></div>
  <!--  BODY PAGE CONTENT -->
  <!-- navigation panel -->
  <!-- first section - Home -->
  <section id="home" class="home drawer drawer--left drawer-close">
    <div class="banner-title">
      <!--<h1><strong>Talent Fest</strong></h1>-->

      <center>
        <a href="#">
          <img src="images/logos/logo_talent-mintic.png" width="270" alt="logo talent fest">
        </a>
      </center>

      <!-- <div class="slider-container">
        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 15
                  Noviembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Bucaramanga </span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 17
                  Noviembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Medellín</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 7
                  Diciembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Cali</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 24
                  Noviembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Tunja</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 28
                  Noviembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Ibagué</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 30
                  Noviembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Manizales</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 2
                  Diciembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Pereira</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 5
                  Diciembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Bogotá</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 7
                  Diciembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Soacha</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 13
                  Diciembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Barranquilla</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 15
                  Diciembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Cartagena</span>
              </div>
            </div>
            <div class="slide">
              <div class="event-schedule">
                <span class="event-date" id="date-event-home"><i class="fa fa-flag" aria-hidden="true"></i> 15
                  Noviembre</span>
                <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i> Bucaramanga</span>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div style="display: flex; justify-content: center; align-items: center; width: 100%; margin:1em 0 1em 0;">
        <button class="btn btn-primary open-video-live" data-toggle="modal" style="background-color: transparent; border:none; margin: 0; outline: none !important; display: flex; justify-content: center; align-items: center; flex-wrap: wrap; " data-target="#modalCharlaLive">
          <img src="images/live.png" style="width:50px;" alt="video">
          <p style="font-size: 16px; margin: 0 0 0 1em;">Revive el LIVE de lanzamiento del Talent Fest</p>
        </button>
      </div>

      <!-- <center>
        <a href="#">
          <img src="images/sponsors/logo_mintic.png" width="270" alt="logo talent fest">
        </a>
      </center> -->

      <p class="event-description" style="padding: 0 3.5em; font-family: RobotoSlab-Bold; margin: 10px 10px 20px 10px;">
        ¡Vive la experiencia Talent Fest 2022!</p>
      <p class="event-description" style="padding: 0 3.5em; font-size: 20px; margin-top: 10px; margin-bottom: 15px;">Sé parte del primer festival que conecta los mejores talentos digitales con las mejores empresas y marcas empleadoras en Colombia.
      </p>
      <!-- <div class="register-now-section">  <a href="#" class="register-now-btn">Enterate de todo <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div> -->
      <div class="top-social" style="margin-top: 0px;">
        <div class="top-social"> <a target="_blank" href="https://www.facebook.com/profile.php?id=100086894357949" class="fa fa-facebook" aria-hidden="true"></a> <a target="_blank" href="https://twitter.com/talentfestco?t=dTwsF5EhokPO7yczhj20Ug&s=08" class="fa fa-twitter" aria-hidden="true"></a> <a target="_blank" href="https://www.instagram.com/talentfestco/" class="fa fa-instagram" aria-hidden="true"> <a target="_blank" href="https://www.youtube.com/channel/UCOmF3DflohPc3c-4kV9H2qw" class="fa fa-youtube" aria-hidden="true"></a> <a target="_blank" href="https://www.linkedin.com/company/talentfestco" class="fa fa-linkedin" aria-hidden="true"></a></a>
        </div>
      </div>

      <nav class="navbar navbar-default main-menu hidden-xs menu fixed">
        <div class="container-fluid">
          <div class="header-right">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main" data-target-2=".side-collapse-container"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-main">
              <ul class="nav navbar-nav">
                @guest
                <li><a href="/">Inicio</a><span>|</span></li>
                @else
                <li><a href="/home">Inicio</a><span>|</span></li>
                @endguest
                <li><a href="#talent-fest-talks">Talent Talks</a><span>|</span></li>
                <li><a href="#talent-fest-tour">Talent Tour</a><span>|</span></li>
                <li><a href="https://www.talent-fest.com/empresas/">Empresas</a><span>|</span></li>
                <li><a href="/vacants">Vacantes</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="mobile-menu hidden-sm hidden-md hidden-lg">
        <div class="drawer-container">
          <div class="drawer-navbar-header">
            <button type="button" onclick="menuFunction()" class="drawer-toggle drawer-hamburger"> <span class="sr-only">toggle navigation</span> <span class="drawer-hamburger-icon"></span> </button>
          </div>
          <nav class="drawer-nav">
            <div class="header-left">
              <p class="no-margin"><strong style="color:white;">Talent Fest</strong></p>
            </div>
            <ul class="drawer-menu">
              <li><a href="/" class="drawer-menu-item">Inicio</a></li>
              <li><a href="#talent-fest-talks" class="drawer-menu-item">Talent Talks</a></li>
              <li><a href="#talent-fest-tour" class="drawer-menu-item">Talent Tour</a></li>
              <li><a href="/empresas" class="drawer-menu-item">Empresas</a></li>
              <li><a href="/vacants" class="drawer-menu-item">Vacantes</a></li>
            </ul>
          </nav>
        </div>
      </div>
  </section>
  <!-- /first section -->

  <div id="elements" style="padding: 10px 0 ; background-color: #f2f2f2; display:flex; align-items:center; justify-content:center;">
    <img src="images/sponsors/logo_mintic.jpg" width="280" style="margin: 0;" alt="MinTIC">
  </div>

  <section id="about" class="about-us" style="padding-top: 70px; padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12" style="text-align:center;">
          <p class="block-title" style="font-family: Montserrat-SemiBold;"><strong style="font-family: Montserrat-SemiBold;">TALENT </strong> Fest</p>
          <!--<h3>¿Qué es Talent Fest?</h3>-->
          <p>Talent Fest 2022 es el primer festival de empleabilidad y conexión de talentos digitales con empresas y marcas empleadoras. Una iniciativa liderada por el Ministerio de Tecnologías de Información y Comunicaciones (MinTIC), Tecnalia y CYMETRIA #TalentMakers.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="annual-conference-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <figure class="video-bg-sec">
            <img src="images/bg-video.jpg" alt="video-bg">
            <figcaption>
              <button class="btn btn-primary test-close-video" data-toggle="modal" data-target="#exampleModalLong">
                <img src="images/video.png" alt="video">

              </button>

            </figcaption>
          </figure>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="video-info">
            <h3>¡Llegó a Colombia el primer festival de talentos digitales!<br></h3>
            <hr>
            <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
            line-height: 28px;">• Participa en todas las actividades virtuales.</p>

            <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
            line-height: 28px;">• Asiste a los eventos en tu ciudad (cupos limitados).</p>

            <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
            line-height: 28px;">• Suma puntos y descarga el kit.</p>


            <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
            line-height: 28px;">• Vive la experiencia Talent Fest 2022.</p>
            <!-- <ul class="view-btns">
                      <li><a href="#our-speakers-sec" class="view button--antiman  button--inverted-alt">View Speakers</a></li>
                      <li><a href="#event-schedule-sec" class="view button--antiman  button--inverted-alt">View schedule</a></li>
                  </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="our-conference-sec" style="padding-bottom: 0;">
    <div class="conference-heading-bg white-heading">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- <span style="color: black; font-family: Montserrat-SemiBold;">Beneficios</span> -->
            <h2 font-family: Montserrat-SemiBold;">Talent Fest 2022 te trae muchos beneficios:
            </h2>
            <hr>
          </div>
        </div>
      </div>
    </div>
    <div class="conference-list-bg">
      <div class="container">
        <div class="row">

          <div class="confrence-bg">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 confrence-col">
                <div class="confrence-col-inn">
                  <div class="confrence-title">
                    <i class="fa fa-check icon-box" aria-hidden="true"></i>
                    <h3 class="subtitle-beneficios" style="color: black; font-family: Montserrat-SemiBold;">Acceso a charlas de alto valor
                    </h3>
                  </div>
                  <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
                              line-height: 28px;">Podrás acceder a los videos de "talent talks" sobre habilidades blandas y tips para insertarse rápidamente en el mundo laboral. Suma puntos y recibe beneficios.</p>
                </div>
              </div>



              <div class="col-lg-6 col-md-6 col-sm-6 confrence-col">
                <div class="confrence-col-inn">
                  <div class="confrence-title">
                    <i class="fa fa-check icon-box" aria-hidden="true"></i>
                    <h3 class="subtitle-beneficios" style="color: black; font-family: Montserrat-SemiBold;">Acceso a vacantes laborales</h3>
                  </div>
                  <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
                              line-height: 28px;">Nuestras marcas empleadoras publican las mejores ofertas laborales de la industria nacional e
                    internacional. Envía tu hoja de vida, suma puntos y recibe beneficios.</p>
                </div>
              </div>


              <div class="col-lg-6 col-md-6 col-sm-6 confrence-col">
                <div class="confrence-col-inn">
                  <div class="confrence-title">
                    <i class="fa fa-check icon-box" aria-hidden="true"></i>
                    <h3 class="subtitle-beneficios" style="color: black; font-family: Montserrat-SemiBold;">Networking profesional</h3>
                  </div>
                  <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
                              line-height: 28px;">Podrás realizar networking, no solo con las mejores empresas sino también con otros talentos como tú. Síguenos en nuestras redes sociales.</p>
                </div>
              </div>


              <div class="col-lg-6 col-md-6 col-sm-6 confrence-col">
                <div class="confrence-col-inn">
                  <div class="confrence-title">
                    <i class="fa fa-check icon-box" aria-hidden="true"></i>
                    <h3 class="subtitle-beneficios" style="color: black; font-family: Montserrat-SemiBold; ">Kit de búsqueda laboral </h3>
                  </div>
                  <p style="color: #565656; font-family: Montserrat-Light;     font-size: 16px;
                              line-height: 28px;">Con solo 100 puntos tendrás acceso al kit de búsqueda laboral el cual te dará otras pautas y
                    recursos invaluables para encontrar el empleo de tus sueños.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- /second section -->

  <section id="speakers" class="speakers" style="padding-bottom: 40px;">
    <div class="container" id="talent-fest-talks">
      <div class="row">
        <h2 class="block-title" style="margin-bottom:10px;"><strong style="font-family: Montserrat-SemiBold;">Talent Talks</strong></h2>
        <p style="font-size: 18px; text-align:center; color:rgba(8,55,95,1); margin-bottom: 2em;">En Talent Talks encontrarás contenidos de alto valor para tu inserción laboral. Aprende las habilidades del futuro que te permitirán ser un profesional 10/10. Además suma puntos y descarga el kit de búsqueda laboral.</p>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block speaker-block-active"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/talks/JhonatanLopez.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 12px;">Construye tu perfil PRO en LinkedIn</span> <span class="speaker-designation">Jhonatan Andrés López</span>
              <p class="speaker-meta">Aprenderás a usar tu perfil de LinkedIn como una poderosa herramienta de conexión laboral.</p>
              <div class="social-meta">
                <a href="#modalCharlaJhonatan" class="modalCharlaJhonatan" onclick="sendViewVideo('Talk_1', 'modalCharlaJhonatan')"><i class="fa fa-play-circle open-video-jhonatan" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block speaker-block-active"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/talks/LuisAntonio.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 10.5px;">Entendiendo la industria digital y los empleos del futuro</span> <span class="speaker-designation">Luis Antonio Martínez</span>
              <p class="speaker-meta">Hablaremos de tendencias, industria y como ser un profesional con autogestión en el mundo digital.</p>
              <div class="social-meta">
                <a href="#modalCharlaLuis" class="modalCharlaLuis" onclick="sendViewVideo('Talk_2', 'modalCharlaLuis')"><i class="fa fa-play-circle open-video-luis" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block speaker-block-active"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/talks/RuthArroyo.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 11.5px;">Inteligencia emocional y resiliencia</span> <span class="speaker-designation">Ruth Arroyo</span>
              <p class="speaker-meta">Inteligencia emocional y resiliencia.</p>
              <div class="social-meta">
                <a href="#Talk_6" class="Talk_6" onclick="sendViewVideo('Talk_3', 'modalCharlaRuth')"><i class="fa fa-play-circle open-video-ruth" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block speaker-block-active"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/talks/JessicaRueda.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 12px;">Productividad y gestión del tiempo</span> <span class="speaker-designation">Jessica Rueda</span>
              <p class="speaker-meta">Productividad y gestion del tiempo.</p>
              <div class="social-meta">
                <a href="#Talk_4" class="Talk_4" onclick="sendViewVideo('Talk_4', 'modalCharlaJessica')"><i class="fa fa-play-circle open-video-jessica" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block speaker-block-active"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/talks/SandraTrujillo.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 11.5px;">Adaptabilidad y resolucion de problemas</span><span class="speaker-designation">Sandra Trujillo</span>
              <p class="speaker-meta">Adaptabilidad y resolucion de problemas.</p>
              <div class="social-meta">
                <a href="#Talk_3" class="Talk_3" onclick="sendViewVideo('Talk_5', 'modalCharlaSandra')"><i class="fa fa-play-circle open-video-sandra" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block speaker-block-active"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/talks/MauricioBenavides.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 12px; margin-bottom:10px;">Comunicación efectiva y asertiva</span> <span class="speaker-designation">Mauricio Benavides</span>
              <p class="speaker-meta">Comunicación efectiva y asertiva.</p>
              <div class="social-meta">
                <a href="#Talk_5" class="Talk_5" onclick="sendViewVideo('Talk_6', 'modalCharlaMauricio')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block speaker-block-active"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/talks/JhonatanLopez.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 12px;">Consigue el empleo de tus sueños</span> <span class="speaker-designation">Juan Maldonado</span>
              <p class="speaker-meta">Obten los conocimientos necesarios en Full Stack.</p>
              <div class="social-meta">
                <a href="#modalCharlaJuanMaldonado" class="modalCharlaJuanMaldonado" onclick="sendViewVideo('Talk_7', 'modalCharlaJuanMaldonado')"><i class="fa fa-play-circle open-video-juanmaldonado" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/proximamente.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 12px;">Cómo realizar un pitch para empleabilidad</span> <span class="speaker-designation">Talk 8</span>
              <p class="speaker-meta">Cómo realizar un pitch para empleabilidad</p>
              <!-- <div class="social-meta">
                <a href="#modalCharlaLuis" onclick="sendViewVideo('Talk_8', 'exampleModalLong')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              </div> -->
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/proximamente.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 12px;">Pensamiento crítico y toma de decisiones</span> <span class="speaker-designation">Talk 9</span>
              <p class="speaker-meta">Pensamiento crítico y toma de decisiones.</p>
              <!-- <div class="social-meta">
                <a href="#modalCharlaLuis" onclick="sendViewVideo('Talk_9', 'exampleModalLong')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              </div> -->
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/proximamente.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 12px;">Trabajo en Equipo</span> <span class="speaker-designation">Talk 10</span>
              <p class="speaker-meta">Comunicación efectiva y asertiva.</p>
              <!-- <div class="social-meta">
                <a href="#modalCharlaLuis" onclick="sendViewVideo('Talk_10', 'exampleModalLong')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              </div> -->
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6" style="min-height: 397.77px !important; max-height: 397.77px !important;">
          <div class="speaker-block"> <img style="box-shadow: 0px 0px 17px -1px rgba(8,55,95,1);" src="images/proximamente.jpg" alt="Event Premium" class="img-responsive">
            <div class="speaker-details"> <span class="speaker-name" style="font-size: 12px;">Construcción de portafolio de Github</span> <span class="speaker-designation">Talk 11</span>
              <p class="speaker-meta">Construcción de portafolio de Github.</p>
              <!-- <div class="social-meta">
                <a href="#modalCharlaLuis" onclick="sendViewVideo('Talk_11', 'exampleModalLong')"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- <p class="text-center"><a href="speakers.html" class="register-now-btn styles-button">Speakers Styles <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p> -->
    </div>
  </section>

  <section id="schedule" class="schedule" style="padding-top:50px; padding-bottom: 70px;">
    <div class="container" id="talent-fest-tour">
      <div class="row">
        <div class="col-sm-12">
          <p class="block-title" style=" margin-bottom: 0.3em;"><strong style="font-family: Montserrat-SemiBold;">Talent Tour</strong></p>
          <p style="text-align: center; font-size:18px;">Vive la experiencia Talent Fest 2022. Asiste a los eventos presenciales en todo el país. Conecta con las mejores empresas/marcas empleadoras y otros talentos tech. Selecciona tu ciudad e inscríbete (cupos limitados). </p>
          <ul class="nav nav-tabs cities-btn">
            <li class="active"><a data-toggle="tab" href="#menu0">Bogotá</a></li>
            <li><a data-toggle="tab" href="#menu2">Medellín</a></li>
            <li><a data-toggle="tab" href="#menu3">Cali</a></li>
            <li><a data-toggle="tab" href="#menu4">B/quilla</a></li>
            <li><a data-toggle="tab" href="#menu5">B/manga</a></li>
            <li><a data-toggle="tab" href="#menu6">Cartagena</a></li>
            <li><a data-toggle="tab" href="#menu7">Manizales</a></li>
            <li><a data-toggle="tab" href="#menu8">Pereira</a></li>
            <li><a data-toggle="tab" href="#menu9">Ibagué</a></li>
            <li style="border-right:none;"><a data-toggle="tab" href="#menu10">Tunja</a></li>
            <li><a data-toggle="tab" href="#menu11">Soacha</a></li>
          </ul>
          <div class="tab-content">
            <div id="menu0" class="tab-pane fade active in">
              <div class="speakers-list">
                <div class="col-sm-3  col-xs-12  left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-bogota.jpg" alt="Event Premium" class="img-responsive"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453906415307" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="#" class="fa fa-facebook" aria-hidden="true"></a> <a href="#" class="fa fa-twitter" aria-hidden="true"></a> <a href="#" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9  col-xs-12 ">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Bogotá DC</h3>
                    <p class="topic-description">En Bogotá se sentirán truenos cargados de innovación. La ciudad capital será sede del Talent Tour, uno de los eventos más esperados por talentos digitales y marcas empleadoras.
                    </p>
                    <div class="speaker-schedule">
                      <div style="display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 5 diciembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am -
                          5:00pm</span>
                      </div>
                      <div style="display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Cámara de Comercio de Bogotá - Av. El Dorado # 68d -35, (Sede Salitre) </span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu2" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-medellin.jpg" alt="Event Premium" class="img-responsive"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-446124750137" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a></a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Medellín</h3>
                    <p class="topic-description">La ciudad más innovadora de Colombia es una de las ciudades elegidas para conectar talentos digitales con las empresas más importantes de la región en el Talent Tour. </p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 17 noviembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 7:30am -
                          3:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> C4TA, Ciudadela de
                          Cuarta Revolución Industrial</span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu3" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-cali.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453874860927" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Cali</h3>
                    <p class="topic-description">En Cali no solo se baila salsa, también se disfruta con tecnología e innovación. Por eso será una de las sedes del Talent Tour. ¡Agéndate!</p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 7 diciembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 7:30am -
                          2:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Auditorio Centro Cultura Comfandi, Cl 8 # 6-23, Cali, Valle.</span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu4" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-barranquilla.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453859685537" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Barranquilla</h3>
                    <p class="topic-description">“Curramba la bella” ahora no solo celebra su carnaval, también el festival de talento tecnológico más importante del país. ¡Agéndate!</p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 13 diciembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am -
                          2:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Sena - Cl. 39 #50-89 </span>
                      </div>
                      <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="menu5" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-bucaramanga.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453869234097" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Bucaramanga</h3>
                    <p class="topic-description">La ciudad bonita es otra de las sedes del Talent Tour. La hermosa ciudad de los parques se vestirá de tecnología para una cita entre talentos digitales y empresarios de la región.</p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 15 noviembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am -
                          5:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Cámara de Comercio de Bucaramanga - Cra. 19 # 36-20 </span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu6" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-cartagena.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453880828777" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Cartagena</h3>
                    <p class="topic-description">“La Heroica”, ciudad de grandes eventos, será una de las sedes del gran Talent Tour. Todo el talento digital de la región se conectará con las empresas que los requieran.
                    </p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 15 diciembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am -
                          5:00pm</span>

                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Casa del Marqués - Cra. 3 # 36 - 57 </span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu7" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-manizales.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453890337217" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic ">Manizales</h3>
                    <p class="topic-description">En Manizales se abrirán las puertas para los desarrolladores de software, programadores y talentos digitales que quieren conectar con las empresas de su región para hacer proyectos innovadores. ¡Regístrate ya!</p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 30 noviembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am -
                          5:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Cámara de Comercio de Manizales, Cra 23 # 26 - 60 </span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu8" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-pereira.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453897277977" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Pereira</h3>
                    <p class="topic-description">La capital del Eje Cafetero no solo huele a café, también a tecnología. Por eso, los miles de talentos digitales de la región mostrarán sus capacidades durante el Talent Tour. ¡Prográmate!</p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 2 diciembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am -
                          5:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Teatro de Bellas Artes de Risaralda - Cl. 27 #10-02 </span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu9" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-ibague.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453888210857" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Ibagué</h3>
                    <p class="topic-description">La ciudad musical de Colombia albergará al talento digital y a las empresas que quieren conectar con ellos para cubrir sus necesidades. Inscríbete ahora. </p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 28 noviembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 1:00pm -
                          5:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Cámara de Comercio de Ibagué - Calle 10 # 3 -76 </span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu10" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-tunja.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-453909745267" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Tunja</h3>
                    <p class="topic-description">De ser la cuna de la independencia, a ser una de las ciudades con mayor
                      proyección de talentos tecnológicos. Por eso, esta ciudad será protagonista en el Talent Fest
                      Tour. Reserva tu cupo. </p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 22 noviembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am -
                          3:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Centro de Convenciones de Tunja - Calle 35 # 10-09 </span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="menu11" class="tab-pane fade">
              <div class="speakers-list">
                <div class="col-sm-3 col-xs-12 left-section">
                  <div class="col-sm-12 col-xs-12">
                    <div class="img-section"> <img src="images/imgs-cities/city-round-image-soacha.jpg" class="img-responsive" alt="Event Premium"> </div>
                    <div class="speaker-social">
                      <a style="text-decoration: none;" href="https://www.eventbrite.co/e/talent-fest-2022-tickets-461366117477" target="_blank" class="link-event">
                        <span class="speaker-loaction">
                          <i class="fa fa-link" style="color: white;" aria-hidden="true"></i>
                          Registro al evento
                        </span>
                      </a>
                    </div>
                    <!-- <div class="speaker-social"> <a href="" class="fa fa-facebook" aria-hidden="true"></a> <a href="" class="fa fa-twitter" aria-hidden="true"></a> <a href="" class="fa fa-linkedin" aria-hidden="true"></a> </div> -->
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="col-sm-12 col-xs-12 cities-mod">
                    <h3 class="speaker-topic">Soacha</h3>
                    <p class="topic-description">Un municipio que crece a pasos de gigante, así es Soacha, y será una de las sedes del Talent Tour. Regístrate para participar con tu talento y conectar con las empresas de Cundinamarca.</p>
                    <div class="speaker-schedule">
                      <div style=" display:flex; justify-content:center;">
                        <span class="speaker"><i class="fa fa-calendar" aria-hidden="true"></i> 9 diciembre </span>
                        <span class="speaker-timing"><i class="fa fa-clock-o" aria-hidden="true"></i> 8:00am -
                          5:00pm</span>
                      </div>
                      <div style=" display:flex; justify-content:center; margin-top:0.5em;">
                        <span class="speaker-loaction"><i class="fa fa-map-marker" aria-hidden="true"></i> Coliseo General Santander</span>
                      </div>
                    </div>
                    <!-- <div class="register-now-section download-container-btn">  <a download href="./downloads/Logo-Talent-Fest.png" class="register-now-btn download-btn">Descargar Agenda</a> </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <p class="text-center"><a href="schedules.html" class="register-now-btn styles-button">Schedules Styles <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </p> -->
    </div>
  </section>

  <!-- second section - About -->
  <section id="conference" class="conference">
    <div class="container">
      <div class="row">
        <!--<h2><strong> Indicadores</strong></h2>-->
        <div class="count-down col-sm-12 col-sm-12 col-xs-12">
          <p class="count-down-description">Únete a nuestras charlas y eventos híbridos en todo el país.</p>
          <div class="row">
            <div class="col-sm-12 col-sm-12 col-xs-12">
              <div class="count-day"><span class="count-number">10</span><span class="count-label">ciudades</span></div>
              <div class="count-day"><span class="count-number">11</span><span class="count-label">eventos</span></div>
              <div class="count-day"><span class="count-number">110</span><span class="count-label">empresas</span></div>
              <div class="count-day"><span class="count-number">14000</span><span class="count-label">participantes</span></div>
            </div>
          </div>
          <!-- <p class="count-down-description">Únete a nuestros eventos híbridos en todo el país. </p> -->
          <a href="#talent-fest-talks" class="register-now-btn">Talent Talks <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          <a href="#talent-fest-tour" class="register-now-btn">Talent Tour <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
  </section>

  <section id="about" class="about-us" style="padding-top: 70px; padding-bottom:10px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12" style="text-align:center;">
          <p class="block-title"><strong style="font-family: Montserrat-SemiBold;">Kit Talent Fest</strong></p>
          <h3>¿Qué es el Kit de Búsqueda Laboral?</h3>
          <p style="font-size: 20px; max-width:500px; margin: 0 auto;">Es una guía práctica con herramientas y consejos para que puedas alcanzar el éxito en tu proceso de vinculación laboral. Incluye sorpresas y beneficios de nuestros aliados. Participa activamente en todas nuestras actividades virtuales, presenciales, suma puntos y descarga tu kit.
          </p>
          <div class="register-now-section"> <a href="https://www.talent-fest.com/kit" class="register-now-btn">QUIERO EL KIT</a> </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sponsors white" style="padding-bottom: 70px; padding-top: 60px;">
    <div class="container">
      <div class="row">
        <h2 class="block-title" style="margin-bottom:25px;"><strong style="font-family: Montserrat-SemiBold;">Aliados</strong></h2>
        <!-- <h2 class="block-title"><strong style="font-family: Montserrat-SemiBold; margin-bottom: 30px; font-size: 22px;">EMPRESAS INNOVADORAS Y MARCAS EMPLEADORAS</strong></h2> -->
        <!-- <small class="column">Aliados</small> -->
        <div style="display: flex; flex-wrap:wrap; justify-content:center;">
          <button onclick="onClickShowEmpresas()" style="border: 2px solid #08375F; margin-bottom:1em; margin-left:0; padding:10px 20px; font-size:14px;" class="register-now-btn">Empresas</i></button>
          <button onclick="onClickShowPlataformasEmpleo()" style="border: 2px solid #08375F; margin-bottom:1em; padding:10px 20px; font-size:14px;" class="register-now-btn">Plataformas de Empleo</i></button>
          <button onclick="onClickShowInstituciones()" style="border: 2px solid #08375F; margin-bottom:1em; padding:10px 20px; font-size:14px;" class="register-now-btn">Institucionales</i></button>
          <button onclick="onClickShowClusters()" style="border: 2px solid #08375F; margin-bottom:1em; padding:10px 20px; font-size:14px;" class="register-now-btn">Cluster TI</i></button>
          <button onclick="onClickShowUniversidades()" style="border: 2px solid #08375F; margin-bottom:1em; padding:10px 20px; font-size:14px;" class="register-now-btn">Universidades</i></button>
        </div>
        <!-- <small class="column">Aliados</small> -->
        <div>
          <div id="show-empresas">
            <!-- <h2 class="block-title"><strong style="font-family: Montserrat-SemiBold; margin-bottom: 30px; font-size: 22px;">EMPRESAS INNOVADORAS Y MARCAS EMPLEADORAS</strong></h2> -->
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item" style="width: 33%;"> <img class="img-aliados" src="images/sponsors/logos-aliados/Empresas/aliado-globant.png" alt="Creative Graphic Unique" class="img-responsive">
              </div>
              <!-- <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Empresas/amazoncolor.png" alt="Graphic Design Genuine" class="img-responsive"> </div> -->
              <div class="col-sm-3 col-xs-3 logo-item" style="width: 33%;"> <img class="img-aliados" src="images/sponsors/logos-aliados/Empresas/aliado-claro.png" alt="Creative Special" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item" style="width: 33%;"> <img class="img-aliados" src="images/sponsors/logos-aliados/Empresas/ceibacolor.png" alt="Creative Graphic Unique" class="img-responsive"> </div>

            </div>
            <div class="sponsors-logo" style="border-bottom:none;">
              <div class="col-sm-3 col-xs-3 logo-item" style="width: 50%;"> <img class="img-aliados" src="images/sponsors/logos-aliados/Empresas/daviviendacolor.png" alt="Creative Design Special" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item" style="width: 50%;"> <img class="img-aliados" src="images/sponsors/logos-aliados/Empresas/aliado-stefanini.png" alt="Creative Graphic" class="img-responsive">
              </div>
              <!-- <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Empresas/aliado-rappi.png" alt="Event Premium" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Empresas/aliado-scotiabank.png" alt="Creative Design Special" class="img-responsive">
              </div> -->
            </div>
          </div>
          <div id="show-plataformas" class="show-empresas-deactivated">
            <!-- <h2 class="block-title" style="margin-top:50px;"><strong style="font-family: Montserrat-SemiBold; margin-bottom: 30px; font-size: 22px; ">Plataformas de Empleo</strong></h2> -->
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Plataformas-de-empleo/torre.co.png" alt="Creative Design Special" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Plataformas-de-empleo/serviciodeempleocolor.png" alt="Creative Graphic" class="img-responsive">
              </div>

              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Plataformas-de-empleo/colsubsidiocolor.png" alt="Graphic Design Genuine" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Plataformas-de-empleo/elempleocolor.png" alt="Creative Special" class="img-responsive"> </div>

            </div>
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Plataformas-de-empleo/machaelpagecolor.png" alt="Creative Design Special" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Plataformas-de-empleo/imukocolor.png" alt="Creative Graphic Unique" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Plataformas-de-empleo/talentpitchcolor.png" alt="Event Premium" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Plataformas-de-empleo/alstracolor.png" alt="Creative Graphic Unique" class="img-responsive"></div>
            </div>
          </div>
          <div id="show-instituciones" class="show-empresas-deactivated">
            <!-- <h2 class="block-title" style="margin-top:50px;"><strong style="font-family: Montserrat-SemiBold; margin-bottom: 30px; font-size: 22px; ">Instituciones</strong></h2> -->
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Institucionales/camaracomerciobogotacolor.png" alt="Creative Graphic Unique" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item" > <img class="img-aliados" src="images/sponsors/logos-aliados/Institucionales/camaratunjacolor.png" alt="Event Premium" class="img-responsive">
              </div>
              
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Institucionales/camarabucaramanga.png" alt="Graphic Design Genuine" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Institucionales/camaradecomerciocali_color.png" alt="Creative Special" class="img-responsive"> </div>

            </div>
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item" > <img class="img-aliados" src="images/sponsors/logos-aliados/Institucionales/camaradecomerciomanizalescolor.png" alt="Creative Design Special" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item" > <img class="img-aliados" src="images/sponsors/logos-aliados/Institucionales/camaraibaguecolor.png" alt="Creative Graphic" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Institucionales/mantix.png" alt="Creative Design Special" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Institucionales/alcaldiamedellincolor.png" alt="Creative Graphic Unique" class="img-responsive">
              </div>

            </div>
          </div>
          <div id="show-clusters" class="show-empresas-deactivated">
            <!-- <h2 class="block-title" style="margin-top:50px;"><strong style="font-family: Montserrat-SemiBold; margin-bottom: 30px; font-size: 22px; ">Cluster</strong></h2> -->
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Cluster-TI/clsterbogotacolor.png" alt="Graphic Design Genuine" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Cluster-TI/caribeticcolor.png" alt="Creative Graphic Unique" class="img-responsive">
              </div>

              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Cluster-TI/Clustersantandercolor.png" alt="Creative Special" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Cluster-TI/sumertic.jpg" alt="Creative Graphic Unique" class="img-responsive"> </div>
            </div>
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Cluster-TI/intersoftwearcolor.png" alt="Creative Design Special" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Cluster-TI/mantixcolor.png" alt="Creative Graphic" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Cluster-TI/pacificcolor.png" alt="Event Premium" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Cluster-TI/sinecticcolor.png" alt="Creative Design Special" class="img-responsive">
              </div>
            </div>
          </div>
          <div id="show-universidades" class="show-empresas-deactivated">
            <!-- <h2 class="block-title" style="margin-top:50px;"><strong style="font-family: Montserrat-SemiBold; margin-bottom: 30px; font-size: 22px; ">Universidades</strong></h2> -->
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Universidades/UniversidaddeAntioquiacolor.png" alt="Creative Graphic Unique" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Universidades/UniversidadUIScolor.png" alt="Creative Design Special" class="img-responsive">
              </div>

              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Universidades/nachocolor.png" alt="Graphic Design Genuine" class="img-responsive"> </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Universidades/unabcolor.png" alt="Creative Special" class="img-responsive"> </div>

            </div>
            <div class="sponsors-logo">
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Universidades/ininortebarranquillacolor.png" alt="Creative Graphic Unique" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Universidades/utpcolor.png" alt="Creative Graphic" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Universidades/UniversidadTecnológicadeBolivarcolor.png" alt="Event Premium" class="img-responsive">
              </div>
              <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados" src="images/sponsors/logos-aliados/Universidades/universidaddecaldascolor.png" alt="Creative Design Special" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
        <!-- 
        <h2 class="block-title" style="margin-top:50px;"><strong style="font-family: Montserrat-SemiBold; margin-bottom: 30px; font-size: 22px; ">INSTITUCIONES</strong></h2>
        <div class="sponsors-logo">
          <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados"
              src="images/sponsors/logos-aliados/aliado-claro.png" alt="Creative Graphic Unique" class="img-responsive">
          </div>
          <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados"
              src="images/sponsors/logos-aliados/aliado-globant.png" alt="Graphic Design Genuine"
              class="img-responsive"> </div>
          <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados"
              src="images/sponsors/logos-aliados/aliado-itau.png" alt="Creative Special" class="img-responsive"> </div>
          <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados"
              src="images/sponsors/logos-aliados/aliado-microsoft.png" alt="Creative Graphic Unique"
              class="img-responsive"> </div>
        </div>
        <div class="sponsors-logo">
          <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados"
              src="images/sponsors/logos-aliados/aliado-rappi.png" alt="Creative Design Special" class="img-responsive">
          </div>
          <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados"
              src="images/sponsors/logos-aliados/aliado-scotiabank.png" alt="Creative Graphic" class="img-responsive">
          </div>
          <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados"
              src="images/sponsors/logos-aliados/aliado-stefanini.png" alt="Event Premium" class="img-responsive">
          </div>
          <div class="col-sm-3 col-xs-3 logo-item"> <img class="img-aliados"
              src="images/sponsors/logos-aliados/aliado-visa.png" alt="Creative Design Special" class="img-responsive">
          </div>
        </div> -->
      </div>
      <div class="row" style="display: flex; align-items: center; margin-top: 3em; justify-content: center;">
        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="footer-right hidden-xs" style="color:#08375F">
            <p style="margin: 0; font-family: Montserrat-Light; font-size: 18px;">Para ser aliado de Talent Fest, escríbenos al correo <strong>aliados@talent-fest.com</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="about" class="about-us" style="padding-top: 70px; padding-bottom:10px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12" style="text-align:center;">
          <p class="block-title"><strong style="font-family: Montserrat-SemiBold;">EMPRESAS</strong></p>
          <h3>¿Buscas talento para tus proyectos?</h3>
          <p style="font-size: 20px; max-width:500px; margin: 0 auto;">En Talent Fest 2022 encontrarás cientos de talentos
            tecnológicos en nuestros eventos presenciales. Registra tus ofertas laborales y nos encargaremos de conectarte con
            el mejor talento de Colombia.
          </p>
          <div class="register-now-section"> <a href="https://www.talent-fest.com/empresas" class="register-now-btn">Más
              info</a> </div>
        </div>
      </div>
    </div>
  </section>

  <section id="testiominal" class="testiominals" style="padding-top: 50px; padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <p class="block-title"><strong style="font-family: Montserrat-SemiBold;">Testimonios</strong></p>
          <!-- <h3>What People Say About Our Last Event Camp Premium.</h3> -->
          <div class="owl-testimonial">
            <div class="inner-testimonial">
              <div class="tm-tagline"> <i class="fa fa-quote-left" style="color: #08375F;" aria-hidden="true"></i>
                <span> La programación me cambió la vida, gracias a Javascript he logrado viajar, conocer otros paises y crecer profesionalmente.</span>
                <!-- <img src="./images/01_1.jpg" alt=""> -->
              </div>
              <div class="tm-userinfo">
                <div class="tm-userimg"> <img src="images/testimonios/jeronimo.png" alt="testimonial" /> </div>
                <div class="tm-userbio">
                  <h4 class="tm-title">Jerónimo Velásquez</h4>
                  <p class="tm-designation">Programador en Glovo España</p>
                  <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 10/22</span>
                </div>
              </div>
            </div>
            <div class="inner-testimonial">
              <div class="tm-tagline"> <i class="fa fa-quote-left" style="color: #08375F;" aria-hidden="true"></i>
                <span> Encontrar talento se ha vuelto todo un reto para las empresas. En Qualitas Team hemos apostado por los
                  talentos formados por el Ministerio TIC.</span>
              </div>
              <div class="tm-userinfo">
                <div class="tm-userimg"> <img src="images/testimonial-2.png" alt="testimonial" /> </div>
                <div class="tm-userbio">
                  <h4 class="tm-title">Mercedes Quintero</h4>
                  <p class="tm-designation">CEO Qualitas Team</p>
                  <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/22</span>
                </div>
              </div>
            </div>
            <!--
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-1.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title"> Kevin Ten</h4>
                <p class="tm-designation">Founder of Realten inc.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/01</span> </div>
            </div>
          </div>
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-2.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title"> Sara Pearson</h4>
                <p class="tm-designation">Founder of Realten inc.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/01</span> </div>
            </div>
          </div>
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-1.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title"> Kevin Ten</h4>
                <p class="tm-designation">Founder of Realten inc.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/01</span> </div>
            </div>
          </div>
          <div class="inner-testimonial">
            <div class="tm-tagline"> <i class="fa fa-quote-left" aria-hidden="true"></i> <span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</span> </div>
            <div class="tm-userinfo">
              <div class="tm-userimg"> <img src="images/testimonial-2.png" alt="testimonial" /> </div>
              <div class="tm-userbio">
                <h4 class="tm-title"> Sara Pearson</h4>
                <p class="tm-designation">Founder of Realten inc.</p>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 05/01</span> </div>
            </div>
        -->
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Aqui voy... -->


  <!-- third section - Services -->
  <!-- <section id="about" class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12" style="text-align:center;">
          <p class="block-title"><strong>TALENT </strong> Fest</p> -->
  <!--<h3>¿Qué es Talent Fest?</h3>-->
  <!-- <p>Talent Fest Colombia 2022 es el festival de empleabilidad y conexión de talentos con la industria TI de la región. Una iniciativa liderada por el Ministerio de Tecnologías de Información y Comunicaciones (MinTIC), Tecnalia y CYMETRIA, líder en proyectos de talento y empleabilidad digital.</p>
        </div>
      </div>
    </div>
  </section> -->
  <!-- /third section -->



  <!-- Why Choose Us -->


  <!-- /End Why Choose Us -->




  <!-- Subscribe -->
  <!-- <section id="subscribe" class="subscribe">
  <div class="container">
    <div class="row">
      <h2 class="block-title"><strong>Subscribe for</strong> Next eventary</h2>
      <div class="subscribe-form">
        <form>
          <div class="input-group margin-bottom-sm col-lg-5 col-md-5 col-sm-12  col-xs-12"> <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="First Name">
          </div>
          <div class="input-group margin-bottom-sm col-lg-5  col-md-5 col-sm-12  col-xs-12"> <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Email address">
          </div>
          <div class="col-sm-12 col-xs-12">
            <p class="no-margin subscribe-text">We guarantee 100% privacy. Your information will not be shared.</p>
            <a href="#" class="register-now-btn">Get Every Info of Our Next Camp Eventery</a> </div>
        </form>
      </div>
    </div>
  </div>
</section> -->
  <!-- /Subscribe -->

  <!-- Contact Us  -->

  <!-- /Contact Us -->

  <!-- Bottom Social -->
  <!-- Logo Mintic, Tecnalia, Cymetria -->
  <div id="elements" class="bottom-social powered-imgs" style="background-color: #f2f2f2;">
    <a href="https://tecnaliacolombia.org" target="_blank"><img src="images/sponsors/logo_tecnalia.png" alt="Tecnalia"></a>
    <a href="https://cymetria.com" target="_blank"><img src="images/sponsors/logo_cymetria.png" alt="Cymetria"></a>
  </div>
  <!-- /Bottom Social -->

  <!-- Footer -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row" style="display: flex; align-items: center;">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-left">
              <p class="no-margin"><img width="210px" src="./images/logo_blaco_talent.png" alt=""></p>
            </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="footer-right hidden-xs">
              <ul>
                <li><a href="/">Inicio</a><span>|</span></li>
                <li><a href="#talent-fest-talks">Talent Talks</a><span>|</span></li>
                <li><a href="#talent-fest-tour">Talent Tour</a><span>|</span></li>
                <li><a href="/empresas">Empresas</a><span>|</span></li>
                <li><a href="/vacants">Vacantes</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="elements" class="bottom-social"> <a target="_blank" href="https://www.facebook.com/profile.php?id=100086894357949    " class="fa fa-facebook" aria-hidden="true"></a> <a target="_blank" href="https://twitter.com/talentfestco?t=dTwsF5EhokPO7yczhj20Ug&s=08" class="fa fa-twitter" aria-hidden="true"></a> <a target="_blank" href="https://www.instagram.com/talentfestco/" class="fa fa-instagram" aria-hidden="true"></a> <a target="_blank" href="https://www.youtube.com/channel/UCOmF3DflohPc3c-4kV9H2qw" class="fa fa-youtube" aria-hidden="true"></a> <a target="_blank" href="https://www.linkedin.com/company/talentfestco" class="fa fa-linkedin" aria-hidden="true"></a> </div>
    <div class="footer-bottom">
      <div class="copytight">
        <p>Si tienes alguna pregunta o sugerencia puedes contactarnos al correo: <strong>contacto@talent-fest.com</strong></p>
        <br><br>

        <p>&copy; 2022 Talent Fest, es una iniciativa del Ministerio TIC, Tecnalia y CYMETRIA #TalentMakers</p>
      </div>
    </div>
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
  </footer>
  <!-- .Footer -->

  <div class="annual-model-box">
    <div class="modal  fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="test-close-button" aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/fB_gb0gVMTM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <iframe class="embed-responsive-item test-myframe-video" id="ytplayer" src="https://www.youtube.com/embed/hricQqxxiNE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/hricQqxxiNE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="annual-model-box">
    <div class="modal  fade" id="exampleModalCharla" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="close-video-charla" aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/fB_gb0gVMTM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <iframe class="embed-responsive-item iframe-charla" id="ytplayer" src="https://www.youtube.com/embed/gIGi7DKwTdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="annual-model-box">
    <div class="modal  fade" id="modalCharlaJhonatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-video-jhonatan">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item iframe-jhonatan" id="ytplayer" src="https://www.youtube.com/embed/PZ6fltZFBj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="annual-model-box">
    <div class="modal  fade" id="modalCharlaLuis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-video-luis">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item iframe-luis" id="ytplayer" src="https://www.youtube.com/embed/-O0NqmX109g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="annual-model-box">
    <div class="modal  fade" id="modalCharlaRuth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-video-ruth">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item iframe-ruth" id="ytplayer" src="https://www.youtube.com/embed/Ob_UQKLc7F8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="annual-model-box">
    <div class="modal  fade" id="modalCharlaJessica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-video-jessica">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item iframe-jessica" id="ytplayer" src="https://www.youtube.com/embed/t6U1iHjTMkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="annual-model-box">
    <div class="modal  fade" id="modalCharlaLive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-video-live">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item iframe-live" id="ytplayer" src="https://www.youtube.com/embed/48Tbc5KBxhw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="annual-model-box">
    <div class="modal  fade" id="modalCharlaSandra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-video-sandra">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item iframe-sandra" id="ytplayer" src="https://www.youtube.com/embed/kAOkDRtxDQs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="annual-model-box">
    <div class="modal  fade" id="modalCharlaMauricio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-video-mauricio">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item iframe-mauricio" id="ytplayer" src="https://www.youtube.com/embed/Y1qH-tMCsqo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="annual-model-box">
    <div class="modal  fade" id="modalCharlaJuanMaldonado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" style="margin-top:90px;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-video-juanmaldonado">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item iframe-juanmaldonado" id="ytplayer" src="https://www.youtube.com/embed/PZ6fltZFBj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal request authenticated -->
  @include('auth.modal-login')
  </div>

  <!-- attach JavaScripts -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly" defer></script> -->
  <!-- <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>  -->

  <script>
    function initMap() {
      var uluru = {
        lat: 4.642280,
        lng: -74.079663
      };
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });

    }
  </script>
  <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnBukuPx3MQ3bJLLD-e4NKHL56g1nsRXM&callback=initMap"> </script> -->
  <script src="js/custom-login.js"></script>
  <script src="js/iscroll.js"></script>
  <script src="js/menu.js" charset="utf-8"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/classie.js"></script>
  <!-- <script type="text/javascript" src="js/custom-menu.js"></script> -->
  <script type="text/javascript" src="js/eventpremium-script.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

  <script>
    function menuFunction() {
      var elementMenu = document.getElementById("home");
      elementMenu.classList.toggle("drawer-close")
      elementMenu.classList.toggle("drawer-open");
    }
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NHXPT18P2P"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-NHXPT18P2P');
  </script>


  <script>
    function onClickShowEmpresas() {
      var elementMenu = document.getElementById("show-empresas");
      var elementMenuPlataformas = document.getElementById("show-plataformas");
      var elementMenuInstituciones = document.getElementById("show-instituciones");
      var elementMenuIClusters = document.getElementById("show-clusters");
      var elementMenuIUniversidades = document.getElementById("show-universidades");

      elementMenuIUniversidades.classList.remove("show-empresas")
      elementMenuIUniversidades.classList.add("show-empresas-deactivated")
      elementMenuInstituciones.classList.remove("show-empresas")
      elementMenuInstituciones.classList.add("show-empresas-deactivated")
      elementMenuIClusters.classList.remove("show-empresas")
      elementMenuIClusters.classList.add("show-empresas-deactivated")
      elementMenuPlataformas.classList.remove("show-empresas");
      elementMenuPlataformas.classList.add("show-empresas-deactivated");

      elementMenu.classList.add("show-empresas");
    }

    function onClickShowPlataformasEmpleo() {
      var elementMenu = document.getElementById("show-plataformas");
      var elementMenuEmpresas = document.getElementById("show-empresas");
      var elementMenuInstituciones = document.getElementById("show-instituciones");
      var elementMenuIClusters = document.getElementById("show-clusters");
      var elementMenuIUniversidades = document.getElementById("show-universidades");

      elementMenuIUniversidades.classList.remove("show-empresas")
      elementMenuIUniversidades.classList.add("show-empresas-deactivated")
      elementMenuIClusters.classList.remove("show-empresas")
      elementMenuIClusters.classList.add("show-empresas-deactivated")
      elementMenuInstituciones.classList.remove("show-empresas")
      elementMenuInstituciones.classList.add("show-empresas-deactivated")
      elementMenuEmpresas.classList.remove("show-empresas");
      elementMenuEmpresas.classList.add("show-empresas-deactivated");

      elementMenu.classList.add("show-empresas");
    }

    function onClickShowInstituciones() {
      var elementMenu = document.getElementById("show-plataformas");
      var elementMenuEmpresas = document.getElementById("show-empresas");
      var elementMenuInstituciones = document.getElementById("show-instituciones");
      var elementMenuIClusters = document.getElementById("show-clusters");
      var elementMenuIUniversidades = document.getElementById("show-universidades");

      elementMenuIUniversidades.classList.remove("show-empresas")
      elementMenuIUniversidades.classList.add("show-empresas-deactivated")
      elementMenuIClusters.classList.remove("show-empresas")
      elementMenuIClusters.classList.add("show-empresas-deactivated")
      elementMenuEmpresas.classList.remove("show-empresas");
      elementMenuEmpresas.classList.add("show-empresas-deactivated");
      elementMenu.classList.remove("show-empresas");
      elementMenu.classList.add("show-empresas-deactivated");

      elementMenuInstituciones.classList.add("show-empresas");
    }

    function onClickShowClusters() {
      var elementMenu = document.getElementById("show-plataformas");
      var elementMenuEmpresas = document.getElementById("show-empresas");
      var elementMenuInstituciones = document.getElementById("show-instituciones");
      var elementMenuIClusters = document.getElementById("show-clusters");
      var elementMenuIUniversidades = document.getElementById("show-universidades");

      elementMenuInstituciones.classList.remove("show-empresas")
      elementMenuInstituciones.classList.add("show-empresas-deactivated")
      elementMenuIUniversidades.classList.remove("show-empresas")
      elementMenuIUniversidades.classList.add("show-empresas-deactivated")
      elementMenuEmpresas.classList.remove("show-empresas");
      elementMenuEmpresas.classList.add("show-empresas-deactivated");
      elementMenu.classList.remove("show-empresas");
      elementMenu.classList.add("show-empresas-deactivated");

      elementMenuIClusters.classList.add("show-empresas");
    }

    function onClickShowUniversidades() {
      var elementMenu = document.getElementById("show-plataformas");
      var elementMenuEmpresas = document.getElementById("show-empresas");
      var elementMenuInstituciones = document.getElementById("show-instituciones");
      var elementMenuIClusters = document.getElementById("show-clusters");
      var elementMenuIUniversidades = document.getElementById("show-universidades");

      elementMenuIClusters.classList.remove("show-empresas")
      elementMenuIClusters.classList.add("show-empresas-deactivated")
      elementMenuInstituciones.classList.remove("show-empresas")
      elementMenuInstituciones.classList.add("show-empresas-deactivated")
      elementMenuEmpresas.classList.remove("show-empresas");
      elementMenuEmpresas.classList.add("show-empresas-deactivated");
      elementMenu.classList.remove("show-empresas");
      elementMenu.classList.add("show-empresas-deactivated");

      elementMenuIUniversidades.classList.add("show-empresas");
    }
  </script>

  <script>
    // Function to close video - Introduction -

    $('.test-close-video').click(() => {
      $('.test-myframe-video').attr('src', 'https://www.youtube.com/embed/hricQqxxiNE');
    });

    $('.test-close-button').click(() => {
      $('.test-myframe-video').removeAttr('src');
    });

    // Function to close video - Introduction -

    $('.open-video-charla').click(() => {
      $('.iframe-charla').attr('src', 'https://www.youtube.com/embed/gIGi7DKwTdA');
    });

    $('.close-video-charla').click(() => {
      $('.iframe-charla').removeAttr('src');
    });

    // Function to close video - Jhonatan Talk -

    $('.open-video-jhonatan').click(() => {
      $('.iframe-jhonatan').attr('src', 'https://www.youtube.com/embed/PZ6fltZFBj4');
    });

    $('.close-video-jhonatan').click(() => {
      $('.iframe-jhonatan').removeAttr('src');
    });

    //////MI CODIGO/////
    $('.open-video-juanmaldonado').click(() => {
      $('.iframe-juanmaldonado').attr('src', 'https://www.youtube.com/embed/PZ6fltZFBj4');
    });
    $('.close-video-juanmaldonado').click(() => {
      $('.iframe-juanmaldonado').removeAttr('src');
    });
    //// FIN DE MI CODIGO /////

    // Function to close video - Luis Talk -

    $('.open-video-luis').click(() => {
      $('.iframe-luis').attr('src', 'https://www.youtube.com/embed/-O0NqmX109g');
    });

    $('.close-video-luis').click(() => {
      $('.iframe-luis').removeAttr('src');
    });

    // Function to close video - Ruth Arroyo -

    $('.open-video-ruth').click(() => {
      $('.iframe-ruth').attr('src', 'https://www.youtube.com/embed/Ob_UQKLc7F8');
    });

    $('.close-video-ruth').click(() => {
      $('.iframe-ruth').removeAttr('src');
    });

    // Function to close video - Jessica Rueda -

    $('.open-video-jessica').click(() => {
      $('.iframe-jessica').attr('src', 'https://www.youtube.com/embed/t6U1iHjTMkQ');
    });

    $('.close-video-jessica').click(() => {
      $('.iframe-jessica').removeAttr('src');
    });

    // Function to close video - Live -

    $('.open-video-live').click(() => {
      $('.iframe-live').attr('src', 'https://www.youtube.com/embed/48Tbc5KBxhw');
    });

    $('.close-video-live').click(() => {
      $('.iframe-live').removeAttr('src');
    });

    // Function to close video - Sandra Trujillo -

    $('.open-video-sandra').click(() => {
      $('.iframe-sandra').attr('src', 'https://www.youtube.com/embed/kAOkDRtxDQs');
    });

    $('.close-video-sandra').click(() => {
      $('.iframe-sandra').removeAttr('src');
    });

    // Function to close video - Sandra Trujillo -

    $('.open-video-mauricio').click(() => {
      $('.iframe-mauricio').attr('src', 'https://www.youtube.com/embed/Y1qH-tMCsqo');
    });

    $('.close-video-mauricio').click(() => {
      $('.iframe-mauricio').removeAttr('src');
    });
  </script>
  @guest
  <script>
    addLocalSession(false)
  </script>
  @else
  <script>
    addLocalSession(true, '{{ Auth::user()->id }}')
  </script>
  @endguest
</body>

</html>