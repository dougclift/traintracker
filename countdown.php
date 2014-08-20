 <?php
    $trains = simplexml_load_file('http://api.rideuta.com/SIRI/SIRI.svc/StopMonitor?stopid=301084&minutesout=120&onwardcalls=false&filterroute=750&usertoken=UOIIQ050TOK');

$a = $trains->StopMonitoringDelivery->MonitoredStopVisit->MonitoredVehicleJourney[0];
$b = $trains->StopMonitoringDelivery->MonitoredStopVisit->MonitoredVehicleJourney[0]->MonitoredCall->Extensions->EstimatedDepartureTime;
$c = $trains->StopMonitoringDelivery->MonitoredStopVisit->MonitoredVehicleJourney[0]->DirectionRef;
// Change the line below to your timezone!
date_default_timezone_set('America/Denver');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>jQuery Countdown</title>
<link rel="stylesheet" href="css/jquery.countdown.css">
  <link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">
#defaultCountdown { width: 270px; height: 80px; }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/jquery.countdown.js"></script>
<script>
$(function () {
	var austDay = new Date();
	$('#defaultCountdown').countdown({until: +<?php echo $b ?>, format: 'hMS'});
});
</script>
</head>
<body>
  
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
        <h4><span class="glyphicon glyphicon-time"></span> Train departs <?php echo ucfirst(strtolower($c)); ?> in:</h4>
        <div id="defaultCountdown"></div>
        <!-- <div class="alert alert-danger" role="alert"><strong> Heads up!</strong> Train only goes to Salt Lake Central</div> -->
      </div> <!-- /panel-body -->
    </div> <!-- /panel -->
    </div> <!-- /jumbotron -->
    
    <footer>
        <p>Made for train lovers everywhere</p>
      </footer>
    
    </div> <!-- /container -->
    </body>
</html>
