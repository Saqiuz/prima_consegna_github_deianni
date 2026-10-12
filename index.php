<?php

$base=$_POST["base"];
$altezza=$_POST["altezza"];

echo "La base è" . $base . "<br>";
echo "L'altezza è" . $altezza. "<br><br>";

$perimetro =($base+$altezza)*2;
$area = $base*$altezza;