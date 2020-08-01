<?php
  /*** checks if album exists in DB ***/
  function album_exist($album_id) {
    return dibi::fetch('SELECT 1 FROM album WHERE album.id = %i', $album_id);
  }

  
  /*** returns list of albums ***/ 
  function album_list(){
    $sql = [
      'SELECT artist.name artist_name, album.id album_id, album.name album_name, released, price, ranking
         FROM album
    LEFT JOIN artist ON artist.id = album.artist_id
     ORDER BY artist_name',
    ];  
    return dibi::fetchAll($sql);
  }


  /*** returns basic album info by album_id ***/ 
  function album_by_id($album_id){
    $sql = [
      'SELECT artist.name artist_name, album.artist_id artist_id, album.id album_id, album.name album_name, released, price, ranking
         FROM album
    LEFT JOIN artist ON artist.id = album.artist_id
        WHERE album.id = %i',
      $album_id,
    ];
    return dibi::fetch($sql);
  }


  /*** returns album genres by album_id ***/  
  function album_genres($album_id){
    $sql = [
      'SELECT g.name FROM album_genre ga JOIN genre g ON g.id = ga.genre_id WHERE ga.album_id = %i ORDER BY name',
      $album_id
    ];
    return dibi::fetchAll($sql);
  }


  /*** returns album tracks by album_id ***/
  function album_tracklist($album_id){
    $sql = [
      'SELECT artist.name artist_name, track.artist_id, track.name track_name, duration, `order`
         FROM track
    LEFT JOIN artist ON artist.id = track.artist_id
        WHERE track.album_id = %i
     ORDER BY `order` ASC',
      $album_id,
    ];
    return dibi::fetchAll($sql);
  }


  /*** returns all $data required for album detail rendering ***/
  function album_detail_data($album_id){
    $data['album_detail'] = album_by_id($album_id);
    $data['album_detail']['genres'] = album_genres($album_id);
    $data['album_detail']['tracklist'] = album_tracklist($album_id);
    return $data;
  }


  /*** returns all $data required for album list rendering ***/
  function album_list_data(){
    $data['albums_list'] = album_list();
    foreach ($data['albums_list'] as $key=>$value){
      $data['albums_list'][$key]['genres'] = album_genres($data['albums_list'][$key]['album_id']);
    }
    return $data;
  }

?>