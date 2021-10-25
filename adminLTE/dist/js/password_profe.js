var b = document.getElementById('botonn');
b.disabled = true;

$(document).on('keyup','#password1_1, #password2_2',function(){
    var foo = $('#password1_1').val().trim();
    var bar = $('#password2_2').val().trim();
    if( !password1_1 || !password2_2 || password1_1 == '' || password2_2 == '' ){
      $('#poo2').removeClass('text-success').addClass('text-danger').text('Las contraseñas no coinciden');
      var b = document.getElementById('botonn');
       b.disabled = true;
    }
    
    else{
      if( foo !== bar ){
        $('#poo2').removeClass('text-success').addClass('text-danger').text('Las contraseñas no coinciden');
        var b = document.getElementById('botonn');
       b.disabled = true;
      }
      
      else{
      $('#poo2').removeClass('text-danger').addClass('text-success').text('Las contraseñas si coinciden');
      var b = document.getElementById('botonn');
       b.disabled = false;
      }
    }
  });
