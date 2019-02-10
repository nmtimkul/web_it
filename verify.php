<?php
session_start();
include_once './functions/verify.php';
?>
<!DOCTYPE html>
<HTML>
  <header>
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <meta charset="UTF-8">
    <title>WEB - VERIFY</title>
  </header>
  <body>
    <?php include('fragments/header.php') ?>
    <?php include('fragments/footer.php') ?>
    <div id="login">
    <div class="title">VERIFIED</div>
    <?php if (verify($_GET["token"]) == 0) { ?>
      <strong>
        <span style="color:#FFFFFF;">Your account is successfully verified!</span><br>
        <span style="color:#FFFFFF;">You can now login to your WEB account.</span>
      </strong>
    <?php } else { ?>
      <strong>
        <span style="color:#FFFFFF;">Account not found</span>
      </strong>
    <?php } ?>
    </div>
  </body>
</HTML>
