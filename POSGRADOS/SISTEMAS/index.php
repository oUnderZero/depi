
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Maestría en Sistemas Computacionales</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>

<div class="cabecera">


  <!-- INICIO DE CABECERA -->
  <div class="row center">
        <picture>
          <source srcset="images/header600.png" height="60px" media="(max-width: 600px)">
          <source srcset="images/header800.png" height="60px" media="(max-width: 800px)">
          <source srcset="images/header1000.png" height="60px" media="(max-width: 1000px)">
          <source srcset="images/header.png" height="60px" media="(max-width: 1200px)">
          <img src="images/header.png" height="60px" alt="TecNM">
        </picture>
  </div>

  <ul id="quienes_somos" class="dropdown-content">
    <li><a href="consejo-posgrado.php">Consejo de Posgrado</a></li>
    <li><a href="infraestructura.php">Infraestructura</a></li>
    <li><a class="dropdown-trigger2" href="#!" data-target="alumnos" >Alumnos<i class="material-icons right">chevron_right</i></a></li>
  </ul>

  <ul id="plan-de-estudios" class="dropdown-content">
    <li><a href="presentacion.php#presentacion">Presentación</a></li>
    <li><a href="presentacion.php#metas">Metas y Objetivos</a></li>
    <li><a href="presentacion.php#perfil_ingreso">Perfil de Ingreso</a></li>
    <li><a href="presentacion.php#perfil_egreso">Perfil de Egreso</a></li>
    <li><a href="presentacion.php#campo_accion">Campo de Acción</a></li>
    <li><a href="mapa-curricular.php">Mapa Curricular</a></li>
  </ul>
  <ul id="admision" class="dropdown-content">
    <li><a href="admision.php#convocatoria">Convocatoria</a></li>
    <li><a href="reglamento.php">Reglamento</a></li>
    <li><a href="becas.php">Becas</a></li>
    <li><a href="aceptados.php">Resultados del Proceso de Selección 2018</a></li>
  </ul>

  <ul id="alumnos" class="dropdown-content">
    <li><a href="alumnos-inscritos.php">Inscritos</a></li>
    <li><a href="alumnos-egresados.php">Egresados</a></li>
    <li><a href="alumnos-proceso-graduacion.php">En Proceso de Graduación</a></li>
  </ul>

  <ul id="investigacion" class="dropdown-content">
    <li><a href="proyectos.php">Proyectos</a></li>
    <li><a href="lgac.php">LGAC</a></li>
    <li><a onclick="listarInvestigadoresToast()">Publicaciones Recientes</a></li>
  </ul>
  <ul id="vinculacion" class="dropdown-content">
    <li><a href="convenios-gobierno.php">Convenios con el Sector Público</a></li>
    <li><a href="convenios-industria.php">Convenios con el Sector Privado</a></li>
  </ul>

  <div class="row" id="menu">
  <nav style="background-color:#1B396A">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo white"><img src="images/msc.svg" height="60px" alt="Maestría en Sistemas Computacionales"></a>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons right white-text text-darken-2">home</i></a></li>
        <li><a class="dropdown-trigger white-text text-darken-2" href="#!" data-target="quienes_somos">¿Quiénes Somos?<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-trigger white-text text-darken-2" href="#!" data-target="admision">Admisión<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-trigger white-text text-darken-2" href="#!" data-target="plan-de-estudios">Plan de Estudios<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-trigger white-text text-darken-2" href="#!" data-target="investigacion">Investigación<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-trigger white-text text-darken-2" href="#!" data-target="vinculacion">Vinculación<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>

      <ul id="nav-mobile" class="sidenav">
      	<li">
      		<div class="background center">
      			<img src="images/msc.svg" height="60px" alt="Maestría en Sistemas Computacionales">
      		</div>

        </li>
        <li><a href="index.php"><i class="material-icons center">home</i>Inicio</a></li>
        <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">¿Quiénes Somos?<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="consejo-posgrado.php">Consejo de Posgrado</a></li>
                <li><a href="infraestructura.php">Infraestructura</a></li>
                <li>
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header">Alumnos<i class="material-icons">arrow_drop_down</i></a>
                      <div class="collapsible-body">
                        <ul>
                      <li><a href="alumnos-inscritos.php">Inscritos</a></li>
                      <li><a href="alumnos-egresados.php">Egresados</a></li>
                      <li><a href="alumnos-proceso-graduacion.php">En Proceso de Graduación</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="collapsible-header">Admisión<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="admision.php#convocatoria">Convocatoria</a></li>
                <li><a href="reglamento.php">Reglamento</a></li>
                <li><a href="becas.php">Becas</a></li>
                <li><a href="aceptados.php">Resultados del Proceso de Selección 2018</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="collapsible-header">Plan de Estudios<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="presentacion.php#presentacion">Presentación</a></li>
                <li><a href="presentacion.php#metas">Metas y Objetivos</a></li>
                <li><a href="presentacion.php#perfil_ingreso">Perfil de Ingreso</a></li>
                <li><a href="presentacion.php#perfil_egreso">Perfil de Egreso</a></li>
                <li><a href="presentacion.php#campo_accion">Campo de Acción</a></li>
                <li><a href="mapa-curricular.php">Mapa Curricular</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="collapsible-header">Investigación<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
      			    <li><a href="proyectos.php">Proyectos</a></li>
      			    <li><a href="lgac.php">LGAC</a></li>
      			    <li><a onclick="listarInvestigadoresToast()">Publicaciones Recientes</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="collapsible-header">Vinculación<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
      			    <li><a href="convenios-gobierno.php">Convenios con el Sector Público</a></li>
      			    <li><a href="convenios-industria.php">Convenios con el Sector Privado</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      </ul>
</div>
   <!-- FIN DE CABECERA -->
</div>

<div class="row">
  <div class="col s12 m12 l10 offset-l1">
    <div class="carousel carousel-slider center" id="carrusel">
      <a class="carousel-item" href="admision.php" target="_blank">
          <img src="images/convocatoria-ingreso.png" style="height: 400px" />
      </a>
      <a class="carousel-item" href="admision.php" target="_blank">
          <img src="images/convocatoria-ingreso.png" style="height: 400px" />
      </a>
      <a class="carousel-item" href="#">
          <img src="images/IMG_1041.jpeg" style="height: 500px" />
      </a>
      <a class="carousel-item" href="admision.php" target="_blank">
          <img src="images/convocatoria-ingreso.png" style="height: 400px" />
      </a>
      <a class="carousel-item" href="#">
          <img src="images/IMG_1042.jpeg" style="height: 500px" />
      </a>
      <a class="carousel-item" href="admision.php" target="_blank">
          <img src="images/convocatoria-ingreso.png" style="height: 400px" />
      </a>
      <a class="carousel-item" href="#">
          <img src="images/IMG_0046.jpg" style="height: 500px" />
      </a>
      <a class="carousel-item" href="admision.php" target="_blank">
          <img src="images/convocatoria-ingreso.png" style="height: 400px" />
      </a>
      <a class="carousel-item" href="#">
          <img src="images/IMG_0047.jpg" style="height: 500px" />
      </a>
      <a class="carousel-item" href="#">
          <img src="images/IMG_0048.jpg" style="height: 500px" />
      </a>
      <a class="carousel-item" href="admision.php" target="_blank">
          <img src="images/convocatoria-ingreso.png" style="height: 400px" />
      </a>
      <a class="carousel-item" href="#">
          <img src="images/IMG_0062.jpg" style="height: 500px" />
      </a>
    </div>
  </div>
</div>

      <!--   Icon Section   -->
      <div class="row" id="accesosrapidos">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Nuevo Ingreso Agosto 2020</h5>
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="material-icons">info</i>Convocatoria</div>
<div class="collapsible-body"><span>Consulta la <a class="waves-effect waves-teal btn-flat" href="admision.php">convocatoria</a> de nuevo ingreso para el período Agosto-Diciembre 2020.</span></div>
              </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">edit</i>Registro de Candidatos</div>
                <div class="collapsible-body"><span><a class="waves-effect waves-teal btn-flat" href="https://forms.office.com/Pages/ResponsePage.aspx?id=h_mxPfPt20OI60OgOV98hJa3YIhBEjBOno9rFBViw4FUNFhJNUtGMzVNNUc0VkxSQ05BVENKWUVZSC4u">Registra tu candidatura</a> para ingresar a la Maestría en Sistemas Computacionales.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">event</i>Fechas Importantes</div>
                <div class="collapsible-body"><span>
                    Recepción de Solicitudes: del 1 Marzo al 30 Abril 2020
                    <br>Examen de Admisión: 30 Mayo 2020
                    <br>Consulta el <a href="admision.php#calendario">Calendario</a> de admisión completo.
                    </span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">attach_money</i>Costos</div>
                <div class="collapsible-body"><span>
                    <ul>
                        <li>Propéutico: $3,500.00</li>
                        <li>Examen de admisión: $2,000.00</li>
                        <li>Inscripción única: $3,500.00</li>
                        <li>Crédito: $500.00</li>
                    </ul>
                </span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">school</i>Becas</div>
                <div class="collapsible-body"><span>Consulta nuestra sección de <a href="becas.php">becas</a></span></div>
              </li>
            </ul>

          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Plan de Estudios</h5>

            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="material-icons">directions_run</i>Plan de Estudios</div>
                <div class="collapsible-body"><span>Consulta todas la información<a href="presentacion.php#presentacion"> del plan de estudios</a>.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">art_track</i>Metas y Objetivos</div>
                <div class="collapsible-body"><span>Consulta las <a href="presentacion.php#metas">metas y objetivos</a> del programa de estudio.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">group</i>Mapa Curricular</div>
                <div class="collapsible-body"><span>Consulta todas las <a href="mapa-curricular.php">materias</a> del plan curricular.</span></div>
              </li>
            </ul>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">business</i></h2>
            <h5 class="center">Convenios con la Industria</h5>

            <p class="light">Consulta los convenios que tenemos actualmente con la industria <a href="convenios-industria.php">privada</a> y <a href="convenios-gobierno.php">gobierno</a>.</p>
          </div>
        </div>
      </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">"Técnica, Progreso de México"</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contáctanos</h4>
          <p class="center-align light">Av. Tecnológico No. 1500.<br>
Col. Lomas de Santiaguito. C.P. 58120.<br>
Tel. (443) 312 15 70, ext. 233. Morelia, Michoacán. <br>
Edificio I. Posgrado en Sistemas Computacionales<br>
Coordinador. M.C. Abel Alberto Pintor Estrada<br>
<a href="mailto:psistemas@itmorelia.edu.mx">psistemas@itmorelia.edu.mx</a>,
<a href="http://dsc.itmorelia.edu.mx/msc/">http://dsc.itmorelia.edu.mx/msc/</a></p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Comunidad Pony</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/descarga1.jpg" alt="Unsplashed background img 3"></div>
  </div>

<div class="pie">
  <footer class="page-footer red darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 m6 s12 ">
          <h5 class="white-text">Instituto Tecnológico de Morelia</h5>
          <p class="grey-text text-lighten-4">Av. Tecnológico No. 1500.
Col. Lomas de Santiaguito. C.P. 58120.
Tel. (443) 312 15 70, ext. 233. Morelia, Michoacán. 
Posgrado en Sistemas Computacionales
Edificio I. Coordinador. M.C. Abel Alberto Pintor Estrada
psistemas@itmorelia.edu.mx
http://dsc.itmorelia.edu.mx/msc/</p>


        </div>
      
        <div class="col l6 m6 s12">
          <h5 class="white-text">Ligas de Interés</h5>
          <ul>
            <li><a class="white-text" href="http://www.tecnm.mx">Tecnológico Nacional de México</a></li>
            <li><a class="white-text" href="http://itmorelia.edu.mx">Instituto Tecnológico de Morelia</a></li>
            <li><a class="white-text" href="http://dsc.itmorelia.edu.mx/pDSC/">Departamento de Sistemas y Computación</a></li>
            <li><a class="white-text" href="http://itmorelia.edu.mx/2012-admin/extras/archivos/PDF/Aviso_Privacidad.pdf">Aviso de Privacidad</a></li>
            <li><a class="white-text" href="http://www.itmorelia.edu.mx/content.php?pagename=Directorio">Directorio Tec Morelia</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Hecho por Abel Pintor 
      <span class="right">Síguenos por <a href="https://twitter.com/msc_itmorelia"><img src="images/twitter-24.png"></a><a href="https://www.linkedin.com/company/maestria-en-sistemas-computacionales/"><img src="images/linkedin.png" height="24px"></a><a href="https://fb.me/mscitmorelia"><img src="images/Facebook-Logo.png" height="24px"></a></span>
      </div>
    </div>
  </footer>

 <!--  Scripts-->
  <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
        
        function listarInvestigadoresToast() {

          var toastHTML = '<img class="circle" src="images/docentes/Octavio-Ortiz.jpg" height="40px"><span>&nbsp;<a href="publicaciones-recientes-octavio-ortiz.php">Dr. Octavio Ortíz Ortíz</a></span>';
          M.toast({html: toastHTML},10000);
        
        }
  </script>
</div>

  </body>
  </html>
