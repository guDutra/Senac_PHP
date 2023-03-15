<?php 

require __DIR__ . "/../source/config.inc.php";

$jSON = null;
$CallBack = 'Conversor';
$PostData = filter_input_array(INPUT_POST);
//var_dump($PostData);
if($PostData && $PostData['callback_action'] && $PostData['callback'] == $CallBack ) {

    $Case = $PostData['callback_action'];
    
    unset($PostData['callback'], $PostData['callback_action'], $PostData['result'] );

    switch($Case) {

        case 'conversion':

            if(array_search('', $PostData)) {
                $jSON['trigger'] = AjaxErro(
                    "<p class='align-center'><b class='icon icon-warning'>Oops!</b> Por favor preencha os campos.</p>",
                    E_USER_WARNING
                );

                $jSON['field'] = array_search('', $PostData);
            } else {
               // $date = date('Y-m-d');
                //updateCotation($date);

                $cotationNow = dolarNow();
                switch($PostData['city']) {

                    case 'bh':
                        $cotacao = (int)$PostData['usd'] * (float)$cotationNow[0]['cotation'];
                        break;

                        case 'rj':
                            $cotacao = (int)$PostData['usd'] * (float)$cotationNow[1]['cotation'];
                        break;
                        case 'sp':
                            $cotacao = (int)$PostData['usd'] * (float)$cotationNow[2]['cotation'];
                        break;
                }
                $jSON['cotacao'] = 'R$' . number_format($cotacao,2,",",".");

                $jSON['trigger'] = AjaxErro(
                    "<p class='align-center'><b class='icon icon-smile2'> OK!</b>c Tudo certo </p>"
                );
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