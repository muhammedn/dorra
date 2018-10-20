<?php
  ob_start();
session_start();
if(isset($_SESSION['username'])){
$pagetitle = 'add admin';

include 'init.php';

   if(isset($_POST['add'])){

         $name = $_POST['iname'];
         $password = sha1($_POST['password']);
         $email = $_POST['email'];
         $status = $_POST['dashboard'];

        

    

         $stmt = $con->prepare("INSERT INTO users(name , password , email , type , Date) VALUES(:zname ,:zpass ,:zemail , :ztype, now())");
         $stmt->execute(array(
            'zname' => $name,
            'zpass' => $password,
            'zemail' =>$email,
            'ztype' => $status
 

         ));

    header('Location: admins.php');
    exit();

 }



?>
 <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">

					 <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Add admin</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>Add admin</span></li>
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
                                <form action="new_admin.php" method="POST" >
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">admin Name: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="iname" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">admin password:</span>
                                        <div class="col-md-9">
                                            <input type="password" name="password" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">admin email:</span>
                                        <div class="col-md-9">
                                            <input type="email" name="email" class="form-control" required=""> </div>
                                    </div>
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">admin dashboard:</span>
                                        <div class="col-md-9">
                                    
                                    
                                <select name="dashboard"  required="" class="custom-select" style="width:200px;">
                                        <option disabled>Select Dashboard:</option>
                                        <option value="manager" >MANAGER</option>
                                        <option value="developments">DEVELOPMENTS</option>
                                        <option value="contracting" >CONTRACTING</option>
                                        <option value="interios" >INTERIORS</option>
                                        <option value="super" >Manager</option>

                                      </select>
                                    </div>
                                </div>
                                    <div class="col-md-9 offset-md-3">
                                            <input type="submit" name="add"  value="add admin" class="btn btn-rounded btn-success"> </div>
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
