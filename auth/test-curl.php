<?php
$ch = curl_init('https://discord.com/api/v10/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
var_dump($result, curl_error($ch));