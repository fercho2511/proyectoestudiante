
//  var e = document.getElementById("estudiante1");
//       e.style.display = "none";
// var b = document.getElementById('boton1');
// b.disabled = true;
// var f = document.getElementById("fecha2");
//      f.style.display = "none";
// var h = document.getElementById("hora2");
//      h.style.display = "none";

//var tipo=document.getElementById("actividad2");


$("#actividad2").ready(function(){

    if( $("#actividad2").val() == "Actividades Curriculares" || $("#actividad2").val() == 'Reuniones'){
           
        // var b = document.getElementById('boton2');
        // b.disabled = false;
        var f = document.getElementById("fecha2");
             f.style.display = "block";
        var h = document.getElementById("hora2");
             h.style.display = "block";
    
    
       
      }else{
          var f = document.getElementById("fecha2");
            f.style.display = "none";
            var h = document.getElementById("hora2");
            h.style.display = "none";

      }
    
 });


            



// $("#actividad2").change(function() {

// if($("#actividad2").val() == "1"){

//     // var b = document.getElementById('boton2');
//     // b.disabled = false;
//     var f = document.getElementById("fecha2");
//          f.style.display = "block";
//     var h = document.getElementById("hora2");
//          h.style.display = "block";


   
//   }if($("#actividad2").val() == "2"){

//     // var b = document.getElementById('boton2');
//     // b.disabled = false;
//     var f = document.getElementById("fecha2");
//          f.style.display = "block";
//     var h = document.getElementById("hora2");
//          h.style.display = "block";

//   }
// //   if($("#actividad2").val() >= "1"){
// //       $('#descripcion2').prop('disabled', false);

//     //  var b = document.getElementById('boton2');
//     // b.disabled = false;

// //   }
//   if($("#actividad2").val() > "2"){
//     var f = document.getElementById("fecha2");
//        f.style.display = "none";
//   var h = document.getElementById("hora2");
//        h.style.display = "none";
//   }
// });

// function myFunction() {
//   var x = document.getElementById("myDIV");
//   if (x.style.display === "none") {
//       x.style.display = "block";
//   } else {
//       x.style.display = "none";
//   }
// }

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



// $("#selectall1").on("click", function() {
//    $(".case").prop("checked", this.checked);
//  });
 
//  // if all checkbox are selected, check the selectall checkbox and viceversa
//  $(".case").on("click", function() {
//    if ($(".case").length == $(".case:checked").length) {
//      $("#selectall").prop("checked", true);
     
//    } else {
//      $("#selectall").prop("checked", false);
//    }
//  });



//    para escoher lso seleccionados


// $(document).ready(function() {

// $('[name="estudiante[]"]').click(function() {
    
//   var arr = $('[name="estudiante[]"]:checked').map(function(){
//     return this.value;
//   }).get();
  
//   var str = arr.join(',');
  
//   $('#arr').text(JSON.stringify(arr));
  
//   $('#str').text(str);

// });

// });
