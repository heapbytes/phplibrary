
<?php include('../config/config.php') ?>

    <div class="row my-5">
        <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="alert alert-success back-widget-set text-center">
                <i class="fa fa-book fa-5x"></i>

                <h3> <?php 
 					$sql = "select * from addBooks";               
                 	$count =  mysqli_query($con,$sql);
                	echo mysqli_num_rows($count);
                 ?> </h3>                
                Books Listed

            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="alert alert-info back-widget-set text-center">
                <i class="fa fa-bars fa-5x"></i>
                <h3><?php 
                
                $sql = "select * from studBooks";               
                $count =  mysqli_query($con,$sql);
                echo mysqli_num_rows($count);
                
                 ?> </h3>
                Times Book Issued
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="alert alert-warning back-widget-set text-center">
                <i class="fa fa-recycle fa-5x"></i>
                <h3><?php 
                
                	$sql = "select * from returnBooks";               
                 	$count =  mysqli_query($con,$sql);
                	echo mysqli_num_rows($count);
                
                 ?></h3>
                Times Books Returned
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="alert alert-danger back-widget-set text-center">
                <i class="fa fa-users fa-5x"></i>
                <h3> <?php 
                $sql = "select * from Users";
                $count = mysqli_query($con,$sql);
                echo mysqli_num_rows($count); //php code to count users 
                ?></h3>
               Registered Users

            </div>
        </div>
    </div>
