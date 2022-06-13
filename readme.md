## El Problema


PHP ha dejado obsoleta la extensión mysql que se eliminará en PHP 7. Aunque se recomendó usar la extensión mejorada, mysqli, muchos desarrolladores continuaron usando mysql.

## El efecto

Una vez que se lance PHP 7 a mediados de noviembre del año, 2015, muchos servidores alojados se actualizaron y los scripts que todavía dependen de la antigua extensión mysql fallaron.

Hay muchos sitios web que usan paquetes heredados que ya no son compatibles con el desarrollado y no todos los desarrolladores han tenido tiempo de actualizar sus paquetes actuales a la extensión mysqli mejorada.

## La situacion

El paquete PHP mysql to mysqli fue desarrollado para ser el espacio intermedio para mantener todo funcionando sin problemas.

Se puede colocar en cualquier script PHP, en cualquier momento, y cuando desaparezca la extensión mysql, esta se hará cargo. Funciona definiendo funciones usando los antiguos nombres de funciones mysql y pasando los argumentos a los métodos de clase que usan la extensión mysqli mejorada.


Osiann

pablo mendez