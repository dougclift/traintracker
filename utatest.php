<?php
    $trains = simplexml_load_file('http://api.rideuta.com/SIRI/SIRI.svc/VehicleMonitor/ByRoute?route=750&onwardcalls=true&usertoken=UOIIQ050TOK');

$a = $trains->VehicleMonitoringDelivery->VehicleActivity->MonitoredVehicleJourney;
  echo count($a);

foreach ($trains->VehicleMonitoringDelivery->VehicleActivity->MonitoredVehicleJourney as $test) {
   echo 'Vehicle ID: ', $test->VehicleRef, PHP_EOL; 
   echo 'Line Ref: ', $test->LineRef, PHP_EOL;
   echo 'Direction: ', $test->DirectionRef, PHP_EOL;
   echo 'Vehicle Longitude: ', $test->VehicleLocation->Longitude, PHP_EOL;
   echo 'Vehicle Latitude: ', $test->VehicleLocation->Latitude, PHP_EOL;
   echo '<hr>';
}

?>
