<?php
ob_start();
session_start();
$pagetitle = 'INTERIORS Projects';
if(isset($_SESSION['username'])){
include 'init.php';


?>
         <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">INTERIORS Projects</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>Projects</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main--content">
             
                <div class="panel">

                    <div class="records--list" data-title="Projects Listing">
                        <table id="recordsListView">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Name</th>
                                    <th> Desc</th>
                                    <th> Location</th>
                                    <th> Type</th>
                                    <th> General Process</th>
                                    <th> highlight</th>
                                    <th> Category</th>
                                    <th>First image</th>
                                  
                                    
                                    <th class="not-sortable">highlight</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $con->prepare("SELECT project_i.*, category.cat_name AS cat_name  FROM project_i
                                    INNER JOIN category
                                        ON
                                 category.ID = project_i.id_cat");
                               $stmt->execute(array());

                              $ads = $stmt->fetchAll();

                              




                                foreach ($ads as $ad) {

                               echo '<tr>';
                               echo '<td>' . $ad["ID"] . '</td>';
                               echo '<td>' . substr($ad['p_name'], 0, 40)  .  '</td>';
                               echo '<td>' . substr($ad['p_desc'], 0, 40)  .  '</td>' ;
                               echo '<td>' . $ad["location"] . ' </td>' ;
                               echo '<td>' . $ad["type"] . ' </td>' ;
                               echo '<td>' . $ad["generalp"] . ' </td>' ;
                               echo '<td>' . $ad["highlight"] . ' </td>' ;
                               echo '<td>' . $ad["cat_name"] . ' </td>' ;
                               echo '<td> <img class="img-responsive"
                                        src="uploads/project/' . $ad["p_image"] .'"></td>';


                            // to highlight projct 

                          if(isset($_POST['yes'])){

                                $id = $_POST['id'];
                                
                                $high = 'yes';

                              $stmt = $con->prepare("UPDATE project_i SET highlight = ?  WHERE ID = ? ");
                              $stmt->execute(array($high, $id ));
                               header('Location: projects_d.php');
                               exit();

                              }
                          if(isset($_POST['no'])){

                                $id = $_POST['id'];
                                
                                $high = 'no';

                              $stmt = $con->prepare("UPDATE project_i SET highlight = ?  WHERE ID = ? ");
                              $stmt->execute(array($high, $id ));
                               header('Location: projects_d.php');
                               exit();

                              }




                                if($ad["highlight"] == 'no'){

                               echo '<td><form action="projects_d.php" method="POST">
                                     <input type="hidden" name="id" value="'. $ad["ID"] .'"/>
                                      <input type="submit" name="yes"  value="Yes" class="btn btn-rounded btn-success"> 
                                      </form>
                                       </td>' ;
                                     }else{

                               echo '<td><form action="projects_d.php" method="POST">
                                     <input type="hidden" name="id" value="'. $ad["ID"] .'"/>
                                      <input type="submit" name="no"  value="No" class="btn btn-rounded btn-success"> 
                                      </form>
                                       </td>' ;


                                     }
                            
                                       echo '</div>';
                                   echo '</td>';
                               echo '</tr>';

                }
                      ?>
                            </tbody>
                        </table>

                    </div>

                </div>
                  <a href="add-project.php" class="btn  btn-info">Add Project</a>
                  <br><br>

            </section>

<?php
 
include $tpl . 'footer.php';
}else{
     header('Location: index.php');
        exit();
    ob_end_flush();
}
?>
