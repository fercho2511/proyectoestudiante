var x = document.getElementById("cursos");
              x.style.display = "none";
 var y = document.getElementById("estudiante");
      y.style.display = "none";
 var m = document.getElementById('boton');
  m.disabled = true;
$("#general").change(function() {
    if($("#general").val() == "1"){
      $('#diagnostico1').prop('disabled', false);
    

    }if($("#general").val() == "2"){
        $('#diagnostico1').prop('disabled', false);
     
          var x = document.getElementById("cursos");
          x.style.display = "block";
      
  
    
  
      }
      if($("#general").val() == "3"){
        $('#diagnostico1').prop('disabled', false);
      
          var y = document.getElementById("estudiante");
          y.style.display = "block";
      
  
    
  
      }if($("#general").val() != "2"){
        $('#diagnostico1').prop('disabled', false);
     
        var x = document.getElementById("cursos");
        x.style.display = "none";;
      
  
    
  
      }if($("#general").val() != "3"){
        $('#diagnostico1').prop('disabled', false);
      
        var y = document.getElementById("estudiante");
        y.style.display = "none";
      
  
    
  
      }
  });
  
  $("#diagnostico1").change(function() {
    if($("#diagnostico1").val() !== "0"){
      $('#diagnostico2').prop('disabled', false);
    }else{
      $('#diagnostico2').prop('disabled', 'disabled');
      $('#diagnostico3').prop('disabled', 'disabled');
    }
});

$("#actividad").change(function() {
    if($("#actividad").val() >= "1"){
      $('#descripcion').prop('disabled', false);
      var m = document.getElementById('boton');
      m.disabled = false;
      
     

    }else{
      $('#descripcion').prop('disabled', 'disabled');
      var m = document.getElementById('boton');
      m.disabled = true;
    
    }
  });

  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

