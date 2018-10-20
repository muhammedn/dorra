<?php
  ob_start();
session_start();
if(isset($_SESSION['username'])){
$pagetitle = 'add info';

include 'init.php';

   if(isset($_POST['add'])){

         $name = $_POST['iname'];
         $desc = $_POST['desc'];

         $imageName = $_FILES['image']['name'];
         $imageSize = $_FILES['image']['size'];
         $imageTmp  = $_FILES['image']['tmp_name'];
         $imageType = $_FILES['image']['type'];

         $exp = explode('.' , $imageName);
         $imageExtension = strtolower(end($exp));
         $Mimage = rand(0,100000) . '_' .$imageName ;
         move_uploaded_file($imageTmp , "uploads\info\\" . $Mimage);

         $stmt = $con->prepare("INSERT INTO info(info_name , info_desc , info_image) VALUES(:zname ,:zdesc ,:zimage)");
         $stmt->execute(array(
            'zname' => $name,
            'zdesc' => $desc,
            'zimage' =>$Mimage


         ));

    header('Location: info.php');
    exit();

 }



?>
 <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">

					 <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Add info</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>Add Info</span></li>
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
                                <form action="info-add.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Info Name: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="iname" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Info Description:</span>
                                        <div class="col-md-9">
                                            <textarea name="desc" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Image:</span>
                                        <div class="col-md-9">
                                            <input type="file" name="image" class="form-control"> </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-9 offset-md-3">
                                            <input type="submit" name="add"  value="add info" class="btn btn-rounded btn-success"> </div>
                                    </div>
                                </form>
                            </div>

                        </div>





                         <!-- <div class="row">
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
                         <h6 class="h6">Info Deleted</h6>
                     </div> -->

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
