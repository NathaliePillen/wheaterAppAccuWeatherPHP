<?php
//get the weather


$key = 'YGNnXHWk7OpuGlNs9LYG7GUMPkiUO5YI';
$base = 'http://dataservice.accuweather.com/currentconditions/v1/locationKey?apikey=$key';

  
  $curl = curl_init();

  curl_setopt_array($curl, array(
  CURLOPT_URL => $base,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
  "cache-control: no-cache"
  ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
  $response = json_decode($response, true); 
  
  //because of true, it's in an array
  

// get the city
  
  $key = 'YGNnXHWk7OpuGlNs9LYG7GUMPkiUO5YI';

  $base = 'http://dataservice.accuweather.com/locations/v1/cities/search?apikey=$key&q=ghent';
 // $query = '?apikey=$key.&q=ghent';

 $curl = curl_init();

 curl_setopt_array($curl, array(
 CURLOPT_URL => $base,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "GET",
 CURLOPT_HTTPHEADER => array(
 "cache-control: no-cache"
 ),
 ));
 
 $response = curl_exec($curl);
 $err = curl_error($curl);
 
 curl_close($curl);
 
 $response = json_decode($response, true); //because of true, it's in an array
 $response0 = $response[0];

 echo $response0;
 ?>
 