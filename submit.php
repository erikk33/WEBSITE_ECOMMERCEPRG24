<?php
$username = $_POST['username'];
$password = $_POST['password'];

$url = 'https://645b8b38a8f9e4d6e76b7a16.mockapi.io/Acouunt';
$data = array('username' => $username, 'password' => $password);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>
