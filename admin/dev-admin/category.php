<?php

session_start();
$pagetitle = 'Categories';
if(isset($_SESSION['username'])){
include 'init.php';

?>
         <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Categories</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>Categories</span></li>
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

                    <div class="records--list" data-title="Categories">
                        <table id="recordsListView">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Name</th>
                                    <th class="not-sortable">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach (getReco('category') as $ad) {

                               echo '<tr>';
                               echo  '<td>' . $ad["ID"] . '</td>';
                               echo   '<td>' . $ad["cat_name"] .'</td>';
                               echo '<td><div class="dropleft">
                                            <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>';
                                echo '<div class="dropdown-menu">
                                                <a href="edit_category.php?edit=' . $ad["ID"] . '" class="dropdown-item">Edit</a>
                                                <a href="delete_category.php?delete='. $ad["ID"].'" class="dropdown-item">Delete</a> </div>';
                                       echo '</div>';
                                   echo '</td>';
                               echo '</tr>';

                }
                ?>
                        </tbody>
                        </table>

                    </div>

                </div>
                  <a href="add_category.php" class="btn  btn-info">Add Category</a>
                  <br><br>
        </section>

<?php
         
include $tpl . 'footer.php';
}else{
     header('Location: index.php');
        exit();
}
?>
