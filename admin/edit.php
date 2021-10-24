
<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM ecoles WHERE id=:id';
$connection = $db->prepare($sql);
$connection->execute([':id' => $id ]);
$person = $connection->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])) {
  $name = $_POST['name'];
  $sql = 'UPDATE ecoles SET name=:name WHERE id=:id';
  $connection = $db->prepare($sql);
  if ($connection->execute([':name' => $name, ':id' => $id])) {
    header("Location: /lakbir/admin/examen.php");
  }
}
 ?>
 <?php require "hearder.php"; ?>
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update </button>
        </div>
      </form>
    </div>
  </div>
</div>

                
                </div>
                </div>
              </div> 

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="../template/assets/vendors/codemirror/codemirror.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/mode/ruby/ruby.min.js"></script>
    <script src="../template/assets/vendors/pwstabs/jquery.pwstabs.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>