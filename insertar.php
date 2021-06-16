<?php
  include("conexion.php");

  $nombre = _POST["nombre"]; 
  $apellido = _POST["apellido"]; 
  $alias = _POST["alias"]; 
  $correo = _POST["correo"];
  $tel = _POST["tel"];
  $tipo = _POST["tipo"];

  $insertar = "insert into datos(Nombre, Apellido, Tipo, Alias, Numero, Correo) values('$nombre', '$apellido', '$tipo', '$alias', '$tel', '$correo')";
  $resultado = mysqli_query($conex, $insertar);

  if($resultado){
    echo "<script>alert('Se registró exitosamente');
    window.location='/agenda_dw'</script>";
  }else{
    echo "<script>alert('No se pudo registrar el usuario ');window.location='/agenda_dw';</script>";
  }

?>

<!--
  Hay que imprimir todas las variables a ver qué tiene, a lo mejor una no tiene nada
  Si pones el mouse (sin hacer clic) sobre las variables en la linea 11 te dice que son
  y de donde vienen, incluso en la linea 13 con la variable insertar, pero cuando colocas
  el mouse sobre la variable $conex no sale nada, así que pienso que no debe de estar bien
  enlazado eso
-->