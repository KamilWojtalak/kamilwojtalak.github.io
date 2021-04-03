<?php


$url = "https://www.google.com/recaptcha/api/siteverify?";
$token = $_POST['g-recaptcha-response'];

print_r($token);

$secret = '6Lez2ZUaAAAAAKKOPxK0KCc5dFQuq-GSyoh_MKQM';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url . 'secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response);

if($response->success) {
    // What happens when the CAPTCHA was entered incorrectly
    print_r($response);
    echo 'Successful login.';
} else {
    // Your code here to handle a successful verification
    echo 'reCAPTHCA verification failed, please try again.';
}