<?php  include 'header.php';
        include 'connection.php';
        $id =$_SESSION['id'];


?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>    
        </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Profile Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                <?php
                                $query=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$id'") ;
                                    while ($row=mysqli_fetch_assoc($query)) {
                                        ?>
                                            <tbody>
                                        <tr>
                                            <td><?= $row['fname'] ?> <?= $row['lname'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?php 
                                            if ($row['status'] == 1) {
                                                ?>
                                            <a class="btn btn-circle btn-sm btn-success"><i class="fa fa-check"></i></a>
                                                <?php
                                            }else{
                                                ?>
                                            <a class="btn btn-circle btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                <?php
                                            }
                                            ?></td>
                                            <td>
                                            <a href="update.php?id=<?=$row['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-circle btn-sm btn-success"  href="<?=$row['id'] ?>" data-toggle="modal" data-target="#profilemodel"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                        <?php
                                    }
                                ?>

                                    
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Modal-->
    <div class="modal fade" id="profilemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>

                                <?php
                                $query=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$id'") ;
                                    while ($row=mysqli_fetch_assoc($query)) {
                                        ?>
                                            <tbody>
                                        <tr>
                                            <td><?= $row['fname'] ?> <?= $row['lname'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                        </tr>
                                        
                                    </tbody>
                                        <?php
                                    }
                                ?>

                                    
                                </table>
                            </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>