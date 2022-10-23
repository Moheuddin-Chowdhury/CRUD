<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "id17010600_moheuddin", "Rv%/h7#h|0_f&KP[", "id17010600_crud");
$sql = "DELETE FROM `product` WHERE id = $id";


if(mysqli_query($conn, $sql)){
  header("Location: /");
}




