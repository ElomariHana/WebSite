
<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])) {
  $name = $_POST['name'];
  $sql = 'INSERT INTO ecoles(name) VALUES(:name)';
  $connection = $db->prepare($sql);
  if ($connection->execute([':name' => $name])) {
    $message = 'data inserted successfully';
  }

}
 ?>
 <?php
require 'db.php';
$sql = 'SELECT * FROM ecoles';
$connection = $db->prepare($sql);
$connection->execute();
$ecoles = $connection->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require "hearder.php"; ?>
 
 <div class="card-header">
   <h4>Ajouter un ecole </h4>
 </div>
 <div>
   <?php if(!empty($message)): ?>
     <div class="alert alert-success">
       <?= $message; ?>
     </div>
   <?php endif; ?>
   <form method="post">
     <div class="form-group">
       <label for="name">Type</label>
       <input type="text" name="name" id="name" class="form-control">
     </div>
     <div class="form-group">
       <button type="submit" class="btn btn-info">Create</button>
     </div>
   </form>
 </div>

</div>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Afficher toutes les ecoles </h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
        </tr>
        <?php foreach($ecoles as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->name; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
    
<?php require "footer.php"; ?>
