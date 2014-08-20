<?php
    $trains = simplexml_load_file('http://api.rideuta.com/SIRI/SIRI.svc/StopMonitor?stopid=301084&minutesout=90&onwardcalls=false&filterroute=750&usertoken=UOIIQ050TOK');

$a = $trains->StopMonitoringDelivery->VehicleActivity->MonitoredVehicleJourney;

echo $trains->StopMonitoringDelivery->ResponseTimestamp;


?>