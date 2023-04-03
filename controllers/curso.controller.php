<?php

// INCORPORAR AL MODELO
require_once "../models/curso.php";

//Verificar si existe un operacion en curso
//GET - POST - REQUEST
if(isset($_POST['operacion'])){

  //Instancia de la clase curso
  $curso = new Curso();

  //Identificar la operacion: Listar , insertar , eliminar, bucar , etc.
  if($_POST['operacion'] == 'listar'){

    $resultado = $curso->listarCursos();

    //Enviamos el resultado a la vista como un JSON
    echo json_encode($resultado);
  }
}