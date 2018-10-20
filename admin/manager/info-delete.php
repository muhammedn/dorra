<?php
ob_start();
session_start();

if(isset($_SESSION['username'])){

$pagetitle = 'delete info ';

include 'init.php';
  $IID = '' ;
  if($_GET['delete']){

     $IID = $_GET['delete'];
   }

 	$stmt = $con->prepare("DELETE FROM info WHERE ID = :zid");
    $stmt->bindParam(":zid", $IID);
    $stmt->execute();

    header('Location: info.php');
    exit();

 include $tpl . 'footer.php';

   }else{
        header('Location: index.php');
           exit();
    }
     ob_end_flush();
   ?>