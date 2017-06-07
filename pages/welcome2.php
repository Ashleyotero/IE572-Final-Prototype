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
                        <p>This system is voice automated. When the system is speaking you will see the icon on the right, when the system is listening and ready for you to speak you will see the icon on the left.</p>
                          <div class="row">
                              <div class="col-md-6">
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
                            <div class="col-md-6">
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
                      </div>
                      <div class="panel-footer clearfix">
                          <a class="btn btn-primary pull-right" href="welcome3.php" role="button">Next</a>
                      </div>
                    </div><!-- /.modal-content -->
                </div>
            </div>
        </div><!-- /.modal-dialog -->
    </div>
    
    <!-- /#wrapper -->
    <?php include("includes/footer.php"); ?>
</body>
</html>