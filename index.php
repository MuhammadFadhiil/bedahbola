<?php
require_once "core/init.php";

?>

<head>
  <title> BedahBola </title>
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <script>
    function toggleMenu() {
      var menu = document.getElementById('menu-3');
      menu.classList.toggle('menu-open');
    }
  </script>

</head>

<body>
  <div id="pertama">

    <div id="header">
      <img src="asset/Soccer-icon.png" id="logo" alt="">
      <div id="menu">
        <img src="asset/1.jpg" id="nav-icon" alt="" onclick="toggleMenu();">
        <div id="menu-text" onclick="toggleMenu();">Menu</div>
        <div class="konten" id="menu-3">
            <a href="#kedua" class="kolom_3" onclick="return smoothScroll('kedua')">Artikel</a>
            <a href="login.php" class="kolom_3 kolom_3_tengah">Login</a>
            <a href="#ketiga" class="kolom_3" onclick="return smoothScroll('ketiga')">Kontak</a>
        </div>
      </div>
    </div>

    <div class="clear"></div>

    <div class="konten">

      <div id="SD">
        <h1>Lo ngaku paling ngerti sepakbola? <br> Mau bikin analisa lo sendiri? <br> Disini tempatnya!! </h1>
        <a href="#kedua" onclick="return smoothScroll('kedua')"> Artikel </a>
      </div>

    </div>
  </div>

  <div id="kedua">
    <div class="konten">
      <h2> PILIHAN ARTIKEL </h2>

      <div class="kolom_3">
        <a href="bola.php">
          <div class="gambar_artikel">
            <img src="asset/bola1.jpg" alt="" />
            <p> Sepak Bola </p>
          </div>
        </a>
      </div>

      <div class="kolom_3 kolom_3_tengah">
        <a href="futsal.php">
          <div class="gambar_artikel">
            <img src="asset/futsal.jpg" alt="" />
            <p> Futsal </p>
          </div>
        </a>
      </div>

      <div class="kolom_3">
        <a href="setiap_artikel.html">
          <div class="gambar_artikel">
            <img src="asset/bola.jpg" alt="" />
            <p> Analisa Pertandingan </p>
          </div>
        </a>
      </div>

      <div class="clear"></div>
    </div>
  </div>

  <div id="ketiga">
    <div class="konten">
      <h2> Kontak Kami </h2>

      <div class="kolom_2">
        <form action="" novalidate onsubmit="return validasi(this)">
          <input type="text" name="nama" placeholder="Nama">
          <input type="email" name="email" placeholder="Email">
          <textarea name="pesan" placeholder="Kritik & Saran" rows="8" cols="40"></textarea>
          <input type="submit" name="submit" placeholder="Kirim">
        </form>
      </div>

      <div class="kolom_2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d253840.478949799!2d106.829518!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1460786524864" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

        <div class="clear"></div>
    </div>
  </div>

  <div id="footer">
    <p> &copy; BedahBola 2016 </p>
  </div>

<script src="bedahbola.js"> </script>

</body>
