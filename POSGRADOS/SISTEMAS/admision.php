
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Convocatoria MSC 2021</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>.dropdown-content{
    overflow: visible !important;
}</style>
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
    <div class="card">
      <div class="card-image">
        <img class="materialboxed" src="images/convocatoria-ingreso.png">
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12 m12 l10 offset-l1">
    <ul class="collapsible">
      <li>
        <div class="collapsible-header"><i class="material-icons">offline_pin</i>Objetivo del Programa</div>
        <div class="collapsible-body"><span>Formar Maestros en Sistemas Computacionales que sean capaces de resolver problemas de su entorno social y laboral, que involucren el uso de las Tecnologías de la Información y Comunicaciones de forma eficiente y eficaz, utilizando, generando y desarrollando de forma innovadora soluciones computacionales.</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">person_pin</i>Perfil de Ingreso</div>
        <div class="collapsible-body"><span><p>Ingenieros y/o licenciados en los campos de sistemas computacionales, informática, tecnologías de la información y comunicaciones así como otras carreras afines, preferentemente con experiencia profesional y conocimiento del idioma inglés técnico.</p>
        <p>Mostrar habilidades para leer y comprender escritos técnico-científicos en el idioma inglés. Capacidad de elaborar documentos técnicos, de desarrollar software y de trabajar en equipo.</p></span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">format_list_numbered</i>Requisitos y antecedentes académicos de ingreso de los candidatos.</div>
        <div class="collapsible-body">
          <span>
            <ol>
              <li>Descargar y llenar la Solicitud de Admisión al Programa de Maestría (<a href="http://dsc.itmorelia.edu.mx/msc/docs/Solicitud-Admision-Maestria.pdf">http://dsc.itmorelia.edu.mx/msc/docs/Solicitud-Admision-Maestria.pdf</a>) , y realizar un registro en línea en (<a href="https://forms.office.com/Pages/ResponsePage.aspx?id=h_mxPfPt20OI60OgOV98hJa3YIhBEjBOno9rFBViw4FUNFhJNUtGMzVNNUc0VkxSQ05BVENKWUVZSC4u">https://forms.office.com/Pages/ResponsePage.aspx?id=h_mxPfPt20OI60OgOV98hJa3YIhBEjBOno9rFBViw4FUNFhJNUtGMzVNNUc0VkxSQ05BVENKWUVZSC4u</a>),</li>
              <li>Copia de Título y cédula de licenciatura (si no se tiene aún, comprobar que está en trámite),</li>
              <li>Copia de Certificado de egreso de licenciatura con promedio mínimo de 80,</li>
              <li>Copia de la CURP,</li>
              <li>Constancia de haber alcanzado 420 puntos del examen TOEFL o Constancia del CLE (Coordinación de Lenguas Extranjeras del ITM) de haber alcanzado como mínimo el nivel B1 de inglés,</li>
              <li>Curriculum Vitae resumido con evidencias.</li>
              <li>Preferentemente, acreditar experiencia profesional mínima de 6 meses, en el área de Sistemas Computacionales,</li>
              <li>Alta en el IMSS,</li>
              <li>Recibo oficial de pago por los derechos correspondientes por el proceso de admisión</li>
              <li>2 Fotografías tamaño infantil</li>
            </ol>
           <p>Para candidatos que realizaron su licenciatura <u>fuera</u> del Instituto Tecnológico de Morelia, además de los requisitos anteriores, deberán incluir:</p>
           <ol>
            <li>Original y Copia de Certificado de Bachillerato,</li>
            <li>Original y Copia de Certificado de Licenciatura.</li>
           </ol>
          </span>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">featured_play_list</i>Procedimiento de Selección de Aspirantes</div>
        <div class="collapsible-body">
          <span>
            <p>La solicitud de cada aspirante la analiza un Comité de Admisión conformado por tres profesores del Consejo de Posgrado y para ello deberán cubrir los siguientes requerimientos:</p>
            <ol>
              <li>Cumplir con todos los requisitos y antecedentes académicos de ingreso,</li>
              <li>Entregar la documentación especificada y la solicitud correspondiente a la Coordinación de la Maestría en Sistemas Computacionales, ubicada en el Departamento de Sistemas, edificio I.</li>
              <li>Para ser candidato de ingreso al programa, se deberá cumplir alguna de las siguientes opciones:
                <ol type="a">
                    <li>Presentar y aprobar el examen de admisión, o</li>
                    <li>Presentar y acreditar las asignaturas propedéuticas (sin valor curricular), o</li>
                    <li>Ingreso por Escolaridad, si eres egresado del Instituto Tecnológico de Morelia del plan de estudios 2010, haber obtenido un promedio mínimo de 90.</li>
                  </ol>
                </li>
              <li>Los aspirantes deberán entrevistarse con el comité de admisión.</li>
              <li>El comité de admisión seleccionará a los mejores candidatos, de acuerdo a criterios y cupo máximo que establezca el consejo de posgrado y su resolutivo será inapelable.</li>

            </ol>
          </span>
        </div>
      </li>
      <li>
        <a id="calendario"></a>
        <div class="collapsible-header"><i class="material-icons">date_range</i>Etapas del Proceso de Selección</div>
        <div class="collapsible-body">
          <span>
            <table class="highlight">
              <thead>
                <tr>
                    <th>Paso</th>
                    <th>Actividad</th>
                    <th>Fecha</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Recepción de Solicitudes y Documentación (en digital en formato pdf al correo posgrado.sistemas@morelia.tecnm.mx)</td>
                  <td>Desde la publicación de la presente convocatoria y hasta el 25 de Junio del 2021</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Examen de Admisión (En línea)</td>
                  <td>Fecha: 3 de Julio de 2021<BR>Formato: En línea<BR>Horario: 08:00-13:00</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Curso Propedéutico (40 hrs. En Línea)</td>
                  <td>Fecha: Sábados 10, 17, 24 y 31 de Julio del 2021<BR>Formato: En línea<BR>Horario: 8:00-13:00 hrs.</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Examen de Inglés (CLE).<br>Mayores Informes en <a href="http://cle.itmorelia.edu.mx">http://cle.itmorelia.edu.mx</a><br>Tel. 4433121570 Ext.1269</td>
                  <td>Fecha: 30 de Julio del 2021<BR>Horario: 09:00-11:00 hrs<BR>Costo: $200.00</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Entrevistas con el comité de admisión (en línea)</td>
                  <td>Fechas: Del 2 al 4 de Agosto del 2021<BR>Formato: Videoconferencia<BR>Horario: 08:00-09:00</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Publicación de Resultados de Aspirantes Aceptados al Programa</td>
                  <td>9 de Agosto de 2021</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Entrega y revisión de Expediente en Control Escolar</td>
                  <td>Agosto del 2021</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Inicio de Clases</td>
                  <td>Agosto del 2021</td>
                </tr>
              </tbody>
            </table>
          </span>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">perm_device_information</i>Información General del Programa</div>
        <div class="collapsible-body">
          <span>
            <table class="highlight">
              <tbody>
                <tr>
                  <td><B>MODALIDAD:</BOLD></td>
                  <td>Esquema Semi-Presencial en Fines de Semana</td>
                  <td></td>
                </tr>
                <tr>
                  <td><B>COSTOS DEL PROGRAMA:</B></td>
                  <td>Inscripción al Programa: $3,500.00<sup>*</sup></td>
                  <td>Pago por semestre (25 créditos): $12,500 en 4 parcialidades de: $3,125 c/u.</td>
                </tr>
                <tr>
                  <td><b>LÍNEAS DE GENERACIÓN Y APLICACIÓN DEL CONOCIMIENTO:</b></td>
                  <td>LGAC 1: Seguridad Informática.</td>
                  <td>LGAC 2: Ingeniería de Software y Sistemas Distribuidos.</td>
                </tr>
                <tr>
                  <td><b>DURACIÓN:</b></td>
                  <td>2 Años</td>
                  <td><b>Total de Créditos de Asignaturas:</b> 100</td>
                </tr>
                <tr>
                  <td><b>HORARIOS DE IMPARTICIÓN:</b></td>
                  <td>Viernes: 16:00 a 20:00 hrs</td>
                  <td>Sábados: 8:00 a 14:00 hrs</td>
                </tr>
                <tr>
                  <td><b>DATOS PARA REALIZAR PAGOS DEL PROCESO DE SELECCIÓN:</b></td>
                  <td>El coordinador informará de manera particular los datos de pago.</td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>COSTOS DEL PROCESO DE ADMISIÓN</b></td>
                  <td>Examen de Admisión o Ingreso por Escolaridad: $2,000.00</td>
                  <td>Curso Propedéutico: $3,500.00<sup>*</sup></td>
                </tr>
                <tr>
                  <td><b>CONTACTO:</b></td>
                  <td>M.C. Abel Alberto Pintor Estrada<BR>Coordinador de MSC</td>
                  <td>Email: <a href="mailto:posgrado.sistemas@morelia.tecnm.mx">posgrado.sistemas@morelia.tecnm.mx</a><br>Tel: (443) 3121570 ext 233</td>
                </tr>
              </tbody>
            </table>
            <sup>*</sup>Actualización de costos 2019. Oficio No. 1037.2/2018
          </span>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">local_printshop</i>Versión para Imprimir</div>
        <div class="collapsible-body">
          <span>
            <a href="docs/ConvocatoriaMSC2021.pdf">Convocatoria 2021 en formato PDF</a>
          </span>
        </div>
      </div>
    </li>
    </ul>
  </div>
</div>



<div class="row">
  <div class="col s12">
    <div class="card hoverable horizontal">
      <div class="card-image valign-wrapper">
          <i class="large material-icons">question_answer</i>
      </div>
      <div class="card-stacked">
        <div class="card-content">
        <p><sup>*</sup> El programa de Maestría en Sistemas Computacionales (MSC) con orientación Profesional, trabajará conjuntamente con las empresas de la región, utilizando el enfoque dual que promueve el TecNM, a partir de la licenciatura con el sector productivo. Pudiendo dar continuidad y mayor impacto en vinculación y desarrollo con las empresas y organizaciones de la región.</p>
        </div>
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
