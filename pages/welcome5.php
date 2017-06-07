<?php 
session_start();
$_SESSION['carname'] = $_POST["carname"]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IE572 Group 4 Prototype</title>
   <?php include("includes/header.php"); ?>
</head>

<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <!-- /#page-wrapper -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Welcome to your new car system!</h3>
                      </div>
                      <div class="panel-body">
                          <h1>You have named your car: <?php echo $_SESSION['carname']; ?></h1>
                        <p>There are many things you can do with your new car system! Below are a few things that are included:</p>
                          <ul>
                            <li>Tell the system to save specific routes. For example: from home to work, or work to home.</li>
                            <li>Ask the system what the speed limit in your area is.</li>
                            <li>Visualize the vehicle alerts to make sure your far is safe.</li>
                            <li>Use your system to tell you the weather.</li>
                            <li>Visualization of the speedometer.</li>
                            <li>Visualization of what automatic setting the vehicle is currently in: Drive, Reverse, Neutral, Park, Drive 3, Drive 2, Drive 1.</li>
                            <li>Visualization of the number of miles you've driven on your car since it was first purchased.</li>
                          </ul>
                      </div>
                      <div class="panel-footer clearfix">
                          <a class="btn btn-primary pull-right" href="welcome6.php" role="button">Next</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- /#wrapper -->
    <?php include("includes/footer.php"); ?>
</body>
</html>