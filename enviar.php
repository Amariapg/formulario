<?php
 $conectar = mysqli_connect('localhost','root','anamaria10', 'formulario');

 if(!$conectar){
     echo "No conectado";
 }

 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellidos'];
 $email = $_POST['email'];
 $sexo = $_POST['sexo'];
 $telefono = $_POST['telefono'];
 $informacion = $_POST['informacion'];

 $sql = "INSERT INTO registro (nombre, apellidos, email, sexo, telefono, informacion) VALUES ('$nombre', '$apellidos', '$email', '$sexo', '$telefono', '$informacion')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>