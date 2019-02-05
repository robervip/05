<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM equipo");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="insertar.php">Nuevo Equipo</a></li>
          </ul>
        </div>
      </nav>
      <h2>Equipo</h2>
      <table>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>ciudad</th>
        </tr>
        <?php
          foreach ($resultado as $equipo) {
            echo "<tr>";
            echo "<td><a href='mostrarEquipo.php?id_equipo=".$equipo['id_equipo']."'>".$equipo['id_equipo']."</a></td>";
            echo "<td>".$equipo['nombre']."</td>";
            echo "<td>".$equipo['ciudad']."</td>";
            echo "</tr>";
          }
        ?>
      </table>

    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
