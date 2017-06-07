<?php 
session_start();
$_SESSION['carname']; 
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
                        <h3 class="panel-title">Overview Of Our Story</h3>
                      </div>
                      <div class="panel-body">
                        <p>Jamie is a 39 year old defense contract employee commuting 90 minutes each day to Albuquerque every day from Santa Fe where he lives. Though he rarely needs navigational information because he knows the route so well, occasionally he has to report to a field location using his Google Maps app. Having experienced a nearly missed accident last summer when an incoming notification on his phone caused him to drift out of his lane, he has become very dedicated to keeping the phone with his briefcase in the trunk, using the bluetooth feature to make or answer calls when absolutely necessary. When asked to report to a field location, he takes additional time to pull over and stop the vehicle, engage the voice cues for navigating on Google Maps. He finds it incredibly frustrating if he is in an neighborhood he’s not familiar with and needs to stop and get gasoline or locate a restaurant. Ultimately, the phone is a great tool for this, but to Jaime, he can’t use it without taking additional distracting risks.</p>
                          <strong>Please select the task in the order given to you in the instructions.</strong>
                      </div>
                      <div class="panel-footer clearfix">
                          <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary" href="task1.php" role="button">Task 1</a>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <a class="btn btn-primary text-center" href="task2.php" role="button">Task 2</a>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary pull-right" href="task3.php" role="button">Task 3</a>
                            </div>
                          </div>
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