<?php
 ob_start();
session_start();
if(isset($_SESSION['username'])){
$pagetitle = 'add Text';

include 'init.php';

   if(isset($_POST['add'])){

         $text = $_POST['text'];


         $stmt = $con->prepare("INSERT INTO who(text ) VALUES(:ztext )");
         $stmt->execute(array(
            'ztext' => $text


         ));

         header('Location: whowe.php');
         exit();

 }



?>
 <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">

					 <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Add Who We Are</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="whowe.php">Who We Are</a></li>
                                <li class="breadcrumb-item active"><span>Add Who We are</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main--content">
                <div class="panel">
                    <div class="records--body">
                        <div class="title">
                         <h6 class="h6">Who We Are Details</h6>  </div>
						<div class="tab-content">
                            <div class="tab-pane fade show active" id="tab01">
                                <form action="whowe_add.php" method="POST" ">
                                    <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Who We Are ...: *</span>
                                        <div class="col-md-9">
                                            <input type="text" name="text" class="form-control" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div class="col-md-9 offset-md-3">
                                            <input type="submit" name="add"  value="add Text" class="btn btn-rounded btn-success"> </div>
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
