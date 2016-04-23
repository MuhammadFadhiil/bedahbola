<?php

function tampilkan_f(){
  global $link;

  $query  = "SELECT * FROM artikel_futsal";
  $result =mysqli_query($link, $query) or die('gagal menampilkan data');

  return $result;
}

function tampilkan_per_id_f($id){
  global $link;

  $query  = "SELECT * FROM artikel_futsal WHERE id=$id";
  $result =mysqli_query($link, $query) or die('gagal menampilkan data');

  return $result;
}

function tambah_data_f($judul, $konten, $tag){
  $judul = escape($judul);
  $konten = escape($konten);

  $query = "INSERT INTO artikel_futsal (judul, isi, tag) VALUES ('$judul', '$konten', '$tag')";
  return run($query);
}

function edit_data_f($judul, $konten, $tag, $id){
  $query = "UPDATE artikel_futsal SET judul='$judul', isi='$konten', tag='$tag'
            WHERE id=$id";
  return run($query);
}

function hapus_data_f($id){
  $query = "DELETE FROM artikel_futsal WHERE id=$id";
  return run($query);
}

function run_f($query){
  global $link;

  if (mysqli_query($link, $query)) return true;
  else return false;
}

function excerpt_f($string){
  $string = substr($string, 0, 20);
  return $string . "......";
}

function escape_f($data){
  global $link;
  return mysqli_real_escape_string($link, $data);
}
 ?>
