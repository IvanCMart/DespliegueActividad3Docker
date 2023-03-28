<h1> Script Cabeceras - tarea de Iván</h1>
<?php
$headers = getallheaders();
foreach ($headers as $name =>
$value){
    echo "$name: $value\n";
}
?>
