<?php
require_once "core/init.php";

if($_SESSION['user']){
  header('Location: index.php');
}else{

$error = '';

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $pass = $_POST['password'];

  if(!empty($nama) && !empty($pass)){

    if(cek_data($nama, $pass)){
      $_SESSION['user'] = $nama;
      header('Location: index.php');
    }else {
      $error = 'ada masalah saat login';
    }

  }else {
    $error = 'username dan password wajib diisi';
  }
}

require_once "view/header.php";

 ?>

<div id="login">
  <form action="" method="post">
    <label for="nama"> username </label><br>
    <input type="text" name="nama" value=""><br><br>

    <label for="password"> password </label><br>
    <input type="password" name="password" value=""><br><br>

    <div id="error"><?=$error; ?><br><br>

    <input type="submit" name="submit" value="submit">
  </form>
</div>

 <?php
 require_once "view/footer.php"
  ?>

<?php } ?>
