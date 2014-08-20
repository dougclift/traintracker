 <?php
    $trains = simplexml_load_file('http://api.rideuta.com/SIRI/SIRI.svc/StopMonitor?stopid=301084&minutesout=120&onwardcalls=false&filterroute=750&usertoken=UOIIQ050TOK');

$a = $trains->StopMonitoringDelivery->MonitoredStopVisit->MonitoredVehicleJourney[0];
$b = $trains->StopMonitoringDelivery->MonitoredStopVisit->MonitoredVehicleJourney[0]->MonitoredCall->Extensions->EstimatedDepartureTime;
// Change the line below to your timezone!
date_default_timezone_set('America/Denver');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>jQuery Countdown</title>
<!-- Bootstrap -->
   <link rel="stylesheet" href="css/jquery.countdown.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <style type="text/css">
      .defaultCountdown { width: 500px; height: 500px; }
    </style>
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/jquery.countdown.js"></script>
<script>
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
  $('#defaultCountdown').countdown({until: austDay, format: 'hMS'});
});	
</script>
</head>
  <body>
    <div id="defaultCountdown"></div>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">iTrainTracker</a>
        </div>
      </div>
    </div>
    
    <div class="container">
      
       <div class="jumbotron">
         <h1>Station Park</h1>
         <div class="panel panel-default">
           <div class="panel-body">
             <h4><span class="glyphicon glyphicon-time"></span> Train departs Northbound in :</h4>
             <div class="defaultCountdown"></div>
             <span class="label label-danger">Train only goes to Salt Lake Central</span>
           </div>
         </div>
      </div><!-- /jumbotron header -->

      <footer>
        <p>Made for train lovers everywhere</p>
      </footer>

   
    </div><!-- /.container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>
