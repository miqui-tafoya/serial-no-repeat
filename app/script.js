$(document).on('submit','#dataSend', function(event){
  event.preventDefault();
  $.ajax({
    url:'app/control.php',
    method:"POST",
    data:$(this).serialize(),
    dataType:"json",
    beforeSend:function(){$('#boton').attr('disabled','disabled');},
    success:function(data){
      $('#boton').attr('disabled', false);
      if(data.success){
        $('#elementos').text(data.array);
        $('#error').text('');
      } else {
        $('#error').text(data.errors);
        $('#elementos').text('');
        console.log(data.errors);
      }
    }
  })
});
