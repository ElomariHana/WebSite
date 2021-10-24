<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM ecoles WHERE id=:id';
$connection = $db->prepare($sql);
if ($connection->execute([':id' => $id])) {
  header("Location: /lakbir/admin/addecole.php");
}
?>