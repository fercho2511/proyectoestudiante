var x = document.getElementById("cursos");
              x.style.display = "none";

$("#general").change(function() {
    if($("#general").val() == "1"){
      $('#diagnostico1').prop('disabled', false);
    //   $(".pais").toggle();
    //   $('td:nth-child(3)').toggle();
    
        // var x = document.getElementById("cursos");
        // if (x.style.display === "none") {
        //     x.style.display = "block";
     
    

  

    }if($("#general").val() == "2"){
        $('#diagnostico1').prop('disabled', false);
      //   $(".pais").toggle();
      //   $('td:nth-child(3)').toggle();
      
          // var x = document.getElementById("cursos");
          // if (x.style.display === "none") {
          //     x.style.display = "block";
          // } 
          var x = document.getElementById("cursos");
          x.style.display = "block";
      
  
    
  
      }else{
        $('#diagnostico1').prop('disabled', 'disabled');
        $('#diagnostico2').prop('disabled', 'disabled');
        $('#diagnostico3').prop('disabled', 'disabled');
        var x = document.getElementById("cursos");
              x.style.display = "none";
  
          
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
     ;

    }else{
      $('#descripcion').prop('disabled', 'disabled');
    
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