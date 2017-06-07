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
                        <div id="pages_about" class="textContainer_about">
                            <div id="loading"></div>
                            <div class="textWord_about" data-link="task-yes" id="task-yes">
                              <div class="alert alert-info alert-dismissible">
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
              $('#loading').replaceWith($('#task-yes'));
              $('#task-yes').show();
           },
           5000
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