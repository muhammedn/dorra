<?php
ob_start();
session_start();

if(isset($_SESSION['username'])){

$pagetitle = 'edit admin ';

include 'init.php';
  $IID = '' ;
  if($_GET['edit']){

     $IID = $_GET['edit'];
   }

   $getInfo = $con->prepare("SELECT * FROM users WHERE UID = ?");
   $getInfo->execute(array($IID));

   $admin = $getInfo->fetch();

  
    if(isset($_POST['edit'])){

         $id = $_POST['id'];
         $name = $_POST['iname'];
         $password = sha1($_POST['password']);
         $email = $_POST['email'];
         $status = $_POST['dashboard'];


         $stmt = $con->prepare("UPDATE users SET name = ? , password = ? , email = ? , type = ?  WHERE UID = ? ");
         $stmt->execute(array($name,$password ,$email , $status ,$id ));
         header('Location: admins.php');
         exit();

    }


?>


<main class="main--container">
           <section class="page--header">
               <div class="container-fluid">

          <div class="row">
                       <div class="col-lg-6">
                           <h2 class="page--title h5">Edit admin</h2>
                           <ul class="breadcrumb">
                               <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                               <li class="breadcrumb-item active"><span>Edit admin</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </section>
           <section class="main--content">
               <div class="panel">
                   <div class="records--body">
                       <div class="title">
                        <h6 class="h6">admin Details</h6>  </div>
           <div class="tab-content">
                           <div class="tab-pane fade show active" id="tab01">
                               <form action="edit_admin.php" method="POST" >
                               
                                       <div class="col-md-9">
                                           <input type="hidden" value="<?php echo $admin['UID'] ?>" name="id" class="form-control" required="">
                                       </div>
                                  

                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Admin Name: *</span>
                                       <div class="col-md-9">
                                           <input type="text" value="<?php echo $admin['name'] ?>" name="iname" class="form-control" required="">
                                       </div>
                                   </div>
                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Admin Password:</span>
                                       <div class="col-md-9">
                                         <input type="password" value="<?php echo $admin['password'] ?>" name="password" class="form-control" required="">
                                       </div>
                                   </div>
                                   <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Admin Email:</span>
                                       <div class="col-md-9">
                                           <input type="email" value="<?php echo $admin['email'] ?>" name="email" class="form-control" required="">
                                   </div>
                                 </div>
                                  <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Admin Dashboard:</span>
                                    <div class="col-md-9">


                                     <select name="dashboard"  required="" class="custom-select" style="width:200px;">
                                        <option value="<?php echo $admin['type'] ?>""><?php echo $admin['type'] ?></option>
                                        <option value="developments">DEVELOPMENTS</option>
                                       <option value="contracting" >CONTRACTING</option>
                                        <option value="interios" >INTERIORS</option>

                                      </select>    

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
