<!-- ca se empiesa a desarrollar funcionalidad en php -->
<?php
// vamos a formatear la hora en formato entendible dd/mm/aa

function formatearfecha($fecha)
{
    /*/2021-07-03 18:56:13*/
    //para formatear usamos el substring

    $dia=substr($fecha,8,2);
    $mes=substr($fecha,5,2);
    $anio=substr($fecha,0,4);
    $hora=substr($fecha,11,5);

    $fechaFormateada=$dia."/".$mes."/".$anio." ".$hora;
    return $fechaFormateada;
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

?>