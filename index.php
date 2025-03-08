<?php
echo "hello world!";
echo '<br>';
echo "hello world!";
$nombre = 'Pepe';
$apellido = 'Gomez';
echo '<br> Hola '. $nombre . ' ' . $apellido;
echo "<br> Hola  $nombre $apellido"; //simplifica la concatenacion
$edad=25;
$estatura = 1.75;
$mayorEdad=true; //false
$prueba=null;
$prueba = array(1,2,3,4,5);
$prueba= [1,true,"a"];
echo '<br>' .$prueba[2];
$persona=[
    "nombre"=> "pepe",
    "apellido"=> "Gomez",
    "edad"=>30,
    "numerosSuerte"=>[20,12,6],
];
?>