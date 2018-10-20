<?php
 session_start();
 $noNav = '';
 $pagetitle = 'Login';

 if(isset($_SESSION['username'])){
    header('Location: dashboard.php');
 }
  include "init.php";

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPass = sha1($password);

        // check if user exist in database
        $stmt = $con->prepare("SELECT UID, name , password , type FROM users WHERE name = ? AND  password = ?  ");
        $stmt -> execute (array($username,$hashedPass));
        $row = $stmt ->fetch();
        $cou = $stmt ->rowCount();

        // check if cou > 0 this mean database contain information
        if ($cou > 0){
           if($row['type'] == 'manager'){
            $_SESSION['username'] = $username;
            $_SESSION['UID'] = $row['UID'];
            header("Location: dashboard.php");
            exit();
            
           }
           else if($row['type'] == 'developments'){
            $_SESSION['username'] = $username;
            $_SESSION['UID'] = $row['UID'];
            header("Location: ../dev-admin/dashboard.php");
            exit();
            
           }
           else if($row['type'] == 'contracting'){
            $_SESSION['username'] = $username;
            $_SESSION['UID'] = $row['UID'];
            header("Location: ../con-admin/dashboard.php");
            exit();
            
           }
           else if($row['type'] == 'interios'){
            $_SESSION['username'] = $username;
            $_SESSION['UID'] = $row['UID'];
            header("Location: ../inter-admin/dashboard.php");
            exit();
            
           }
            
        }else{

            $err = "Username or Password Incorrect, please try again";
        }

    }

 ?>
    <div class="wrapper">
        <div class="m-account-w" ">
            <div class="m-account">
                <div class="row no-gutters">
                    <div class="col-md-12">

                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                 <?php
                              if(isset($err)){

                                    echo '<div class="alert alert-danger">' . $err . '</div>';
                              }
                            ?>
                                <div class="logo"> <img src="files/img/logo1.png" alt=""> </div>
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                    <label class="m-account--title">Login As Admin</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <i class="fas fa-user"></i> </div>
                                            <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off" required=""> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <i class="fas fa-key"></i> </div>
                                            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required=""> </div>
                                    </div>
                                    <div class="m-account--actions"> 
                                        <button type="submit" class="btn btn-rounded btn-info">Login</button>
                                    </div>
                                    <div class="m-account--footer">
                                        <p>&copy; 2018 Smart touch Solutions</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

    include $tpl . 'footer.php';
    ?>