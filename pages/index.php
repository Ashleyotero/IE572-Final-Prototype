<?php $carname = $_POST["carname"]; ?>

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
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Welcome to the Group 4 Prototype</h3>
                      </div>
                      <div class="panel-body">
                        <p>The purpose of this assessment is to analyze the user friendliness of a new GPS navigation system that is to be integrated into the primary dashboard interface of a vehicle (i.e. next to the speedometer, tachometer, etc.).</p>
                          <p>The proposed interface will be presented as a series of web pages.  The website will guide you through the experiment.  The first page will present a backstory for a representative user of the GPS navigation system, who you will be role-playing.  After reading this backstory, you will click next, and you will be presented with three buttons that lead to three different scenarios.  Please go through these three scenarios in the order provided in your instructional email.</p>
                          <p><strong>We recommend using Chrome for this activity. You may encounter unexpected behavior in other browsers.</strong></p>
                          <div class="row">
                            <div class="col-md-8">
                                <p>The proposed system is primarily a voice interaction driven system.  When the system is talking to you, it will present a green “Talking” icon.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-commenting-o fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">Talking</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-8">
                              <p>When the system is waiting for the user to respond with a command, it will present a blue “Listening” icon.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-assistive-listening-systems fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">Listening</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                          </div>
                          <p>The system will also present a list of commands that are available for the driver to say.  There will be a tutorial in the prototype that will walk you through how to interact with the system.</p>
                          <p>However our prototype is not developed enough to be able to utilize voice commands.  In order to simulate the voice interaction with the system, when the system is talking to you, it will present the green “Talking” icon (as it would in the real system), and a speech bubble will appear with what the system would say to you to simulate the system talking to the driver.  When the system is waiting for a command from you, it will present the blue “Listening” icon and a list of the available commands (as it would in the real system).  To simulate talking to the system, you will click on the command from the command list that you would have said.</p>
                      </div>
                      <div class="panel-footer clearfix">
                        <a class="btn btn-primary pull-right" href="welcome.php" role="button">Continue to Training</a>
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