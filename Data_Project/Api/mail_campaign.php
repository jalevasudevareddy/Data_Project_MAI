<?php

// echo "hello";exit;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://multipliersolutions.com/mail/index.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $_POST['data'],
  CURLOPT_HTTPHEADER => array(
    'from: sarabjeet@multipliersolutions.com',
    'subject: '.$_POST['subject'].'',
    'mailto: '.$_POST['email'].'',
    'cc: ',
    'bcc: ',
    'Content-Type: text/plain'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


?>