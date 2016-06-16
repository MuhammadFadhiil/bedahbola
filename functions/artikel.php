<?php

function tampilkan(){
  global $link;

  $query  = "SELECT * FROM artikel";
  $result =mysqli_query($link, $query) or die('gagal menampilkan data');

  return $result;
}

function tampilkan_per_id($id){
  global $link;

  $query  = "SELECT * FROM artikel WHERE id=$id";
  $result =mysqli_query($link, $query) or die('gagal menampilkan data');

  return $result;
}

function tambah_data($judul, $konten, $tag){
  $judul = escape($judul);
  $konten = escape($konten);

  $query = "INSERT INTO artikel (judul, isi, tag) VALUES ('$judul', '$konten', '$tag')";
  return run($query);
}

function edit_data($judul, $konten, $tag, $id){
  $query = "UPDATE artikel SET judul='$judul', isi='$konten', tag='$tag'
            WHERE id=$id";
  return run($query);
}

function hapus_data($id){
  $query = "DELETE FROM artikel WHERE id=$id";
  return run($query);
}

function run($query){
  global $link;

  if (mysqli_query($link, $query)) return true;
  else return false;
}

function excerpt($string){
  $string = substr($string, 0, 200);
  return $string . "......";
}

function escape($data){
  global $link;
  return mysqli_real_escape_string($link, $data);
}
 ?>
