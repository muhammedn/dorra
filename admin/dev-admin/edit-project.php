<?php
ob_start();
session_start();

if(isset($_SESSION['username'])){

$pagetitle = 'edit Project ';

include 'init.php';
  $IID = '' ;
  if($_GET['edit']){

     $IID = $_GET['edit']; 
   }

    $getInfo = $con->prepare("SELECT project_d.*, category.cat_name AS cat_name  FROM project_d
                                    INNER JOIN category
                                        ON
                                 category.ID = project_d.id_cat 
                                 WHERE project_d.ID = ?");
   $getInfo->execute(array($IID));

   $project = $getInfo->fetch();

  
    if(isset($_POST['edit'])){

         $id = $_POST['id'];
         $name = $_POST['iname'];
         $desc = $_POST['desc'];
         $location = $_POST['location'];
         $type = $_POST['type'];
         $general = $_POST['generap'];
         $high = $_POST['high'];
         $cat  = $_POST['cat'];

         $imageName = $_FILES['image']['name'];
         $imageSize = $_FILES['image']['size'];
         $imageTmp  = $_FILES['image']['tmp_name'];
         $imageType = $_FILES['image']['type'];

         $imageName2 = $_FILES['image2']['name'];
         $imageSize2 = $_FILES['image2']['size'];
         $imageTmp2  = $_FILES['image2']['tmp_name'];
         $imageType2 = $_FILES['image2']['type'];

         $imageName3 = $_FILES['image3']['name'];
         $imageSize3 = $_FILES['image3']['size'];
         $imageTmp3  = $_FILES['image3']['tmp_name'];
         $imageType3 = $_FILES['image3']['type'];

         $imageName4 = $_FILES['image4']['name'];
         $imageSize4 = $_FILES['image4']['size'];
         $imageTmp4  = $_FILES['image4']['tmp_name'];
         $imageType4 = $_FILES['image4']['type'];

         if(!empty($imageName)){

            $exp = explode('.' , $imageName);
            $imageExtension = strtolower(end($exp));
            $Mimage = $imageName ;
            move_uploaded_file($imageTmp , "uploads\project\\" . $Mimage);
   
            $Mimage = $imageName ;
           
         }else{
            $Mimage = $_POST['iimage'];
         }

         if(!empty($imageName2)){

            $exp2 = explode('.' , $imageName2);
            $imageExtension = strtolower(end($exp2));
            $Mimage2 = $imageName2 ;
            move_uploaded_file($imageTmp2 , "uploads\project\\" . $Mimage2);
   
            $Mimage2 = $imageName2 ;
           
         }else{
            $Mimage2 = $_POST['iimage2'];
         }

         if(!empty($imageName3)){

            $exp3 = explode('.' , $imageName3);
            $imageExtension = strtolower(end($exp3));
            $Mimage3 = $imageName3 ;
            move_uploaded_file($imageTmp3 , "uploads\project\\" . $Mimage3);
   
            $Mimage3 = $imageName3 ;
           
         }else{
            $Mimage3 = $_POST['iimage3'];
         }

          if(!empty($imageName4)){

            $exp4 = explode('.' , $imageName4);
            $imageExtension = strtolower(end($exp4));
            $Mimage4 = $imageName4 ;
            move_uploaded_file($imageTmp4 , "uploads\project\\" . $Mimage4);
   
            $Mimage4 = $imageName4 ;
           
         }else{
            $Mimage4 = $_POST['iimage4'];
         }

         $stmt = $con->prepare("UPDATE project_d SET p_name = ? , p_desc = ? , location = ?, type = ? , generalp = ?, highlight = ?, id_cat = ? ,p_image = ? , p_image2 = ? , p_image3 = ? ,p_image4 = ?  WHERE ID = ? ");
         $stmt->execute(array($name,$desc ,$location, $type, $general ,$high , $id_cat , $Mimage ,$Mimage2 ,$Mimage3 ,$Mimage4 , $id ));
         header('Location: project_highlight.php');
         exit();

    }


?>


<main class="main--container">
           <section class="page--header">
               <div class="container-fluid">

          <div class="row">
                       <div class="col-lg-6">
                           <h2 class="page--title h5">Edit project</h2>
                           <ul class="breadcrumb">
                               <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                               <li class="breadcrumb-item"><a href="project_highlight.php">Projects</a></li>
                               <li class="breadcrumb-item active"><span>Edit Project</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </section>
           <section class="main--content">
               <div class="panel">
                   <div class="records--body">
                       <div class="title">
                        <h6 class="h6">Project Details</h6>  </div>
                <div class="tab-content">
                           <div class="tab-pane fade show active" id="tab01">
                               <form action="edit-project.php" method="POST" enctype="multipart/form-data">
                               
                                       <div class="col-md-9">
                                           <input type="hidden" value="<?php echo $project['ID'] ?>" name="id" class="form-control" required="">
                                       </div>
                                  

                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Project Name: *</span>
                                       <div class="col-md-9">
                                           <input type="text" value="<?php echo $project['p_name'] ?>" name="iname" class="form-control" required="">
                                       </div>
                                   </div>
                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Project Description:</span>
                                       <div class="col-md-9">
                                        <textarea name="desc" class="form-control"><?php echo $project['p_desc'] ?></textarea>
                                       </div>
                                   </div>
                               <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Project Location:</span>
                                       <div class="col-md-9">
                                 <input type="text" value="<?php echo $project['location'] ?>" name="location" class="form-control" required="">

                                       </div>
                                   </div>
                               <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Project Type:</span>
                                       <div class="col-md-9">
                                 <input type="text" value="<?php echo $project['type'] ?>" name="location" class="form-control" required="">

                                       </div>
                                   </div>

                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Project General Process:</span>
                                       <div class="col-md-9">
                                 <input type="text" value="<?php echo $project['generalp'] ?>" name="location" class="form-control" required="">

                                       </div>
                                   </div>



                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Porject highlight:</span>
                                        <div class="col-md-9">
                                    
                                    
                                <select name="high"  required="" class="custom-select" style="width:200px;">
                                        <option value="<?php echo $project['highlight'] ?>"><?php echo $project['highlight'] ?></option>
                                        <option value="yes">Yes</option>
                                       <option value="no" >No</option>

                                      </select>
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
                                        <option value="<?php echo $project['cat_name'] ?>"><?php echo $project['cat_name'] ?></option>

                                   <?php 
                                    foreach ($sers as $ser) {
                                        echo "<option value='" . $ser['ID'] . "'>" . $ser['cat_name'] . "</option>";
                                    }?>
                                        

                                      </select>
                                    </div>
                                </div>


                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label"> First Image:</span>
                                       <div class="col-md-9">
                                      <?php echo '<td> <img class="img-responsive pimg img-thumbnail"
                                        src="uploads/project/' . $project["p_image"] .'"></td>'; ?>
                                           <input type="file"  name="image" class="form-control"> </div>
                                   </div>
                                   <input type="hidden" value="<?php echo  $project["p_image"]  ?>" name="iimage" class="form-control"> 

                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label"> Second Image:</span>
                                       <div class="col-md-9">
                                      <?php echo '<td> <img class="img-responsive pimg img-thumbnail"
                                        src="uploads/project/' . $project["p_image2"] .'"></td>'; ?>
                                           <input type="file"  name="image2" class="form-control"> </div>
                                   </div>
                                   <input type="hidden" value="<?php echo  $project["p_image2"]  ?>" name="iimage2" class="form-control">

                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label"> Third Image:</span>
                                       <div class="col-md-9">
                                      <?php echo '<td> <img class="img-responsive pimg img-thumbnail"
                                        src="uploads/project/' . $project["p_image3"] .'"></td>'; ?>
                                           <input type="file"  name="image3" class="form-control"> </div>
                                   </div>
                                   <input type="hidden" value="<?php echo  $project["p_image3"]  ?>" name="iimage3" class="form-control">

                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label"> Fourth Image:</span>
                                       <div class="col-md-9">
                                      <?php echo '<td> <img class="img-responsive pimg img-thumbnail"
                                        src="uploads/project/' . $project["p_image4"] .'"></td>'; ?>
                                           <input type="file"  name="image4" class="form-control"> </div>
                                   </div>
                                   <input type="hidden" value="<?php echo  $project["p_image4"]  ?>" name="iimage4" class="form-control">
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
