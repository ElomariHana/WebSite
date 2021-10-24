
<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 80%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 10%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
<?php
require './admin/db.php';
$sql = 'SELECT titre,name,lienvideo FROM poste where name = "convexe" ';
$connection = $db->prepare($sql);
$connection->execute();
$poste = $connection->fetchAll(PDO::FETCH_OBJ);
 ?>

<?php require "header.php"; ?>
<!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>L'analyse convexe</h1>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
 
  <main id="main">
  
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
  <div class="section-title">
      <h4>
      L'analyse convexe</h4>
<div class="container">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br><br>
<div class="container">
    <h5> Search Video</h5>
    <div class="row">
        <div class="col-12">
            <div class="input-group">
                <input class="form-control border-secondary py-2" type="search" value="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php foreach($poste as $person): ?>
<!--cards -->

<div class="card" id="user_data">
<div class="title">

<h3><?= $person->titre; ?></h3>
<h3><?= $person->name; ?></h3>
</div>
<div class="image">
<iframe width="860" height="515" src="https://www.youtube.com/embed/<?= $person->lienvideo; ?>"
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe>
    </div>

</div>
<!--cards -->


<?php endforeach; ?>



</div> 
</section><!-- End About Us Section -->
    </main><!-- End #main -->
     
     
 
   </main><!-- End #main -->
<?php require "footer.php"; ?>
<script> 
           var dataTable = $('#user_data').DataTable({
			"processing" : true,
			"serverSide" : true,
			"order"		 : [],
			"ajax"       : {
				url    : "fetch.php",
				method : "POST"
			},
			"columnDefs" : [
				{
					"target"    : [0, 3, 4],
					"orderable" : false
				},
			],
		});
</script>