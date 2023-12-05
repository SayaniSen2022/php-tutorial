<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

$resource = curl_init($url); // starting a session, creates a resource and returns a resource
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true); //set options
$result = curl_exec($resource); //execution
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE); //to get the status code

// echo '<pre>';

// var_dump($code);

// echo '</pre>';
// curl_close($resource); //to close session


// echo $result;


// // Get response status code

// // set_opt_array

// Post request
$resource = curl_init();

$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];
 
curl_setopt_array($resource,[
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user) //creating user
]);
$result = curl_exec($resource);
curl_close($resource);