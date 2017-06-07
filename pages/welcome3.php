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
                        <p>In order to recognize your voice, we need you to say a few words out loud. Please press “say yes” and wait to see the listening icon, then say “yes” out loud. Follow the same instructions for “say no”.</p>
                          <div class="row">
                            <div class="col-md-3 col-md-offset-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#yesnomodal">
                                  Say "yes"
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#yesnomodal">
                                  Say "no"
                                </button>
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer clearfix">
                          <a class="btn btn-primary pull-right" href="welcome4.php" role="button">Next</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="modal fade" id="yesnomodal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Currently Listening...</h4>
          </div>
          <div class="modal-body">
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
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->    
    
    <!-- /#wrapper -->
    <?php include("includes/footer.php"); ?>
</body>
</html>