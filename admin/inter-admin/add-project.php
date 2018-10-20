<?php
  ob_start();
session_start();
if(isset($_SESSION['username'])){
$pagetitle = 'add Project';

include 'init.php';

   if(isset($_POST['add'])){

         $name = $_POST['iname'];
         $desc = $_POST['desc'];
         $location = $_POST['location'];
         $type = $_POST['type'];
         $general = $_POST['generalp'];
         $high = $_POST['high'];
         $cat = $_POST['cat'];


         $imageName = $_FILES['image']['name'];
         $imageSize = $_FILES['image']['size'];
         $imageTmp  = $_FILES['image']['tmp_name'];
         $imageType = $_FILES['image']['type'];

         $exp = explode('.' , $imageName);
         $imageExtension = strtolower(end($exp));
         $Mimage = rand(0,100000) . '_' .$imageName ;
         move_uploaded_file($imageTmp , "uploads\project\\" . $Mimage);
         
         $imageName2 = $_FILES['image2']['name'];
         $imageSize2 = $_FILES['image2']['size'];
         $imageTmp2  = $_FILES['image2']['tmp_name'];
         $imageType2 = $_FILES['image2']['type'];

         $exp2 = explode('.' , $imageName2);
         $imageExtension = strtolower(end($exp2));
         $Mimage2 = rand(0,100000) . '_' .$imageName2 ;
         move_uploaded_file($imageTmp2 , "uploads\project\\" . $Mimage2);


         $imageName3 = $_FILES['image3']['name'];
         $imageSize3 = $_FILES['image3']['size'];
         $imageTmp3  = $_FILES['image3']['tmp_name'];
         $imageType3 = $_FILES['image3']['type'];

         $exp3 = explode('.' , $imageName3);
         $imageExtension = strtolower(end($exp3));
         $Mimage3 = rand(0,100000) . '_' .$imageName3 ;
         move_uploaded_file($imageTmp3 , "uploads\project\\" . $Mimage3);


         $imageName4 = $_FILES['image4']['name'];
         $imageSize4 = $_FILES['image4']['size'];
         $imageTmp4  = $_FILES['image4']['tmp_name'];
         $imageType4 = $_FILES['image4']['type'];

         $exp4 = explode('.' , $imageName4);
         $imageExtension = strtolower(end($exp4));
         $Mimage4 = rand(0,100000) . '_' .$imageName4 ;
         move_uploaded_file($imageTmp4 , "uploads\project\\" . $Mimage4);

         $stmt = $con->prepare("INSERT INTO project_i(p_name , p_desc , add_date,location ,type, generalp,highlight , id_cat  , p_image , p_image2 , p_image3 , p_image4) VALUES(:zname ,:zdesc , now(),:zloca , :ztype , :zgen , :zhigh ,:zcat ,:zimage, :zimage2 , :zimage3 , :zimage4)");
         $stmt->execute(array(
            'zname' => $name,
            'zdesc' => $desc,
            'zhigh' => $high,
            'zcat' =>$cat,
            'zloca' => $location,
            'ztype' =>$type,
            'zgen' => $general,
            'zimage' =>$Mimage,
            'zimage2' =>$Mimage2,
            'zimage3' =>$Mimage3,
            'zimage4' =>$Mimage4


         ));

    header('Location: project_highlight.php');
    exit();

 }



?>
 <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">

					 <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Add project</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>Add Project</span></li>
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
                                <form action="add-project.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Projct Name: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="iname" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">projct Description:</span>
                                        <div class="col-md-9">
                                            <textarea name="desc" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    
                                     <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Projct Location: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="location" class="form-control" required="">
                                        </div>
                                    </div>
                                     <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Projct Type: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="type" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Projct General Process: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="generalp" class="form-control" required="">
                                        </div>
                                    </div>

                             <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Porject Category:</span>
                                        <div class="col-md-9">
                                <?php 
                                $stmt2 = $con->prepare("SELECT * FROM category");
                                $stmt2 ->execute();
                                $sers = $stmt2->fetchAll();


                                ?>
                                    
                                <select name="cat"  required="" class="custom-select" style="width:200px;">
                                        <option value="0">Select Category:</option>

                                    <?php 
                                    foreach ($sers as $ser) {
                                        echo "<option value='" . $ser['ID'] . "'>" . $ser['cat_name'] . "</option>";
                                    }?>
                                        

                                      </select>
                                    </div>
                                </div>


                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Porject highlight:</span>
                                        <div class="col-md-9">
                                    
                                    
                                <select name="high"  required="" class="custom-select" style="width:200px;">
                                        <option value="0">Select Highlight:</option>
                                        <option value="yes">Yes</option>
                                       <option value="no" >No</option>

                                      </select>
                                    </div>
                                </div>


                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label"> first Image:</span>
                                        <div class="col-md-9">
                                            <input type="file" name="image" class="form-control" required> </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label"> Second Image:</span>
                                        <div class="col-md-9">
                                            <input type="file" name="image2" class="form-control" required> </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Thrid Image:</span>
                                        <div class="col-md-9">
                                            <input type="file" name="image3" class="form-control" required> </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label"> Fourth Image:</span>
                                        <div class="col-md-9">
                                            <input type="file" name="image4" class="form-control" required> </div>
                                    </div>

                                    


                                    <div class="row mt-3">
                                        <div class="col-md-9 offset-md-3">
                                            <input type="submit" name="add"  value="add Project" class="btn btn-rounded btn-success"> </div>
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
