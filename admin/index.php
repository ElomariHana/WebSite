<?php 
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}
require "hearder.php"; ?>

<?php require "footer.php"; ?>