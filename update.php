<?php  include 'header.php';
        include 'connection.php';
        $id =$_GET['id'];

            $query_r=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$id'");
            $row=mysqli_fetch_assoc($query_r);

        if (isset($_POST['update'])) {
            $fname  =   $_POST['fname'];
            $lname  =   $_POST['lname'];
            $email  =   $_POST['email'];

            
            $query=mysqli_query($con,"UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email' 
            WHERE `id`='$id'");

            if ($query) {
                ?>
                <script>alert("Data Update Successfully!!!!")</script>
                <?php
            }else{
                ?>
                <script>alert("Data Update Failed!!!")</script>
                <?php
            }
            
           
        }

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Data</h1>    
        </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update User Data</h6>
                        </div>
                        <div class="card-body">
                        <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="fname" value="<?= $row['fname']; ?>" class="form-control form-control-user" id="exampleFirstName"
                                            >
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lname" value="<?= $row['lname']; ?>" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" value="<?= $row['email']; ?>" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <button name="update" class="btn btn-primary btn-user btn-block">
                                    Update User Data
                                </button>
                            </form>
                        </div>
                    </div>

                    

<?php include 'footer.php'; ?>