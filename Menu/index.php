<?php 
include('templates/header.php');
?>
<!DOCTYPE html>
<html class="bagGround">
<div class="box block">
<div class="container center-h center-v">
  <h2 class="title">Menú Principal</h2><br><br>
</div>
<div class="container center-h center-v">
  <button class="button is-primary is-outlined style-buttons" onclick="window.location.href='sql_visualitzarHabitacio.php'">Visualizar</button>
  <button class="button is-primary is-outlined style-buttons" onclick="window.location.href='tipusHabitacio.php'">Insertar</button>
  <button class="button is-primary is-outlined style-buttons" onclick="window.location.href='actualizarHabitacion.php'">Actualizar</button>
  <button class="button is-primary is-outlined style-buttons" onclick="window.location.href='eliminarHabitacio.php'">Eliminar</button>
</div>
<br><br>
<div class="container center-h center-v">
<button class="button is-danger style-buttons" onclick="window.location.href=''">Salir</button>
</div>
</div>
</html>

<?php 
include('templates/footer.php');
?>