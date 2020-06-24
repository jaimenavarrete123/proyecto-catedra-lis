<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body id="freg">

<br>
<br>
<br>
<br>
    <section>
        <article>
            <div id="formr">
                <form action="" class="form-horizontal" name="formulario" id="salario">
            <div>
            <h2>Inicio de sesión</h2>
            <hr id="line">
            </div>
            
            <div class="input-container">
                <i class="fa fa-user-circle-o icon"></i>
                <input class="input-field" type="text" name="input" placeholder="Usuario:">
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" name="pass" placeholder="Ingrese su contraseña:">
            </div>

            <label for="recuerdame">Recuerdame</label>
            <input type="checkbox" name="recordar" id="recuerdame">
            <div class="input-container">
            <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
            
            <button type="submit" class="btn" style="margin-left:103px;">Ingresar</button>
            <h4>¿Aun no tienes cuenta?</h4>
            <center><a href="Registro.php">Registrate</a></center>
            </form>
            </div>
        </article>
    </section>
    
</body>
</html>