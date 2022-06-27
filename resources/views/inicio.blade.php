<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Domos y Ensambles</title>
<link rel="icon" href=" {{ asset('images/logo.ico')}} ">
<link href=" {{ asset('js/bootstrap.min.css')}} " rel="stylesheet">
<link rel="stylesheet" type="text/css" href=" {{ asset('styles/style_principal.css')}} "/>
<link rel="stylesheet" type="text/css" href=" {{ asset('styles/style_oficial.css')}} "/>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar">
  <header id="bk" >
    <div class="fixed-top">
      <div class="container-fluid ">
        <nav class="navbar navbar-expand-md fixed-top bg-dark"><!--Para que el menu quede fijo en la parte de arriba ala hora de hacer scroll -->
            <img  class="bi me-3" width="32" height="32" src=" {{ asset('images/logo.ico')}}" alt="">
            <a href="/" class="d-flex align-items-center text-white text-decoration-none"> Domos y Ensambles</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menures">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"></path>
                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"></path>
                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"></path>
              </svg>
            </button><!--Imagen mala-->
            <div class="collapse navbar-collapse justify-content-end" id="menures">
              <ul class="nav navbar-nav">
                 <li class="nav-item">
                  <a href="#" class="nav-link text-secondary "><svg class="bi" width="18" height="18" fill="currentColor">
                    <use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#house')}} "/>
                  </svg> Inicio</a>
                </li>
            <!-- ----------------------- -->
            <!-- ----------------------- -->

                 <li class="nav-item">
                  <a href="{{ route('login') }}" class="nav-link text-white"><svg class="bi" width="18" height="18" fill="currentColor">
                    <use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#box-arrow-left')}} "/>
                  </svg> Log in
                  </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link text-white"><svg class="bi" width="18" height="18" fill="currentColor">
                      <use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#box-arrow-left')}} "/>
                    </svg> Registrarse
                    </a>
                  </li>

                  {{-- <li class="nav-item">

                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                     @auth
                    <a href="{{ url('/home') }}" class="nav-link text-white">
                        <svg class="bi" width="18" height="18" fill="currentColor">
                            <use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#box-arrow-left')}} "/>
                        </svg>Home
                    </a>

                     @else
                    <a href="{{ route('login') }}" class="nav-link text-white">
                        <svg class="bi" width="18" height="18" fill="currentColor">
                            <use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#box-arrow-left')}} "/>
                        </svg>Iniciar sesión
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link text-white">
                        <svg class="bi" width="18" height="18" fill="currentColor">
                            <use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#box-arrow-left')}} "/>
                        </svg>Registrarse
                    </a>
                    @endif
                    @endauth
                    </div>
                @endif

            </li> --}}

            <!-- ----------------------- -->
              </ul>
            </div>
         </nav>
      </div>
    </div>

  </header>

<div class="banner" id="banner" style="background-image: url('images/Banner-4.jpg')">
  <div class="bg-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner-text">
            <h2>Bienvenido a <span>Domos y Ensambles</span></h2>
            <p>Esté será su centro de contrataciones online.</p>
            <a class="info"></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- start -->
<div class="features">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-box media">
          <div class="feature-text media-body">
            <svg class="bi" width="35" height="35" fill="currentColor"><use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#book')}} "/></svg>
            <h4>Contratación</h4>
            <p class="feature-detail">Contrata y date la oportunidad de probar nuestro sistema de contratación online.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-box media pull-left">
          <div class="feature-text media-body">
            <svg class="bi" width="35" height="35" fill="currentColor"><use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#search')}} "/></svg>
            <h4>Explorar servicios</h4>
            <p class="feature-detail">Explora los servicios que ofrece Domos y Ensambles.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-box media pull-left">
          <div class="feature-text media-body">
            <svg class="bi" width="35" height="35" fill="currentColor"><use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#bricks')}} "/></svg>
            <h4>Nuestras obras</h4>
            <p class="feature-detail">Mira nuestras obras y decide cual quieres desde la comodidad de tu hogar.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Servicios -->
<div class="album py-4 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <img class="img-portfolio img-responsive" style="width: 548px; height: 400px;" src=" {{ asset('images/Techo.jpeg')}} ">
          <div class="card-body">
            <p class="card-text">Techos en acrílico termoplástico rígido, con su estructura y ensamble en acero inoxidable.</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img class="img-portfolio img-responsive" style="width: 548px; height: 400px;" src=" {{ asset('images/domo.jpg')}} ">
          <div class="card-body">
            <p class="card-text">Domo o cúpula con forma de media esfera o similar, permite cubrir parte o la totalidad de un edificio o sector.</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img class="img-portfolio img-responsive" src=" {{ asset('images/Ensam-1.jpg')}} ">
          <div class="card-body">
            <p class="card-text">Planificación de grandes obras, diseñamos las infraestructuras y su respectiva planificación.</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img class="img-portfolio img-responsive" src=" {{ asset('images/Ensam-2.jpg')}} ">
          <div class="card-body">
            <p class="card-text">Servicios de ensamblajes para todo tipo de estructuras, desde puertas con materiales inoxidables hasta grandes estructuras.</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
</div>
<!--Oficial de obra -->
<div class="about">
  <img class="oficial" src=" {{ asset('images/oficial.png')}} " alt="Oficial">

<div class="about-info">
  <h1 class="ofi">Oficial de obra</h1>

  <div class="divider"></div>
  <p>¡Hola! mi nombre es Danilo Becerra, soy el oficial de obra encargado de todos los contratos que realice Domos y Ensambles, cuento con más de 20 de años de experiencia trabajando con todo lo relacionado en construcción y mi especialidad que son los domos y ensambles de estructuras.</p>

  <p>Además cuento con un grupo de expertos en el oficio, brindando todas las garantías para que te sientas satisfecho con la realización de tu contrato.</p>
  <a href="https://wa.link/fa05bp" target="_blank">
      <button>Contáctame</button>
      </a>
</div>
</div>
<!-- footer -->
<div class="footer-dark">
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-3 item">
                  <h3>Servicios</h3>
                  <ul>
                      <li><a href="#">Contratación</li>
                      <li><a href="#">Agenda</a></li>
                      <li><a href="#">Empleo</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 col-md-3 item">
                  <h3>Contáctenos</h3>
                  <ul>
                      <li>Medellín, Antioquia</li>
                      <li>333-333-3333</li>
                      <li>domosyensambles@gmail.com</li>
                  </ul>
              </div>
              <div class="col-md-6 item text">
                  <h3>Nosotros</h3>
                  <p>Somos un sitio web que se centra en la contratación de los servicios que ofrece el negocio Domos y Ensambles, aquiere alguno de nuestros servicios desde tu hogar.</p>
              </div>
              <div class="col item social"><a href="#"><svg><use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#facebook')}} "/></svg></a>
                <a href="#"><svg><use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#instagram')}} "/></svg></a>
                <a href="#"><svg><use xlink:href=" {{ asset('libs/bootstrap-icons/bootstrap-icons.svg#youtube')}} "/></svg></a>
          </div>
          <p class="copyright">Domos y Ensambles ® 2022</p>
      </div>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>
