<?php
 $conn = mysqli_connect('localhost','sergi','test1234','hotel');
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $preu = $_POST['preu'];
    $descripcio = $_POST['descripcio'];
    $capacitat = $_POST['capacitat'];
    $codi = $_POST['codi'];
    $foto = $_POST['foto'];
  }
    $sql1 = "UPDATE 12_tipushabitacio 
             SET nom = '$nom', 
                 preu = $preu, 
                 descripcio = '$descripcio', 
                 capacitat = $capacitat,
                 codi = '$codi', 
                 foto = '$foto'
              WHERE id LIKE $id";
    $result1 = mysqli_query($conn, $sql1);

if ($conn->query($sql1) === TRUE) {
  header('Location: actualizarHabitacion.php');
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$conn->close();
?>