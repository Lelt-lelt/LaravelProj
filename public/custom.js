$('#modal1').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
});

$('#modal6').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
});

$('#modal4').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
});

$(document).ready(function(){
    $(function(){
  $('.seat').on('click',function(){ 

    
    if($(this).hasClass( "selected" )){
      $( this ).removeClass( "selected" );                  
    }else{                   
      $( this ).addClass( "selected" );
    }

  });

  $('.seat').mouseenter(function(){     
    $( this ).addClass( "hovering" );

    $('.seat').mouseleave(function(){ 
     $( this ).removeClass( "hovering" );

     
   });
  });


});

});