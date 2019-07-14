<?php
	function getDistance($postcode1, $postcode2) {  
 
	$coordinates1 = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($postcode1) . '&sensor=true');
	$coordinates1 = json_decode($coordinates1);
 
	$coordinates2 = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($postcode2) . '&sensor=true');
	$coordinates2 = json_decode($coordinates2);
 
    $earth_radius = 6371;  
 
    $dLat = deg2rad($coordinates2->results[0]->geometry->location->lat - $coordinates1->results[0]->geometry->location->lat);  
    $dLon = deg2rad($coordinates2->results[0]->geometry->location->lng - $coordinates1->results[0]->geometry->location->lng);  
 
    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);  
    $c = 2 * asin(sqrt($a));  
    $d = $earth_radius * $c;
 
	$d = $d * 0.621;
 
    return $d;  
} 
 
echo getDistance('W1T 1AL', 'WD6 1JG');
?>