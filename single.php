<?php
require_once "core/init.php";


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

require_once "view/header.php";

 ?>

 <p id="judul_single">
   <?= $judul_awal; ?>
 </p>

<p id="isi_single">
  <?= $konten_awal; ?>
</p>

<p id="tag_single">
  <?= $tag_awal; ?>
</p>

 <?php
 require_once "view/footer.php"
  ?>
