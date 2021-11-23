<html class="bagGround">
<?php 
    include('templates/header.php');
    $conn = mysqli_connect('localhost','sergi','test1234','hotel');
    $sql = "SELECT * FROM 12_tipushabitacio";
    $result = mysqli_query($conn, $sql);
    $id =0;
    if(isset($_POST['submit'])){
      $id = $_POST['id'];
      $sql2 = "SELECT * FROM 12_tipushabitacio WHERE id = $id";
      $result2 = mysqli_query($conn, $sql2);
      $result3 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    }
?>
<div class="box block">
  <br>
  <div>
    <form class="form" action="actualizarHabitacion.php" method="POST">
      <br>
      <div class="select is-primary">
      <select name="id" class="form-select">
              <option value="0" >Habitacion</option>
              <?php 
              $result=mysqli_query($conn,$sql);
              
              while($mostrar=mysqli_fetch_array($result)){
              ?>
              <option value="<?php echo $mostrar['id'] ?>"><?php echo  $mostrar['id']." - ". $mostrar['nom'] ?></option>
              <?php  }  ?>
              </select> 
          </div>       
      <br><br>
      <div class="container">
          <input class="button is-primary" type="submit" name="submit" value="SELECCIONAR" class="btn btn-primary"><br><br>
      </div>
    </form>
  </div>
  </div>
  <div class="box block">
  <div>
    <form class="form" action="sql_actualizarHabitacion.php" method="POST" <?php if($id == 0){ echo "hidden"; } ?>>
      <input type="hidden" value="<?php echo $result3[0]["id"]?>" name="id">
      <label class="form-label">Nombre: </label><input class="input" type="text" name="nom" value="<?php echo $result3[0]["nom"] ?>" ><br>
      <label class="form-label">Precio: </label><input class="input" type="number" name="preu" step=".01" value="<?php echo $result3[0]["preu"] ?>"  ><br>
      <label class="form-label">Descripcion: </label><br><textarea class="input" name="descripcio"cols="30" rows="10"><?php echo $result3[0]["descripcio"] ?></textarea><br>
      <label class="form-label">Capacidad</label><input class="input" type="number" name="capacitat" min="1" max="4" value="<?php echo $result3[0]["capacitat"] ?>"  ><br>
      <label class="form-label">Codigo:</label><input class="input"t type="text" name="codi" maxlength="5" value="<?php echo $result3[0]["codi"] ?>" ><br>  
      <label class="form-label">Foto:</label><input class="input" type="text" name="foto" value="<?php echo $result3[0]["foto"] ?>" ><br>
      <br><br>
      <div class="container center-h center-v">
      <input class="button is-primary style-buttons" type="submit" name="submit"value="MODIFICAR" class="btn btn-primary">
      </div>
       </div>
    </form>
    <div class="container center-h center-v">
    <button class="button is-info style-buttons" onclick="window.location.href='index.php'" >INICIO</button>
    </div>
    </div>          
</html>