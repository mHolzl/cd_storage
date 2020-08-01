$(document).ready( function () {
  $('#album_list').DataTable({
    dom: 'flBrtip',
    buttons: [
      {
        extend: 'print',
        text: '<i class="fa fa-print"></i> Print</div>',
        titleAttr: 'Print',
        exportOptions: { stripHtml: false, columns: [ 1, 2, 3, 4, 5, 6] } ,
        autoPrint: true,
        title: '',
        customize: function ( win ) {
          $(win.document.body) .css( 'font-size', '10pt' )
          $(win.document.body).find( '.genre_tag' ) .addClass( 'genre_tag_printable' )
         }       
      }      
    ],
    bAutoWidth: false, 
    pageLength: 25,
    order: [[ 2, "asc" ]],
    columnDefs: [ { targets: ["img"], orderable: false } ]
  });

  $( "#popup_overlay" ).click(function() {
    popup_hide();
  }); 

  $( "#popup_close" ).click(function() {
    popup_hide();
  });

  $( "#album_list tbody tr" ).click(function() {
    popup_show($(this).data('album_id'));
  });    
});

function popup_show(album_id){
  $("#popup").show();
  loader('show');
  history.pushState(null, null, '?aid='+album_id);
  $.ajax({
    method: 'GET',
    url: 'detail.php',
    async: true,
    data: { aid: album_id}
  })
  .done(function( response ) {
    $('#popup_content').html( response );
    loader('hide');
  }); 
}

function popup_hide(){
  $("#popup").hide();
  loader('show');
  history.pushState(null, null, '?aid=');
  $('#popup_content').html('');
}

function loader(mode){
  if(mode == 'show'){
    $("#popup_loader").show();
    $("#popup_content").hide();
  } else {
    $("#popup_loader").hide();
    $("#popup_content").show();  
  }
}
