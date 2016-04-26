<?php

function register_user($nama, $pass){
  $nama = escape($nama);
  $pass = escape($pass);
  //hash
  $pass = md5($pass);

  $query = "INSERT INTO users (username, password, status) VALUES ('$nama', '$pass', 1)";
  return run($query);
}

function cek_data($nama, $pass) {
 $nama = escape($nama);
 $pass = escape($pass);
 $pass = md5($pass);
 
 $query = "SELECT * FROM users WHERE username='$nama' AND password='$pass'";
 global $link;

 if($result= mysqli_query($link, $query)){
   if(mysqli_num_rows($result) != 0) return true;
   else return false;
 }
}
?>
