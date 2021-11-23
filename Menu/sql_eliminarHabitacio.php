<?php
$id = $_POST['id'];
$conn = mysqli_connect('localhost','sergi','test1234','hotel');
$sql = "DELETE FROM 12_tipushabitacio WHERE id like '$id';";

if ($conn->query($sql) === TRUE) {
    header('Location: eliminarHabitacio.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>
 <div class="">
    <input type="button" value="INICIO" onclick="window.location.href='index.php'">
</div>