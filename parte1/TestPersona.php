<?php 

require_once "Persona.php";

$persona = new Persona("Laura", "Tortosa", 33);

if($persona->mayorEdad()) {
    echo $persona-> nombreCompleto(). " es mayor de edad";
} else {
    echo $persona->nombreCompleto(). " no es mayor de edad";
}

echo $persona->nombre;


?>
