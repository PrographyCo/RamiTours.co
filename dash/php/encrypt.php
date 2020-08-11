<?php

$key = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!@#$%^&*()_+-=`~{}?><][;/.,';

function enc($data, $key) {
    $enc_key = base64_decode($key);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $enc_data = openssl_encrypt($data, 'aes-256-cbc', $enc_key, 0, $iv);
    return base64_encode($enc_data . '::' . $iv);
}


function dec($data,$key){
    $enc_key = base64_decode($key);

    list($enc_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
        $decr = openssl_decrypt($enc_data, 'aes-256-cbc', $enc_key, 0, $iv);

    return $decr;
}