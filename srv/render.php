<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {

 $lista = [
  [
    "nombre" => "Barrera Cortes Marisol",
  "color" => "¿Por qué los programadores prefieren el oscuro? Porque la luz atrae a los bugs."
  ],
  [
   "nombre" => "Muñoz Amador Carmen Juana",
  "color" => "Un programador se ahoga y llama a su amigo: “¡Ayuda! ¡No sé nadar!” Y el amigo responde: “¿Has probado reiniciar?”."
  ],
  [
   "nombre" => "Palomino Gómez Michelle Zoé",
  "color" => "¿Por qué los informáticos no pueden jugar a escondidas? Porque siempre se quedan en debug."
  ],
  [
   "nombre" => "Tufiño González Johan Yael",
  "color" => "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!."
  ]
 ];

 // Genera el código HTML de la lista.
 $render = "";
 foreach ($lista as $modelo) {
  /* Codifica nombre y color para que cambie los caracteres
   * especiales y el texto no se pueda interpretar como HTML.
   * Esta técnica evita la inyección de código. */
  $nombre = htmlentities($modelo["nombre"]);
  $color = htmlentities($modelo["color"]);
  $render .=
   "<dt>{$nombre}</dt>
    <dd>{$color}</dd>";
 }

 devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {

 devuelveErrorInterno($error);
}
