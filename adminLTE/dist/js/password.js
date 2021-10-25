        var b = document.getElementById('boton3');
        b.disabled = true;
 

    


    $(document).on('keyup','#password1, #password2',function(){
      var foo = $('#password1').val().trim();
      var bar = $('#password2').val().trim();
      if( !password1 || !password2 || password1 == '' || password2 == '' ){
        $('#poo').removeClass('text-success').addClass('text-danger').text('Las contraseñas no coinciden');
        var b = document.getElementById('boton3');
         b.disabled = true;
      }
      
      else{
        if( foo !== bar ){
          $('#poo').removeClass('text-success').addClass('text-danger').text('Las contraseñas no coinciden');
          var b = document.getElementById('boton3');
         b.disabled = true;
        }
        
        else{
        $('#poo').removeClass('text-danger').addClass('text-success').text('Las contraseñas si coinciden');
        var b = document.getElementById('boton3');
         b.disabled = false;
        }
      }
    });
  