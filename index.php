<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
      include("conexion.php");
      $contactos = "select * from datos";
    ?>
    <title>Agenda</title>
  </head>
  <body>
  <div class="container-add">
      <h2 class= "container__title"> Registrar contacto </h2>
      <form action="insertar.php" method="POST" class= "container__form">
        <label class="container__label">Nombre:</label>
        <input name="nombre" type="text" class="container__input">
        <label class="container__label">Apellido:</label>
        <input name="apellido" type="text" class="container__input">
        <label class="container__label">Correo:</label>
        <input name="correo" type="email" class="container__input"> 
        <label class="container__label">N&uacute;mero:</label>
        <input name="tel" type="number" class="container__input">
        <label class="container__label">Tipo:</label>
        <input name="tipo" type="text" class="container__input">
        <label class="container__label">Alias:</label>
        <input name="alias" type="text" class="container__input">
        <input class="container__submit" type="submit" value="registrar">
      </form>
    </div>
    <div class="container-table">
      <div class="titulo">Datos de usuario</div>
      <div class="header">Nombre</div>
      <div class="header">Apellidos</div>
      <div class="header">Alias</div>
      <div class="header">Tipo</div>
      <div class="header">N&uacute;mero</div>
      <div class="header">Correo</div>
      <?php
        $resultados = mysqli_query($conex, $contactos);

        while($row = mysqli_fetch_assoc($resultados)){
      ?>
        <div class="item"><?php echo $row["Nombre"]?></div>
        <div class="item"><?php echo $row["Apellido"]?></div>
        <div class="item"><?php echo $row["Alias"]?></div>
        <div class="item"><?php echo $row["Tipo"]?></div>
        <div class="item"><?php echo $row["Numero"]?></div>
        <div class="item"><?php echo $row["Correo"]?></div>
      <?php
        }
        mysqli_free_result($resultado);
      ?>
    </div>
  </body>
</html>