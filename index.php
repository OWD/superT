<?php 	
// variables globales de php
		include_once './src/configuracion.php';
//variables de la pagina
		$descripcion		= "aqui pones la descripccion de la pagina de presencia";
		$estiloPropioPagina = "style_home.css";
		$tituloPagina		= "SuperT";
?>
<!doctype html>
<?php 				
			include_once './src/template/boiler/IEcompatibilityHacks.php';
?>
<head>
<meta charset="utf-8">
<?php 
			include_once './src/template/boiler/fastDnsLibraryOptimization.php';
?>
<?php 
			include_once './src/googleWebFontsLoader.php';
?>
<title><?php
			 echo ($tituloPagina);
?></title>
<meta name="description" content="<?php
			 echo ($descripcion);
?>">
<meta name="author" content="<?php
			 echo ($autor);
?>">
<?php 
			include_once './src/template/boiler/movileOptimization.php';
?>
<?php 
			include_once './src/template/boiler/faviconsHack.php';
?>
										<!-- CSS: implied media=all -->
<!-- CSS concatenated and minified via ant build script-->
<link rel="stylesheet" href="css/preBoilerStyle.css">
<link rel="stylesheet" href="css/webfontTemplateStyles.css">
<link rel="stylesheet" href="css/<?php 
			echo ($estiloPropioPagina)
?>">
<link rel="stylesheet" href="css/postBoilerStyle.css">
										<!--end CSS-->
<?php 
			include_once './src/tutos/sitemap.php';
?>
<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>
<?php 
			include_once './src/cufon.php';
?>
</head>

<body>
<div id="container">
<header>
<div class="bg_img"><img src="img/4.jpg" alt="" /></div>
<h1><p id="miIde">superT</p><span>El template universal que te hará vibrar</span></h1>
<h2>Bienvenido a la empresa de muestra</h2>
</header>
<div id="main" role="main">

<div id="cc_menu" class="oe_wrapper">
<div id="oe_overlay" class="oe_overlay"></div>
<ul id="oe_menu" class="oe_menu">
<li><a href="">Home</a>
<div>
<ul>
<li class="oe_heading">Summer 2011</li>
<li><a href="#">Milano</a></li>
<li><a href="#">Paris</a></li>
<li><a href="#">Special Events</a></li>
<li><a href="#">Runway Show</a></li>
<li><a href="#">Overview</a></li>
</ul>
<ul>
<li class="oe_heading">Winter 2010</li>
<li><a href="#">Milano</a></li>
<li><a href="#">New York</a></li>
<li><a href="#">Behind the scenes</a></li>
<li><a href="#">Interview</a></li>
<li><a href="#">Photos</a></li>
<li><a href="#">Download</a></li>
</ul>
<ul>
<li class="oe_heading">Categories</li>
<li><a href="#">Casual</a></li>
<li><a href="#">Business</a></li>
<li><a href="#">Underwear</a></li>
<li><a href="#">Nature Pure</a></li>
<li><a href="#">Swimwear</a></li>
<li><a href="#">Evening</a></li>
</ul>
</div>
</li>
<li><a href="menu.html">Empresa</a>
<div style="left:-111px;"><!-- -112px -->
<ul>
<li class="oe_heading">Fashion Shows</li>
<li><a href="#">Milano</a></li>
<li><a href="#">Paris</a></li>
<li><a href="#">Berlin</a></li>
<li><a href="#">New York</a></li>
<li><a href="#">London</a></li>
</ul>
<ul>
<li class="oe_heading">Events</li>
<li><a href="#">Fashion Party 2011</a></li>
<li><a href="#">Evening specials</a></li>
<li><a href="#">Fashion Day Milano</a></li>
<li><a href="#">Model Workshops</a></li>
</ul>
<ul>
<li class="oe_heading">Media</li>
<li><a href="#">Wallpapers</a></li>
<li><a href="#">Downloads</a></li>
<li><a href="#">Images</a></li>
<li><a href="#">Contest 2011</a></li>
<li><a href="#">Fashion Mania</a></li>
<li><a href="#">Green Earth Day</a></li>
</ul>
</div>
</li>
<li><a href="galeria.html">Productos</a>
<div class="except" style="left:-223px;">
<ul class="oe_full">
<li><img src="img/alberto.jpg" alt="" /></li>
<li><p>Entre y contemple la gama de productos que se le ofrecen.
Descubra aquel que se adapta mejor a sus necesidades.</p></li>
</ul>
</div>
</li>
<li><a href="">Eventos</a>
<div style="left:-335px;">
<ul>
<li class="oe_heading">Shows 2010</li>
<li><a href="#">Milano</a></li>
<li><a href="#">Paris</a></li>
<li><a href="#">Berlin</a></li>
<li><a href="#">New York</a></li>
<li><a href="#">London</a></li>
</ul>
<ul>
<li class="oe_heading">Shows 2011</li>
<li><a href="#">Milano</a></li>
<li><a href="#">Paris</a></li>
<li><a href="#">Berlin</a></li>
<li><a href="#">New York</a></li>
<li><a href="#">London</a></li>
</ul>
<ul>
<li class="oe_heading">Special Events</li>
<li><a href="#">Fashion Party 2011</a></li>
<li><a href="#">Fashion Countdown Party 2010</a></li>
<li><a href="#">Fashion Day Milano</a></li>
<li><a href="#">Model Workshops</a></li>
</ul>
</div>
</li>
<li><a href="">Contacto</a>
<div style="left:-447px;">
<ul>
<li class="oe_heading">Europe</li>
<li><a href="#">Milano</a></li>
<li><a href="#">Paris</a></li>
<li><a href="#">Berlin</a></li>
<li><a href="#">London</a></li>
</ul>
<ul>
<li class="oe_heading">Asia</li>
<li><a href="#">Hong Kong</a></li>
<li><a href="#">Tokio</a></li>
<li><a href="#">New Delhi</a></li>
<li><a href="#">Beijing</a></li>
</ul>
<ul>
<li class="oe_heading">United States</li>
<li><a href="#">New York</a></li>
<li><a href="#">Los Angeles</a></li>
<li><a href="#">Seattle</a></li>
<li><a href="#">Miami</a></li>
</ul>
</div>
</li>
</ul>
</div>

</div>
<footer>

<div>
<span class="reference">
<a href="#">partiendo el c&oacute;digo</a>
<a href="#" target="_blank">OWD</a>
</span>
</div>

</footer>
</div> <!--! end of #container -->


<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.js"><\/script>')</script>


<!-- scripts concatenated and minified via ant build script-->
<script defer src="js/plugins.js"></script>

<script defer src="js/script.js"></script>

<!-- pegar todo el javascript que tenga el nuevo plug in que pongas ya sea galeria o menu pero quitale todas las
inclusiones de Jquery ,jquery.min , modernizr -->

<!-- end scripts-->

<?php include_once './src/analytics.php';?>



<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){
	CFInstall.check({
		mode:'overlay'})})</script>
		<![endif]-->

		<script type="text/javascript">
		$(function() {
			// lo primero son las variables globales que son las que se inician en cualquier funcion $(), pero que serian las que
		// te petan en el firebug en la consola Js como undefined variable
		// aqui arrancamos el código que inicia nuestro plugin, si lo has sacado a script.js pones el nombre que le has dado
		// a la funcion
		// si no lo has sacado, aqui viene todo el código que empezaba por $()
		instrumentalizeMenuItems();


		//este se queda al final para que haga el cufon despues de todos los efectos etc
		replaceFonts();
});
</script>

</body>
</html>
