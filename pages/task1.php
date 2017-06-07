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
              <p>In this case, Jamie will drive to a location he knows and saves the route into his navigation system for future reference. He enters his car and begins his drive to work. He can view the route he is taking to work on the screen.</p>
                <a class="btn btn-warning link" href="#about" data-link="wakeword">Use the wake word!</a>
          </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="map-view-as-bg">
                        <div id="pages_about" class="textContainer_about">
                            <div class="textWord_about" data-link="wakeword">
                                <a class="btn btn-primary link" href="#about" data-link="task1-1">Say "Hi <?php echo $_SESSION['carname']; ?>"</a>
                            </div>
                            <div class="textWord_about" data-link="task1-1" id="task1-1">
                                <?php include("includes/talking.php"); ?>
                              <div class="alert alert-success alert-dismissible">
                                  <p>Hello, Jaime! What would you like to do today?</p>
                              </div>
                            </div>
                            
                            <div class="textWord_about" data-link="task1-2" id="task1-2">
                                <?php include("includes/listening.php"); ?>  
                              <div class="alert alert-info alert-dismissible">
                                  <em>Say any command in italics to begin.</em>
                                  <ul>
                                    <li><a class="btn btn-warning link" href="#about" data-link="task-save">Save Route</a></li>
                                  </ul>
                              </div>
                            </div>
                            <div class="textWord_about" data-link="task-save">
                                <?php include("includes/listening.php"); ?>  
                              <div class="alert alert-info alert-dismissible">
                                  <em>Name your route.</em>
                                  <ul>
                                    <li><a class="btn btn-warning link" href="#about" data-link="task-saved"><em>Name Route "Work"</em></a></li>
                                    <li><a class="btn btn-warning link" href="#about" data-link="task1-1"><em>Nevermind</em></a></li>
                                  </ul>
                              </div>
                            </div>
                            <div class="textWord_about" data-link="task-saved">
                              <div class="alert alert-success alert-dismissible">
                                  <p>Your route has been saved as "Work."</p>
                                  <p><strong>End of Task 1</strong></p>
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

              $('#task1-1').replaceWith($('#task1-2'));
              $('#task1-2').show();

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