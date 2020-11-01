<?php

// initialization
$ch = curl_init();

// set option curl
curl_setopt($ch,CURLOPT_URL,"https://ihzarizkyk.space/");

// set option curl
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

// execute curl
$opt = curl_exec($ch);

echo $opt;

// close curl
curl_close($ch);
