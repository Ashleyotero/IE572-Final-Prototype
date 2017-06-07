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
          <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <p>In this case, Jamie will drive to a location he knows but encounters traffic, which prompts the GPS system to offer alternate routes for him to select. He enters the vehicle to head into work and begins his drive. Vehicle dashboard navigation section indicates his position on a map in real time, shows traffic information like Google Maps app. After 3 navigational decisions show a match with the Work Route, travel time is estimated to destination. If traffic issues are identified, automated voice sates “It looks like you’re heading to work. Traffic is heavy. Would you like an alternate route?”</p>
              <p>The system recognizes that Jamie is following the saved route to “Work” and automatically looks for traffic along the route.</p>
                <a class="btn btn-warning link" href="#about" data-link="wakeword" data-dismiss="alert" aria-label="close">Begin</a>
          </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="map-view-as-bg">
                        <div id="pages_about" class="textContainer_about">
                            <div class="textWord_about" data-link="wakeword" id="wakeword">
                                <?php include("includes/talking.php"); ?>
                              <div class="alert alert-success alert-dismissible">
                                  <p>It looks like you are driving to “Work”. There is heavy traffic ahead. Would you like to take an alternate route?</p>
                              </div>
                            </div>
                            <div class="textWord_about" id="task2-1">
                                <?php include("includes/listening.php"); ?> 
                              <div class="alert alert-info alert-dismissible">
                                  <em>Say any command in italics.</em>
                                  <ul>
                                    <li><a class="btn btn-warning link" href="task2-yes.php" data-link="task-yes">Yes</a></li>
                                    <li><a class="btn btn-warning link" href="#about" data-link="task-no">No</a></li>
                                  </ul>
                              </div>
                            </div>
                            <div class="textWord_about" data-link="task-no">
                                <?php include("includes/talking.php"); ?>  
                              <div class="alert alert-success alert-dismissible">
                                  <p>No other alternative routes available.</p>
                                  <p><strong>End of Task 2</strong></p>
                                  <a class="btn btn-default" href="overview.php" role="button">Return to Task Overview</a>
                              </div>
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
    
    <script type="text/javascript">
        //timeout function on the first div because reasons
        setTimeout(
           function(){
              $('#wakeword').replaceWith($('#task2-1'));
              $('#task2-1').show();
           },
           10000
        );
        
        //the hide/show functionality
    $('.textWord_about').hide();

    $('.link').click(function() {
        $('.textWord_about').hide();       
        $('.textWord_about[data-link=' + $(this).data('link') + ']').fadeIn({
            width: '200px'
        }, 300);
    });
    </script>
</body>
</html>