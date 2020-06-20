<?php

if(!($conexion = mysql_connect("localhost, "root")))
{
      exit();
}else{
      mysql_select_db("inkcode_puertaabierta", $conexion);
      $query = "select usu_nombre from usuario where usu_id=1";

      $q = mysql_query($query, $conexion);
      $result = mysql_result($q, 0);

      echo $result;
}


?>