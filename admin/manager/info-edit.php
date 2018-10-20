<?php
ob_start();
session_start();

if(isset($_SESSION['username'])){

$pagetitle = 'edit info ';

include 'init.php';
  $IID = '' ;
  if($_GET['edit']){

     $IID = $_GET['edit'];
   }

   $getInfo = $con->prepare("SELECT * FROM info WHERE ID = ?");
   $getInfo->execute(array($IID));

   $info = $getInfo->fetch();

  
    if(isset($_POST['edit'])){

         $id = $_POST['id'];
         $name = $_POST['iname'];
         $desc = $_POST['desc'];

         $imageName = $_FILES['image']['name'];
         $imageSize = $_FILES['image']['size'];
         $imageTmp  = $_FILES['image']['tmp_name'];
         $imageType = $_FILES['image']['type'];

         $imageName2 = $_FILES['iimage']['name'];
         $imageSize2 = $_FILES['iimage']['size'];
         $imageTmp2  = $_FILES['iimage']['tmp_name'];
         $imageType2 = $_FILES['iimage']['type'];

         
         if(!empty($imageName)){

            $exp = explode('.' , $imageName);
            $imageExtension = strtolower(end($exp));
            $Mimage = $imageName ;
            move_uploaded_file($imageTmp , "uploads\info\\" . $Mimage);
   
            $Mimage = $imageName ;
           
         }else{
            $Mimage = $_POST['iimage'];
         }

         $stmt = $con->prepare("UPDATE info SET info_name = ? , info_desc = ? , info_image = ?  WHERE ID = ? ");
         $stmt->execute(array($name,$desc ,$Mimage , $id ));
         header('Location: info.php');
         exit();

    }


?>


<main class="main--container">
           <section class="page--header">
               <div class="container-fluid">

          <div class="row">
                       <div class="col-lg-6">
                           <h2 class="page--title h5">Edit info</h2>
                           <ul class="breadcrumb">
                               <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                               <li class="breadcrumb-item active"><span>Edit Info</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </section>
           <section class="main--content">
               <div class="panel">
                   <div class="records--body">
                       <div class="title">
                        <h6 class="h6">Info Details</h6>  </div>
           <div class="tab-content">
                           <div class="tab-pane fade show active" id="tab01">
                               <form action="info-edit.php" method="POST" enctype="multipart/form-data">
                               
                                       <div class="col-md-9">
                                           <input type="hidden" value="<?php echo $info['ID'] ?>" name="id" class="form-control" required="">
                                       </div>
                                  

                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Info Name: *</span>
                                       <div class="col-md-9">
                                           <input type="text" value="<?php echo $info['info_name'] ?>" name="iname" class="form-control" required="">
                                       </div>
                                   </div>
                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Info Description:</span>
                                       <div class="col-md-9">
                                        <textarea name="desc" class="form-control"><?php echo $info['info_desc'] ?></textarea>
                                       </div>
                                   </div>
                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Image:</span>
                                       <div class="col-md-9">
                                           <input type="file"  name="image" class="form-control"> </div>
                                   </div>


                                   <input type="hidden" value="<?php echo  $info["info_image"]  ?>" name="iimage" class="form-control"> </div>
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
