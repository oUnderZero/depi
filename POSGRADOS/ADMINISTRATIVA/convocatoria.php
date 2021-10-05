
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Convocatoria</title>

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
                        <img src="./../resources/images/logoheader.svg" width="128" height="48"
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
            <a href="https://www.gob.mx/" target="_blank" style="z-index:2001" id="pleca_1">
                <img src="./../resources/images/pleca-gob1.png" alt="GobMX" class="plecaGobMx">
            </a>
        </div>
        <div class="">
            <a href="https://www.gob.mx/sep" target="_blank" style="z-index:2001" id="pleca_2">
                <img src="./../resources/images/pleca-gob2.png" alt="Educacion" class="plecaGobMx">
            </a>
        </div>
        <div class="">
            <a href="https://www.tecnm.mx/" target="_blank" style="z-index:2001" id="pleca_3">
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
        <div class="container"  id="main_container"> 
            <div class="uk-child-width-expand@s" uk-grid>
                <div class="uk-width-expand@m" >
                    <!-- Fechas -->
                    <div class="uk-section " id="dates">
                        <h1>Fechas</h1>
                        <hr>
                        <div class="_justified">
                            <img src="../resources/images/banner/convocatoria_2021 prorroga-01.jpg" alt="Image">
                            <p>
                                En esta sección encontrarás todo lo relacionado con el proceso de admisión para el ciclo Agosto-Diciembre de 2021. 
                            </p>
                            <p>
                            La recepción de solicitudes comienza el 1 de marzo de 2021 y finaliza el 30 de mayo de 2021. Llena tu solicitud <a href="https://docs.google.com/forms/d/e/1FAIpQLScQcsV59jo8p0SZmwcj7ZNklUQicKTdejkqKd0mY1ekAVV_AQ/viewform">aquí</a>.
                            </p>
                        </div>
                        <br>
                        <div class="uk-card uk-card-primary uk-card-body uk-width-1-1@m _background _blue">
                            <h3 class="uk-card-title">Prórroga de inscripción</h3>
                            <p>Ampliamos el periodo de inscripción hasta el 13 de junio de 2021. Consulta la nueva convocatoria <a href="../resources/files/CONVOCATORIA_MIA_2021.pdf" target="_blank">aqui</a></p>
                        </div>
                    </div>

                    <!-- Requisitos de admisión -->
                    <div class="uk-section " id="requirements">
                        <h1>Requisitos de admisión</h1>
                        <hr>
                        <div>
                            <ul>
                                <li>Título de licenciatura en:
                                    <ul>
                                        <li>Ingeniería Industrial</li>
                                        <li>Ingeniería en Gestión Empresarial</li>
                                        <li>Ingeniería Administrativa</li>
                                        <li>Administración</li>
                                        <li>Contador Público</li>
                                        <li>Ramas afínes</li>
                                    </ul>
                                </li>
                                <li>Promedio mínimo de 80 (ochenta) en la licenciatura</li>
                                <li>Presentar el examen de Selección</li>
                                <li>Aprobar el examen de Inglés</li>
                                <li>Aprobar el curso propedéutico (si es el caso)</li>
                            </ul>   
                        </div>
                    </div>

                    <div id="docs_header"></div>

                    <!-- Documentación -->
                    <div class="uk-section " id="docs">
                        <h1>Documentación</h1>
                        <hr>
                        <p>Documentos que debes presentar para el proceso de selección.</p>
                        <div>
                            <ul uk-accordion>
                                <li>
                                    <a class="uk-accordion-title" href="#">Egresados ITM</a>
                                    <div class="uk-accordion-content">
                                        <hr>
                                        <ul>
                                            <li>Solicitud</li>
                                            <li>Título (Copia)</li>
                                            <li>Cédula (Copia)</li>
                                            <li>CURP (Copia)</li>
                                            <li>Acta de Nacimiento (Copia)</li>
                                            <li>Recibo oficial de pago</li>
                                            <li>Alta en IMSS</li>
                                            <li>2 Cartas de Recomendación</li>
                                            <li>2 fotos tamaño infantil</li>
                                            <li>Comprobante de Idioma Inglés</li>
                                            <li>Pago correspondiente</li>
                                        </ul>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Alumnos externos</a>
                                    <div class="uk-accordion-content">
                                        <hr>
                                        <ul>
                                            <li>Solicitud</li>
                                            <li>Título (Copia)</li>
                                            <li>Cédula (Copia)</li>
                                            <li>CURP (Copia)</li>
                                            <li>Acta de Nacimiento (Copia)</li>
                                            <li>Recibo oficial de pago</li>
                                            <li>Alta en IMSS</li>
                                            <li>2 Cartas de Recomendación</li>
                                            <li>2 fotos tamaño infantil</li>
                                            <li>Comprobante de Idioma Inglés</li>
                                            <li>Pago correspondiente</li>
                                            <li>Certificado de Bachillerato (Original y Copia)</li>
                                            <li>Certificado de Licenciatura (Original y Copia)</li>
                                        </ul>
                                        <hr>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Procedimiento de admisión -->
                    <div class="uk-section " id="admision">
                        <h1>Procedimiento de admisión</h1>
                        <hr>
                        <p>
                            Las opciones para ser candidatos a ingresar como estudiantes de maestría son las siguientes:
                        </p>
                        <div>
                            <ul uk-accordion>
                                <li>
                                    <a class="uk-accordion-title" href="#">Curso propedéutico</a>
                                    <div class="uk-accordion-content">
                                        <hr>
                                        <p class="uk-text-justify">
                                            Para ser considerado en el proceso de admisión, el aspirante deberá aprobar todas las materias del curso propedéutico con una calificación mínima de 70 en una escala de 0 a 100.</p>
                                            <strong>Requisitos:</strong>
                                        <ul>
                                            <li>Solicitud elaborada</li>
                                            <li>Cartas de recomendación</li>
                                            <li>Curriculum vitae (con copia de documentos comprobatorios que acrediten al menos 1 año de experiencia profesional)</li>
                                            <li>Copias de: Certificado de estudios, CURP y acta de nacimiento</li>
                                            <li>Dos fotos tamaño infantil</li>
                                            <li>Pago correspondiente</li>
                                        </ul>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Examen de admisión</a>
                                    <div class="uk-accordion-content">
                                        <hr>
                                        <p>Para ser considerado en el proceso de admisión, el aspirante deberá aprobar todas las materias examinadas con una calificación mínima de 70 en una escala de 0 a 100.</p>
                                        <strong>Requisitos:</strong>
                                        <ul>
                                            <li>Solicitud elaborada</li>
                                            <li>Cartas de recomendación</li>
                                            <li>Curriculum vitae (con copia de documentos comprobatorios que acrediten al menos 1 año de experiencia profesional)</li>
                                            <li>Copias de: Certificado de estudios, CURP y acta de nacimiento</li>
                                            <li>Dos fotos tamaño infantil</li>
                                            <li>Pago correspondiente</li>
                                        </ul>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Trayectoria académica</a>
                                    <div class="uk-accordion-content">
                                        <hr>
                                        <p>El promedio de licenciatura mínimo para solicitar admisión por esta opción es de 90 en una escala de 0 a 100. Además, el estudiante debe haber participado de forma destacada en uno o más de los siguientes eventos académicos:</p>
                                        <ul>
                                            <li>Concurso de Ciencias Básicas</li>
                                            <li>Concurso de Creatividad</li>
                                            <li>Concurso de Emprendedores</li>
                                            <li>Verano de la Investigación Científica</li>
                                            <li>Programa Delfín</li>
                                            <li>Como ponente en un congreso o seminario</li>
                                            <li>Participar en un proyecto de investigación en el área</li>
                                            <li>Otro a ser evaluado por el Comité de Admisión.</li>
                                        </ul>
                                        <p>Requisitos:</p>
                                        <ul>
                                            <li>Solicitud elaborada</li>
                                            <li>Cartas de recomendación</li>
                                            <li>Curriculum vitae (con copia de documentos comprobatorios que acrediten al menos 1 año de experiencia profesional)</li>
                                            <li>Copias de: Certificado de estudios, CURP y acta de nacimiento</li>
                                            <li>Dos fotos tamaño infantil</li>
                                            <li>Pago correspondiente</li>
                                        </ul>
                                        <hr>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <hr>

                        <!-- Procedimiento de admision bueno -->
                        <div class="uk-slider-container-offset" uk-slider>    
                            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid uk-grid-match" uk-grid uk-height-match="target: .uk-card-body > div">
                                    <!-- PASO 1 -->
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">1. Descargar convocatoria</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="uk-text-center uk-margin-small">
                                                    <time datetime="2021-03-01">Marzo 1, 2021</time>
                                                    -
                                                    <time datetime="2021-05-30">Mayo 30, 2021</time>
                                                </p>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-margin-small">
                                                <button class="uk-button uk-button-text" uk-toggle="target: #modal1">Ver mas</button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- PASO 2 -->
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">2. Solicitud de ingreso</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="uk-text-center uk-margin-small">
                                                    <time datetime="2021-03-01">Marzo 1, 2021</time>
                                                    -
                                                    <time datetime="2021-05-30">Mayo 30, 2021</time>
                                                </p>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-margin-small">
                                                <button class="uk-button uk-button-text" uk-toggle="target: #modal2">Ver mas</button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- PASO 3 -->
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">3. Enviar documentación</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="uk-text-center uk-margin-small">
                                                    <time datetime="2021-03-01">Marzo 1, 2021</time>
                                                    -
                                                    <time datetime="2021-05-30">Mayo 30, 2021</time>
                                                </p>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-margin-small">
                                                <button class="uk-button uk-button-text" uk-toggle="target: #modal3">Ver mas</button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- PASO 4 -->
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">4. Curso propedéutico</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="uk-text-center uk-margin-small">
                                                    <time datetime="2021-06-04">Junio 4, 2021</time>
                                                    -
                                                    <time datetime="2021-06-26">Junio 26, 2021</time>
                                                </p>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-margin-small">
                                                <button class="uk-button uk-button-text" uk-toggle="target: #modal4">Ver mas</button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- PASO 5 -->
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom">5. Examen de admisión</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="uk-text-center uk-margin-small">
                                                    <time datetime="2021-07-3">Julio 3, 2021</time>
                                                </p>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-margin-small">
                                                <button class="uk-button uk-button-text" uk-toggle="target: #modal5">Ver mas</button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- PASO 6 -->
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">6. Entrevista personal</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="uk-text-center uk-margin-small">
                                                    <time datetime="2021-07-05">Julio 5, 2021</time>
                                                    -
                                                    <time datetime="2021-07-09">Julio 9, 2021</time>
                                                </p>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-margin-small">
                                                <button class="uk-button uk-button-text" uk-toggle="target: #modal6">Ver mas</button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- PASO 7 -->
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom">7. Examen de inglés</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="uk-text-center uk-margin-small">
                                                    <time datetime="2021-07-10">Julio 10, 2021</time>
                                                </p>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-margin-small">
                                                <button class="uk-button uk-button-text" uk-toggle="target: #modal7">Ver mas</button>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- PASO 8 -->
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header">
                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                    <div>
                                                        <h3 class="uk-card-title uk-margin-remove-bottom">8. Esperar resultados</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="uk-text-center uk-margin-small">
                                                    <time datetime="2021-07-16">Julio 16, 2021</time>
                                                </p>
                                            </div>
                                            <div class="uk-card-footer uk-text-center uk-margin-small">
                                                <button class="uk-button uk-button-text" uk-toggle="target: #modal8">Ver mas</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>     
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                        </div>
                    </div>

                    <!-- Modal 1 -->
                    <div id="modal1" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h2 class="uk-modal-title">Convocatoria</h2>
                            <p>Descargar y leer la <a href="../resources/files/CONVOCATORIA_MIA_2021.pdf" target="_blank">convocatoria</a>.</p>
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Aceptar</button>
                            </p>
                        </div>
                    </div>

                    <!-- Modal 2 -->
                    <div id="modal2" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h2 class="uk-modal-title">Solicitud</h2>
                            <p>Llenar la <a href="https://forms.gle/BbTqd3JbE7PYNKNm6" target="_blank">solicitud de ingreso </a>.</p>
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Aceptar</button>
                            </p>
                        </div>
                    </div>

                    <!-- Modal 3 -->
                    <div id="modal3" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h2 class="uk-modal-title">Documentación</h2>
                            <p>Enviar la <a href="#docs" onclick="UIkit.modal(modal3).hide();" uk-scroll>documentación</a> correspondiente.</p>
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Aceptar</button>
                            </p>
                        </div>
                    </div>

                    <!-- Modal 4 -->
                    <div id="modal4" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h2 class="uk-modal-title">Propedéutico</h2>
                            <div class="uk-modal-body" uk-overflow-auto>
                                <p>
                                    Si seleccionaste curso propedéutico como opción debes cursarlo y aprobar todos los temas con una calificación mínima de 70 sobre 100.
                                </p>
                                <hr>
                                <p>
                                    Temario para examen de admisión 2021:
                                    <br>
                                    <ul>
                                        <li>Teoría de las organizaciones</li>
                                        <ul>
                                            <li>Proceso Administrativo</li>
                                            <li>Teoría de Sistemas</li>
                                            <li>Teoría de Contingencias</li>
                                            <li>Teoría del Desarrollo Organizacional</li>
                                            <li>Teoría de la Calidad</li>
                                            <li>Teoría de la Administración por Objetivos</li>
                                        </ul>
                                        <br>
                                        <li>Contabilidad</li>
                                        <ul>
                                            <li>Definición y objetivo</li>
                                            <li>Normas de Información Financiera</li>
                                            <li>Estados Financieros (básicos y complementarios) </li>
                                            <li>Usuarios de la Información</li>
                                            <li>Estado de Situación Financiera</li>
                                            <li>Estado de Resultados Integral </li>
                                        </ul>
                                        <br>
                                        <li>Costos</li>
                                        <ul>
                                            <li>Definición y clasificación </li>
                                            <li>Elementos del Costo</li>
                                            <li>Relación Costo-Volumen-Utilidad</li>
                                            <li>Estado de Costos de Producción y Ventas</li>
                                        </ul>
                                        <br>
                                        <li>Probabilidad y estadística</li>
                                        <ul>
                                            <li>Estadística Descriptiva</li>
                                            <li>Probabilidad</li>
                                            <li>Distribuciones de Probabilidad</li>
                                            <li>Estadística Inferencial </li>
                                        </ul>
                                    </ul>
                                </p>
                            </div>
                            
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Aceptar</button>
                            </p>
                        </div>
                    </div>

                    <!-- Modal 5 -->
                    <div id="modal5" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h2 class="uk-modal-title">Examen de admisión</h2>
                            <div class="uk-modal-body" uk-overflow-auto>
                                <p>
                                    Presentar y aprobar el examen de conocimientos que se llevará a cabo el 3 de julio de 2021 en un horario de 9:00 - 13:00.
                                </p>
                                <hr>
                                <p>
                                    Temario para examen de admisión 2021:
                                    <br>
                                    <ul>
                                        <li>Teoría de las organizaciones</li>
                                        <ul>
                                            <li>Proceso Administrativo</li>
                                            <li>Teoría de Sistemas</li>
                                            <li>Teoría de Contingencias</li>
                                            <li>Teoría del Desarrollo Organizacional</li>
                                            <li>Teoría de la Calidad</li>
                                            <li>Teoría de la Administración por Objetivos</li>
                                        </ul>
                                        <br>
                                        <li>Contabilidad</li>
                                        <ul>
                                            <li>Definición y objetivo</li>
                                            <li>Normas de Información Financiera</li>
                                            <li>Estados Financieros (básicos y complementarios) </li>
                                            <li>Usuarios de la Información</li>
                                            <li>Estado de Situación Financiera</li>
                                            <li>Estado de Resultados Integral </li>
                                        </ul>
                                        <br>
                                        <li>Costos</li>
                                        <ul>
                                            <li>Definición y clasificación </li>
                                            <li>Elementos del Costo</li>
                                            <li>Relación Costo-Volumen-Utilidad</li>
                                            <li>Estado de Costos de Producción y Ventas</li>
                                        </ul>
                                        <br>
                                        <li>Probabilidad y estadística</li>
                                        <ul>
                                            <li>Estadística Descriptiva</li>
                                            <li>Probabilidad</li>
                                            <li>Distribuciones de Probabilidad</li>
                                            <li>Estadística Inferencial </li>
                                        </ul>
                                    </ul>
                                </p>
                            </div>
                            
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Aceptar</button>
                            </p>
                        </div>
                    </div>

                    <!-- Modal 6 -->
                    <div id="modal6" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h2 class="uk-modal-title">Entrevista personal</h2>
                            <p>Presentar entrevista con el Comité de Admisión en la fecha establecida.</p>
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Aceptar</button>
                            </p>
                        </div>
                    </div>

                    <!-- Modal 7 -->
                    <div id="modal7" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h2 class="uk-modal-title">Examen de inglés</h2>
                            <p>Presentar y aprobar el examen de inglés que se llevara acabo el dia 10 de julio de 2021</p>
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Aceptar</button>
                            </p>
                        </div>
                    </div>

                    <!-- Modal 8 -->
                    <div id="modal8" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h2 class="uk-modal-title">Resultados</h2>
                            <p>Los resultados serán publicados el 16 de julio de 2021.</p>
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Aceptar</button>
                            </p>
                        </div>
                    </div>

                    <!-- Becas -->
                    <div class="uk-section " id="scholarships">
                        <h1>Becas</h1>
                        <hr>
                        <div>
                            <ul uk-accordion>
                                <li>
                                    <a class="uk-accordion-title" href="#">El programa de maestría informa a los aspirantes:</a>
                                    <div class="uk-accordion-content">
                                        <hr>
                                        <ul>
                                            <li class="uk-text-justify">El programa forma parte del <a href="http://svrtmp.main.conacyt.mx/ConsultasPNPC/padron-pnpc.php" target="_blank">Programa Nacional de Posgrados de Calidad</a></li>
                                            <li class="uk-text-justify">Que las acciones institucionales del <a href="http://www.itmorelia.edu.mx/" target="_blank">TecNM, campus Morelia</a> y del programa de posgrado están encaminadas a mantener el reconocimiento del programa por su buena calidad, de tal forma que, entre otros objetivos, provea de becas a los estudiantes para darles certeza financiera y mantengan su dedicación de tiempo completo.</li>
                                            <li class="uk-text-justify">Que por ser un programa reconocido en el <a href="http://svrtmp.main.conacyt.mx/ConsultasPNPC/padron-pnpc.php" target="_blank">PNPC</a>, los estudiantes que cumplan con los requisitos de ingreso y las condiciones de elegibilidad, podrían ser candidatos al programa de becas del <a href="https://www.conacyt.gob.mx/">CONACyT</a> (limitadas al presupuesto Federal).</li>
                                            <li class="uk-text-justify">Que los estudiantes que cumplan con las condiciones de permanencia, avance y calidad académica, evaluadas mediante el proceso de seguimiento interno, continuarán siendo postulados para conservar la beca.</li>
                                        </ul>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">El proceso para postular estudiantes a la beca del CONACyT será el siguiente</a>
                                    <div class="uk-accordion-content">
                                        <hr>
                                        <ul>
                                            <li class="uk-text-justify">Identificar a los candidatos que solicitan la beca, con el promedio superior a 80/100.</li>
                                            <li class="uk-text-justify">Corroborar que los estudiantes no cuentan con otros apoyos económicos adicionales para realizar sus estudios, ya sean municipales, estatales o federales.</li>
                                            <li class="uk-text-justify">Ordenar la postulación de los estudiantes en la plataforma de <a href="https://www.conacyt.gob.mx/" target="_blank">CONACyT</a> en base a la calificación obtenida en el proceso de ingreso</li>
                                            <li class="uk-text-justify">El candidato deberá firmar un documento donde indica que no cuenta con ningún otro tipo de beca y que se compromete a no solicitar ningún otro apoyo adicional a la beca <a href="https://www.conacyt.gob.mx/">CONACyT</a></li>
                                        </ul>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">El tiempo semanal del becario y el horario de trabajo que el alumno dedicará a los proyectos será:</a>
                                    <hr>
                                    <div class="uk-accordion-content">
                                        <ul>
                                            <li class="uk-text-justify">Como mínimo, los estudiantes asistirán 40 horas por semana, realizando actividades en el aula, cubículo o en laboratorio.</li>
                                            <li class="uk-text-justify">En función de las necesidades de desarrollo del tema de tesis los estudiantes pueden incrementar su tiempo de dedicación hasta 60 horas por semana.</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Guida de estudio -->
                    <div class="uk-section " id="studyguide">
                        <h1>Guia de estudio</h1>
                        <hr>
                        <p>
                            Temario para examen de admisión 2021:
                            <br>
                            <ul>
                                <li>Teoría de las organizaciones</li>
                                <ul>
                                    <li>Proceso Administrativo</li>
                                    <li>Teoría de Sistemas</li>
                                    <li>Teoría de Contingencias</li>
                                    <li>Teoría del Desarrollo Organizacional</li>
                                    <li>Teoría de la Calidad</li>
                                    <li>Teoría de la Administración por Objetivos</li>
                                </ul>
                                <br>
                                <li>Contabilidad</li>
                                <ul>
                                    <li>Definición y objetivo</li>
                                    <li>Normas de Información Financiera</li>
                                    <li>Estados Financieros (básicos y complementarios) </li>
                                    <li>Usuarios de la Información</li>
                                    <li>Estado de Situación Financiera</li>
                                    <li>Estado de Resultados Integral </li>
                                </ul>
                                <br>
                                <li>Costos</li>
                                <ul>
                                    <li>Definición y clasificación </li>
                                    <li>Elementos del Costo</li>
                                    <li>Relación Costo-Volumen-Utilidad</li>
                                    <li>Estado de Costos de Producción y Ventas</li>
                                </ul>
                                <br>
                                <li>Probabilidad y estadística</li>
                                <ul>
                                    <li>Estadística Descriptiva</li>
                                    <li>Probabilidad</li>
                                    <li>Distribuciones de Probabilidad</li>
                                    <li>Estadística Inferencial </li>
                                </ul>
                            </ul>
                        </p>
                        

                    </div>

                    

                </div>
                <div class="uk-visible@m uk-width-1-4@m">
                    <div uk-sticky="offset: 200; bottom: #main_container" style="z-index: 0;">  
                        
                        <ul class="uk-nav-default uk-nav" uk-scrollspy-nav="closest: h1; scroll: true; offset:100" style="padding-top: 30px; padding-bottom: 30px;">
                            <li class="uk-active"><a href="#dates">Fechas</a></li>
                            <li class="uk-active"><a href="#requirements">Requisitos de admisión</a></li>
                            <li class="uk-active"><a href="#docs">Documentación</a></li>
                            <li class="uk-active"><a href="#admision">Procedimiento de admisión</a></li>
                            <li class="uk-active"><a href="#scholarships">Becas</a></li>
                            <li class="uk-active"><a href="#studyguide">Guía de estudio</a></li>
                            <li class="uk-nav-divider"></li>
                            <li class="uk-active"><a href="../resources/files/CONVOCATORIA_MIA_2021.pdf" target="_blank"> <span uk-icon="cloud-download"></span> Descargar Convocatoria</a></li>
                            <li class="uk-active"><a href="https://docs.google.com/forms/d/e/1FAIpQLScQcsV59jo8p0SZmwcj7ZNklUQicKTdejkqKd0mY1ekAVV_AQ/viewform" target="_blank"> <span uk-icon="file-edit"></span> Regístrate </a></li>
                        </ul>
                    </div>
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
    <script>
        viewPDF('#signed_pdf', "./other/tecnm.pdf", 'Descargar PDF : tecnm.pdf')
        viewPDF('#graduated_pdf', "./other/tecnm.pdf", 'Descargar PDF : tecnm.pdf')
        viewPDF('#process_pdf', "./../other/tecnm.pdf", 'Descargar PDF : tecnm.pdf')
    </script>

</body>

</html>