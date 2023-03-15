<?php
$dolarToday = file_get_contents('https://dolarhoje.com/');

function dolarNow()
{
    $dolarToday = file_get_contents('https://dolarhoje.com/');

    $table = substr(
        $dolarToday,
        strpos($dolarToday, '<table class="conversao">'),
        strpos($dolarToday, '</table>') + 8 - strpos($dolarToday, '<table class="conversao">')
    );

    //var_dump($table);
    $body = explode(
        '</a></td> <td>',
        str_replace(
            ["    ", "   ", "   "],
            ' ',
            mb_strcut($table, strpos($table,'<tbody>'),
            strpos($table,'</tbody>') + 8 - strpos($table, '<tbody>'))
            
        )
    );


    $body = array_map('strip_tags', $body);
    $body = array_map('trim', $body);

    $bodyString = implode(" - ", $body);
    $stringToArr = explode("   ", $bodyString);

    foreach ($stringToArr as $key => $value) {
        $cityValue  = explode(" - ", $value);
        
        $cotationNow [] = [
            "city" => $cityValue[0],
            "cotation" => str_replace(['R$', '', ','], ['', '', '.'], $cityValue[1])
        ];
    }



    return $cotationNow;
}

function AjaxErro(
    $ErrMsg,
    $ErrNo = null
) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? 'trigger_info' : 
    ($ErrNo == E_USER_WARNING ? 'trigger_alert' : 
     ($ErrNo == E_USER_ERROR ? 'trigger-error' : 'trigger_sucess') ));
};


function CalcTime($days) 
{
    $resultado = [
        "anos" => 0,
        "meses" => 0,
        "dias" => 0
    ];
   // for ($i=0; $i < $count; $i++) { 
        
       $resultado["anos"] =  round($days/365) ;
       $resultado["meses"] = round(($days-$resultado["anos"]*365)/30)  ;
       $resultado["dias"] = round(($days-$resultado["anos"]*365)-$resultado["meses"]*30);

       
       
   // }
   return  $resultado;
}

function ex12($salario) {
    $resultado = [
        "salarioI" => 0.00,
        "salarioA" => 0.00,
        "salarioF" => 0.00
    ];
    
    $salario = (float)$salario;
    $resultado["salarioI"] = $salario;
    $resultado["salarioA"] = (float)$salario*1.15;   //number_format($salario*1.15,3,',','.');
    $resultado["salarioF"] = $resultado["salarioA"]-($resultado["salarioA"]*0.08);
    //var_dump($resultado);

    return $resultado;
}

function ex13($numero) {

    $resultado = [
        "centena" => 0,
        "dezena" => 0,
        "unidade" => 0
    ];

    if(strlen($numero)>3 && $numero < 1) {
        return 'Número maior do que 3 algoritimos';
    }  

    if($numero >= 100) {
        $resultado['centena'] = round($numero/100);
    }

    if($numero >= 10) {
        $resultado['dezena'] = round(($numero-$resultado['centena']*100)/10-1);
    }

    if($numero > 0) {

        $resultado['unidade'] = round(($numero-$resultado['centena']*100)-$resultado['dezena']*10);
    }

    return $resultado;
}

function ex14($raio) {

    $resultado = 3.14*($raio*$raio);


    return $resultado;
};

function ex15($conta) {

    $resultado = [
        "Carlos" => 0.00,
        "Andre" => 0.00,
        "Felipe" => 0.00
    ];

    $divisao = $conta/3;
    if(!is_float($divisao)) {

        $resultado['Carlos'] = $divisao;
        $resultado['Andre'] = $divisao;
        $resultado['Felipe'] = $divisao;

        return $resultado;
      
    }

    if(is_float($divisao)) {

        for ($i=0; $i < $divisao; $i+0.01) { 
        
       $numero =  $divisao-$i;

        if(!is_float($numero)) {

            $soma = $i;
        
            $resultado['Carlos'] = $numero;
        $resultado['Andre'] = $numero;
        $resultado['Felipe'] = $numero+$soma;

        return $resultado;
        }
        }

        
        
    }

   
}



?>