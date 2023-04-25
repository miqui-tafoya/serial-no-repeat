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
        $('#elementos').text('');
        $.each(data.array, function(index, value){
          $("#elementos").append(index + " ----> " + value + '<br>');
        });
        $('#error').text('');
      } else {
        $('#error').text(data.errors);
        $('#elementos').text('');
      }
    }
  })
});
