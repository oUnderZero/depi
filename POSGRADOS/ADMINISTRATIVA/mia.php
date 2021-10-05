
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maestría en Ingeniería Administrativa</title>

    <link href="./favicon.ico" rel="icon">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./css/uikit-rtl.css">
    <link rel="stylesheet" href="./css/theme.css">


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
                        <img src="./resources/images/logoheader.svg" width="128" height="48"
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
                <img src="resources/images/pleca-gob1.png" alt="GobMX" class="plecaGobMx">
            </a>
        </div>
        <div class="">
            <a href="https://www.gob.mx/sep" target="_blank" style="z-index:2001" id="pleca_2">
                <img src="./resources/images/pleca-gob2.png" alt="Educacion" class="plecaGobMx">
            </a>
        </div>
        <div class="">
            <a href="https://www.tecnm.mx/" target="_blank" style="z-index:2001" id="pleca_3">
                <img src="./resources/images/pleca_tecnm.jpg" alt="TecNM" class="plecaTECNM">
            </a>
        </div>
    </div>
    
    <!-- TO-DO: Si se elimina navbar-left, navbar-right no funciona -->
    <div uk-sticky="offset:50px; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-navbar _background _blue" uk-navbar="">
    
            <div class="uk-navbar-left uk-flex uk-flex-middle uk-visible@s">
                <a href="mia.php" class="_text _white">
                    <img src="./resources/images/mia.png" style="max-height: 100px; max-width: 100px;">
                </a>
            </div>
    
            <div class="uk-navbar-right">
    
                <!-- Dropdown INFO -->
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <a class="_text _white" href="./info.php/">Información</a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="./info.php/#lanes">Lineas de investigación</a></li>
                                <li><a href="./info.php/#teachers">Profesores</a></li>
                                <li><a href="./info.php/#alumns">Alumnos</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
    
                <!-- Dropdown PLAN DE ESTUDIOS -->
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <a class="_text _white" href="plan.php/">Plan de estudios</a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="./plan.php/#entry">Perfil de ingreso</a></li>
                                <li><a href="./plan.php/#egress">Perfil de egreso</a></li>
                                <li><a href="./plan.php/#requirements">Requisitos</a></li>
                                <li><a href="./plan.php/#struct">Estructura del plan de estudios</a></li>
                                <li><a href="./plan.php/#map">Mapa curricular</a></li>
                                <li><a href="./plan.php/#complementary">Actividades Complementarias</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
    
                <!-- Dropdown CONVOCATORIA -->
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <a class="_text _white" href="./convocatoria.php/">Convocatoria</a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="./convocatoria.php/#dates">Fechas</a></li>
                                <li><a href="./convocatoria.php/#requirements">Requisitos de admisión</a></li>
                                <li><a href="./convocatoria.php/#docs">Documentación</a></li>
                                <li><a href="./convocatoria.php/#admision">Procedimiento de admisión</a></li>
                                <li><a href="./convocatoria.php/#scholarships">Becas</a></li>
                                <li><a href="./convocatoria.php/#studyguide">Guía de estudio</a></li>
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
                    <a href="#" class="_text _white">
                        <img src="./resources/images/mia.png" style="max-height: 100px; max-width: 100px;">
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
                        <li><a href="./info.php/#lanes">Lineas de investigación</a></li>
                        <li><a href="./info.php/#teachers">Profesores</a></li>
                        <li><a href="./info.php/#alumns">Alumnos</a></li>
                    </ul>
                </li>
    
                <!-- Dropdown PLAN DE ESTUDIOS -->
                <li class="uk-parent">
                    <a class="uk-nav-header" href="#" uk-toggle="target: #toggle-plan; animation: uk-animation-fade">Plan de
                        estudios</a>
                    <ul id="toggle-plan" class="uk-nav-sub" hidden>
                        <li><a href="./plan.php/#entry">Perfil de ingreso</a></li>
                        <li><a href="./plan.php/#egress">Perfil de egreso</a></li>
                        <li><a href="./plan.php/#requirements">Requisitos</a></li>
                        <li><a href="./plan.php/#struct">Estructura del plan de estudios</a></li>
                        <li><a href="./plan.php/#map">Mapa curricular</a></li>
                        <li><a href="./plan.php/#complementary">Actividades Complementarias</a></li>
                    </ul>
                </li>
    
                <!-- Dropdown CONVOCATORIA -->
                <li class="uk-parent">
                    <a class="uk-nav-header" href="#"
                        uk-toggle="target: #toggle-convo; animation: uk-animation-fade">Convocatoria</a>
                    <ul id="toggle-convo" class="uk-nav-sub" hidden>
                        <li><a href="./convocatoria.php/#dates">Fechas</a></li>
                        <li><a href="./convocatoria.php/#requirements">Requisitos de admisión</a></li>
                        <li><a href="./convocatoria.php/#docs">Documentación</a></li>
                        <li><a href="./convocatoria.php/#admision">Procedimiento de admisión</a></li>
                        <li><a href="./convocatoria.php/#scholarships">Becas</a></li>
                        <li><a href="./convocatoria.php/#studyguide">Guía de estudio</a></li>
                    </ul>
                </li>
                <li class="uk-active">
                    <a href="https://morelia.tecsge.com/login" target="_blank" class="_text _white">SGE</a>
                </li>
            </ul>
    
        </div>
    </div>

    <main>
        <div class="container"  id="main_container">
            <!-- Carrousel -->
            <div class="uk-position-relative uk-visible-toggle " tabindex="-1" uk-slideshow="ratio: 2.39:1; autoplay:true" >
                <ul class="uk-slideshow-items">
                    <li>
                        <a href="/convocatoria/"><img src="./resources/images/banner/convocatoria_2021 prorroga-01.jpg" alt="Image"></a>
                    </li>
                    <li>
                        <img src="./resources/images/banner/background_2021.jpg" alt="" uk-cover>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/tecnm.morelia.mia" target="_blank"><img src="./resources/images/banner/facebook_2021.jpg" alt="" uk-cover></a>
                        
                    </li>
                    <li>
                        <img src="./resources/images/Carrousel/TEC_MORELIA1.jpg" alt="" uk-cover>
                        <div class="banner uk-visible@m">
                            <p>Campus Morelia</p>
                        </div>
                    </li>
                    <li>
                        <img src="./resources/images/Carrousel/TEC_MORELIA2.jpg" alt="" uk-cover>
                        <div class="banner uk-visible@m">
                            <p>Campus Morelia</p>
                        </div>
                    </li>
                    <li>
                        <img src="./resources/images/Carrousel/TEC_MORELIA3.jpg" alt="" uk-cover>
                        <div class="banner uk-visible@m">
                            <p>Nuestras instalaciones</p>
                        </div>
                    </li>
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>

            <!-- Acerca de -->
            <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-margin-large-top uk-grid-match" uk-grid>
                <div>
                    <div class="uk-background-muted uk-padding" uk-scrollspy="target: .fadein; cls: uk-animation-fade; delay: 200">
                        <div class="fadein">
                            <h2 class="uk-text-center">¿Quiénes somos?</h2>
                            <hr class="uk-divider-icon">
                            <p class="uk-text-center">
                                El Instituto Tecnológico de Morelia es una institución educativa pública de educación superior, que forma parte del 
                                Sistema Nacional de Institutos Tecnológicos de México. Ubicada en la Ciudad de Morelia, Michoacán, esta institución 
                                educativa goza de un gran prestigio y tradición, ocupando a nivel regional el primer lugar en el ranking de Institutos 
                                Tecnológicos de alto desempeño.
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="uk-hidden@s">
                <div>
                    <div class="uk-background-primary _background _blue uk-padding uk-light">
                        <div class="fadein">
                            <h2 class="uk-text-center">Objetivo del posgrado</h2>
                            <hr class="uk-divider-icon">
                            <p class="uk-text-center">
                                Formar profesionales competentes en Ingeniería Administrativa para satisfacer los requerimientos de las 
                                organizaciones mediante la aplicación de conocimientos, tecnología e innovación, contribuyendo al desarrollo 
                                empresarial sustentable de la región y del país
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IR A -->
            <div class="uk-section uk-section-default">
                <div class="uk-container">
                    <div class="uk-panel uk-margin-medium">
                        <h3>Ir a...</h3>
                    </div>
            
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 4000">

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                            <li>
                                <a href="https://www.tecnm.mx/" target="_blank">
                                    <div class="uk-panel">
                                        <div class="uk-background-default _background _blue uk-padding"></div>
                                        <div class="uk-position-center uk-panel"><h3 class="uk-text-center">TecNM</h3></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="http://www.itmorelia.edu.mx/#/" target="_blank">
                                    <div class="uk-panel">
                                        <div class="uk-background-default _background _blue uk-padding"></div>
                                        <div class="uk-position-center uk-panel"><h3 class="uk-text-center">ITM</h3></div>
                                    </div>
                                </a>
                            </li>
        
                            <li>
                                <a href="https://morelia.tecsge.com/login" target="_blank">
                                    <div class="uk-panel">
                                        <div class="uk-background-muted _background _blue uk-padding"></div>
                                        <div class="uk-position-center uk-panel"><h3 class="uk-text-center">SGE</h3></div>
                                    </div>
                                </a>
                            </li>
        
                            <li>
                                <a href="./info/">
                                    <div class="uk-panel">
                                        <div class="uk-background-default _background _blue uk-padding"></div>
                                        <div class="uk-position-center uk-panel"><h3 class="uk-text-center">Información</h3></div>
                                    </div>
                                </a>
                            </li>
        
                            <li>
                                <a href="./plan.php/#map">
                                    <div class="uk-panel">
                                        <div class="uk-background-muted _background _blue uk-padding"></div>
                                        <div class="uk-position-center uk-panel"><h3 class="uk-text-center">Mapa curricular</h3></div>
                                    </div>
                                </a>
                            </li>
        
                            <li>
                                <a href="./convocatoria/">
                                    <div class="uk-panel">
                                        <div class="uk-background-default _background _blue uk-padding"></div>
                                        <div class="uk-position-center uk-panel"><h3 class="uk-text-center">Convocatoria</h3></div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="./convocatoria/#scholarships">
                                    <div class="uk-panel">
                                        <div class="uk-background-muted uk-padding _background _blue"></div>
                                        <div class="uk-position-center uk-panel"><h3 class="uk-text-center">Becas</h3></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
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
                            <img data-v-9e928f9a="" src="./resources/images/logoheader.svg" href="/"
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

    <script src="./js/jquery.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/uikit.min.js"></script>
    <script src="./js/uikit-icons.min.js"></script>

</body>

</html>