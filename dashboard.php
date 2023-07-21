 <?php  include 'header.php';
        include 'connection.php';
 

        $queryall=mysqli_query($con,"SELECT * FROM `students`");
        $row_all=mysqli_num_rows($queryall);

        $query1=mysqli_query($con,"SELECT * FROM `students` WHERE `class`='class 1'");
        $row_1=mysqli_num_rows($query1);
 ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>    
        </div>
                    <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                All Students</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $row_all ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Class 1 Students</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $row_1 ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<?php include 'footer.php'; ?>