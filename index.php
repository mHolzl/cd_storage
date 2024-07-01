<?php
  require_once('engine/_init.php');

  $data = patient_list_data();
//var_dump($data);
  if(isset($_GET['pid'])){
    $patient_detail_id = intval($_GET['pid']);
    if(patient_exist($patient_detail_id)){
      $data_detail = patient_detail_data($patient_detail_id); 
      $data = array_merge($data, $data_detail);
    }
  }
  echo  $twig->load('patient_list_xhtml.html.twig')->render($data);
?>