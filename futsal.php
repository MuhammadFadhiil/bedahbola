<?php
require_once "core/init.php";


$login = false;
if($_SESSION['user']){
  $login = true;
}

$articles = tampilkan_f();

require_once "view/header.php";

 ?>

<?php while($row = mysqli_fetch_assoc($articles)):?>


    <script>
      function toggleMenu() {
        var menu = document.getElementById('menu-3');
        menu.classList.toggle('menu-open');
      }
    </script>

<div class="each_article">
  <h3><a href="single.php?id=<?= $row['id']; ?>"><?= $row['judul']; ?> </a></h3>
  <p>
    <?php echo excerpt($row['isi']); ?>
  </p>
  <p class="waktu"> <?php echo $row['waktu']; ?>  </p>
  <p class="tag"> Tag: <?php echo $row['tag']; ?> </p>

  <?php if($login == true):  ?>
    <a href="edit.php?id=<?= $row['id']; ?>"> Edit </a>
    <a href="delete.php?id=<?= $row['id']; ?>"> Hapus </a>
  <?php endif; ?>
</div>
    <script src="bedahbola.js"> </script>
<?php endwhile; ?>

 <?php
  require_once "view/footer.php"
 ?>
