<?php

session_start();
$pagetitle = 'Who we are ';
if(isset($_SESSION['username'])){
include 'init.php';

?>
         <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Who We Are</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php.html">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>Who We Are</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main--content">
              <!--  <div class="panel">
                    <div class="records--header">
                        <div class="title fa-users">
                            <h3 class="h3">users </h3>
                            <p>Found Total 1,330 users</p>
                        </div>
                        <div class="actions">
                            <form action="#" class="search">
                                <input type="text" class="form-control" placeholder="User ID or User Name..." required="">
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="panel">

                    <div class="records--list" data-title="Who We Are ">
                        <table id="recordsListView">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Text</th>
                                    <th class="not-sortable">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach (getReco('who') as $ad) {

                               echo '<tr>';
                               echo  '<td>' . $ad["ID"] . '</td>';
                               echo   '<td>' . $ad["text"] .'</td>';
                               echo '<td><div class="dropleft">
                                            <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>';
                                echo '<div class="dropdown-menu">
                                                <a href="whowe_edit.php?edit=' . $ad["ID"] . '" class="dropdown-item">Edit</a>
                                                <a href="whowe_delete.php?delete='. $ad["ID"].'" class="dropdown-item">Delete</a> </div>';
                                       echo '</div>';
                                   echo '</td>';
                               echo '</tr>';

                }
                       $stmt = $con->prepare("SELECT ID FROM who ");
                        $stmt -> execute (array());
                        $cou = $stmt ->rowCount();
                        if($cou > 0){
                      ?>
                        </tbody>
                        </table>

                    </div>

                </div>
                  <a href="#" class="btn  btn-info">Sorry You Can't add </a>
                  <br><br>
        <?php  
          }else{
            ?>
                        </tbody>
                        </table>

                    </div>

                </div>
                  <a href="whowe_add.php?info=add" class="btn  btn-info">Add Text </a>
                  <br><br>


            </section>

<?php
         }
include $tpl . 'footer.php';
}else{
     header('Location: index.php');
        exit();
}
?>
