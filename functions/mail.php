<?php

function send_verification_email($toAddr, $toUsername, $token, $ip) {
  $subject = "[WEB] - Email verification";

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From: <nmtimkul@student.wethinkcode.co.za>' . "\r\n";

  $message = '
  <html>
    <head>
      <title>' . $subject . '</title>
    </head>
    <body>
      Hello ' . htmlspecialchars($toUsername) . ' </br>
      To finalize your subscribtion please click 
      <a href="http://' . $ip . '/verify.php?token=' . $token . '">Here</a>
    </body>
  </html>
  ';

  mail($toAddr, $subject, $message, $headers);
}

function send_forget_mail($toAddr, $toUsername, $password) {
  $subject = "WEB - Reset your password";

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From: <nmtimkul@student.wethinkcode.co.za>' . "\r\n";

  $message = '
  <html>
    <head>
      <title>' . $subject . '</title>
    </head>
    <body>
      Hello ' . htmlspecialchars($toUsername) . ' </br>
      There is your new password : ' . $password . ' </br>
    </body>
  </html>
  ';

  mail($toAddr, $subject, $message, $headers);
}

function send_comment_mail($toAddr, $toUsername, $comment, $fromUsername, $img, $ip) {
  $subject = "WEB - New comment";

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From: <nmtimkul@student.wethinkcode.co.za>' . "\r\n";

  $message = '
  <html>
    <head>
      <title>' . $subject . '</title>
    </head>
    <body>
      Hello ' . htmlspecialchars($toUsername) . ' </br>
      A user just commented one of your montage</br>
      <img src="http://' . $ip . '/montage/' . $img . '" style="width: 388px;height: 291px;display: block;margin: 20px;"></img>
      <span>' . htmlspecialchars($fromUsername) . ': ' . htmlspecialchars($comment) . '</span>
    </body>
  </html>
  ';

  mail($toAddr, $subject, $message, $headers);
}
?>