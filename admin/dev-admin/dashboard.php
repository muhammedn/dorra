<?php
session_start();
 if(isset($_SESSION['username'])){
$pagetitle = 'Dashboard';
include 'init.php';
$stmt = $con->prepare("SELECT ID FROM project_d ");
        $stmt -> execute (array());
        $row = $stmt ->fetch();
        $number = $stmt ->rowCount();
        echo $number;
?>      
      <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Dashboard For Developments</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active"><span>Home</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

   
          <section class="main--content">
                <div class="row gutter-20">
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class=" text-white">Projects </p>
                                </div>
                                <div class="miniStats--body"> <i class="miniStats--icon fa fa-cubes text-blue"></i>
                                    <h3 class="miniStats--title h4">All Projects</h3>
                                    <p class="miniStats--num text-blue"><?= $number; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#e16123">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>
                                    <p class="miniStats--label text-white bg-orange"> <i class="fa fa-level-down-alt"></i> <span>10%</span> </p>
                                </div>
                                <div class="miniStats--body"> <i class="miniStats--icon fa fa-ticket-alt text-orange"></i>
                                    <p class="miniStats--caption text-orange">Monthly</p>
                                    <h3 class="miniStats--title h4">Tickets Answered</h3>
                                    <p class="miniStats--num text-orange">450</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>
                                    <p class="miniStats--label text-white bg-green"> <i class="fa fa-level-up-alt"></i> <span>10%</span> </p>
                                </div>
                                <div class="miniStats--body"> <i class="miniStats--icon fa fa-rocket text-green"></i>
                                    <p class="miniStats--caption text-green">Monthly</p>
                                    <h3 class="miniStats--title h4">Projects Launched</h3>
                                    <p class="miniStats--num text-green">3,130,300</p>
                                </div>
                            </div>
                        </div>
                    </div>
                -->
                    <!-- comment 
                    <div class="col-xl-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Running Projects Progress</h3>
                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table style--1">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="media--img"> <img src="files/img/projects/thumb-01.jpg" alt=""> </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <div class="media--info">
                                                            <h3 class="media--name h5">Project Title</h3>
                                                            <p class="media--desc">Menz Products</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Last Updated <strong class="fw--600 text-muted">Today at 4:24 AM</strong></p>
                                                </td>
                                                <td>|</td>
                                                <td>
                                                    <p><strong class="fw--600 text-muted">May 6, 2017</strong>
                                                        <br>8:30</p>
                                                </td>
                                                <td>
                                                    <p class="text-right">30% Completed</p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-red w-25"></div>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove btn-link fs--18">&times;</a> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="media--img"> <img src="files/img/projects/thumb-02.jpg" alt=""> </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <div class="media--info">
                                                            <h3 class="media--name h5">Project Title</h3>
                                                            <p class="media--desc">Menz Products</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Last Updated <strong class="fw--600 text-muted">Today at 4:24 AM</strong></p>
                                                </td>
                                                <td>|</td>
                                                <td>
                                                    <p><strong class="fw--600 text-muted">May 6, 2017</strong>
                                                        <br>8:30</p>
                                                </td>
                                                <td>
                                                    <p class="text-right">50% Completed</p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-blue w-50"></div>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove btn-link fs--18">&times;</a> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="media--img"> <img src="files/img/projects/thumb-03.jpg" alt=""> </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <div class="media--info">
                                                            <h3 class="media--name h5">Project Title</h3>
                                                            <p class="media--desc">Menz Products</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Last Updated <strong class="fw--600 text-muted">Today at 4:24 AM</strong></p>
                                                </td>
                                                <td>|</td>
                                                <td>
                                                    <p><strong class="fw--600 text-muted">May 6, 2017</strong>
                                                        <br>8:30</p>
                                                </td>
                                                <td>
                                                    <p class="text-right">80% Completed</p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-green w-75"></div>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove btn-link fs--18">&times;</a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <select name="filter" data-trigger="selectmenu" data-minimum-results-for-search="-1"> <option value="top-search">Recent Orders</option> <option value="average-search">Latest Orders</option> </select> </h3>
                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table style--2">
                                        <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Product ID</th>
                                                <th>Customer Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Tracking No.</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="files/img/products/thumb-01.jpg" alt=""></td>
                                                <td>3BSD59</td>
                                                <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                                <td>$99</td>
                                                <td>2</td>
                                                <td><span class="text-muted">#BG6R9853lP</span></td>
                                                <td><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="files/img/products/thumb-02.jpg" alt=""></td>
                                                <td>3BSD59</td>
                                                <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                                <td>$99</td>
                                                <td>2</td>
                                                <td><span class="text-muted">#BG6R9853lP</span></td>
                                                <td><span class="label label-warning">Due</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="files/img/products/thumb-03.jpg" alt=""></td>
                                                <td>3BSD59</td>
                                                <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                                <td>$99</td>
                                                <td>2</td>
                                                <td><span class="text-muted">#BG6R9853lP</span></td>
                                                <td><span class="label label-info">Rejected</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Comments</h3>
                                <div class="dropdown">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                        <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comments-panel">
                                <ul>
                                    <li>
                                        <div class="img"> <img src="files/img/avatars/02_40x40.png" alt="" class="rounded-circle"> </div>
                                        <div class="info">
                                            <h3 class="h6">John Doe</h3>
                                            <p>Lorem ipsum dolor sit elit, sed do eiusmod tempor.</p>
                                            <div class="action"> <span class="status text-orange">Pending</span> <a href="#" class="btn btn-sm btn-info">Delete</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img"> <img src="files/img/avatars/03_40x40.png" alt="" class="rounded-circle"> </div>
                                        <div class="info">
                                            <h3 class="h6">Jane Doe</h3>
                                            <p>Lorem ipsum dolor sit elit, sed do eiusmod tempor.</p>
                                            <div class="action"> <span class="status text-blue">Approved</span> <a href="#" class="btn btn-sm btn-info">Delete</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img"> <img src="files/img/avatars/04_40x40.png" alt="" class="rounded-circle"> </div>
                                        <div class="info">
                                            <h3 class="h6">Harry Johnson</h3>
                                            <p>Lorem ipsum dolor sit elit, sed do eiusmod tempor.</p>
                                            <div class="action"> <span class="status text-red">Rejected</span> <a href="#" class="btn btn-sm btn-info">Delete</a> </div>
                                        </div>
                                    </li>
                                </ul>
                              
                              <div class="nav"> <a href="#" class="next btn-link">Older Comments <i class="fa fa-angle-double-right"></i></a> </div>
                              -->
                            </div>
                  
            </section>
 <?php


	include $tpl."footer.php";
}else{
     header('Location: index.php');
        exit();
}

 ?>
