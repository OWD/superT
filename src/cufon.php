<script src="js/cufon-yui.js" type="text/javascript"></script>
<?php



// aqui las fuentes que te has bajado de http://cufon.shoqolate.com/generate/
//las dos lineas que hay ahora son de ejemplo
?>
<script src="js/Acorn_Initials_400.font.js" type="text/javascript"></script>
<script src="js/Aller.font.js" type="text/javascript"></script>
<?php 




// este es el script que carga el mapa de selectores css y les aplica el estilo elegido
?>
<script src="js/fuentesSelector.js" type="text/javascript"></script>
<?php





/* las fuentes debes bajarlas de internet o producirlas tu mismo
los formatos soportados son TrueType (TTF), OpenType (OTF), Printer Font Binary (PFB)
para conseguir fuentes sin licencia puedes ir a las paginas 
		http://www.cdlibre.org/consultar/catalogo/Fuentes_TTF.html
		http://www.cdlibre.org/consultar/catalogo/Fuentes_OTF.html
		http://openfontlibrary.org/fonts  (113 fuentes)
		http://www.fontreactor.com/  (muchas, las mas chulas que he visto)
por norma general bajas un zip lo descomprimes y lo que te salga de TTF o OTF son los archivos que hay que subir al cufon
tambien te pueden aparecer otros del tipo .sfd probablemente esa fuente la puedes editar y cambiar a tu gusto
		http://sourceforge.net/projects/doubletype/  es de java y se puede usar en linux, mac y windows si te va bien pues seria la primera opcion
		http://www.cr8software.net/typelight.html     windows , facil de uso
	
Una vez en la pagina de cuffon  meter las fuentes , luego  en este campo
Use the following value as the font-family of the generated font (optional)
poner el nombre con el que nos vamos a referir en el futuro a esa fuente en el archivo /js/fuentesSelector.js
en 
al menos marcar las opciones que empiezan por la palabra Latin, pero si quieres que te sirva para todos los idiomas marcar all
ademas poner esto
.. and also these single characters
poner los caracteres áéíóúñÑÁÉÍÓÚüÜ
los ficheros que te cree debes copiarlos a /js/nombreFuente.js y añadirlos en la parte de arriba de este archivo
*/
echo (""); ?>