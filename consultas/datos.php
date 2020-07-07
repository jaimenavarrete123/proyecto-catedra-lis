<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Interna</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/normalize.css"/>
    <link rel="stylesheet" href="../css/styles.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
<div id="navegador">
<input type="checkbox" id="menu-bar">
<label for="menu-bar" class="fa fa-bars icon" style="font-size:36px"></label>
<a href="perfil.php"><img class="circular--squaremin" src="../img/user.png" /></a>
<a href="login.php" class="cerrar">Cerrar Sesión <i class="fa fa-sign-out icon"></i> </a>
    <nav class="menu">
        <ul>
            <div class="separador-links">
                <li><a href="../perfil.php">Mi perfil <i class="fa fa-user icon"></i></a></li>
                <li><a href="../grupos.php">Grupos <i class="fa fa-users icon"></i></a></li>
                <li><a href="../inscripcion_materias.php">Inscripción <i class="fa fa-pencil-square-o icon"></i></a></li>
                <li><a href="../reportes.php">Reportes <i class="fa fa-book icon"></i></a></li>
                <li><a href="../gestion.php">Gestión <i class="fa fa-cog icon"></i></a></li>
                <li class="cerrar-m" ><a href="login.php">Cerrar Sesión <i class="fa fa-sign-out icon"></i> </a></li>
                </div>
        </ul>
    </nav>
</div>
</header>
<section class="contenido-g">
    <article>
<?php
include("cn.php");
/*Insertar información*/
/*Permite llamar los diferentes inputs y section option a una variable para poder realizar insert a la tabla empleado*/
 if(isset($_POST['submit'])){
    $Usuario = isset($_POST['Usuario']) ? $_POST['Usuario'] : 0;
    $Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : 0;
    $Apellido = isset($_POST['Apellido']) ? $_POST['Apellido'] : 0;
    $Edad = isset($_POST['Edad']) ? $_POST['Edad'] : 0;
    $Rol = isset($_POST['Rol']) ? $_POST['Rol'] : 0;
    $Correo = isset($_POST['Correo']) ? $_POST['Correo'] : 0;
    $Telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : 0;
    $contra = isset($_POST['Passwd']) ? $_POST['Passwd'] : 0;
    $contraRep = isset($_POST['PasswdRep']) ? $_POST['PasswdRep'] : 0;
    if($contra != $contraRep){
      echo "Las contraseñas no coinciden <br>";
    }else{
      $encriptada = password_hash($contra, PASSWORD_BCRYPT);
      $query="INSERT INTO empleado (Usuario_empleado, Pass_empleado, Nombres_empleado, Apellidos_empleado, Edad, Correo, Telefono, Codigo_rol, Activo)
      VALUES ('$Usuario', '$encriptada', '$Nombre', '$Apellido', '$Edad', '$Correo', '$Telefono', '$Rol', '1')";
      if($conexion->query($query) === TRUE){
        echo "Usuario registrado con éxito";
        header("Location: ../registro_interno.php"); //Si el query se realiza con éxito
      }else{ //Si el query presenta un error
        echo "Error al ingresar los datos";
      }
    }
  }


 /*Permire realizar insert a la tabla escuela*/
 if(isset($_POST['codigo_escuela']) && isset($_POST['nombre_escuela'])){
  $codigo_escuela=$_POST["codigo_escuela"];
  $nombre_escuela=$_POST["nombre_escuela"];
  $insertar="INSERT INTO escuela(Codigo_escuela, Nombre_escuela) VALUES('$codigo_escuela', '$nombre_escuela')";
  if($conexion->query($insertar)===true){
      echo 'La escuela se ha registrado';
      header("Location: ../escuelas.php");
  }
  else{
      echo 'La escuela ya existe';
  }
  
}

 /*Permite realizar insert a la tabla carrera*/
 if(isset($_POST['codigo_carrera']) && isset($_POST['nombre_carrera']) && isset($_POST['codigo_escuela'])){
  $codigo_carrera=$_POST["codigo_carrera"];
  $nombre_carrera=$_POST["nombre_carrera"];
  $codigo_escuela=$_POST["codigo_escuela"];
  $insertar="INSERT INTO carrera(Codigo_carrera, Nombre_carrera, Codigo_escuela) VALUES('$codigo_carrera', '$nombre_carrera', '$codigo_escuela')";
  if($conexion->query($insertar)===true){
      echo 'La carrera se ha registrado';
      header("Location: ../carreras.php");
  }
  else{
      echo 'La carrera ya existe';
  }
  
}
/*Permite realizar insert a la tabla materia*/
if(isset($_POST['codigo_materia']) && isset($_POST['nombre_materia']) && isset($_POST['codigo_escuela'])){
  $codigo_materia=$_POST["codigo_materia"];
  $nombre_materia=$_POST["nombre_materia"];
  $codigo_escuela=$_POST["codigo_escuela"];
  $insertar="INSERT INTO materia(Codigo_materia, Nombre_materia, Codigo_escuela) VALUES('$codigo_materia', '$nombre_materia', '$codigo_escuela')";
  if($conexion->query($insertar)===true){
      echo 'La materia se ha registrado';
      header("Location: ../materias.php");
  }
  else{
      echo 'La materia ya existe';
  }
  
}

/*Eliminar informacion*/
/*Permite eliminar datos de la tabla materias*/
if(!empty($_REQUEST['id_materia'])){
if(!empty($_POST)){
  $codigo_mat=$_POST['codigo_mat'];
  $query_delete=mysqli_query($conexion,"DELETE FROM materia WHERE Codigo_materia='$codigo_mat'");
  if($query_delete){
    header("Location: ../materias.php");
  }else{
    echo "Error al eliminar";
  }
  }

/*Permite seleccionar la informacion que va ser eliminada de la tabla materias y mostrar un mensaje si el usuario desea eliminar o no la información*/
  $codigo_mat=$_REQUEST['id_materia'];
  $query=mysqli_query($conexion,"SELECT Nombre_materia FROM materia WHERE Codigo_materia='$codigo_mat'");
  $result=mysqli_num_rows($query);
  if($result > 0){
    while($mostrar = mysqli_fetch_array($query)){
      $nombre_mat=$mostrar['Nombre_materia'];
    }
    echo "<div class=\"formtab\">
    <h2>¿Está seguro de eliminar la siguiente materia?</h2>
    <form class=\"search-container\" method=\"POST\" action=\"\">
    <div class=\"select-container\">
    <h4 class=\"txt-msg\"> Nombre: ",$nombre_mat,"</h4>
    </div>
    <div class=\"select-container\">
    <input type=\"hidden\" name=\"codigo_mat\" value=\"$codigo_mat\">
    <a href=\"../materias.php\" class=\"btn-cancel\">Cancelar</a>
    <button type=\"submit\" value=\"Aceptar\" class=\"btn-ok\">Aceptar</button>
    <label for=\"btn-repo\" Aceptar</label>
    </div>
    </form>
    </div><br><br><br><br>";
  }
  else{
    header("Location: ../materias.php");
  }
}
/*Eliminar elementos desde el usuario Admin*/
if(!empty($_REQUEST['id_carrera'])){
/*Permite eliminar datos de la tabla carreras*/
if(!empty($_POST)){
  $codigo_car=$_POST['codigo_car'];
  $query_delete=mysqli_query($conexion,"DELETE FROM carrera WHERE Codigo_carrera='$codigo_car'");
  if($query_delete){
    header("Location: ../carreras.php");
  }else{
    echo "Error al eliminar";
  }
  }

/*Permite seleccionar la informacion que va ser eliminar de la tabla carreras y mostrar un mensaje si el usuario desea eliminar o no la información*/
  $codigo_car=$_REQUEST['id_carrera'];
  $query=mysqli_query($conexion,"SELECT Nombre_carrera FROM carrera WHERE Codigo_carrera='$codigo_car'");
  $result=mysqli_num_rows($query);
  if($result > 0){
    while($mostrar = mysqli_fetch_array($query)){
      $nombre_car=$mostrar['Nombre_carrera'];
    }
    echo "<div class=\"formtab\">
    <h2>¿Está seguro de eliminar la siguiente carrera?</h2>
    <form class=\"search-container\" method=\"POST\" action=\"\">
    <div class=\"select-container\">
    <h4 class=\"txt-msg\"> Nombre: ",$nombre_car,"</h4>
    </div>
    <div class=\"select-container\">
    <input type=\"hidden\" name=\"codigo_car\" value=\"$codigo_car\">
    <a href=\"../materias.php\" class=\"btn-cancel\">Cancelar</a>
    <button type=\"submit\" value=\"Aceptar\" class=\"btn-ok\">Aceptar</button>
    <label for=\"btn-repo\" Aceptar</label>
    </div>
    </form>
    </div><br><br><br><br>";
  }else{
    header("Location: ../carreras.php");
  }
}

if(!empty($_REQUEST['id_escuela'])){
  /*Permite eliminar datos de la tabla carreras*/
  if(!empty($_POST)){
    $codigo_esc=$_POST['codigo_esc'];
    $query_delete=mysqli_query($conexion,"DELETE FROM escuela WHERE Codigo_escuela='$codigo_esc'");
    if($query_delete){
      header("Location: ../escuelas.php");
    }else{
      echo "Error al eliminar";
    }
    }
  
  /*Permite seleccionar la informacion que va ser eliminar de la tabla escuelas y mostrar un mensaje si el usuario desea eliminar o no la información*/
    $codigo_esc=$_REQUEST['id_escuela'];
    $query=mysqli_query($conexion,"SELECT Nombre_escuela FROM escuela WHERE Codigo_escuela='$codigo_esc'");
    $result=mysqli_num_rows($query);
    if($result > 0){
      while($mostrar = mysqli_fetch_array($query)){
        $nombre_esc=$mostrar['Nombre_escuela'];
      }
      echo "<div class=\"formtab\">
      <h2>¿Está seguro de eliminar la siguiente escuela?</h2>
      <form class=\"search-container\" method=\"POST\" action=\"\">
      <div class=\"select-container\">
      <h4 class=\"txt-msg\"> Nombre: ",$nombre_esc,"</h4>
      </div>
      <div class=\"select-container\">
      <input type=\"hidden\" name=\"codigo_esc\" value=\"$codigo_esc\">
      <a href=\"../materias.php\" class=\"btn-cancel\">Cancelar</a>
      <button type=\"submit\" value=\"Aceptar\" class=\"btn-ok\">Aceptar</button>
      <label for=\"btn-repo\" Aceptar</label>
      </div>
      </form>
      </div><br><br><br><br>";
    }else{
      header("Location: ../escuelas.php");
    }
  }

  if(!empty($_REQUEST['id_empleado'])){
    /*Permite eliminar datos de la tabla carreras*/
    if(!empty($_POST)){
      $usuario_emp=$_POST['codigo_emp'];
      $query_delete=mysqli_query($conexion,"DELETE FROM empleado WHERE Usuario_empleado='$usuario_emp'");
      if($query_delete){
        header("Location: ../registro_interno.php");
      }else{
        echo "Error al eliminar";
      }
      }
    
    /*Permite seleccionar la informacion que va ser eliminar de la tabla empleado y mostrar un mensaje si el usuario desea eliminar o no la información*/
      $usuario_emp=$_REQUEST['id_empleado'];
      $query=mysqli_query($conexion,"SELECT Usuario_empleado, Nombres_empleado, Apellidos_empleado, Edad,Correo, Telefono, Nombre_rol, Activo, Hora_bloqueo FROM empleado INNER JOIN roles USING (Codigo_rol) WHERE Usuario_empleado='$usuario_emp'");
      $result=mysqli_num_rows($query);
      if($result > 0){
        while($mostrar = mysqli_fetch_array($query)){
          $nombre_emp=$mostrar['Nombres_empleado'];
          $apellido_emp=$mostrar['Apellidos_empleado'];
          $edad_emp=$mostrar['Edad'];
          $telefono_emp=$mostrar['Telefono'];
          $rol_emp=$mostrar['Nombre_rol'];
        }
        echo "<div class=\"formtab\">
        <h2>¿Está seguro de eliminar la siguiente empleado?</h2>
        <form class=\"search-container\" method=\"POST\" action=\"\">
        <div class=\"select-container\">
        <h4 class=\"txt-msg\"> Nombre: ",$nombre_emp,"</h4>
        <h4 class=\"txt-msg\"> Apellido: ",$apellido_emp,"</h4>
        <h4 class=\"txt-msg\"> Edad: ",$edad_emp,"</h4>
        <h4 class=\"txt-msg\"> Telefono: ",$telefono_emp,"</h4>
        <h4 class=\"txt-msg\"> Rol: ",$rol_emp,"</h4>
        </div>
        <div class=\"select-container\">
        <input type=\"hidden\" name=\"codigo_emp\" value=\"$usuario_emp\">
        <a href=\"../materias.php\" class=\"btn-cancel\">Cancelar</a>
        <button type=\"submit\" value=\"Aceptar\" class=\"btn-ok\">Aceptar</button>
        <label for=\"btn-repo\" Aceptar</label>
        </div>
        </form>
        </div><br><br><br><br>";
      }else{
        header("Location: ../registro_interno.php");
      }
    }

    if(!empty($_REQUEST['id_estudiante'])){
      /*Permite eliminar datos de la tabla carreras*/
      if(!empty($_POST)){
        $usuario_emp=$_POST['codigo_est'];
        $query_delete=mysqli_query($conexion,"DELETE FROM estudiante WHERE Usuario_estudiante='$usuario_emp'");
        if($query_delete){
          header("Location: ../registro_interno.php");
        }else{
          echo "Error al eliminar";
        }
        }
      
      /*Permite seleccionar la informacion que va ser eliminar de la tabla estudiante y mostrar un mensaje si el usuario desea eliminar o no la información*/
        $usuario_emp=$_REQUEST['id_estudiante'];
        $query=mysqli_query($conexion,"SELECT Usuario_estudiante, Nombres_estudiante, Apellidos_estudiante, Edad,Correo, Telefono, Nombre_rol, Activo, Hora_bloqueo FROM estudiante INNER JOIN roles USING (Codigo_rol) WHERE Usuario_estudiante='$usuario_emp'");
        $result=mysqli_num_rows($query);
        if($result > 0){
          while($mostrar = mysqli_fetch_array($query)){
            $nombre_est=$mostrar['Nombres_estudiante'];
            $apellido_est=$mostrar['Apellidos_estudiante'];
            $edad_est=$mostrar['Edad'];
            $telefono_est=$mostrar['Telefono'];
            $rol_est=$mostrar['Nombre_rol'];
          }
          echo "<div class=\"formtab\">
          <h2>¿Está seguro de eliminar la siguiente empleado?</h2>
          <form class=\"search-container\" method=\"POST\" action=\"\">
          <div class=\"select-container\">
          <h4 class=\"txt-msg\"> Nombre: ",$nombre_est,"</h4>
          <h4 class=\"txt-msg\"> Apellido: ",$apellido_est,"</h4>
          <h4 class=\"txt-msg\"> Edad: ",$edad_est,"</h4>
          <h4 class=\"txt-msg\"> Telefono: ",$telefono_est,"</h4>
          <h4 class=\"txt-msg\"> Rol: ",$rol_est,"</h4>
          </div>
          <div class=\"select-container\">
          <input type=\"hidden\" name=\"codigo_est\" value=\"$usuario_emp\">
          <a href=\"../materias.php\" class=\"btn-cancel\">Cancelar</a>
          <button type=\"submit\" value=\"Aceptar\" class=\"btn-ok\">Aceptar</button>
          <label for=\"btn-repo\" Aceptar</label>
          </div>
          </form>
          </div><br><br><br><br>";
        }else{
          header("Location: ../registro_interno.php");
        }
      }
  

mysqli_close($conexion);
?>
 </article>
</section>

<div id="creditos">
    <h5>Copyright © 2020-Universidad Don Bosco</h5>
</div>

</body>
</html>