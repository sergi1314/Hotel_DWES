<html class="bagGround">
<?php 
include('templates/header.php');
$conn = mysqli_connect('localhost','sergi','test1234','hotel');
$sql = "SELECT id, nom FROM 12_tipushabitacio";
$result = mysqli_query($conn, $sql);
?>
<div class="box block">
  <form action="sql_eliminarHabitacio.php" method="post">
    <label>Seleccionar:</label>
    <br>
        <div class="select is-primary">
          <select name="id">
            <?php 
            $result=mysqli_query($conn,$sql);
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $mostrar['id'] ?>"><?php echo  $mostrar['id']." - ". $mostrar['nom'] ?></option>
            <?php  }  ?>
        </select>
        </div>
        <br><br>
    <div class="container center-h center-v">
    <input class="button is-primary style-buttons" type="submit" value="ELIMINAR">
    <input class="button is-info style-buttons" type="button" value="INICIO" onclick="window.location.href='index.php'">
    </div>
  </form>
  </div>
  </html>