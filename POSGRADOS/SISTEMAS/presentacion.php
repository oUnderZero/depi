
<!DOCTYPE html>
<html lang="es">
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
      <div class="col s12 m10 offset-m1 l6 offset-l3" id="presentacion">
        <div class="card">
            <div class="card-image valign-wrapper">
                <img src="images/boton-presentacion-programa.jpg">
            </div>
        <div class="card-stacked" >
            <div class="card-content">
            <spam>
                <p>Este programa obedece a la necesidad de ofrecer a los profesionistas de la región, así como a los egresados de nivel licenciatura del estado y el país en general, la oportunidad de mejorar y actualizar sus conocimientos científicos y tecnológicos, logrando la formación de recursos humanos de calidad, que apoyen a la solución de la problemática nacional existente en los sectores productivos e impulse el acervo científico y tecnológico que servirá de sustento a un crecimiento armónico.</p>

                <p>Por lo que se apertura la Maestría en Sistemas Computacionales (MSC) con orientación Profesional. La que trabajará conjuntamente con las empresas de la región, utilizando el enfoque dual que promueve el TecNM, a partir de la licenciatura con el sector productivo. Pudiendo dar continuidad y mayor impacto con el posgrado en vinculación y desarrollo en las empresas y organizaciones de la región.</p>

                <p>Atendiendo la demanda empresarial de la zona, se abren dos líneas de generación y aplicación del Conocimiento:</p>
                <ol type="a">
                    <li>Seguridad informática</li>
                    <li>Ingeniería de Software y Sistemas distribuidos</li>
                </ol>
            </spam>
            </div>
            
        </div>
        </div>
  </div> 
  </div>

<div class="row">
<div class="col s12 m6 l4" id="metas">
  
  
  <div class="large card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/boton-metas.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Conoce las Metas y Objetivos del Programa<i class="material-icons right">more_vert</i></span>
      
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Metas y Objetivos de la Maestría en Sistemas Computacionales<i class="material-icons right">close</i></span>
      <ul>
          <li>Vincular a los alumnos egresados con las empresas desarrolladoras, a través de convenios, proyectos en colaboración, estancias profesionales, cursos entre otros.</li>
            <li>Ser un referente a nivel nacional, mediante estudios de posgrados, la actualización, certificaciones, estancias en centros de investigación e industria o empresas. Capacitando a la planta de investigadores.</li>
            <li>Proyectos de  investigación aplicados a nivel local, regional, nacional e internacional.</li>
            <li>Publicar artículos en revistas especializada, además de participar en congresos nacionales e internacionales.</li>
            <li>A corto plazo solicitar el ingreso al PNPC como posgrado de reciente creación.</li>
        </ul>
    </div>
  </div>
</div>
  
<div class="col s12 m6 l4" id="perfil_ingreso">
  <div class="large card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/boton-perfil-ingreso.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Saber más del Perfil de Ingreso<i class="material-icons right">more_vert</i></span>
      
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Perfil de Ingreso a la Maestría en Sistemas Computacionales<i class="material-icons right">close</i></span>
        <p>Ingenieros y/o licenciados en los campos de sistemas computacionales, informática, tecnologías de la información y comunicaciones así como otras carreras afines, preferentemente con experiencia profesional y conocimiento del idioma inglés técnico.</p>
        <p>Mostrar habilidades para leer y comprender escritos técnico-científicos en el idioma inglés. Capacidad de elaborar documentos técnicos, de desarrollar software y de trabajar en equipo.</p>
    </div>
  </div>
</div>  
  
<div class="col s12 m6 l4" id="perfil_egreso">
  <div class="large card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/boton-perfil-egreso.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Saber más del Perfil de Egreso<i class="material-icons right">more_vert</i></span>
      
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Perfil de Egreso de la Maestría en Sistemas Computacionales<i class="material-icons right">close</i></span>
        <p>Formar maestros en sistemas computacionales con orientación profesional, con actitud crítica, especialistas en la resolución de problemas prácticos que involucran el uso eficiente y eficaz del área de soluciones computacionales dentro de los campos de la seguridad informática, ingeniería de software y sistemas distribuidos, así como otras áreas afines.</p>

        <p>Los maestros egresados del posgrado, se integrarán a las empresas y organizaciones de la región, para resolver problemas particulares y cubrir necesidades del sector empresarial en el área de Seguridad informática e Ingeniería de software y Sistemas Distribuidos.</p>
    </div>
  </div>
</div>
  
    <div class="col s12 m6 l4" id="campo_accion">
      <div class="large card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/boton-campo-accion.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Saber más del Campo de Acción donde te podrás desempeñar<i class="material-icons right">more_vert</i></span>
          
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Campo de Acción de los Egresados de la Maestría en Sistemas Computacionales<i class="material-icons right">close</i></span>
            <p>El egresado podrá desarrollarse en cualquier sector que maneje proyectos que involucren las Tecnologías de Información y Comunicaciones particularmente en las áreas de Seguridad Informática e Ing. de Software y Sistemas Distribuidos. </p>
    
            <p>Promoviendo el desarrollo tecnológico como patentes, artículos científicos, participación en congresos y desarrollo de software.</p>
            <p>Vincular a la industria con los estudiantes a través de una estancia en alguno de los sectores público, privado, social u otros.</p>
            <p>Desarrollo de investigación aplicada para cubrir necesidades de la industria.</p>
        </div>
      </div>
    </div>
  
  
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
