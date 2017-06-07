

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- JustGage js -->
    <script src="../js/justgage.js"></script>
    <script src="../js/raphael-2.1.4.min.js"></script>
    <script>
      var g = new JustGage({
        id: "gauge",
        value: 67,
        min: 0,
        max: 100,
        title: "Fuel"
      });
    </script>

    <?php include_once("analytics.php") ?>
    
    <!-- speedometer js --->
    <script src="../js/speedometer.js"></script>
    <script type="text/javascript">
        $("#myValues").myfunc({divFact:10,eventListenerType:'keyup'});
    </script>