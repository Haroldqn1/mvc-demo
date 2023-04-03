<?php
 //Array (arreglo) mas sencillo. Posee un indice, el primero siempre es 0
 $platos = ["Ceviche","Arroz con patp","Carapulcra","Aji de gallima","Lomo saltado"]

 echo $platos[0];
 echo $platos[1];


 $amigos = array("Jose","Joel","Lorenzo","Cesar");
 echo $amigos[1];


 // Array MULTI dimensional
 $aplicaciones = [
  ["Photoshop","Corel Draw","Premier","Muse"],
  ["VSCode","Xampp","NetBeans","Erwin","Notepad++"],
  ["Excel","SAP","AutoCAD","PowerBI","Project"]
];

// Obtener VSCode
echo $aplicaciones[1][0]; //1 = indice arreglo , 0 = indice del valor
// Obtener Muse
echo $aplicaciones[0][3];
// Obtener SAP
echo $aplicaciones[2][1];

//Hasta aqui , cualquiera de los arreglos anteriones utiliza un INDICE (int)
//AREGLOS ASOCIATIVOS... KEY => VALUE
$datosPersonales = [
  "apellidos"     =>"Quispe Napa"
  "nombres"       =>"Harold Efrain"
  "especialidad"  =>"Ingenieria de Software con IA"
  "email"         => "efrainqm16qgmail.com"
  "edad"          => 19;
  "estaCasado"    => true
  "peliculas"     => ["EndGame","Pinocho","IroMan"]
];

//Obtener la especialidad
echo $datosPersonales ["especialidad"]

//Obtener la primera de tus peliculas favoritas
echo $datosPersonales["peliculas"][0]