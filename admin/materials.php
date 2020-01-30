<?php
    include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/topbar.php');
    include('includes/database/dbconfig.php');
?>


<div class="modal fade" id="materials" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <select class="browser-default custom-select" name="course_id">
                            <option selected>Choose Course Name</option>
                            
                            <?php
                                $query = "SELECT * FROM courses";
                                $query_run = mysqli_query($connection,$query);
                                while ($row = mysqli_fetch_assoc($query_run))
                                {
                            ?>

                            <option value="<?php echo $row['course_id'];?>"><?php echo $row['course_name'];?></option>
                            
                            <?php
                                }
                            ?>
                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lecture Number</label>
                        <input type="text" class="form-control" name="lec_num" placeholder="Enter Lecture Number">
                    </div>
                    <div class="form-group">
                        <label>Contents</label>
                        <input type="file" class="form-control" name="content" placeholder="Enter Content">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name='material_save' class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>  

<div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Materials
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#materials"> Add </button>
            </h6>
        </div>

        <div class="card-body">

        <?php
            if(isset($_SESSION['success']) && $_SESSION['success'] !='')
            {
                echo '<h2 class="bg-primary text-white">' .$_SESSION['success']. '</h2>';
                unset($_SESSION['success']);
            }
            if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                echo '<h2 class="bg-danger text-white">' .$_SESSION['status']. '</h2>';
                unset($_SESSION['status']);
            }
        ?>

            <div class="table-responsive"> 

                <?php
                    $query      = "SELECT * FROM materials,courses WHERE materials.course_id = courses.course_id";
                    $query_run  = mysqli_query($connection,$query);      
                ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> Material ID </th>
                            <th> Course Name </th>
                            <th> Lecture Number </th>
                            <th> Content </th>
                            <th> Edit </th> 
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(mysqli_num_rows($query_run) > 0 )
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                        ?>

                        <tr>
                            <td> <?php echo $row['material_id']; ?> </td>
                            <td> <?php echo $row['course_name']; ?> </td>
                            <td> <?php echo $row['lec_num']; ?> </td>
                            <td> <?php echo $row['content']; ?> </td>
                            <td>
                                <form action="materials_edit.php" method="POST">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['material_id']; ?>">
                                    <button type="submit" name="material_edit_btn" class="btn btn-success"> Edit </button>
                                </form>
                            </td>
                            <td> 
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['material_id']; ?>">
                                    <button type="submit" name="material_delete_btn" class="btn btn-danger">Delete</button> 
                                </form>
                            </td>
                        </tr>

                        <?php
                                }
                            }
                            else
                            {
                                echo "No Record Found";
                            }
                        ?>

                    </tbody>
                </table>
            </div>  
        </div>
    </div>
</div>


<?php
 include('includes/scripts.php');
 include('includes/footer.php');
?>