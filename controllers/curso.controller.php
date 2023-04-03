<?php

// INCORPORAR AL MODELO
require_once "../models/curso.php";

//Verificar si existe un operacion en curso
//GET - POST - REQUEST
//'isset' determina si existe un objeto
if(isset($_POST['operacion'])){

  //Instancia de la clase curso
  $curso = new Curso();

  //Identificar la operacion: Listar , insertar , eliminar, bucar , etc.
  if($_POST['operacion'] == 'listar'){
    //Utilizamos el metodo definido en la clase
    $resultado = $curso->listarCursos();

    //Enviamos el resultado a la vista como un JSON
    echo json_encode($resultado);
  }
}