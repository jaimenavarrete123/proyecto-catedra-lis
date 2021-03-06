<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once('headers/headers.php'); ?>
<section class="contenido">
    <article>
        <h1>MODIFICAR USUARIO</h1>
        <div class="formtab seccion-perfil">
                <form action="">
                    <div>
                        <img class="circular--squaremax" src="img/user.png" />
                    </div>
                </form>
            </div>
        <div class="formtab">
            <h2>Nuevos datos del usuario</h2>

            <form action="" class="form-horizontal" name="formulario" id="salario" method="post">
                    <input class="input-field" type="hidden" id="usuario" name="usuario" placeholder="Usuario:"  value="<?php echo ($row['Usuario_estudiante']); ?>" >
                
                <div class="input-container">
                    <i class="fa fa-address-card icon icon-login-registro"></i>
                    <input class="input-field" type="text" id="nombre" name="nombre" placeholder="Nombre:" value="<?php echo ($row['Nombres_estudiante']); ?>" required readonly>
                </div>
                <div class="input-container">
                    <i class="fa fa-address-card icon icon-login-registro"></i>
                    <input class="input-field" type="text" id="apellido" name="apellido" placeholder="Apellido:" value="<?php echo ($row['Apellidos_estudiante']); ?>"  required readonly>
                </div>
                <div class="input-container">
                    <i class="fa fa-birthday-cake icon icon-login-registro"></i>
                    <input class="input-field" type="text" id="cumple" name="cumple" placeholder="Edad" value="<?php echo ($row['Edad']); ?>">
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope icon icon-login-registro"></i>
                    <input class="input-field" type="text"id="email" name="email" placeholder="Email:" value="<?php echo ($row['Correo']); ?>" >
                </div>
                <div class="input-container">
                    <i class="fa fa-phone icon icon-login-registro"></i>
                    <input class="input-field" type="text" id="telefono" name="telefono" placeholder="Numero de teléfono:" value="<?php echo ($row['Telefono']); ?>" >
                </div>
                <div class="input-container">
                    <i class="fa fa-key icon icon-login-registro"></i>
                    <input class="input-field" type="password" id="password" name="password" placeholder="Ingrese su contraseña:"  >
                </div>
                <div class="input-container">
                    <i class="fa fa-key icon icon-login-registro"></i>
                    <input class="input-field" type="password" id="password_rep" name="password_rep" placeholder="Repita su contraseña:" >
                </div>

                <button type="submit" class="btn" value="Ingresar" name="btn_actualizar">Actualizar datos</button>
            </form>
        </div>
    </article>
</section>

<div id="creditos">
    <h5>Copyright © 2020-Universidad Don Bosco</h5>
</div>

</body>
</html>