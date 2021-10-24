<?php
require './admin/db.php';
$sql = 'SELECT * FROM ecoles';
$connection = $db->prepare($sql);
$connection->execute();
$ecoles = $connection->fetchAll(PDO::FETCH_OBJ);
 ?>

<?php require "header.php"; ?>
<!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Preparer vos concours</h1>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/concours.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
 
  <main id="main">
  
 <!-- ======= About Us Section ======= -->
 <section id="about" class="about">
 <div class="section-title">
      <h2>
  vous trouverez ci-dessus les concours des ecole superieure</h2>
    </div>
  <div class="container" data-aos="fade-up">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
   </thead>
   <?php foreach($ecoles as $person): ?>
  <tbody>
    <tr>
      <td style=" font-weight: bold;"><?= $person->name; ?></td>
      <td style="color:green;">corriger</td>
      <td style="color:green;">
      
<a type="button" href="affichconcours.php"  class="btn btn-success">Click here</a></td>
    </tr> 
  </tbody>
  <?php endforeach; ?>
</table>
</section><!-- End About Us Section -->
    
    

  </main><!-- End #main -->

  <?php require "footer.php"; ?>