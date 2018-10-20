<?php
ob_start();
session_start();

if(isset($_SESSION['username'])){

$pagetitle = 'delete category ';

include 'init.php';
  $IID = '' ;
  if($_GET['delete']){

     $IID = $_GET['delete'];
   }

 	$stmt = $con->prepare("DELETE FROM category WHERE ID = :zid");
    $stmt->bindParam(":zid", $IID);
    $stmt->execute();

    header('Location: category.php');
    exit();

 include $tpl . 'footer.php';

   }else{
        header('Location: index.php');
           exit();
    }
     ob_end_flush();
   ?>