<?php 
include('templates/header.php');

      $nom=$_POST['nom'];
      $preu=$_POST['preu'];
      $descripcio=$_POST['descripcio'];
      $capacitat=$_POST['capacitat'];
      $codi=$_POST['codi'];
      $foto=$_POST['Foto'];

  $conn = mysqli_connect('localhost','sergi','test1234','hotel');
   // COMPROVAR LA CONNEXIÓ A LA BD
  if(!$conn){
        echo 'Error de connexio: '. mysqli_connect_error();
  }
  $sql="INSERT INTO 12_tipushabitacio(nom, preu, descripcio, capacitat, codi, foto) 
  VALUES (\"$nom\",$preu, \"$descripcio\",$capacitat,\"$codi\",\"$foto\")";

  if($conn->query($sql)===TRUE){
    header('Location: tipusHabitacio.php');
  }else{
    echo("Error al registrar la Habitació <br>");
  }
  ?>
  <div class="center">
  <button onclick="window.location.href='index.php'">INICIO</button>  
  </div>
  <?php  include('templates/footer.php');?>