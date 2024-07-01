$(document).ready( function () {
  $('#patient_list').DataTable({
    dom: 'flBrtip',
    buttons: [
      {
        extend: 'print',
        text: '<i class="fa fa-print"></i> друкувати',
        titleAttr: 'Print',
        exportOptions: { stripHtml: false, columns: [ 0, 1, 2, 3, 4, 5, 6, 7] } ,
        autoPrint: true,
        title: '',
        customize: function ( win ) {
          $(win.document.body) .css( 'font-size', '10pt' )
          $(win.document.body).find( '.genre_tag' ) .addClass( 'genre_tag_printable' )
         }       
      },
      {
        text: '<i class="fas fa-user-plus"></i> новий рекорд</div>',
        titleAttr: 'New Record',
        title: '',
        action: function ( win ) {
          window.location = 'edit.php';
         }       
      }     
    ],
    bAutoWidth: false, 
    pageLength: 25,
    order: [[ 2, "asc" ]],
    columnDefs: [ { targets: ["tags"], orderable: false } ],
  });

  $( "#popup_overlay" ).click(function() {
    popup_hide();
  }); 

  $( "#popup_close" ).click(function() {
    popup_hide();
  });

  $( "#patient_list tbody tr" ).click(function() {
    popup_show($(this).data('patient_id'));
  });    
});

function popup_show(patient_id){
  $("#popup").show();
  loader('show');
  history.pushState(null, null, '?pid='+patient_id);
  $.ajax({
    method: 'GET',
    url: 'detail.php',
    async: true,
    data: { pid: patient_id}
  })
  .done(function( response ) {
    $('#popup_content').html( response );
    loader('hide');
  }); 
}

function popup_hide(){
  $("#popup").hide();
  loader('show');
  history.pushState(null, null, '?pid=');
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
