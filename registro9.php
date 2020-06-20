<style>
       
@media(min-width: 320px){
    .imagen_fondo_body{
    background-image: url('images/homesliders/index6/320.png');
    }
    .titulo{
        font-size: 14px;
        text-align: center;
        margin-top: 0px;
    }
    .btn_a{
        background-color: #fff;
        color:#000;
        font-size: 17px;
        text-align: center;
        margin-left: 50px;
        border: solid 1px #fff;
        padding-left: 15px;
        padding-right: 15px;
    }
    body{
        background-color: #000;
        color: #fff;
    }
    fieldset{
        width: 53%;
        margin-left: 50px;
        margin-top: 213px;
        border-color: #999;
    }
    .padding_fieldset{
        padding: 4px;
    }
}

@media(min-width: 768px){
    .imagen_fondo_body{
    background-image: url('images/homesliders/index6/768.png');
    }
    .titulo{
        font-size: 18px;
        text-align: center;
        margin-top: 0px;
    }
    .btn_a{
        background-color: #fff;
        color: #000;
        font-size: 19px;
        text-align: center;
        margin-left: 63px;
        border: solid 1px #fff;
        padding-left: 15px;
        padding-right: 15px;
    }
    body{
        background-color: #000;
        color: #fff;
    }
    fieldset{
        width: 25%;
        margin-left: 273px;
        margin-top: 213px;
        border-color: #999;
    }
    .padding_fieldset{
        padding: 4px;
    }
}
@media(min-width: 992px){
    .imagen_fondo_body{
    background-image: url('images/homesliders/index6/992(1).png');
    }
    .titulo{
        font-size: 18px;
        text-align: center;
        margin-top: 0px;
    }
    .btn_a{
        background-color: #fff;
        color: #000;
        font-size: 19px;
        text-align: center;
        margin-left: 66px;
        border: solid 1px #fff;
        padding-left: 15px;
        padding-right: 15px;
    }
    body{
        background-color: #000;
        color: #fff;
    }
    fieldset{
        width: 20%;
        margin-left: 378px;
        margin-top: 213px;
        border-color: #999;
    }
    .padding_fieldset{
        padding: 4px;
    }
}
@media(min-width: 1280px){
    .imagen_fondo_body{
    background-image: url('images/homesliders/index6/1280.png');
    }
    .titulo{
        font-size: 18px;
        text-align: center;
        margin-top: 14px;
        font-weight: lighter;
    }
    .btn_a{
        background-color: #fff;
        color: #000;
        font-size: 20px;
        text-align: center;
        margin-left: 95px;
        border: solid 1px #fff;
        padding-left: 15px;
        padding-right: 15px;
        text-decoration: none;
    }
    body{
        background-color: #000;
        color: #fff;
    }
    fieldset{
        width: 19%;
        margin-left: 522px;
        margin-top: 213px;
        border-color: #999;
    }
    .padding_fieldset{
        padding: 4px;
    }
}
@media(min-width: 1920px){
    .imagen_fondo_body{
    background-image: url('images/homesliders/index6/1920(2).png');
    }
    .titulo{
        font-size: 20px;
        text-align: center;
        margin-top: 14px;
        font-weight: lighter;
    }
    .btn_a{
        background-color: #fff;
        color: #000;
        font-size: 20px;
        text-align: center;
        margin-left: 89px;
        border: solid 1px #fff;
        padding-left: 15px;
        padding-right: 15px;
        text-decoration: none;
    }
    body{
        background-color: #000;
        color: #fff;
    }
    fieldset{
        width: 13%;
        margin-left: 790px;
        margin-top: 267px;
        border-color: #999;
    }
    .padding_fieldset{
        padding: 4px;
    }
}

</style>
<?php

     //conexión db
     $server = "18.221.32.106";
     $user = "inkcode_puert";
     $password = "*Dung30ns.20022018*"; 
     $db = "inkcode_puertaabierta";
 $titulo = "Debe elegír una opción para poder continuar";

 $conexion = new mysqli($server, $user, $password, $db);

 if($conexion->connect_error){
     die("conexion fallida: " . $conexion->connect_error);
 } 
//conexión db
 //validacion
 if($_POST['texto'] == ''){
    echo "<body class='imagen_fondo_body'><fieldset><div class='padding_fieldset'><p class='titulo'>$titulo</p><br><a href='enunciado_descriptivo.php' class='btn_a'>OK</a></div></fieldset></body>";
}
//validacion
    //insert db
    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
     
        $sql = "INSERT INTO enunciado_descriptivo(texto7)
        VALUES('$texto')";
        
        if($conexion->query($sql) === true){
            echo '<script type="text/javascript">
            window.location.assign("duracion_inversion.php");
            </script>';
        }
        else{
            die("error al insertar datos" . $conexion->error);
        } 
        
}
 //insert db
        



?>