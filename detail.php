<?php
  require_once('engine/_init.php');
  $patient_id = intval($_GET['pid']);
  if(patient_exist($patient_id)){
    $data = patient_detail_data($patient_id);
    echo  $twig->load('patient_detail.html.twig')->render($data);  
  }
?>