<?php 
include('templates/header.php');
  $array=[];
  $conn = mysqli_connect('localhost','sergi','test1234','hotel');
   // COMPROVAR LA CONNEXIÓ A LA BD
  if(!$conn){
    echo("Error al carregar les habitacions<br>");
  }

  $sql='SELECT * FROM 12_tipushabitacio';
    $resultat=mysqli_query($conn, $sql);
    $habitacions=mysqli_fetch_all($resultat, MYSQLI_ASSOC);
    $longitud=mysqli_num_rows($resultat);
    ?>  
      <div class="box">
        <div class="columns is-mobile"><?php
        ?><div class="column container center-h center-v"><?php echo("ID");?></div><?php
        ?><div class="column container center-h center-v"><?php echo("NOMBRE");?></div><?php
        ?><div class="column container center-h center-v"><?php echo("PRECIO");?></div><?php
        ?><div class="column container center-h center-v"><?php echo("DESCRIPCION");?></div><?php
        ?><div class="column container center-h center-v"><?php echo("CAPACIDAD");?></div><?php
        ?><div class="column container center-h center-v"><?php echo("CODIGO");?></div><?php
        ?><div class="column container center-h center-v"><?php echo("FOTO");?></div>
       </div>
      </div>
       <?php
    for($i=0; $i<$longitud; $i++){
        $array=$habitacions[$i];?>
        <div class="box">
        <div class="columns is-mobile"><?php
        ?><div class="column container center-h center-v"><?php echo($array['id']."<br>");?></div><?php
        ?><div class="column container center-h center-v"><?php echo($array['nom']."<br>");?></div><?php
        ?><div class="column container center-h center-v"><?php echo($array['preu']."€/Nit<br>");?></div><?php
        ?><div class="column container center-h center-v"><?php echo($array['descripcio']."<br>");?></div><?php
        ?><div class="column container center-h center-v"><?php echo($array['capacitat']." persones <br>");?></div><?php
        ?><div class="column container center-h center-v"><?php echo($array['codi']."<br>");?></div><?php ?> 
       <div class="column"><img src="<?php echo($array['foto'])?>"width="200px"></img></div>
       </div>
      </div>   
       <?php
        }
      ?>
<!DOCTYPE html>
<html lang="en" class="bagGround">
<div class="container center-h center-v">
        <button class="button is-info style-buttons" onclick="window.location.href='index.php'" style="margin-left:35%; margin-right:35%;" >INICIO</button>
</div>
</html>
<?php
include('templates/footer.php');
?>
  