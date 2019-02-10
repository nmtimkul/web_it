<?php
session_start();

include_once("functions/montage.php");

$montages = get_all_montage();
?>
<!DOCTYPE html>
<HTML>
  <header>
    <link rel="stylesheet" type="text/css" href="style/privacy.css">
    <meta charset="UTF-8">
    <title>WEB - privacy</title>
  </header>
  <body>
    <?php include('fragments/header.php') ?>
      <div class="body">
        <?php if(isset($_SESSION['id'])) { ?>
          <p>Ronald Lambani and Ronald Munyai IT evangelist.</p> 
        
        <?php } else { ?>
          <span style="color:#FFFFFF;">You need to connect to use the privacy</span>
        <?php } ?>
      </div>
    <?php include('fragments/footer.php') ?>
  </body>
  <?php if(isset($_SESSION['id'])) { ?>
  <script type="text/javascript" src="js/drop.js"></script>
  <script type="text/javascript" src="js/import.js"></script>
  <?php } ?>
</HTML>
