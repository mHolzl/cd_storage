<?php
  require_once('engine/_init.php');

  $data = album_list_data();

  if(isset($_GET['aid'])){
    $album_detail_id = intval($_GET['aid']);
    if(album_exist($album_detail_id)){
      $data_detail = album_detail_data($album_detail_id); 
      $data = array_merge($data, $data_detail);
    }
  }
  echo  $twig->load('album_list_xhtml.html.twig')->render($data);
?>