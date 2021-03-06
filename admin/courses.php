<?php
    include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/topbar.php');
    include('includes/database/dbconfig.php');
?>


<div class="modal fade" id="courses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="code.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <select class="browser-default custom-select" name="year_id">
                            <option selected>Choose Year Name</option>
                            
                            <?php
                                $query = "SELECT * FROM years";
                                $query_run = mysqli_query($connection,$query);
                                while ($row = mysqli_fetch_assoc($query_run))
                                {
                            ?>

                            <option value="<?php echo $row['year_id'];?>"><?php echo $row['year_name'];?></option>
                            
                            <?php
                                }
                            ?>
                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="course_name" placeholder="Enter Course Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name='course_save' class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>  

<div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Courses
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#courses"> Add </button>
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
                    $query      = "SELECT * FROM courses,years WHERE courses.year_id = years.year_id";
                    $query_run  = mysqli_query($connection,$query);      
                ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> Course ID </th>
                            <th> Year Name </th>
                            <th> Course Name </th>
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
                            <td> <?php echo $row['course_id']; ?> </td>
                            <td> <?php echo $row['year_name']; ?> </td>
                            <td> <?php echo $row['course_name']; ?> </td>
                            <td>
                                <form action="courses_edit.php" method="POST">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['course_id']; ?>">
                                    <button type="submit" name="course_edit_btn" class="btn btn-success"> Edit </button>
                                </form>
                            </td>
                            <td> 
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['course_id']; ?>">
                                    <button type="submit" name="course_delete_btn" class="btn btn-danger">Delete</button> 
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