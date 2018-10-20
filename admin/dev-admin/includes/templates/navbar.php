
     <div class="wrapper">
        <header class="navbar navbar-fixed">
            <div class="navbar--header">
                <a href="../../" class="logo"> <img src="../files/img/logo1.png" alt=""> </a>
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
            </div>
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
            
            <div class="navbar--nav ml-auto">
                <ul class="nav">
                    <li class="nav-item dropdown nav--user online">
                        <a href="#" class="nav-link" data-toggle="dropdown"> <img src="a.jpg" alt="" class="rounded-circle"> <span><?php echo  $_SESSION['username'] ?></span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu">
                            <li><a href="../../developments.php"><i class="fa fa-arrow-right"></i>Visit Site</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
         <aside class="sidebar" data-trigger="scrollbar">
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="#"> <img src="a.jpg" alt="" class="rounded-circle"> </a>
                </div>
                <div class="profile--name"> <a href="#" class="btn-link"><?php echo  $_SESSION['username'] ?></a> </div>
                <div class="profile--nav">
                    <ul class="nav">
                    
                    

                        <li class="nav-item">
                            <a href="../../developments.php" class="nav-link" title="Visit Site"> <i class="fa fa-arrow-circle-right"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link" title="Logout"> <i class="fa fa-sign-out-alt"></i> </a>
                        </li>
                   
                    </ul>
                </div>
            </div>
            <div class="sidebar--nav">


                <ul>
                    <li>
                        <ul>
                         <li class="">
                                <a href="dashboard.php"> <i class="fa fa-home"></i> <span>Dashboard</span> </a>
                        </li>
                        
                            
                        <li class="">
                                <a href="project_highlight.php"> <i class="fa fa-check-square"></i> <span>Projects</span> </a>
                            </li>
                        <li class="">
                                <a href="category.php"> <i class="fa fa-object-ungroup"></i> <span>Category</span> </a>
                            </li>

                    
                        
                                    
                        </ul>
                    
                    </ul>
                
            </div>
          
        </aside>
    