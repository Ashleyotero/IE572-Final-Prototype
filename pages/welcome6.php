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
    <style>
        .map-view-as-bg {
            background-image: url(http://www.ashleyotero.com/img/starting-location.png);
            background-repeat: no-repeat;
            min-height: 635px;
            min-width: 100%;
            padding: 80px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="map-view-as-bg">
                    <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="row">
                            <div class="col-md-8">
                                <p>This is the speedometer. It will indicate the speed you are going. Be sure to stay in the speed limit!</p>
                            </div>
                              <div class="col-md-4">
                                <h1 class="fa fa-arrow-right pull-right fa-5x"></h1>
                              </div>
                          </div>
                      </div>
                      <div class="panel-footer clearfix">
                          <a class="btn btn-primary pull-right" href="welcome7.php" role="button">Next</a>
                      </div>
                </div>
            </div>
                </div>
                <!-- GAUGES -->
                <?php include("includes/gauges.php"); ?>
                <!-- NOTIFICATIONS PANEL -->
                <?php include("includes/notifications.php"); ?>
            <!-- /.row -->
            </div>
        <!-- /#page-wrapper -->
        </div>
    </div>
    <!-- /#wrapper -->
    <?php include("includes/footer.php"); ?>

</body>
</html>