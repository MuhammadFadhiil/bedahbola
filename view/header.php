<?php
$login = false;
if($_SESSION['user']){
  $login = true;
}
?>


<head>
  <title> BedahBola </title>
  <link rel="stylesheet" href="view/style1.css">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<div id="pertama">

  <div id="header">
    <a href="index.php">
      <img src="asset/Soccer-icon.png" id="logo" alt="">
    </a>
    <div id="menu">
      <div class="konten" id="menu-3">
        <a href="index.php" class="kolom_3">Home</a>
        <a href="tambah.php" class="kolom_3 kolom_3_tengah">Tambah</a>
        <?php if($login == true): ?>
            <a href="logout.php" class="kolom_3">Logout</a>
        <?php else: ?>
            <a href="login.php" class="kolom_3">Login</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
