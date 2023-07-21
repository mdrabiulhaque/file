<?php  include 'header.php';
        include 'connection.php';

        $ref_id=$_SESSION['ref_id'];
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Ref User Data</h1>    
        </div>
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Ref User Profile Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>

                                <?php
                                $query=mysqli_query($con,"SELECT * FROM `user` WHERE `ref_user`='$ref_id'") ;
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
                    </div>

<?php include 'footer.php'; ?>