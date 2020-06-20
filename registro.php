<?php
 
            //conexión db
            $server = "18.221.32.106";
            $user = "inkcode_puert";
            $password = "*Dung30ns.20022018*"; 
            $db = "inkcode_puertaabierta";

            $conexion = new mysqli($server, $user, $password, $db);

            if($conexion->connect_error){
                die("conexion fallida: " . $conexion->connect_error);
            } 
            //conexión db

            //variables POST
            if(isset($_POST['nombre'], $_POST['apellido'], $_POST['web'])){
                $nom=$_POST['nombre'];
                $ape=$_POST['apellido'];
                $web=$_POST['web'];
              //variables POST

            //registra los datos del usuario
            $sql="INSERT INTO informacion_personal (nombre, email, edad) VALUES ('$nom', '$ape', '$web')";
            if($conexion->query($sql) === true){
                
            }
            else{
                die("error al insertar datos" . $conexion->error);
            }        
            header ("Location: tipo_proyecto.php");
        }
            //registra los datos del usuario
?>