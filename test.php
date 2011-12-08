Test de funcionamiento
<?php 
   $googleFonts=array(
   					  'Ceviche+One::latin',
   					  'Knewave'
   					  );
   printArray($googleFonts);
   
  function printArray($arrayName)
  { 
  	echo ('[');
  	$lastElement=array_pop($arrayName);
  	foreach ($arrayName as $clave=>$valor)
  	{
  		echo $valor.',';
  	}
  	echo $lastElement;
  	echo (']');
  }
?>