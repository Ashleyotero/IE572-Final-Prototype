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
                        <p>Next, you get to name your car! This way you will be able to speak to it! Don’t worry, you’ll be able to change it’s name via the settings. Please say “name car” and then say the name you have chosen.</p>
                          <div class="row">
                            <div class="col-md-3 col-md-offset-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#namecar">
                                  Name car
                                </button>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="modal fade" id="namecar" tabindex="-1" role="dialog">
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
          <form action="welcome5.php" method="post"> 
              <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control" name="carname" placeholder="Name of your car">    
                </div>
              <div class="col-md-4">
                  <button type="submit" class="btn btn-primary pull-right">Next</button>
              </div>
              </div>
          </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->   
    <!-- /#wrapper -->
    <?php include("includes/footer.php"); ?>
</body>
</html>