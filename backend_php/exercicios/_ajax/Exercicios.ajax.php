<?php 

require __DIR__ . "/../source/functions.php";

$jSON = null;
$CallBack = 'Exercicios';
$PostData = filter_input_array(INPUT_POST);
//var_dump($PostData);
if($PostData && $PostData['callback_action'] && $PostData['callback'] == $CallBack ) {

    $Case = $PostData['callback_action'];
    
    unset($PostData['callback'], $PostData['callback_action'], $PostData['result'] );

    switch($Case) {

        case 'ex11':

            if(array_search('', $PostData)) {
                $jSON['trigger'] = AjaxErro(
                    "<p class='align-center'><b class='icon icon-warning'>Oops!</b> Por favor preencha os campos.</p>",
                    E_USER_WARNING
                );

                $jSON['field'] = array_search('', $PostData);
            } else {
               $daysleft = CalcTime($PostData['usd']);
           
            $jSON['result11'] = 'Anos:' .$daysleft["anos"] .' Meses: ' .$daysleft["meses"]
             .'Dias: ' .$daysleft["dias"];
            //'Anos:' .$daysleft['anos'] .' Meses: ' .$daysleft['meses'] .'Dias: ' .$daysleft['dias'];
            }
            break;
            

            case 'ex12':
                if(array_search('', $PostData)) {
                    $jSON['trigger'] = AjaxErro(
                        "<p class='align-center'><b class='icon icon-warning'>Oops!</b> Por favor preencha os campos.</p>",
                        E_USER_WARNING
                    );
    
                    $jSON['field'] = array_search('', $PostData);
                } else {
                     $salario = ex12($PostData['usd']);
                    $jSON['result12'] = 'Salário Inicial: ' .$salario["salarioI"]  .' Salário aumentado: '
                    .$salario["salarioA"]  .' Salário Final: ' .$salario["salarioF"];

                }

                break;

                case 'ex13':
                    if(array_search('', $PostData)) {
                        $jSON['trigger'] = AjaxErro(
                            "<p class='align-center'><b class='icon icon-warning'>Oops!</b> Por favor preencha os campos.</p>",
                            E_USER_WARNING
                        );
        
                        $jSON['field'] = array_search('', $PostData);
                    } else {
                         $numero = ex13($PostData['usd']);
                        $jSON['result13'] =  'Centena: ' .$numero["centena"]  
                        .'Dezena: ' .$numero["dezena"]  . 'Unidade: ' .$numero["unidade"];
    
                    }
    
                    break;

                    case 'ex14':
                        if(array_search('', $PostData)) {
                            $jSON['trigger'] = AjaxErro(
                                "<p class='align-center'><b class='icon icon-warning'>Oops!</b> Por favor preencha os campos.</p>",
                                E_USER_WARNING
                            );
            
                            $jSON['field'] = array_search('', $PostData);
                        } else {
                             $numero = ex14($PostData['usd']);
                            $jSON['result14'] =  "Areá: " .$numero;
        
                        }
        
                        break;

                        case 'ex15':
                            if(array_search('', $PostData)) {
                                $jSON['trigger'] = AjaxErro(
                                    "<p class='align-center'><b class='icon icon-warning'>Oops!</b> Por favor preencha os campos.</p>",
                                    E_USER_WARNING
                                );
                
                                $jSON['field'] = array_search('', $PostData);
                            } else {
                                 $conta = ex15($PostData['usd']);
                                $jSON['result15'] =  "Carlos: " .$conta["Carlos"] . "André: " .$conta["Andre"]
                                ."Felipe: " .$conta["Felipe"];
            
                            }
            
                            break;

    }


    if($jSON) {
        echo json_encode($jSON);
    } else {
        $jSON['trigger'] = AjaxErro(
            '<b class="icon-warning"OPSS: </b> Desulpe, mas uma opção do sistema não respondeu corretamente. Ao persistir, contate o desenvolvedor!'
            , E_USER_ERROR
        );
        echo json_encode($jSON);
    };


        } else {
            die('<br><br><br><h1 style="text-align:center, width:100%">Acesso Restrito</h1>');
        }

?>