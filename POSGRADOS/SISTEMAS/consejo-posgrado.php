
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
    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Antolino.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Dr. Anastacio Antolino Hernández<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Dr. Anastacio Antolino Hernández<i class="material-icons right">close</i></span>
                     <p>
                        Es Lic. en Informática por el Instituto Tecnológico de la Costa Grande. Es Maestro en Ciencias Computacionales por el Centro Nacional de Investigación y Desarrollo Tecnológico (CENIDET). Doctor en Ciencias en Ing. Eléctrica con Opción en Sistemas Computacionales por la Universidad Michoacana de San Nicolás de Hidalgo. Sus áreas de interés son la Seguridad Informática y los Sistemas Distribuidos.
                    </p>
                    <p><B>Datos de Contacto</B><br>
                        <i class="material-icons left">contact_mail</i>  antolino@itmorelia.edu.mx
                        <br><i class="material-icons left">web</i>  <a href="http://antares.itmorelia.edu.mx/~antolino">http://antares.itmorelia.edu.mx/~antolino</a></p>
            </div>
        </div>
    </div>
    
    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Juan-Manuel-Garcia.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Dr. Juan Manuel García García<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Dr. Juan Manuel García García<i class="material-icons right">close</i></span>
                     <p>
                        Es Licenciado en Físico Matemáticas por la Universidad Michoacana de San Nicolás de Hidalgo. Es Maestro en Ciencias Computacionales por el IIMAS de la UNAM. Es Doctor en Ciencias Computacionales por el Centro de Investigación en Computación (CIC-IPN). Ha ganado La Presea Lázaro Cárdenas como mejor estudiante de Doctorado del Instituto Politécnico Nacional. Su área de interés es la Seguridad Informática.
                    </p>
                    <p><B>Datos de Contacto</B><br>
                        <i class="material-icons left">contact_mail</i>  <a href="mailto:jmgarcia@itmorelia.edu.mx">jmgarcia@itmorelia.edu.mx</a>
                    </p>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Octavio-Ortiz.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Dr. Octavio Ortíz Ortíz<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Dr. Octavio Ortíz Ortíz<i class="material-icons right">close</i></span>
                <h6>Formación Académica</h6>
                  <ul>
                    <li>2016. Doctor en Tecnologías de la Información y las Comunicaciones por la Universidad Politécnica de Cartagena, España. Obtuvo la mención "Cum Laude".
                    </li>
                    <li>2010. Maestría en Tecnologías de la Información y Comunicaciones por la Universidad Politécnica de Cartagena, España, con la Tesis "Redes Vehiculares Ad-Hoc Simulación de Rotonda Inteligente".
                    </li>
                    <li>2002. Maestría en Ciencias en la Enseñanza de las Ciencias por el Centro Interdisciplinario de Investigación y Docencia en Educación Técnica, México.
                    </li>
                    <li>1990. Ingeniero en Sistemas Computacionales por el Instituto Tecnológico de San Luis Potosí, México.
                    </li>
                  </ul>
                <h6>Distinciones</h6>
                  <ul>
                    <li>2017 - 2019. Profesor con Perfil Deseable.
                    </li>
                    <li>2018-2020. Miembro del Sistema Nacional de Investigadores distinción "Candidato".
                    </li>
                  </ul>
                <h6>Datos de Contacto</h6>
                  <ul>
                    <li><i class="material-icons left">contact_mail</i>  <a href="mailto:octavioortiz@itmorelia.edu.mx">octavioortiz@itmorelia.edu.mx</a>
                    </li>
                  </ul>
            </div>
            <div class="card-action">
              <a href="publicaciones-recientes-octavio-ortiz.php">Publicaciones Recientes</a>
            </div>
        </div>
    </div>


    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Heberto.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Dr. Heberto Ferreira Medina<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Dr. Heberto Ferreira Medina<i class="material-icons right">close</i></span>
                     <p>
                        Es Ing. en Sistemas Computacionales por el Instituto Tecnológico de Morelia. Es Maestro en Tecnologías de la Información por la Universidad Interamericana para el Desarrollo (UNID) Sede Morelia. Es Técnico-Académico en el Centro de Investigación en Ecosistemas (CIECO) de la UNAM Campus Morelia. Sus áreas de interés son los Sistemas Distribuidos y el Cómputo Móvil.
                    </p>
                    <p><B>Datos de Contacto</B><br>
                        <i class="material-icons left">contact_mail</i>   <a href="mailto:hferreir@itmorelia.edu.mx">hferreir@itmorelia.edu.mx</a> 
                        <br><i class="material-icons left">web</i>  <a href="http://dsc.itmorelia.edu.mx/~hferreir/">http://dsc.itmorelia.edu.mx/~hferreir/</a>
                    </p>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Christian.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">M.C. Cristhian Torres Millarez<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">M.C. Cristhian Torres Millarez<i class="material-icons right">close</i></span>
                     <p>
                        Es Ing. en Sistemas Computacionales por el Instituto Tecnológico de Morelia. Es Maestría en Ciencias de la Computación y Matemáticas Industriales por el Centro de Investigación en Matemáticas (CIMAT). Es Perfil Deseable del PROMEP. Es Jefe del Departamento de Servicios Escolares. Sus áreas de interés son la Seguridad Informática y el Cómputo Matemático.
                    </p>
                    <p><B>Datos de Contacto</B><br>
                        <i class="material-icons left">contact_phone</i>  (443) 3121570 ext. 216
                        <br><i class="material-icons left">contact_mail</i>  <a href="mailto:cristhiantm@itmorelia.edu.mx">cristhiantm@itmorelia.edu.mx</a> 
                    </p>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Miriam-Zulma.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">M.C. Miriam Zulma Sánchez Hernández<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">M.C. Miriam Zulma Sánchez Hernández<i class="material-icons right">close</i></span>
                     <p>
                        Es Lic. en Informática por el Instituto Tecnológico de Zacatepec. Es Maestra en Ciencias Computacionales por el Centro Nacional de Investigación y Desarrollo Tecnológico (CENIDET). Sus áreas de interés son la Ing. de Software y las Tecnologías Web.
                    </p>
                    <p><B>Datos de Contacto</B><br>
                        <i class="material-icons left">contact_mail</i>  <a href="mailto:mzulma@itmorelia.edu.mx">mzulma@itmorelia.edu.mx</a>
                    </p>
            </div>
        </div>
    </div>
    
    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Abel-Pintor.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">M.C. Abel Alberto Pintor Estrada<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">M.C. Abel Alberto Pintor Estrada<i class="material-icons right">close</i></span>
                     <p>
                        Es Lic. en Informática por el Instituto Tecnológico de Morelia.  Maestro en Ciencias en Ciencias de la Computación por el Instituto Tecnológico de Morelia. Sus áreas de interés son la Calidad del Software y los Compiladores. Actualmente es el coordinador de la Maestría en Sistemas Computacionales.
                    </p>
                    <p><B>Datos de Contacto</B><br>
                        <i class="material-icons left">contact_phone</i>  (443) 3121570 ext. 235
                        <br><i class="material-icons left">contact_mail</i>  <a href="mailto:aapintor@itmorelia.edu.mx">aapintor@itmorelia.edu.mx</a>
                    </p>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Juan-Carlos.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">M.C. Juan Carlos Olivares Rojas<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">M.C. Juan Carlos Olivares Rojas<i class="material-icons right">close</i></span>
                     <p>
                        Es Ing. en Sistemas Computacionales por el Instituto Tecnológico de Morelia y Maestro en Ciencias en Ciencias de la Computación por el Centro Nacional de Investigación y Desarrollo Tecnológico (CENIDET). Sus áreas de interés son la Ing. de Software y el Cómputo Móvil.
                    </p>
                    <p><B>Datos de Contacto</B>
                        <br><i class="material-icons left">contact_phone</i>  (443) 3121570 ext. 235
                        <br><i class="material-icons left">contact_mail</i>  <a href="mailto:jcolivares@itmorelia.edu.mx">jcolivares@itmorelia.edu.mx</a> 
                        <br><i class="material-icons left">web</i>  <a href="http://dsc.itmorelia.edu.mx/~jcolivares">http://dsc.itmorelia.edu.mx/~jcolivares</a>
                        <br><img src="images/twitter-24.png" class="responsive-img"> @jcolivares
                        <br><img src="images/facebook-26.png" class="responsive-img">  /juancarlosolivares
                    </p>
            </div>
        </div>
    </div>    

    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Gabriela-Lua.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">M.C. Gabriela Lúa Vargas<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">M.C. Gabriela Lúa Vargas<i class="material-icons right">close</i></span>
                     <p>
                        Es Ingeniera en Sistemas Computacionales por el Instituto Tecnológico de Morelia. Es Maestra en Ciencias en Ciencias de la Computación por el Instituto Tecnológico de Morelia. Sus áreas de interés son los lenguajes de programación.
                    </p>
                    <p><B>Datos de Contacto</B>
                        <br><i class="material-icons left">contact_phone</i>  (443) 3121570 ext. 235
                        <br><i class="material-icons left">contact_mail</i>  <a href="mailto:gluav@itmorelia.edu.mx">gluav@itmorelia.edu.mx</a> 
                    </p>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Rogelio-Ferreira.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">M.C. Rogelio Ferreira Escutia<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">M.C. Rogelio Ferreira Escutia<i class="material-icons right">close</i></span>
                     <p>
                        Es Ing. en Electrónica por el Instituto Tecnológico de Morelia. Es Maestro en Ciencias Computacionales por el Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Cuernavaca. 
                    </p>
                    <p><B>Datos de Contacto</B>
                        <br><i class="material-icons left">contact_phone</i>  (443) 3121570 ext. 235
                        <br><i class="material-icons left">contact_mail</i>  <a href="mailto:rogelio@itmorelia.edu.mx">rogelio@itmorelia.edu.mx</a>
                    </p>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l3">
        <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/docentes/Benito-Sanchez.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">M.C. Benito Sánchez Raya<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">M.C. Benito Sánchez Raya<i class="material-icons right">close</i></span>
                    <p>
                    Es Ingeniero en Sistemas Computaciones, con Maestría en Ciencias de la Computación, ambos por el Instituto Tecnológico de Morelia.
                    </p>
                    <p>
                    Perfil enfocado al Derecho Informático y Sistemas Operativos, con experiencia en nuestro marco jurídico mexicano sobre legislación informática; además de los sistemas operativos de servidores, desde los sistemas operativos propietarios como Windows Server, hasta los sistemas operativos libres como Linux Server y Cloud.
                    </p><p>
                    Actualmente es Jefe del Departamento de Sistemas y Computación
                    </p>
                    <p><B>Datos de Contacto</B><br>
                        <i class="material-icons left">contact_phone</i> (443) 3121570 ext. 235
                        <br><i class="material-icons left">contact_mail</i> <a href="mailto:bsanchez@itmorelia.edu.mx">bsanchez@itmorelia.edu.mx</a> 
                    </p>
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
