<?php include("queries/consultas.php");?>
<?php
session_start();
if(!isset($_SESSION['usuario']) || $_SESSION['rol'] != 3){
    header("Location:index.php");
}else{
    $usuario = $_SESSION['usuario'];
    $rol = $_SESSION['rol'];
    echo $rol;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once('headers/headers.php'); ?>
<section class="contenido">
    <article>
        <h1>REGISTRO DE CARRERAS</h1>
        <div class="formtab">
            <h2>Carreras</h2>

            <div>
            <form action="queries/datos.php" method="POST" class="search-container sc-downloader">
                <div class="select-container">
                    <h4>Nombre carrera: <input type="text" name="nombre_carrera" id="" required></h4>
                </div>
                <div class="select-container">
                    <h4>Codigo escuela:</h4>
                    <select name="codigo_escuela" class="select_grupos_lab">
                    <?php while($mostrar=mysqli_fetch_array($resultado1)){ 
                    ?>
                        <option><?php echo $mostrar['Codigo_escuela'] ?></option>
                    <?php 
                    }
                    ?>
                    </select>
                </div>
            </div>

            <div class="btn-inscribir">
                <input type="submit" id="btn-repo">
                <label for="btn-repo" class="btn">Agregar materia <i class="fa fa-plus icon" id="i-pdf-2"></i></label>
            </div>
            </form>
        </div>
    </article>
</section>

<section>
    <article>
        <div class="formtab">
            <h2>Carreras registradas</h2>
            <form action="" name="formulario" id="inscripcion">
                <div class="search-container">
                <div class="bar-scroll">
                    <table class="tablas">
                        <thead>
                            <tr>
                                <th>Codigo Carrera</th>
                                <th>Nombre Carrera</th>
                                <th>Codigo Escuela</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <?php while($mostrar=mysqli_fetch_array($resultado2)){ 
                        ?>
                        <tr>
                            <td><?php echo $mostrar['Codigo_carrera'] ?></td>
                            <td><?php echo $mostrar['Nombre_carrera'] ?></td>
                            <td><?php echo $mostrar['Codigo_escuela'] ?></td>
                            <td><a href="queries/datos.php?id_ca=<?php echo $mostrar['Codigo_carrera'];?>"><i class="fa fa-pencil icon icon-modify"></i><a href="queries/datos.php?id_carrera=<?php echo $mostrar['Codigo_carrera'];?>"><i class="fa fa-trash icon icon-delete"></i></a></td>
                        </tr> 
                        <?php 
                          }
                        ?>
                    </table>
                </div>
                </div>
            </form>
        </div>
        </div>
    </article>
</section>

<div id="creditos">
    <h5>Copyright © 2020-Universidad Don Bosco</h5>
</div>
</body>
</html>