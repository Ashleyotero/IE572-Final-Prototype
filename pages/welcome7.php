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
                    <img src="../img/starting-location.png" class="img-responsive">
                </div>
                <!-- GAUGES -->
                <div class="col-md-4"> 
                    Enter a speed:
                   <input id="myValues" />
                    <p></p>

                    <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="row">
                            <div class="col-md-8">
                                <p>This is a part of your instrument panel. You can see miles you've driven, trip mileage, and average MPG.</p>
                            </div>
                              <div class="col-md-4">
                                <h1 class="fa fa-arrow-down pull-right fa-5x"></h1>
                              </div>
                          </div>
                      </div>
                      <div class="panel-footer clearfix">
                          <a class="btn btn-primary pull-right" href="welcome8.php" role="button">Next</a>
                      </div>
                </div>
                    <!-- FUEL GAUGE 
                    <div id="gauge" class="200x160px"></div>-->

                    <div class="panel panel-default">
                        <p>123456 Miles</p>
                        <p>Trip: 123 Miles</p>
                        <p>Average MPG: 36</p>
                        <p>P R N D 3 2 1</p>
                    </div>
                </div>               
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