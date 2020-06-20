<!DOCTYPE html>
<html lang="en">

<head>
    <title>Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/empieza.css">
</head>
<style>
    div.scrollmenu {
        overflow: auto;
        white-space: nowrap;
        height: 400px
    }
</style>

<body>
    <?php
$link = new PDO('mysql:host=18.221.32.106;dbname=inkcode_puertaabierta', 'inkcode_puert', '*Dung30ns.20022018*');

?>
    <header>
        <div class="container">
            <div class="navbar-header" style="width: 20%;">
                <a class="navbar-brand text-uppercase" href="#" title="Puerta Abierta">
                    <img src="images/homesliders/index-new/Mesa-de-trabajo-51.png" width="50%" alt="favicon"
                        style="padding-bottom: 50px;">
                </a>
            </div>
    </header>

    <div class="container">
        <div class="scrollmenu">
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-secondary text-light">
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">NOMBRE</th>
                        <th scope="col" class="text-center">EMAIL</th>
                        <th scope="col" class="text-center">EDAD</th>
                        <th scope="col" class="text-center">TIPO PROYECTO</th>
                        <th scope="col" class="text-center">FECHA PROYECTO</th>
                        <th scope="col" class="text-center">VALOR CAPITAL INICIAL</th>
                        <th scope="col" class="text-center">NIVEL INGRESO MENSUAL</th>
                        <th scope="col" class="text-center">RELACIÓN "RIESGO"</th>
                        <th scope="col" class="text-center">OPCIÓN ANTE BAJA</th>
                        <th scope="col" class="text-center">ENUNCIADO DESCRIPTIVO</th>
                        <th scope="col" class="text-center">DURACIÓN INVERSIÓN</th>
                        <th scope="col" class="text-center">PROPORCIÓN A INVERTIR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <?php foreach ($link->query('SELECT * from informacion_personal') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </th>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from informacion_personal') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['nombre'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from informacion_personal') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['email'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from informacion_personal') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['edad'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from tipo_proyecto') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['texto'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from tipo_proyecto') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['fecha_proyecto'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from capital_inicial') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">u$s
                                <?php echo $row['valor_capital'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from nivel_ingreso_mensual') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['texto2'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from palabra_riesgo') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['texto3'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from opcion_ante_baja') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['texto4'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from enunciado_descriptivo') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['texto7'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from duracion_inversion') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['texto5'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php foreach ($link->query('SELECT * from proporcion_invertir') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                            <div class="col-12 tamaño_texto">
                                <?php echo $row['texto6'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                            </div>
                            <?php
                                }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>