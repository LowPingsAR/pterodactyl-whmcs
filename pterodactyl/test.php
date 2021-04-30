<?php
$location_id = "10";
if(strpos($location_id, ',') !== false){
    //Found more than one location id
    $multiple_locations == true;
    $locations_array = explode(',',$location_id);
    $location_qt = count($locations_array);
    if(!empty($locations_array)) {
        for ($i = 0; $i < $location_qt; $i++) {
            echo 'Location #'.$i.': '.$locations_array[$i].'<br/>';
        }
    }
}
?>