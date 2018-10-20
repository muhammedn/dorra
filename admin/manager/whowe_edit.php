<?php
ob_start();
session_start();

if(isset($_SESSION['username'])){

$pagetitle = 'edit Pic ';

include 'init.php';
  $IID = '' ;
  if($_GET['edit']){

     $IID = $_GET['edit'];
   }

   $getPic = $con->prepare("SELECT * FROM who WHERE ID = ?");
   $getPic->execute(array($IID));

   $pic = $getPic->fetch();

    if(isset($_POST['edit'])){

         $id = $_POST['id'];
         $text = $_POST['iname'];

         $stmt = $con->prepare("UPDATE who SET text = ?  WHERE ID = ? ");
         $stmt->execute(array($text,$id ));

         header('Location: whowe.php');
         exit();

    }


?>


<main class="main--container">
           <section class="page--header">
               <div class="container-fluid">

          <div class="row">
                       <div class="col-lg-6">
                           <h2 class="page--title h5">Edit Who we are</h2>
                           <ul class="breadcrumb">
                               <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                               <li class="breadcrumb-item"><a href="whowe.php">Who We Are</a></li>
                               <li class="breadcrumb-item active"><span>Edit who we are</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </section>
           <section class="main--content">
               <div class="panel">
                   <div class="records--body">
                       <div class="title">
                        <h6 class="h6">Who We Are Details Details</h6>  </div>
           <div class="tab-content">
                           <div class="tab-pane fade show active" id="tab01">
                               <form action="whowe_edit.php" method="POST">
                               <div class="col-md-9">
                                           <input type="hidden" value="<?php echo $pic['ID'] ?>" name="id" class="form-control" required="">
                                       </div>
                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Who We Are: *</span>
                                       <div class="col-md-9">
                                           <input type="text" value="<?php echo $pic['text'] ?>" name="iname" class="form-control" required="">
                                       </div>
                                   </div>

                                   <div class="row mt-3">
                                       <div class="col-md-9 offset-md-3">
                                           <input type="submit" name="edit"  value="Edit" class="btn btn-rounded btn-success"> </div>
                                   </div>
                               </form>
                           </div>

                       </div>


                   </div>
               </div>
           </section>
                    <?php
                  
 include $tpl . 'footer.php';

   }else{
        header('Location: index.php');
           exit();
    }
     ob_end_flush();
   ?>
