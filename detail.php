<?php
  require_once('engine/_init.php');
  $album_id = intval($_GET['aid']);
  if(album_exist($album_id)){
    $data = album_detail_data($album_id);
    echo  $twig->load('album_detail.html.twig')->render($data);  
  }
?>