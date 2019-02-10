<div id="header">
  <?php if(isset($_SESSION['id'])) { ?>
      <div class="button" onclick="location.href='forms/disconnect.php'">
        <span>
          Logout
  </span>
      </div>
  <?php } else { ?>
    <div class="button" onclick="location.href='index.php'">
      <span>
        Login
  </span>
    </div>
    <div class="button" onclick="location.href='privacy.php'">
      <span>
        privacy
  </span>
    </div>
    <div class="button" onclick="location.href='about.php'">
    <span>
      about
  </span>
    </div>
    <div class="button" onclick="location.href='index.php'">
      <span>
        Home
  </span>
    </div>
  <?php } ?>
  <?php if(isset($_SESSION['id'])) { ?>
  <div class="button" onclick="location.href='privacy.php'">
    <span>
      privacy
  </span>
  </div>
  <div class="button" onclick="location.href='about.php'">
    <span>
      about
  </span>
    </div>
    <div class="button" onclick="location.href='db.html'">
    <span>
      Database
  </span>
    </div>
  <?php } ?>
</div>