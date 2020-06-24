<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body id="fondo">
<div id="navegador">
    <nav>
    <ul>
  <li><img class="circular--squaremin" src="img/user.png" /></li>
 <li><a href="perfil.php">Mi perfil<i class="fa fa-user icon"></i></a></li>
 <li><a href="grupos.php">Grupos<i class="fa fa-users icon"></i></a></li>
 <li><a href="inscripcion_materias.php">Incripción<i class="fa fa-pencil-square-o icon"></i></a></li>
 <li id="cerrar"><a href="login.php">Cerrar Sesión<i class="fa fa-sign-out icon"></i> </a></li>
 </ul>
 </nav>
 </div>
<section>
    <article>
        <br>
    <h1>REPORTES MATERIAS</h1>

    <div id="formtab">
    <div>
    <h2>Docentes registrados</h2>
    <hr id="line">
    <button type="submit" class="btn" id="btn-repo" style="background:#27AE60;">Descargar PDF<i class="fa fa-file  icon" id="i-pdf"></i></button>
    <br> 
    <br>
    <div class="input-container">
        <table class="tablas">
            <thead>
                <tr>
                    <th>#</th><th>Nombre del docente</th><th>Usuario del docente</th><th>Correo electrónico</th><th>Materias dictadas</th>
                </tr>
            </thead>
          <tr>
              <td>1</td><td>[Nombre del docente 1]</td><td>[Usuario del docente 1]</td><td>[Correo del docente 1]</td><td>1</td>
          </tr> 
          <tr>
              <td>2</td><td>[Nombre del docente 2]</td><td>[Usuario del docente 2]</td><td>[Correo del docente 2]</td><td>2</td>
          </tr> 
          <tr>
              <td>3</td><td>[Nombre del docente 3]</td><td>[Usuario del docente 3]</td><td>[Correo del docente 3]</td><td>5</td>
          </tr> 
          <tr>
              <td>4</td><td>[Nombre del docente 4]</td><td>[Usuario del docente 4]</td><td>[Correo del docente 4]</td><td>2</td>
          </tr> 
          <tr>
              <td>5</td><td>[Nombre del docente 5]</td><td>[Usuario del docente 5]</td><td>[Correo del docente 5]</td><td>3</td>
          </tr> 
        </table>
    </div>
    </div>
</div>

    <div id="formtab">
    <div>
    <h2>Alumnos registrados</h2>
    <hr id="line">
    <button type="submit" class="btn" id="btn-repo" style="background:#27AE60;">Descargar PDF<i class="fa fa-file  icon" id="i-pdf"></i></button>
    <br> 
    <br>
    <div class="input-container">
        <table class="tablas">
            <thead>
                <tr>
                    <th>#</th><th>Nombre del alumno</th><th>Usuario del alumno</th><th>Correo electrónico</th><th>Materias inscritas</th>
                </tr>
            </thead>
          <tr>
              <td>1</td><td>[Nombre del alumno 1]</td><td>[Usuario del alumno 1]</td><td>[Correo del alumno 1]</td><td>5</td>
          </tr> 
          <tr>
              <td>2</td><td>[Nombre del alumno 2]</td><td>[Usuario del alumno 2]</td><td>[Correo del alumno 2]</td><td>5</td>
          </tr> 
          <tr>
              <td>3</td><td>[Nombre del alumno 3]</td><td>[Usuario del alumno 3]</td><td>[Correo del alumno 3]</td><td>4</td>
          </tr> 
          <tr>
              <td>4</td><td>[Nombre del alumno 4]</td><td>[Usuario del alumno 4]</td><td>[Correo del alumno 4]</td><td>3</td>
          </tr> 
          <tr>
              <td>5</td><td>[Nombre del alumno 5]</td><td>[Usuario del alumno 5]</td><td>[Correo del alumno 5]</td><td>4</td>
          </tr> 
        </table>
    </div>
    </div>
    </div>

    <div id="formtab">
    <div>
    <h2>Grupos formados</h2>
    <hr id="line">
    <button type="submit" class="btn" id="btn-repo" style="background:#27AE60;">Descargar PDF<i class="fa fa-file  icon" id="i-pdf"></i></button>
    <br> 
    <br>
    <div class="input-container">
        <table class="tablas">
            <thead>
                <tr>
                    <th>#</th><th>Nombre de la materia</th><th>Grupo de la materia</th><th>Grupo de alumnos</th><th>Integrantes</th>
                </tr>
            </thead>
          <tr>
              <td>1</td><td>[Nombre de la materia 1]</td><td>01T</td><td>Grupo 1</td><td>1</td>
          </tr> 
          <tr>
              <td>2</td><td>[Nombre de la materia 2]</td><td>01T</td><td>Grupo 2</td><td>2</td>
          </tr> 
          <tr>
              <td>3</td><td>[Nombre de la materia 3]</td><td>01T</td><td>Grupo 3</td><td>5</td>
          </tr> 
          <tr>
              <td>4</td><td>[Nombre de la materia 4]</td><td>01T</td><td>Grupo 4</td><td>2</td>
          </tr> 
          <tr>
              <td>5</td><td>[Nombre de la materia 5]</td><td>01T</td><td>Grupo 5</td><td>3</td>
          </tr> 
        </table>
    </div>
    </div>
    </div>

    <div id="formtab">
    <div>
    <h2>Alumnos sin grupo</h2>
    <hr id="line">
    <button type="submit" class="btn" id="btn-repo" style="background:#27AE60;">Descargar PDF<i class="fa fa-file  icon" id="i-pdf"></i></button>
    <br> 
    <br>
    <div class="input-container">
        <table class="tablas">
            <thead>
                <tr>
                    <th>#</th><th>Nombre del alumno</th><th>Correo electrónico</th><th>Nombre de la materia</th><th>Grupo de la materia</th>
                </tr>
            </thead>
          <tr>
              <td>1</td><td>[Nombre del alumno 1]</td><td>[Correo del alumno 1]</td><td>[Nombre de materia 1]</td><td>01T</td>
          </tr> 
          <tr>
              <td>2</td><td>[Nombre del alumno 2]</td><td>[Correo del alumno 2]</td><td>[Nombre de materia 2]</td><td>01T</td>
          </tr> 
          <tr>
              <td>3</td><td>[Nombre del alumno 3]</td><td>[Correo del alumno 3]</td><td>[Nombre de materia 3]</td><td>01T</td>
          </tr> 
          <tr>
              <td>4</td><td>[Nombre del alumno 4]</td><td>[Correo del alumno 4]</td><td>[Nombre de materia 4]</td><td>02T</td>
          </tr> 
          <tr>
              <td>5</td><td>[Nombre del alumno 5]</td><td>[Correo del alumno 5]</td><td>[Nombre de materia 5]</td><td>02T</td>
          </tr> 
        </table>
    </div>
    </div>
    </div>

    </article>
</section>
<div id="creditos" style="margin-top:5em">
<h5>Copyright © 2020-Universidad Don Bosco</h5>
</div>
</body>
</html>