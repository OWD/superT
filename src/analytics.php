<script>
window._gaq = [['_setAccount','<?php echo $codigoGoogleAnalytics;?>'],['_trackPageview'],['_trackPageLoadTime']];
Modernizr.load({
	//     load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
});
</script>
<?php
/*http://www.google.com/intl/es/analytics/
entras con tu cuenta de gmail
te vas donde el engranaje (arriba derecha) pulsas
le das a  +nueva cuenta
rellenas que es facil. y le das a crear cuenta
en las opciones que te da
la que viene marcada es la normal
la de un dominio con varios subdominios no la usaremos casi nunca pero un ejemplo podria ser que para entra en una parte de la aplicacion
supongamos la administracion de los datos de contabilidad, la tenemos en otro ordenador mas seguro en otro server y la ponemos que se
acceda mediante la url http://administracion.dominioNormalDeLaTienda.com , pero queremos que en el analitics tambien nos salgan las entradas
ahi contando como las de otras partes del site.
la de varios dominios de nivel superior es interesante, la usamos cuando un tio tiene el .es .com. net o lo que sea y quiere que el que entre por
la direccion que sea, llegue a la misma tienda pero se empeña en que la url que le debe aparecer siempre es por la que ha entrado ,p.e.
http://tiendaesclusiva.es/catalogo/temporada  eso a nivel de servidor es lo mismo que http://tiendaesclusiva.com/catalog/season
pero para los motorores de busqueda son dos sites diferentes, por eso habria aqui que marcar esta para que nos cuente todos los accesos en
una misma cuenta (luego ahi dentro si podremos ver y deferenciar para saber cuantos nos han llegado por .com y cuantos por cada idioma etc)
coges el código que te pone  como UA , algo asi como UA-27491727-1 que esta sobre la linea 3 y lo pegas en el fichero /src/configuracion.php
en donde pone codigogoogleanalytics
*/
echo "";?>