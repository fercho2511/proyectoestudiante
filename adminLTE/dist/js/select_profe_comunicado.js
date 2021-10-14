
//  var e = document.getElementById("estudiante1");
//       e.style.display = "none";
 var b = document.getElementById('boton1');
  b.disabled = true;
  var f = document.getElementById("fecha1");
       f.style.display = "none";
  var h = document.getElementById("hora1");
       h.style.display = "none";


       
$("#general1").change(function() {
    if($("#general1").val() == "2"){
     //    var y = document.getElementById("estudiante1");
     //    y.style.display = "block";


     //    for (i=0;i<document.f1.elements.length;i++)
     //    if(document.f1.elements[i].type == "checkbox")
     //       document.f1.elements[i].checked=1
      

  
      }
      if($("#general1").val() != "2"){
      
     //    var y = document.getElementById("estudiante1");
     //    y.style.display = "none";
      }
  });
  
 

$("#actividad1").change(function() {
  if($("#actividad1").val() == "0"){
    $('#descripcion1').prop('disabled', true);

    var b = document.getElementById('boton1');
    b.disabled = true;
    var f = document.getElementById("fecha1");
         f.style.display = "none";
    var h = document.getElementById("hora1");
         h.style.display = "none";

  }if($("#actividad1").val() == "1"){

      var b = document.getElementById('boton1');
      b.disabled = false;
      var f = document.getElementById("fecha1");
           f.style.display = "block";
      var h = document.getElementById("hora1");
           h.style.display = "block";


     
    }if($("#actividad1").val() == "2"){

      var b = document.getElementById('boton1');
      b.disabled = false;
      var f = document.getElementById("fecha1");
           f.style.display = "block";
      var h = document.getElementById("hora1");
           h.style.display = "block";

    }if($("#actividad1").val() >= "1"){
        $('#descripcion1').prop('disabled', false);

       var b = document.getElementById('boton1');
      b.disabled = false;

    }if($("#actividad1").val() > "2"){
      var f = document.getElementById("fecha1");
         f.style.display = "none";
    var h = document.getElementById("hora1");
         h.style.display = "none";
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

// para seleccionar los checbox
// function seleccionar_todo(){
//      for (i=0;i<document.f1.elements.length;i++)
//         if(document.f1.elements[i].type == "checkbox")
//            document.f1.elements[i].checked=1
//   }

//   function deseleccionar_todo(){
//      for (i=0;i<document.f1.elements.length;i++)
//         if(document.f1.elements[i].type == "checkbox")
//            document.f1.elements[i].checked=0
//   }



  $("#selectall").on("click", function() {
     $(".case").prop("checked", this.checked);
   });
   
   // if all checkbox are selected, check the selectall checkbox and viceversa
   $(".case").on("click", function() {
     if ($(".case").length == $(".case:checked").length) {
       $("#selectall").prop("checked", true);
       
     } else {
       $("#selectall").prop("checked", false);
     }
   });



//    para escoher lso seleccionados


$(document).ready(function() {

  $('[name="estudiante[]"]').click(function() {
      
    var arr = $('[name="estudiante[]"]:checked').map(function(){
      return this.value;
    }).get();
    
    var str = arr.join(',');
    
    $('#arr').text(JSON.stringify(arr));
    
    $('#str').text(str);
  
  });

});