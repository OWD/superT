  <?php 
  /* el siguiente codigo carga el script de google apis webfont.js como primero de todos los scripts 
   *se generará el codigo js necesario para meter las fuentes que pongas a continuacion en cada array
   *
   *fuentes de google , pilla los nombres de http://www.google.com/webfonts
   *en el paso 3 en la pestaña que pone javascript en donde pone algo asi como 
   *<script type="text/javascript">
   * WebFontConfig = {
   *    	google: { families: [ 'Ceviche+One::latin' ]
   *copias lo que viene entre [] , o sea en este caso Ceviche+One::latin
   *si no vas a usar algun proveedor deja el array vacio "array();"
   */
   $googleFonts=array(
   					  'Ceviche+One::latin',
   					  'Knewave'
   					  );

   
   
   
   
   
   
   
   
   
   function printArray($arrayName)
   {
   	echo ('[');
   	$lastElement=array_pop($arrayName);
   	foreach ($arrayName as $clave=>$valor)
   	{
   		echo "'".$valor."',";
   	}
   	echo "'".$lastElement."'";
   	echo (']');
   }
   
   ?>
  <script type="text/javascript">
      WebFontConfig = {
        google: { families: <?php printArray($googleFonts)?> }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
</script>
<?php
/* cargamos el web font loader de google con el que podemos cargar fuentes de diferentes proveedores y
 * ademas , y esto mola mas, podemos controlar el comportamiento de la pagina al iniciar, mientras y cuando 
 * finaliza de cargarse las fuentes
 * 
 * te vas a esta pagina http://www.google.com/webfonts
*/
?>


<?php
echo (""); ?>