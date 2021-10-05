
<html>
<head>
	<meta name="Angel" content="Pagina del posgrado de electronica" />
	<meta name="Instituto tecnologico de morelia posgrado" content="posgrado de electronica" />
	<link rel="stylesheet" type="text/css" href="Css/estilo.css" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width , initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>

	<link rel="stylesheet" id="pri-css" href="Css/style.css" type="text/css" media="all">


</head>
<body>
<section id="contenedor">
<header>
	<div id="cabezal" style=" margin-left: 74%; height:32px; min-width: 250px; max-width:251px;" class="top">
	<!--<div id="site-sec-nav" style=" margin-left: 85%; height:0px; border:dashed; min-width: 200px;" class="col3 m">-->

            <form action="http://www.google.com.mx" method="get" class="" id="search-form">
	<input type="text" name="s" style="margin-top: -20px;" placeholder="Buscar" title="Ingresa tu búsqueda">
	
   <button style="border: none; margin: 0; padding: 0; background: none;"><img src="imagen/lupa.png" /></button>

	</form>        
	<!--</div>-->
	</div>

	<div id="cabecera">
	<img src="img/encabezado2.png" alt="" style="
    margin-top: -1%;
"/>
	</div>

	<div id="menu">
		<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/estilo_13.css" type="text/css" media="handheld, all">
    <script src="Js/SpryMenuBar.js" type="text/javascript"></script>
    <script src="Js/jquery-1.7.1,js" type="text/javascript"></script>
    <script type="text/javascript">
        function mostrarOcultar(){
            var i=document.getElementById('i').value;
            if(i==0){
                $("#mainMenu").fadeOut();
                document.getElementById('i').value='1';
                document.getElementById('wowslider-container1').style="margin-top: 19%";
            }
            else{
                $("#mainMenu").fadeIn();
                document.getElementById('i').value='0';
                document.getElementById('wowslider-container1').style="margin-top: 19%";
            }
        }
    </script>
</head>

<body>
    <button id="mostrar" onclick="mostrarOcultar()"></button>
    <input id="i" type="hidden" value="0">
<div id="wrapper">
    <div id="mainMenu">
        <ul id="MenuBar1" class="MenuBarHorizontal MenuBarActive">
                                <li><a href="index.php">Inicio</a></li>
                    <li><a href="Informacion.php">Información</a></li>
                    <li><a href="noticias.php">Colaboración</a></li>
                    <li><a href="Alumnos.php">Alumnos</a></li>     
                    <li><a href="personal.php">Personal</a></li>
                    <li><a href=" PNPC.php">PNPC</a></li>
                    <li><a href="login.php">Acceso</a></li>
                    </ul>
    </div>
</div>


<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {});
//-->
</script> 


</body>
</html>	</div>
</header>
<section id="principal">

<br></br>

<div id="main">
		<form id="formRegistra" action="php/iniciarSesion.php" method="post" onsubmit="return valida();">
		<center>
						<span style="font-size:40;">Iniciar Sesión</span>
						<br></br>
						<table style="font-size:20;">
								<tr>
								<td><label><FONT COLOR="#b8b8b8">Usuario:</FONT></label></td>
								<td width="300px">
								
								<input id="Usuario" type="text" class="campo" name="Usuario" placeholder=""/></td>
								<td><div id="errorUsuario" class="error"><p></p></div></td>
			</tr>
			<tr>
				<td><label><FONT COLOR="#b8b8b8">Password:</FONT></label></td>
				
				<td><input id="password" type="password" class="campo" name="password" placeholder=""/></td>
				<td><div id="errorPass" class="error"><p></p></div></td>
			</tr>
						</table>
						<input id="IniciarSession" type="submit" value="Iniciar Sesion" class="submitbtn"/>
						<div id="errorLogin" class="error"><p>Campos Obligatorios vacios</p></div>
						</center>
					</form>
		
			</div><!-- ENDS WRAPPER -->
					


</section>
<footer>
	<img src="img/pie2.png" alt=""/>
</footer>
</section>
</body>
</html>