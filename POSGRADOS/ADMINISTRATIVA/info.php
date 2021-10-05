
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Información</title>

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
                        <li><a href="../info.php/#lanes">Líneas de investigación</a></li>
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
                    <!-- Informacion -->
                    <div class="uk-section " id="lanes">
                        <h1>Líneas de investigación</h1>
                        <hr>
                        <div class="_justified">
                            <img src="../resources/images/itm.jpg" alt="Image">
                            <p>
                            El estudio analítico para resolver problemas, ha creado recientemente un concepto más nuevo de la Ingeniería
                            Administrativa. Ciertos procedimientos, tales como la ingeniería de sistemas y la investigación operativa, han sido
                            desarrollados para dirigir complicados problemas en organizaciones industriales, de gobierno y/o militares. 
                            </p>
                            <p>
                                Estos nuevos
                                conceptos están reflejados en la definición más ampliamente aceptada de la Ingeniería Administrativa como es:
                            </p>
                            <div class="uk-card uk-card-secondary uk-card-body _background _blue">
                                <p><i>
                                    “La rama de la ingeniería que se ocupa de la planificación, organización, sistemas de las diversas
                                    áreas corporativas de instituciones públicas o privadas. Con el objetivo de tener una organización rentable
                                    económicamente o cumpliendo los objetivos sociales. Los ingenieros administradores gestionan los diferentes recursos
                                    sean tangibles o intangibles”.
                                </i></p>
                            </div>
                            <p>
                                Dentro de la Maestría en Ingeniería Administrativa se promueven las siguientes
                                lineas de investigación:
                            </p>
                            <div>
                                <ul>
                                    <li>
                                        <h4><b>Administración del Desarrollo Empresarial</b></h4>
                                    </li>
                                    <li>
                                        <h4><b>Emprendimiento, Administración y optimización de Procesos</b></h4>
                                    </li>
                                </ul>
                            </div>
                            <p>
                                Estas dos líneas generales tienen, cada una, sub-áreas de investigación orientadas a atender aspectos particulares
                                del
                                desarrollo de una organización detallados en los anexos correspondientes.
                            </p>
                            <div id="perspectives">
                                <div class="uk-container" style="padding-top: 50px;">
                                    <h3>Perspectivas del Ingeniero Administrador</h3>
                                    <p>
                                        El objetivo principal del ingeniero administrativo es incrementar los índices de productividad a través del diseño
                                        de
                                        sistemas que hagan un mejor uso de los recursos disponibles de la organización, y en especial de los recursos
                                        humanos,
                                        que mediante una adecuada capacitación, mantengan un ritmo creciente de eficiencia.
                                    </p>
                                    <p>
                                        En términos generales, el ingeniero administrativo se enfoca a aspectos de la producción como son, entre otros, los
                                        siguientes:
                                    </p>
                                    <ol>
                                        <li>El área operativa como soporte de la producción, control de calidad, solución de problemas en línea,
                                            entrenamiento, etc.;</li>
                                        <li>La optimización de sistemas y procesos completos en cuanto a costos, uso de recursos, flujo de materiales,
                                            estandarización de procedimientos y trabajos en grupo.;</li>
                                        <li>El diagnóstico y anticipación del cambio organizacional a través de la planeación estratégica, modelos de
                                            liderazgo,
                                            relaciones humanas, y comunicación organizacional.</li>
                                    </ol>
                                </div>
                            </div>
                            <div id="productivity">
                                <div class="uk-container" style="padding-top: 50px;">
                                    <h3>La ingeniería Administrativa y la productividad empresarial</h3>
                                    <p>
                                        El incremento de la productividad para la obtención de resultados como los siguientes:
                                    </p>
                                    <ul>
                                        <li>Aumento en la eficiencia de recursos.</li>
                                        <li>Mayor producción de bienes y servicios a menor costo.</li>
                                        <li>Aumento en el salario real del trabajador.</li>
                                        <li>Mayor capacitación de recursos
                                            económicos obtenidos por exportación de recursos económicos obtenidos por la exportación
                                            de productos y recaudación de impuestos.</li>
                                        <li>Satisfacción de la demanda requerida, productos de mayor calidad y cantidad a
                                            precios competitivos internacionalmente.</li>
                                    </ul>
                                    <p>
                                        En los procesos productivos, mejora y aguza los procedimientos utilizados, evitando los clásicos cuellos de botella, a
                                        través de la utilización de técnicas conocidas como la medición de tiempos y movimientos, o el uso técnicas más
                                        modernas, como MTM, Seis-Sigma o Lean; al mismo tiempo que se adapta de manera continua la tecnología, los métodos y procedimientos utilizados.
                                        Por ello, el Ingeniero Administrativo se enfrentará a retos como la integración y coordinación de grupos de trabajo, a
                                        problemas de motivación laboral y de conducta organizacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profesores -->
                    <div class="uk-section " id="teachers">
                        <h1>Profesores</h1>
                        <hr>
                        <div class="_justified">
                            <p>
                                La línea de generación y aplicación del conocimiento (LGAC) en Administración del desarrollo empresarial (ADE) se
                                integra en cuatro grandes dimensiones: el Desarrollo organizacional, el Desarrollo del talento humano, la Gestión
                                Financiera y el Marketing estratégico, todo dentro del marco de la innovación de los correspondientes procesos, cuyo
                                producto sinérgico se orienta hacia el Desarrollo Empresarial.
                            </p>
                            <p>
                                La línea de generación y aplicación del conocimiento (LGAC) en Emprendimiento, Administración y Optimización de Procesos
                                (EAOP), Integra areas como:
                                Diseño, Mejora y Optimizacion de procesos productivos; diseño de productos y servicios de innovación tecnológica; diseño, Mejora y Optimizacion de las operaciones.
                            </p>
                            <p>
                                El núcleo académico de la Maestría en Ingeniería Administrativa esta integrado por:
                            </p>
                            <div uk-slider="autoplay: true; autoplay-interval:4000">

                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-light">
                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>

                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Aguilar García Jaime</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Aguilar García Omar</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Camacho Arriaga Juan Cristobal</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default" >Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>García Salinas Guadalupe</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Gonzáles Linares José Alfredo</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Hesse Zepeda Harriet Rosalía</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Lara Hernández Rafael</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Mancera Macedo Jesús</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Marx Chávez Gerardo</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Pantoja Ayala Arturo</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Pérez García Jorge Armando</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Ríos Ponce Juan</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="uk-transition-toggle" tabindex="0">
                                        <div class="uk-inline">
                                            <img src="../resources/images/images.png" alt="">
                                            <div class="uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    
                                            <div class="uk-transition-slide-fade">
                                                <div class="uk-overlay uk-position-bottom uk-light">
                                                    <p>Vázquez Merlos José Alfredo</p>
                                                    <a href="../proximamente/"><button class="uk-button uk-button-default">Ver</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                            
                            </div>

                        </div>
                    </div>

                    <!-- Alumnos -->
                    <div class="uk-section " id="alumns">
                        <h1>Alumnos</h1>
                        <hr>
                        <div class="_justified">
                            <p>
                                La plantilla de alumnos que están cursando podrán obtener el título
                                de Maestro en Ingeniería Administrativa a partir de la generación de su tesis.
                            </p>
                            <div id="signed">
                                <div class="uk-container" style="padding-top: 50px;">
                                    <h3>Alumnos inscritos</h3>
                                    <div class="on_dev"></div>
                                </div>
                            </div>
                            <div id="graduated">
                                <div class="uk-container" style="padding-top: 50px;">
                                    <h3>Alumnos titulados</h3>
                                    <p>
                                        Orgullosos de nuestros egresados de la Maestría en Ingeniería Administrativa.
                                    </p>
                                    <div class="uk-slider-container-offset" uk-slider="autoplay: true; autoplay-interval:4000">
                                        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                                            <ul class="uk-slider-items uk-child-width-1-1@s uk-grid uk-grid-match" uk-grid
                                                uk-height-match="target: .uk-card-body > div">
                                                <!-- MIA. Herrera Pérez Raymundo -->
                                                <li>
                                                    <div class="uk-card uk-card-default" style="text-align: center;">
                                                        <div class="uk-card-header">
                                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                <div>
                                                                    <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">
                                                                        MIA. Herrera Pérez Raymundo
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-card-body ">
                                                            <div class="uk-child-width-1-3@s uk-container"  uk-grid>
                                                                <div>
                                                                    <img src="../resources/images/Raymundo.jpeg" style="height: 80%; width: 100%; object-fit: cover;">
                                                                    <p>M02121070</p>
                                                                </div>
                                                                <div class="uk-width-2-3@s">
                                                                    <h4>Tesis 001</h4>
                                                                    <hr>
                                                                    <p>
                                                                        Aplicación de la administración estratégica para el fortalecimiento y expansión de la “Papelería Caray”                          
                                                                    </p>
                                                                    <hr>
                                                                    <div style="font-size: 0.8em;">
                                                                        <p>
                                                                            Asesor: <em class="_text _gray">Dr. Omar Aguilar García</em>
                                                                        </p>
                                                                        <p>
                                                                            Vinculación: <em class="_text _gray">Papelería Caray</em>
                                                                        </p>
                                                                        <p>
                                                                            Fecha: <em class="_text _gray">2/10/2021</em>
                                                                        </p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- MIA. Medrano Gallardo Arturo Ignacio  -->
                                                <li>
                                                    <div class="uk-card uk-card-default" style="text-align: center;">
                                                        <div class="uk-card-header">
                                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                <div>
                                                                    <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">
                                                                        MIA. Medrano Gallardo Arturo Ignacio 
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-card-body ">
                                                            <div class="uk-child-width-1-3@s uk-container" uk-grid>
                                                                <div>
                                                                    <img src="../resources/images/images.png" style="height: 80%; width: 100%; object-fit: cover;">
                                                                    <p>M04120901</p>
                                                                </div>
                                                                <div class="uk-width-2-3@s">
                                                                    <h4>Tesis 002</h4>
                                                                    <hr>
                                                                    <p>
                                                                        Control de costos y su influencia en la confiabilidad operativa de las redes generales de distribución de la división de
                                                                        distribución centro occidente de CFE 
                                                                    </p>
                                                                    <hr>
                                                                    <div style="font-size: 0.8em;">
                                                                        <p>
                                                                            Asesor: <em class="_text _gray">Dr. Rafael Lara Hernández</em>
                                                                        </p>
                                                                        <p>
                                                                            Cosesor: <em class="_text _gray">Dr. Omar Aguilar García</em>
                                                                        </p>
                                                                        <p>
                                                                            Vinculación: <em class="_text _gray">CFE</em>
                                                                        </p>
                                                                        <p>
                                                                            Fecha: <em class="_text _gray">2/16/2021</em>
                                                                        </p>
                                                                    </div>
                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- MIA. Paola Andrea Gaitán Reséndiz  -->
                                                <li>
                                                    <div class="uk-card uk-card-default" style="text-align: center;">
                                                        <div class="uk-card-header">
                                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                <div>
                                                                    <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">
                                                                        MIA. Paola Andrea Gaitán Reséndiz 
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-card-body ">
                                                            <div class="uk-child-width-1-3@s uk-container" uk-grid>
                                                                <div>
                                                                    <img src="../resources/images/Paola.jpeg" style="height: 80%; width: 100%; object-fit: cover;">
                                                                    <p>M07120136 </p>
                                                                </div>
                                                                <div class="uk-width-2-3@s">
                                                                    <h4>Tesis 003</h4>
                                                                    <hr>
                                                                    <p>
                                                                        Aplicación y uso de la metodología de marco lógico para la presupuestación en los municipios del estado de Michoacán
                                                                    </p>
                                                                    <hr>
                                                                    <div style="font-size: 0.8em;">
                                                                        <p>
                                                                            Asesor: <em class="_text _gray">Dr. Rafael Lara Hernández</em>
                                                                        </p>
                                                                        <p>
                                                                            Fecha: <em class="_text _gray">2/16/2021</em>
                                                                        </p>
                                                                    </div>
                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                                                uk-slider-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                                                uk-slider-item="next"></a>
                                        </div>
                                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div id="process">
                                <div class="uk-container" style="padding-top: 50px;">
                                    <h3>Alumnos en proceso de graduación</h3>
                                    <p>
                                        Occaecat occaecat occaecat reprehenderit veniam. Ea incididunt minim id aute aliquip sit ex magna cillum ex
                                        dolor sit sit. Est est sint amet officia sunt pariatur nisi nisi proident ex. Tempor aliquip ad quis
                                        pariatur aute aute non. Fugiat nostrud cupidatat enim aute enim consequat Lorem sunt quis. Tempor fugiat
                                        culpa ut elit labore excepteur esse et enim consequat occaecat irure nulla nostrud.
                                    </p>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>

                </div>
                <div class="uk-visible@m uk-width-1-4@m">
                    <div uk-sticky="offset: 200; bottom: #main_container" style="z-index: 0;">  
                        
                        <ul class="uk-nav-default uk-nav" uk-scrollspy-nav="closest: h1; scroll: true; offset:100" style="padding-top: 30px; padding-bottom: 30px;">
                            <li class="uk-active"><a href="#lanes" id="lanestrigger">Líneas de investigación</a></li>
                            <li><a href="#perspectives" style="font-size: 0.8rem; margin-left: 1.2rem;">Perspectivas del Ingeniero Administrador</a></li>
                            <li><a href="#productivity" style="font-size: 0.8rem; margin-left: 1.2rem;">La ingeniería Administrativa y la productividad empresarial</a></li>
                            <li class="uk-active"><a href="#teachers">Profesores</a></li>
                            <li class="uk-active"><a href="#alumns">Alumnos</a></li>
                            <li><a href="#signed" style="font-size: 0.8rem; margin-left: 1.2rem;">Inscritos</a></li>
                            <li><a href="#graduated" style="font-size: 0.8rem; margin-left: 1.2rem;">Titulados</a></li>
                            <!--    
                            <li><a href="#process" style="font-size: 0.8rem; margin-left: 1.2rem;">En proceso de graduacion</a></li>
                            -->
                        </ul>

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
        $(document).ready(function(){
            $(".on_dev").append(
                `<p>Este apartado está en desarrollo, agradecemos su paciencia.</p>`
            )
        })
    </script>
</body>

</html>