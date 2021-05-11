<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow">
<meta name="referrer" content="no-referrer">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php

 if(isset($_GET['email']) && isset($_GET['external_lead_id']) && isset($_GET['ip'])) {     
    $data = array(
        "Email"   =>  $_GET['email'],
        "cmp"   =>  "2269",
        "aff_sid" => $_GET['external_lead_id'],
        "CountryID" => "CA"        
        );
    
    // $user_agent = 'curl/' . curl_version()['version'];
    $ch = curl_init();    
    $url = 'https://api.dailyrewards.com/?cmd=api-co-reg&apik=ukp!BjItWgMi6Qk';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");    
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    // curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);

    $output = curl_exec($ch);
    curl_close($ch);    
    // echo($output);
    var_dump($output); 
 } 

 ?>
</head>
<body>


</body>
</html>
