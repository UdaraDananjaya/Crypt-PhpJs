<?php
$encrypted = $_POST['Enc'];
$privKey =$file = file_get_contents('private_key.pem', true);
$privKey = openssl_pkey_get_private($privKey);
openssl_private_decrypt(base64_decode($encrypted), $decrypted, $privKey);
echo $decrypted;
?>