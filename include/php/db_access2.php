<?php

require_once('db2.php');
$db = new DB();
$personal = $db->get_personal();
$organization = $db->get_organization();
$instrumental = $db->get_instrumental();
$address = $db->get_address();
$SNS = $db->get_SNS();

echo 'personal' .PHP_EOL;
var_dump($personal) .PHP_EOL;

echo 'instrumental' .PHP_EOL;
printf($instrumental) .PHP_EOL;


?>
