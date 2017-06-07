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
                   <!-- Enter a speed:
                   <input id="myValues" />
                    <p></p>-->

                    <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="row">
                            <div class="col-md-8">
                                <p>This is where your vehicle alerts will display. For example: low fuel, open door sensor, or low tire sensor.</p>
                            </div>
                              <div class="col-md-4">
                                <h1 class="fa fa-arrow-right pull-right fa-5x"></h1>
                              </div>
                          </div>
                      </div>
                      <div class="panel-footer clearfix">                          
                            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#finishwelcome">Next</button>
                      </div>
                </div>
                    <!-- FUEL GAUGE -->
                    <div id="gauge" class="200x160px"></div>

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
    
    
    <div class="modal fade" id="finishwelcome" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Training complete!</h4>
          </div>
          <div class="modal-body">
              <p>Now you're ready to use your new car dashboard system! Have fun driving.</p>
          </div>
          <div class="modal-footer clearfix">
              <a class="btn btn-primary pull-right" href="overview.php" role="button">Continue to Tasks Overview</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->  
    <?php include("includes/footer.php"); ?>

</body>
</html>