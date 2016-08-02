<?php

$data = array(
   "title" => "Test Post Deal",
   "deal_value" => "23000",
   "expected_close" => "2016-08-03"
);

$url_send ="http://app.goteamwave.com/api/crm/deals?api_key=dda0c7e8e1ed4231a2794c99d19be85b";
$str_data = json_encode($data);

function sendPostData($url, $post){
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
  $result = curl_exec($ch);
  curl_close($ch);  // Seems like good practice
  return $result;
}

echo " " . sendPostData($url_send, $str_data);

?>