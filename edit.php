<?php
require_once "core/init.php";

if(!$_SESSION['user']){
  header('Location: login.php');
}

$error = '';
$id    = $_GET['id'];

if (isset($_GET['id'])){
  $article = tampilkan_per_id($id);
  while($row = mysqli_fetch_assoc($article)){
    $judul_awal  = $row['judul'];
    $konten_awal = $row['isi'];
    $tag_awal    = $row['tag'];
  }
}

if (isset($_POST['submit'])){
  $judul = $_POST['judul'];
  $konten = $_POST['konten'];
  $tag = $_POST['tag'];

  if(!empty($judul) && !empty($konten)){

    if(edit_data($judul, $konten, $tag, $id)){
      header('Location: bola.php');
    }else {
      $error = 'ada masalah saat update data';
    }

  }else {
    $error = 'judul dan konten wajib diisi';
  }
}

require_once "view/header.php";

 ?>


<form action="" method="post">
  <label for="judul"> Judul </label><br>
  <input type="text" name="judul" value="<?= $judul_awal; ?>"><br><br>

  <label for="konten"> Isi </label><br>
  <textarea name="konten" rows="8" cols="40"> <?= $konten_awal; ?> </textarea><br><br>

  <label for="tag"> Tag </label><br>
  <input type="text" name="tag" value="<?= $tag_awal; ?>"><br><br>

  <div id="error"><?php echo $error; ?><br><br>

  <input type="submit" name="submit" value="submit">
</form>

 <?php
 require_once "view/footer.php"
  ?>
