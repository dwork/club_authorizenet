<?php
// Test account at developer.authorize.net
//   login: earthclick1
//   password: Cree0101
//   card not present

require_once 'sites/all/modules/custom/club_authorizenet/anet_php_sdk/AuthorizeNet.php'; // The SDK
$url = "http://earthclick.net/direct_post.php";
$api_login_id = '6pcaYZr4M3XC';
$transaction_key = '9amYYXZq36g596Fy';
$md5_setting = '6pcaYZr4M3XC'; // Your MD5 Setting
$amount = "5.99";
AuthorizeNetDPM::directPostDemo($url, $api_login_id, $transaction_key, $amount, $md5_setting);
?>
