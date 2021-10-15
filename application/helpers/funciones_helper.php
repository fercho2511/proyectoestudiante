<!-- ca se empiesa a desarrollar funcionalidad en php -->
<?php
// vamos a formatear la hora en formato entendible dd/mm/aa

function formatearfecha($fecha)
{
    /*/2021-07-03 18:56:13*/
    //para formatear usamos el substring
    $anio=substr($fecha,0,4);
    $mes=substr($fecha,5,2);
    $dia=substr($fecha,8,2);

    $fechaFormateada=$dia."/".$mes."/".$anio;
    return $fechaFormateada;
}
function formatearhora($time)
{
    /*/2021-07-03 18:56:13*/
    //para formatear usamos el substring
    $hora=substr($time,0,2);
    $minuto=substr($time,3,2);

    $timeFormateada=$hora.":".$minuto;
    return $timeFormateada;
}

//ESTE METODO ESTA DISPONIBLE PARA TODO EL FRAMEWORDK
function estado($nota)
{
    if ($nota >=51) {
        $estado ="APROVADO";
    }
    else
    {
        $estado="REPROVADO";
    }
}

//ACA SE PUEDE CODIFICAR FUNCIONALIDADES Q HAYUDARAN A TODO EL SISTEMA 

function listarProfe($profe) {
    
}


 


?>