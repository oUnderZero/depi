
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plan de estudios</title>

    <link href="./../favicon.ico" rel="icon">
    <link rel="stylesheet" href="./../css/main.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./../css/uikit-rtl.css">
    <link rel="stylesheet" href="./../css/theme.css">


</head>

<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbarMainCollapse">
                        <span class="sr-only">Interruptor de Navegaci&oacute;n</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://www.gob.mx/">
                        <img src="../resources/images/logoheader.svg" width="128" height="48"
                            alt="Página de inicio, Gobierno de México">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarMainCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.gob.mx/tramites">Tr&aacute;mites</a></li>
                        <li><a href="https://www.gob.mx/gobierno">Gobierno</a></li>
                        <li><a href="https://www.gob.mx/busqueda"><span class="sr-only">B&uacute;squeda</span><i
                                    class="icon-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- TO-DO arreglar los logos (responsividad) -->
    <div class="uk-flex _background _white" style="padding: 20px; padding-bottom: 10px; ">
        <div class="">
            <a href="index.html" style="z-index:2001" id="pleca_1">
                <img src="./../resources/images/pleca-gob1.png" alt="GobMX" class="plecaGobMx">
            </a>
        </div>
        <div class="">
            <a href="index.html" style="z-index:2001" id="pleca_2">
                <img src="./../resources/images/pleca-gob2.png" alt="Educacion" class="plecaGobMx">
            </a>
        </div>
        <div class="">
            <a href="index.html" style="z-index:2001" id="pleca_3">
                <img src="./../resources/images/pleca_tecnm.jpg" alt="TecNM" class="plecaTECNM">
            </a>
        </div>
    </div>
    
    <!-- TO-DO: Si se elimina navbar-left, navbar-right no funciona -->
    <div uk-sticky="offset:50px; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-navbar _background _blue" uk-navbar="">
    
            <div class="uk-navbar-left uk-flex uk-flex-middle uk-visible@s">
                <a href="../mia.php" class="_text _white">
                    <img src="../resources/images/mia.png" style="max-height: 100px; max-width: 100px;">
                </a>
            </div>
    
            <div class="uk-navbar-right">
    
                <!-- Dropdown INFO -->
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <a class="_text _white" href="../info.php/">Información</a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="../info.php/#lanes">Lineas de investigación</a></li>
                                <li><a href="../info.php/#teachers">Profesores</a></li>
                                <li><a href="../info.php/#alumns">Alumnos</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
    
                <!-- Dropdown PLAN DE ESTUDIOS -->
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <a class="_text _white" href="../plan.php/">Plan de estudios</a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="../plan.php/#entry">Perfil de ingreso</a></li>
                                <li><a href="../plan.php/#egress">Perfil de egreso</a></li>
                                <li><a href="../plan.php/#requirements">Requisitos</a></li>
                                <li><a href="../plan.php/#struct">Estructura del plan de estudios</a></li>
                                <li><a href="../plan.php/#map">Mapa curricular</a></li>
                                <li><a href="../plan.php/#complementary">Actividades Complementarias</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
    
                <!-- Dropdown CONVOCATORIA -->
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <a class="_text _white" href="../convocatoria.php/">Convocatoria</a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="../convocatoria.php/#dates">Fechas</a></li>
                                <li><a href="../convocatoria.php/#requirements">Requisitos de admisión</a></li>
                                <li><a href="../convocatoria.php/#docs">Documentación</a></li>
                                <li><a href="../convocatoria.php/#admision">Procedimiento de admisión</a></li>
                                <li><a href="../convocatoria.php/#scholarships">Becas</a></li>
                                <li><a href="../convocatoria.php/#studyguide">Guía de estudio</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="uk-navbar-nav uk-visible@m">
                    <li uk-tooltip="title: Sistema de gestión escolar; pos: bottom">
                        <a href="https://morelia.tecsge.com/login" target="_blank" class="_text _white">SGE</a>
                    </li>
                </div>
    
    
                <a href="#" class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon
                    uk-toggle="target: #offcanvas-nav-primary"></a>
                <div class="uk-navbar-center uk-hidden@s">
                    <a href="../" class="_text _white">
                        <img src="../resources/images/mia.png" style="max-height: 100px; max-width: 100px;">
                    </a>
                </div>
            </div>
        </nav>
    </div>
    
    
    <div id="sidenav" uk-offcanvas="flip: true; mode: slide" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav">
                <li><a class="uk-text-large" href="index.html">MIA</a></li>
            </ul>
        </div>
    </div>
    
    <div id="offcanvas-nav-primary" class="uk-hidden@m " uk-offcanvas="overlay: true; flip: true; mode: slide">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column _background _blue">
            <ul class="uk-nav uk-nav-default uk-margin-auto-vertical">
    
                <!-- Dropdown INFO -->
                <li class="uk-parent">
                    <a class="uk-nav-header" href="#"
                        uk-toggle="target: #toggle-info; animation: uk-animation-fade">Información</a>
                    <ul id="toggle-info" class="uk-nav-sub" hidden>
                        <li><a href="../info.php/#lanes">Lineas de investigación</a></li>
                        <li><a href="../info.php/#teachers">Profesores</a></li>
                        <li><a href="../info.php/#alumns">Alumnos</a></li>
                    </ul>
                </li>
    
                <!-- Dropdown PLAN DE ESTUDIOS -->
                <li class="uk-parent">
                    <a class="uk-nav-header" href="#" uk-toggle="target: #toggle-plan; animation: uk-animation-fade">Plan de
                        estudios</a>
                    <ul id="toggle-plan" class="uk-nav-sub" hidden>
                        <li><a href="../plan.php/#entry">Perfil de ingreso</a></li>
                        <li><a href="../plan.php/#egress">Perfil de egreso</a></li>
                        <li><a href="../plan.php/#requirements">Requisitos</a></li>
                        <li><a href="../plan.php/#struct">Estructura del plan de estudios</a></li>
                        <li><a href="../plan.php/#map">Mapa curricular</a></li>
                        <li><a href="../plan.php/#complementary">Actividades Complementarias</a></li>
                    </ul>
                </li>
    
                <!-- Dropdown CONVOCATORIA -->
                <li class="uk-parent">
                    <a class="uk-nav-header" href="#"
                        uk-toggle="target: #toggle-convo; animation: uk-animation-fade">Convocatoria</a>
                    <ul id="toggle-convo" class="uk-nav-sub" hidden>
                        <li><a href="../convocatoria.php/#dates">Fechas</a></li>
                        <li><a href="../convocatoria.php/#requirements">Requisitos de admisión</a></li>
                        <li><a href="../convocatoria.php/#docs">Documentación</a></li>
                        <li><a href="../convocatoria.php/#admision">Procedimiento de admisión</a></li>
                        <li><a href="../convocatoria.php/#scholarships">Becas</a></li>
                        <li><a href="../convocatoria.php/#studyguide">Guía de estudio</a></li>
                    </ul>
                </li>
                <li class="uk-active">
                    <a href="https://morelia.tecsge.com/login" target="_blank" class="_text _white">SGE</a>
                </li>
            </ul>
    
        </div>
    </div>

    <main class="container">
        <div class="container" id="main_container">
            <div class="uk-child-width-expand@s" uk-grid>
                <div class="uk-width-expand@m">
                    <!-- Perfil de ingreso -->
                    <div class="uk-section " id="entry">
                        <h1>Perfil de ingreso</h1>
                        <hr>
                        <div class="_justified">
                            <p>
                                La maestría está dirigida a estudiantes egresados de las licenciaturas en: 
                            </p> 
                            <ul>
                                <li>
                                    Ingeniería Industrial
                                </li>
                                <li>
                                    Ingeniería en Gestión Empresarial
                                </li>
                                <li>
                                    Ingeniería Administrativa
                                </li>
                                <li>
                                    Licenciatura en Administración
                                </li>
                                <li>
                                    Contador Público 
                                </li>
                                <li>
                                    O ramas afines de la Ingeniería o Licenciatura
                                </li>
                            </ul>
                            <p>
                                que hayan obtenido un promedio mínimo de 80 o equivalente, titulados, con conocimiento del
                                idioma inglés, que tengan interés en formarse como recursos humanos altamente especializados en los tópicos actuales de
                                la ingeniería administrativa, en el marco de las tendencias mundiales.
                            </p>
                            <p></p>
                            <div id="entry_process">
                                <div class="uk-container" style="padding-top: 50px;">
                                    <h3>Procedimiento de ingreso</h3>
                                    <p>
                                        Los aspirantes a cursar la Maestría en Ingeniería Administrativa con orientación profesional, deben ser egresados de
                                        licenciatura en áreas afines al programa, y titulados, así como demostrar dominio de los conocimientos considerados como
                                        fundamentales para garantizar su conclusión exitosa.
                                    </p>
                                    <p>
                                        Existirán dos formas de cursar el programa de Maestría en Ingeniería con orientación Profesional:
                                    </p>
                                    <ol>
                                        <li>
                                            <strong>Convocatoria abierta</strong>: Esta forma es escolarizada y ofrecida dentro de las instalaciones del Instituto
                                            Tecnológico de Morelia. 
                                        </li>
                                        <li>
                                            <strong>Mediante convenio</strong>: Esta forma es la que se hace mediante convenio con compañías, empresas o instituciones para
                                            que un grupo determinado de sus trabajadores y/o interesados en general curse este programa de maestría. El lugar donde se
                                            impartiría la maestría, así como el plan de materias de la maestría, se estipulará dentro de un convenio.
                                        </li>
                                    </ol>
                                    <p>
                                        Los alumnos de maestría, para cubrir la totalidad de los créditos del plan de estudios y obtener su grado, disponen de
                                        cuatro años como máximo a partir de la fecha de ingreso al programa.
                                    </p>
                                </div>
                            </div>
                            <div id="entry_perm">
                                <div class="uk-container" style="padding-top: 50px;">
                                    <h3>Permanencia en el programa</h3>
                                    <p>
                                        Para que un estudiante de la maestría permanezca como alumno regular del programa debe cumplir con lo siguiente:
                                    </p>
                                    <ul>
                                        <li>
                                            Inscribirse en el periodo correspondiente durante todo el programa, hasta la obtención del grado.
                                        </li>
                                        <li>
                                            Dedicar el tiempo suficiente a la realización de su proyecto de innovación y posteriormente a la tesis.
                                        </li>
                                        <li>
                                            No abandonar sus estudios por un periodo mayor a seis meses sin previa autorización del Jefe de la DEPI. Las bajas
                                            temporales y definitivas serán solicitadas al Coordinador y valoradas por el Consejo de Posgrado.
                                        </li>
                                        <li>
                                            Acreditar con una calificación mínima de 70 todas las asignaturas y mantener un promedio mínimo de 80.
                                        </li>
                                        <li>
                                            No reprobar en dos ocasiones una misma asignatura o reprobar dos asignaturas diferentes.
                                        </li>
                                        <li>
                                            Presentar los avances de su proyecto de innovación cuando sea requerido por el comité tutorial, avalado por el director
                                            del proyecto de tesis.
                                        </li>
                                        <li>
                                            Obtener el grado de maestro en ingeniería dentro de los primeros cuatro años contados a partir de su ingreso al
                                            programa. Después de este período, deberá ajustarse a los requerimientos indicados en el Documento Normativo de
                                            Posgrados.
                                        </li>
                                        <li>
                                            Observar las disposiciones reglamentarias para el buen funcionamiento de la institución y no ser sujeto de sanciones por
                                            parte de las autoridades competentes.
                                        </li>
                                    </ul>
                                    <p>
                                        Por el incumplimiento de cualquiera de estas disposiciones serán dados de baja definitiva del programa. Los alumnos de
                                        maestría en ingeniería no tienen la opción de baja parcial de asignaturas.
                                    </p>
                                    <div id="entry_process">
                                
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Perfil de egreso -->
                    <div class="uk-section " id="egress">
                        <h1>Perfil de egreso</h1>
                        <hr>
                        <div class="_justified">
                            <p>
                                Los egresados del programa de Maestría en Ingeniería Administrativa adquieren una formación científica y tecnológica que
                                les permite tener:
                            </p>
                            <ol>
                                <li>
                                    Identificar, plantear y resolver problemas relativos a las áreas básicas de la ingeniería administrativa con un enfoque
                                    sistémico y sustentable en áreas afines de la Administración y Gestión.
                                </li>
                                <li>
                                    Presentar desarrollos creativos, emprendedores e innovadores que propongan nuevas alternativas para el diseño, análisis,
                                    implementación, administración, operación y control de la producción y las operaciones de bienes y servicios.
                                </li>
                                <li>
                                    Desarrollar publicaciones técnico-científicas con arbitraje en alguna de las áreas de la Ingeniería Administrativa.
                                </li>
                                <li>
                                    Participar de manera efectiva, eficiente y ética en equipos de trabajo interdisciplinarios para desarrollar soluciones a
                                    situaciones problemáticas en las que la Ingeniería Administrativa sea pertinente.
                                </li>
                            </ol>
                            <div id="action_field">
                                <div class="uk-container" style="padding-top: 50px;">
                                    <h3>Campo de acción</h3>
                                    <p>
                                        El campo de acción de los egresados de la Maestría en Ingeniería Administrativa con orientación Profesional está en las
                                        distintas áreas de la empresa productora de bienes y servicios, empresas de consultoría, instituciones y dependencias
                                        públicas; y en general, en organizaciones donde se requiera diseñar, implementar, administrar, gestionar y optimizar
                                        recursos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Campo de accion  -->
                        
                    </div>

                    <!-- Requisitos -->
                    <div class="uk-section " id="requirements">
                        <h1>Requisitos para la obtención del grado</h1>
                        <hr>
                        <div class="_justified">
                            <p>
                                Se otorga el grado de Maestro en Ingeniería a quien cumpla con las normas vigentes en la Secretaría de Educación
                                Pública, los requisitos señalados en los lineamientos para la operación de Estudios de Posgrado del Tecnológico Nacional
                                de México y los señalados en el documento anexado.
                            </p>
                            <p>
                                Para la obtención del grado de Maestro en Ingeniería correspondiente, se requiere la elaboración de una tesis (proyecto
                                terminal). La tesis es un proyecto mediante el cual se identifica un problema, sobre el cual se realiza un análisis de
                                estado del arte y se proponen soluciones concretas en base a una metodología establecida. Al final, se presenta en un
                                documento formal, impreso, bien redactado y estructurado.
                            </p>
                            <p>
                                A continuación se enumeran los requisitos para la obtención del grado de Maestría en Ingeniería Administrativa por parte
                                del Instituto Tecnológico de Morelia:
                            </p>
                            <ol>
                                <li>
                                    Haber cubierto satisfactoriamente 100 créditos contemplados en el Plan de Estudios, compuestos de 48 créditos de
                                    Asignaturas Básicas y Optativas, 12 créditos de Seminarios de Investigación y 40 créditos de Tesis.
                                </li>
                                <li>
                                    Desarrollar y presentar un proyecto de estudio individual de carácter técnico en forma de tesis.
                                </li>
                                <li>
                                    Presentar evidencia de alguno de los  productos derivados del trabajo de tesis. Para la acreditación de este requisito
                                    será suficiente presentar constancia del inicio del trámite, en su caso, o bien constancia emitida por el ente facultado
                                    para ello, como puede ser la empresa beneficiada.
                                </li>
                                <li>
                                    Contar con la autorización de impresión de la tesis emitida por el Jurado del Examen y por el Jefe de la División de
                                    Estudios de Posgrado e Investigación.
                                </li>
                                <li>
                                    Cubrir los requisitos administrativos que establezca el Departamento de Servicios Escolares.
                                </li>
                                <li>
                                    Presentar y aprobar el examen de grado correspondiente.
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- Estructura del plan de estudios -->
                    <div class="uk-section " id="struct">
                        <h1>Estructura del plan de estudios</h1>
                        <hr>
                        <div class="_justified">
                            <p>
                                En  la  Maestría  en  Ingeniería  Administrativa  los  créditos  a  cubrir  son  100  y  su  plan  de estudios se estructura de la siguiente manera:
                            </p>
                            <ul uk-accordion>
                                <li>
                                    <a class="uk-accordion-title" href="#">Plan de estudios</a>
                                    <div class="uk-accordion-content">
                                        <hr>
                                        <div class="uk-overflow-auto uk-container">
                                            <table class="uk-table uk-table-divider uk-table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: start;">Asignaturas</th>
                                                        <th style="text-align: start;" class="uk-table-shrink">Créditos</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td>Asignatura básica 1</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Asignatura básica 2</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Asignatura básica 3</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Asignatura básica 4</td>
                                                        <td>6</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Asignatura optativa 1</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Asignatura optativa 2</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Asignatura optativa 3</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Asignatura optativa 4</td>
                                                        <td>6</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Seminario de investigación I</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seminario de investigación II</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seminario de investigación III</td>
                                                        <td>4</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Tesis (Proyecto terminal)</td>
                                                        <td>40</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                    </div>
                                </li>
                            </ul>
                            <p>
                                Durante su estancia en el Programa de Maestría el alumno cursará 24 créditos en asignaturas básicas y 24 créditos en
                                asignaturas optativas, ambos tipos de materias se escogen de bancos de asignaturas conformados de acuerdo a las áreas de
                                investigación.
                            </p>
                            <p>
                                La selección de las asignaturas básicas y optativas a cursar por el alumno se realizará en función de su tema de tesis.
                                Es decir, el alumno cursará aquellas asignaturas que contribuyan a la realización de su tesis de grado, así como a su
                                formación académica. La selección de las asignaturas se realizará en común acuerdo con su director de tesis, y tomando
                                en cuenta el área de conocimiento del proyecto terminal.
                            </p>

                            <ul uk-accordion>
                                <li>
                                    <a class="uk-accordion-title" href="#">Seminarios</a>
                                    <div class="uk-accordion-content uk-container">
                                        <hr>
                                        <p>
                                            En el <strong> Seminario de investigación I</strong>, se realiza una revisión bibliográfica y el estudiante adquiere
                                            los elementos necesarios para formular y defender el protocolo de su proyecto de tesis.
                                        </p>
                                        <p>
                                            En el <strong> Seminario de investigación II</strong>, el estudiante presenta avances de su proyecto de tesis en
                                            forma oral y escrita, y además participa en actividades académicas programadas para fortalecer su formación.
                                        </p>
                                        <p>
                                            En el <strong> Seminario de investigación III</strong>, el estudiante presentará el cumplimiento de los objetivos de
                                            su proyecto de investigación, a través de la pre-defensa de su proyecto de tesis.
                                        </p>
                                        <p>
                                            La calificación de las asignaturas <strong> Seminario de investigación I, II </strong>y <strong> III</strong> es
                                            asignada por un comité tutorial que revisa, evalúa y da seguimiento al avance del proyecto de Tesis.
                                        </p>
                                        <hr>
                                    </div>
                                </li>
                            </ul>
                            <p>
                                Una vez acreditados todos los créditos y elaborado su tesis, el alumno deberá presentar su  examen  de  grado.  En  este  examen,  el  alumno  demostrará  con  evidencias  los resultados  de  su  investigación  ante  el  Comité  de  Revisión,  en  fecha  acordada  entre  el director de tesis y el alumno. El resultado del examen podrá ser:
                            </p>
                            <ul>
                                <li>    
                                    Aprobado.   En   este   caso   se   le   otorga   el   grado   de   Maestro   en   Ingeniería Administrativa.
                                </li>
                                <li>
                                    Suspendido.  En este caso el comité tutorial emitirá uno de los siguientes fallos:
                                    <ol>
                                        <li>
                                            Repetir el examen, por única vez en un periodo no mayor a seis meses.
                                        </li>
                                        <li>
                                            Dar de baja al estudiante.
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                            <p>
                                A continuación, se  presentan  las  asignaturas  del  plan  de estudios agrupadas en asignaturas básicas y asignaturas optativas, que abarcan las tres líneas de investigación. 
                            </p>
                            <ul uk-accordion>
                                <li>
                                    <a class="uk-accordion-title" href="#">Asignaturas básicas</a>
                                    <div class="uk-accordion-content uk-container">
                                        <hr>
                                        <div class="uk-overflow-auto">
                                            <table class="uk-table uk-table-divider uk-table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: start;">Clave</th>
                                                        <th style="text-align: start;">Asignaturas</th>
                                                        <th style="text-align: start;" class="uk-table-shrink">Créditos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>MPIAD-01</td>
                                                        <td>Fundamentos de ingeniería administrativa</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-02</td>
                                                        <td>Finanzas</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-03</td>
                                                        <td>Administración de la producción</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-04</td>
                                                        <td>Métodos cuantitativos para la toma de decisiones</td>
                                                        <td>6</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Asignaturas  optativas</a>
                                    <div class="uk-accordion-content uk-container">
                                        <hr>
                                        <div class="uk-overflow-auto">
                                            <table class="uk-table uk-table-divider uk-table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: start;">Clave</th>
                                                        <th style="text-align: start;">Asignaturas</th>
                                                        <th style="text-align: start;" class="uk-table-shrink">Créditos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>MPIAD-11</td>
                                                        <td>Control de la gestión en las organizaciones</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-12</td>
                                                        <td>Desarrollo Organizacional</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-13</td>
                                                        <td>Dirección organizacional</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-14</td>
                                                        <td>Gestión del talento humano</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-15</td>
                                                        <td>Administración de la mercadotecnia</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-16</td>
                                                        <td>Administración Estratégica</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-17</td>
                                                        <td>Diseño de experimentos</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-18</td>
                                                        <td>Ingeniería de calidad</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-19</td>
                                                        <td>Procesos esbeltos</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-10</td>
                                                        <td>Gestión de sistemas de calidad</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-11</td>
                                                        <td>Lógistica</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-12</td>
                                                        <td>Análisis económico</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-13</td>
                                                        <td>Administración de proyectos</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-14</td>
                                                        <td>Planeación de operaciones y ventas</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MPIAD-15</td>
                                                        <td>Estadística</td>
                                                        <td>6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Mapa Curricular -->
                    <div class="uk-section " id="map">
                        <h1>Mapa curricular</h1>
                        <hr>
                        <div class="_justified">
                            <p>
                                El mapa curricular de la Maestría en Ingeniería Administrativa se presenta a continuación:
                            </p>
                            <div style="width: 100%; background-color: #0001; border-radius: 10px;" uk-lightbox>
                                <a href="../resources/images/map_full.jpg"><img src="../resources/images/map.svg" alt="" width="100%"></a>

                            </div>
                            <div uk-lightbox>
                                <a href="image.jpg"></a>
                            </div>
                            <p>
                                Descarga el <a href="../resources/mapa_curricular_v1.pdf" download>mapa curricular</a> y el <a href="../resources/asignaturas.pdf" download>temario</a>.
                            </p>

                        </div>
                    </div>

                    <!-- Actividades complementarias -->
                    <div class="uk-section " id="complementary">
                        <h1>Actividades Complementarias</h1>
                        <hr>
                        <div class="_justified">
                            <p>
                                Se programarán actividades para complementar la formación del estudiante, de manera que sea expuesto a ambientes y
                                situaciones que promuevan el desarrollo de habilidades. 
                            </p>
                            <p>
                                Esto incluye, por ejemplo, la experiencia de presentar reportes
                                y anteproyectos de investigación, elaborar artículos técnicos y presentar reportes de investigación. Lo anterior se
                                realizará al participar en los Seminarios de Investigación y en congresos estudiantiles, exponiendo los resultados de su
                                trabajo de investigación. Estas actividades se consideran preparatorias para la presentación y defensa de su tesis.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="uk-visible@m uk-width-1-4@m">
                    <div uk-sticky="offset: 200; bottom: #main_container" style="z-index: 0;">

                        <ul class="uk-nav-default uk-nav" uk-scrollspy-nav="closest: h1; scroll: true; offset:100"
                            style="padding-top: 30px; padding-bottom: 30px;">
                            <li class="uk-active"><a href="#entry">Perfil de ingreso</a></li>
                                <li><a href="#entry_process" style="font-size: 0.8rem; margin-left: 1.2rem;">Procedimiento de ingreso</a></li>
                                <li><a href="#entry_perm" style="font-size: 0.8rem; margin-left: 1.2rem;">Permanencia en el programa</a></li>
                            <li class="uk-active"><a href="#egress">Perfil de egreso</a></li>
                                <li><a href="#action_field" style="font-size: 0.8rem; margin-left: 1.2rem;">Campo de acción</a></li>
                            <li class="uk-active"><a href="#requirements">Requisitos</a></li>
                            <li class="uk-active"><a href="#struct">Estructura del plan de estudios</a></li>
                            <li class="uk-active"><a href="#map">Mapa curricular</a></li>
                            <li class="uk-active"><a href="#complementary">Actividades Complementarias</a></li>
                            <li class="uk-nav-divider"></li>
                            <li class="uk-active"><a href="../resources/plan_de_estudios.pdf" target="_blank"> <span uk-icon="cloud-download"></span> Descargar Plan de estudios </a></li>
                    </div>
                </div>
            </div>

    </main>
    <footer class="main-footer">
        <div class="uk-section uk-section-muted uk-margin-medium-bottom">
            <h1 class="uk-text-center">
                Síguenos
            </h1>
      
            <div class="media-container-row" style="text-align:center">
    
                <!-- Facebook MIA-->
                <iframe style="margin-top:15px;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftecnm.morelia.mia%2F&tabs=timeline&width=350&height=525&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="525" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    
                <!--Youtube ITM-->
                <iframe style="margin-top:15px;" width="350" height="525" src="https://www.youtube.com/embed/9so58PYOXiY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
                <!--Facebook ITM-->
                <iframe style="margin-top:15px;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FITMoreliaOficial%2F&tabs=timeline&width=350&height=525&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="525" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    
            </div>
        </div>
        <div class="list-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <img data-v-9e928f9a="" src="./../resources/images/logoheader.svg" href="/"
                            alt="logo gobierno de méxico" class="logo_footer" style="max-width: 90%;">
                    </div>
                    <div class="col-sm-3">
                        <h5 class="_mx_h5 _text _white">Enlaces</h5>
                        <ul>
                            <li><a href="https://participa.gob.mx" target="_blank" rel="noopener"
                                    title="Enlace abre en ventana nueva">Participa</a></li>
                            <li><a href="https://www.gob.mx/publicaciones" target="_blank" rel="noopener"
                                    title="Enlace abre en ventana nueva">Publicaciones Oficiales</a></li>
                            <li><a href="http://www.ordenjuridico.gob.mx" target="_blank" rel="noopener"
                                    title="Enlace abre en ventana nueva">Marco Jurídico</a></li>
                            <li><a href="https://consultapublicamx.inai.org.mx/vut-web/" target="_blank" rel="noopener"
                                    title="Enlace abre en ventana nueva">Plataforma Nacional de Transparencia</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5 class="_mx_h5 _text _white"> &iquest;Qu&eacute; es gob.mx?</h5>
                        <p>Es el portal &uacute;nico de tr&aacute;mites, informaci&oacute;n y
                            participaci&oacute;nciudadana. <a href="https://www.gob.mx/que-es-gobmx">Leer m&aacute;s</a>
                        </p>
                        <ul>
                            <li><a href="https://datos.gob.mx">Portal de datos abiertos</a></li>
                            <li><a href="https://www.gob.mx/accesibilidad">Declaración de accesibilidad</a></li>
                            <li><a href="https://www.gob.mx/privacidadintegral">Aviso de privacidad integral</a></li>
                            <li><a href="https://www.gob.mx/privacidadsimplificado">Aviso de privacidad simplificado</a>
                            </li>
                            <li><a href="https://www.gob.mx/terminos">T&eacute;rminos y Condiciones</a></li>
                            <li><a href="https://www.gob.mx/terminos#medidas-seguridad-informacion">Política de
                                    seguridad</a></li>
                            <li><a href="https://www.gob.mx/terminos#medidas-seguridad-informacion">Mapa de sitio</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5 class="_mx_h5 _text _white"><a
                                href="https://www.gob.mx/tramites/ficha/presentacion-de-quejas-y-denuncias-en-la-sfp/SFP54">Denuncia
                                contra servidores públicos</a></h5>
                        <h5 class="_mx_h5 _text _white">S&iacute;guenos en</h5>
                        <ul class="list-inline">
                            <li><a class="social-icon facebook" target="_blank" rel="noopener"
                                    title="Enlace abre en ventana nueva" href="https://www.facebook.com/gobmexico"
                                    aria-label="Facebook de presidencia"></a></li>
                            <li><a class="social-icon twitter" target="_blank" rel="noopener"
                                    title="Enlace abre en ventana nueva" href="https://twitter.com/GobiernoMX"
                                    aria-label="Twitter de presidencia"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-pleca">
            <div class="row">
                <div class="col">
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </footer>

    <script src="./../js/jquery.min.js"></script>
    <script src="./../js/plugins.js"></script>
    <script src="./../js/uikit.min.js"></script>
    <script src="./../js/uikit-icons.min.js"></script>

</body>

</html>