
//  var boleta = document.getElementById('boletin');
//  boleta.disabled=true;
//  var habil = null;

// function sub(){
//   habil = document.getElementsByName("desabilitado").value;
//   if (habil==1) {
//         var boleta = document.getElementById('boletin');
//         boleta.disabled=false;
//  }
//  else {
//         var boleta = document.getElementById('boletin');
//         boleta.disabled=true;
//  }
// };



const boton = document.querySelector("#habil");
// Agregar listener
boton.addEventListener("click", function(evento){
	// Aquí todo el código que se ejecuta cuando se da click al botón
	habil = document.getElementsByName("desabilitado").value;
  if (habil==1) {
        var boleta = document.getElementById('boletin');
        boleta.disabled=false;
 }
 else {
        var boleta = document.getElementById('boletin');
        boleta.disabled=true;
 }
});


const boton2 = document.querySelector("#desabil");

boton2.addEventListener("click", function(evento){
	// Aquí todo el código que se ejecuta cuando se da click al botón
	habil = document.getElementsByName("desabilitado").value;
  if (habil==1) {
        var boleta = document.getElementById('boletin');
        boleta.disabled=false;
 }
 else {
        var boleta = document.getElementById('boletin');
        boleta.disabled=true;
 }
});



// var a = document.getElementsByName("nota1[]");
// a.forEach(element => (element).disabled=true);
// var b = document.getElementsByName("bt1[]");
// b.forEach(element => (element).disabled=true);


// var x = document.getElementsByName("nota2[]");
// x.forEach(element => (element).disabled=true);
// var z = document.getElementsByName("bt2[]");
// z.forEach(element => (element).disabled=true);

// var y = document.getElementsByName("nota3[]");
// y.forEach(element => (element).disabled=true);
// var m = document.getElementsByName("bt3[]");
// m.forEach(element => (element).disabled=true);

// var button = document.getElementById("regNotas");
// button.disabled=true;




   
      
      
//  var bimestre = document.getElementsByName("bim1[]");
//  var estado = document.getElementsByName("est[]"); 

//  for (let index = 0; index < 3; index++) {
//          const element = bimestre[index];
//          const element2 = estado[index];
//          if ($("element").val()=="1-Bimestre" && $("element2").val()==1 ) {
//                 var a = document.getElementsByName("nota1[]");
//                 a.forEach(element => (element).disabled=false);
//                 var b = document.getElementsByName("bt1[]");
//                 b.forEach(element => (element).disabled=false);
//                 var boto = document.getElementsByName("regNotas");
//                 boto.disabled=false;
                 
//          }else{
//                 var a = document.getElementsByName("nota1[]");
//                 a.forEach(element => (element).disabled=true);
//                 var b = document.getElementsByName("bt3[]");
//                 b.forEach(element => (element).disabled=true);  
//         }
         
//  }
// var x = getElementById("1-Bimestre").val();
// let bin1 = document.getElementById("1-Bimestre").value;
// let bin2 = document.getElementById("2-Bimestre").value;
// let bin3 = document.getElementById("3-Bimestre").value;

// let est1 = document.getElementById("5").value;
// let est1 = document.getElementById("6").value;
// let est1 = document.getElementById("7").value;

       
$("#1-Bimestre").change(function() {
        if($("#1-Bimestre").val() == "1"){
                var a = document.getElementsByName("nota1[]");
                a.forEach(element => (element).disabled=false);
                var b = document.getElementsByName("bt1[]");
                b.forEach(element => (element).disabled=false);
                var boto = document.getElementsByName("regNotas");
                boto.disabled=false; 
          
    
      
          }
          if($("#1-Bimestre").val() == "0"){
          
                var a = document.getElementsByName("nota1[]");
                                a.forEach(element => (element).disabled=true);
                                var b = document.getElementsByName("bt1[]");
                                b.forEach(element => (element).disabled=true);
                                var boto = document.getElementsByName("regNotas");
                                boto.disabled=true; 
          }
      });

// $("#habil").click(function() {
//          if($("#1-Bimestre").val() == "1-Bimestre" && $("#5").val() == "1" ){
      
//                 var a = document.getElementsByName("nota1[]");
//                 a.forEach(element => (element).disabled=false);
//                 var b = document.getElementsByName("bt1[]");
//                 b.forEach(element => (element).disabled=false);
//                 var boto = document.getElementsByName("regNotas");
//                 boto.disabled=false; 
      
//         }
// });


 
 
//  if( document.getElementById("1-Bimestre").value == "1-Bimestre" && document.getElementById("5").value == "1"){
        
//                 var a = document.getElementsByName("nota1[]");
//                 a.forEach(element => (element).disabled=false);
//                 var b = document.getElementsByName("bt1[]");
//                 b.forEach(element => (element).disabled=false);
//                 var boto = document.getElementsByName("regNotas");
//                 boto.disabled=false; 
// }
// else{
//         if(  document.getElementById("1-Bimestre").value == "1-Bimestre" && document.getElementById("5").value == "0"){
        
//                 var a = document.getElementsByName("nota1[]");
//                 a.forEach(element => (element).disabled=true);
//                 var b = document.getElementsByName("bt1[]");
//                 b.forEach(element => (element).disabled=true);
//                 var boto = document.getElementsByName("regNotas");
//                 boto.disabled=true; 
// }
                 
// }


// function PasarValor()
// {
//         var a = document.getElementsByName("nota1[]");
//         var b = document.getElementsByName("nota1.1[]");

//         a.forEach(element => (element).value = b.value);
// // document.getElementsByName("nota1[]").value = document.getElemengetElementsByNametById("nota1.1[]").value;
// }
// var a = document.getElementsByName("nota1[]");
// var cant = a.length;
// var b = document.getElementsByName("nota1.1[]");
// for (let i = 0; i <cant; i++) {
//         b[i].value=a[i].value;
//     }


//     $(document).ready(function () {
//         for (let i = 0; i <cant; i++) {
//                 a[i].keyup(function () {
//                         var value = $(this).val();
//                         b[i].val(value);
//                     });
//             }
       
var a = document.getElementsByName("nota1[]");
var cant = a.length;
var b = document.getElementsByName("nota1.1[]");
for (let i = 0; i <cant; i++) {
       
                
        b[i].value=a[i].value;
                        
        
        
} 
// var a = document.getElementsByName("nota1[]");
// var cant = a.length;
// for (let i = 0; i <cant; i++) {
//         $(document).on('keyup','#nota1[i], #nota1.1[i]',function(){
                
        
//                         $('#nota1[i]').val().trim();
//                         $('#nota1.1[i]').val().trim(); 
                
        
                
//         });
// }
//  var a = document.getElementsByName("nota1[]");
// a.forEach(element => (element).addEventListener('keyup', autoCompleteNew))
// function autoCompleteNew(e) {            
//         var value = $(this).val();         
//         $("#nota1.1[]").val(value.replace(/\s/g, '').toLowerCase()); 
// }



// var x = document.getElementsByName("nota2[]");
// x.forEach(element => (element).addEventListener('keyup', autoCompleteNew));
// function autoCompleteNew(e) {            
//     var value = $(this).val();         
//     $("#nota2.1[]").val(value.replace(/\s/g, '').toLowerCase()); 
// }


// var y = document.getElementsByName("nota3[]");
// y.forEach(element => (element).addEventListener('keyup', autoCompleteNew));
// function autoCompleteNew(e) {            
//     var value = $(this).val();         
//     $("#nota3.1[]").val(value.replace(/\s/g, '').toLowerCase()); 
// }


