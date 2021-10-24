<?php
require './admin/db.php';
$sql = 'SELECT * FROM maths';
$connection = $db->prepare($sql);
$connection->execute();
$maths = $connection->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require "header.php"; ?>

  <section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
     

      <h2>Examens de la session normale et de rattrapage Sciences Mathématiques </h2>
    
   
  


  </div>


</section><!-- End Hero -->
<div class="container">
  <div class="card mt-5">
  <div class="card-body">
      <table class="table">
        <tr>
          <th>File Name </th>
          <th>Download</th>
        </tr>
        <?php foreach($maths as $person): ?>
          <tr>
            <td><?= $person->project_name; ?></td>
            <td><a href="download.php?pdf=<?php $person->project_name?>">Download</a></td>
            
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require "footer.php"; ?>