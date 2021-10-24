
<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>
 <?php
include 'db.php';
$message = '';
if (isset ($_POST['titre'])  && isset($_POST['name']) && isset($_POST['lienvideo']) ) {
  $titre = $_POST['titre'];
  $name = $_POST['name'];
  $lienvideo = $_POST['lienvideo'];
  $sql = 'INSERT INTO poste(titre, name, lienvideo) VALUES(:titre, :name, :lienvideo)';
  $connection = $db->prepare($sql);
  if ($connection->execute([':titre' => $titre, ':name' => $name, ':lienvideo' => $lienvideo])) {
    $message = 'data inserted successfully';
  }

}
 ?>
 <?php
require 'db.php';
$sql = 'SELECT name,titre,lienvideo FROM poste';
$connection = $db->prepare($sql);
$connection->execute();
$poste = $connection->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php 

require "hearder.php"; ?>
<div class="card-header">
   <h4>Ajouter un concours </h4>
 </div>
 <div>
 <div>
  
   <form method="post" enctype="multipart/form-data">
   <div class="form-group">
       <label for="titre">titre</label>
       <input type="text" name="titre" id="titre" class="form-control">
     </div>
     <div class="form-group">
       <label for="name"> Ecole </label>      
	<select  name="name" class="form-control" name="name"> 
<?php 
 
    $db = new PDO('mysql:host=localhost;dbname=lakbire;charset=utf8', 'root', '');
     $cat = $db->query("select distinct name from ecoles");
			while($id=$cat->fetch(PDO::FETCH_ASSOC)){
			echo '<option value="'.$id['name'].'">'.$id['name'].'</option>';
			}
			?>		
</select>
     </div>
     <div class="form-group">
       <label for="lienvideo">lienvideo</label>
       <input type="text" name="lienvideo" id="lienvideo" class="form-control">
     </div>
     <div class="form-group">
       <button type="submit" name="submit" class="btn btn-info">Create</button>
     </div>
   </form>
 </div>
 </div>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Afficher toutes les page des concours </h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
        <th>titre</th>
          <th>ecole name</th>
          <th>lienvideo</th>
        </tr>
        <?php foreach($poste as $person): ?>
          <tr>
          <td><?= $person->titre; ?></td>
            <td><?= $person->name; ?></td>
            <td><?= $person->lienvideo; ?></td>
            <td>
            <a href="" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="" class='btn btn-danger'>Delete</a>
           
             </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require "footer.php"; ?>