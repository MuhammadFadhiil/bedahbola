<?php

function cek_data($nama, $pass) {
 $nama = escape($nama);
 $pass = escape($pass);

 $query = "SELECT * FROM users WHERE username='$nama' AND password='$pass'";
 global $link;

 if($result= mysqli_query($link, $query)){
   if(mysqli_num_rows($result) != 0) return true;
   else return false;
 }
}
?>
