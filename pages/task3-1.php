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
            background-image: url(http://www.ashleyotero.com/img/routes-map.png);
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
                <a class="btn btn-warning link" href="#about" data-link="task3-1" data-dismiss="alert" aria-label="close">Continue</a>
          </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="map-view-as-bg">
                        <div id="pages_about" class="textContainer_about">
                            <div class="textWord_about" data-link="task3-1" id="task3-1">
                                <?php include("includes/talking.php"); ?>
                              <div class="alert alert-success alert-dismissible">
                                  <p>There are two available routes, Route A, and Route B.  Choose by route, fastest, or shortest.</p>
                              </div>
                            </div>
                            
                            <div class="textWord_about" data-link="task3-2" id="task3-2">
                                <?php include("includes/listening.php"); ?>  
                              <div class="alert alert-info alert-dismissible">
                                  <em>Say any command in italics to begin.</em>
                                  <ul>
                                    <li><a class="btn btn-warning link" href="task3-2.php">Route A</a></li>
                                    <li><a class="btn btn-warning link" href="task3-2.php">Route B</a></li>
                                    <li><a class="btn btn-warning link" href="task3-2.php">Fastest</a></li>
                                    <li><a class="btn btn-warning link" href="task3-2.php">Shortest</a></li>
                                  </ul>
                              </div>
                            </div>
                            <div class="textWord_about" data-link="task-cancel">
                              <div class="alert alert-success alert-dismissible">
                                  <p>Action Canceled</p>
                                  <p><strong>End of Task 3</strong></p>
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

              $('#task3-1').replaceWith($('#task3-2'));
              $('#task3-2').show();

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