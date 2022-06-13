<?php
  /*
La clase mysql2i tiene la intención de proporcionar un cruce perfecto cuando nuevas versiones de PHP,
  que ya no tienen la extensión mysql, se instalan. Esta es una brecha de parada temporal
  medida para dar tiempo a los desarrolladores para actualizar su código a las extensiones mysqli o PDO::mysql.
  
  La clase mysql2i es un reemplazo directo para la extensión PHP mysql. utiliza un
  envoltorio mysqli para manejar llamadas a funciones mysql.
  
  Coloque los archivos mysql2i.class.php y mysql2i.func.php en una carpeta accesible desde la web y
  incluya el archivo mysql2i.class.php antes de que cualquier función mysql llame a made, generalmente desde
  dentro de sus archivos de inicialización.
  
  El archivo mysql2i.class.php incluirá el archivo de funciones cuando la extensión mysql sea
  no se encuentra, por lo que esta clase se puede incluir en cualquier momento, incluso en instalaciones donde mysql
  la extensión todavía existe.
  */
  include_once('mysql2i.class.php');
?>
