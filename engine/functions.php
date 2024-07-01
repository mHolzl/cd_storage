<?php
  /*** checks if record exists in DB ***/
  function patient_exist($patient_id) {
    return dibi::fetch('SELECT 1 FROM patient WHERE patient.id = %i', $patient_id);
  }

  
  /*** returns list of albums ***/ 
  function patient_list(){
    $sql = [
      'SELECT patient.id patient_id, patient.identification, patient.firstname, patient.surname, patient.age, patient.gender, patient.bloodtype, patient.ranking
         FROM patient
     ORDER BY surname',
    ];  
    return dibi::fetchAll($sql);
  }


  /*** returns basic album info by album_id ***/ 
  function patient_by_id($patient_id){
    $sql = [
      'SELECT *
         FROM patient
        WHERE patient.id = %i',
      $patient_id,
    ];
    return dibi::fetch($sql);
  }


  /*** returns album genres by album_id ***/  
  function patient_tags($patient_id){
    $sql = [
      'SELECT t.name, t.name_ua, t.fa_icon, t.css_class, t.reputation_weight FROM patient_tag pt JOIN tag t ON t.id = pt.tag_id WHERE pt.patient_id = %i ORDER BY name',
      $patient_id
    ];
    return dibi::fetchAll($sql);
  }




  /*** returns all $data required for album detail rendering ***/
  function patient_detail_data($patient_id){
    $data['patient_detail'] = patient_by_id($patient_id);
    $data['patient_detail']['tags'] = patient_tags($patient_id);
    return $data;
  }


  /*** returns all $data required for album list rendering ***/
  function patient_list_data(){
    $data['patient_list'] = patient_list();
    foreach ($data['patient_list'] as $key=>$value){
      $data['patient_list'][$key]['tags'] = patient_tags($data['patient_list'][$key]['patient_id']);
    }
    return $data;
  }

?>