  <?php
    $trains = simplexml_load_file('http://api.rideuta.com/SIRI/SIRI.svc/StopMonitor?stopid=301084&minutesout=120&onwardcalls=false&filterroute=750&usertoken=UOIIQ050TOK');

$a = $trains->StopMonitoringDelivery->MonitoredStopVisit->MonitoredVehicleJourney;
  echo count($a);
// Change the line below to your timezone!
date_default_timezone_set('America/Denver');
$w = date('m/d/Y h:i:s a', time());
  
foreach ($trains->StopMonitoringDelivery->MonitoredStopVisit->MonitoredVehicleJourney as $train) {
   echo 'Vehicle ID: ', $train->VehicleRef, PHP_EOL; 
   echo 'Line Ref: ', $train->LineRef, PHP_EOL;
   echo 'Direction: ', $train->DirectionRef, PHP_EOL;
   $b = $train->MonitoredCall->Extensions->EstimatedDepartureTime;
   $c = date("h:i:s", time($w) + $b);
   echo 'Estimated Departure at ', $c;
   echo '<hr>';
}
?>