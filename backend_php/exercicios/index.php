<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="base" href="http://localhost:8080/backend_php/exercicios">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"> 
    <link rel="stylesheet" href="../conversor/_css/icomoon/demo-files/demo.css"> 
    <link rel="stylesheet" href="_css/style.css"> 
    <title>Conversor Monetário</title>
   <!-- <script src="../conversor/_js/jquery.js"></script>
    <script src="../conversor/_js/jquery.form.js"></script>

    <script src="../conversor/_js/script.js"></script>-->

    
    <script src="_js/jquery.js"></script>
    <script src="_js/jquery.form.js"></script>
    <script src="_js/script.js"></script> 
</head>
<body>
    <section class="container">
        <form action="" style="margin-bottom: 50px;">
        <select name="seletor" id="seletor">
            <option value="" disabled selected>Selecione o Conversor</option>
            <option value="ex11">Exercicio11</option>
            <option value="ex12">Exercicio12</option>
            <option value="ex13">Exercicio13</option>
            <option value="ex14">Exercicio14</option>
            <option value="ex15">Exercicio15</option>
        </select>
    </form>


    <form action="" id="ex11" method="post" class="auto_save ds_none" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="callback" value="Exercicios">
        <input type="hidden" name="callback_action" value="ex11">

        <fieldset>
            <legend><i class="icon icon-coin-dollar"></i>11. Uma fábrica controla o tempo de trabalho sem acidentes pela quantidade de dias. Faça um
algoritmo para converter este tempo em anos, meses e dias. Assuma que cada mês possui sempre
30 dias.</legend>

            <div class="trigger_modal"></div>

            <div class="flex_box">
                <label for="usd">
                    <span class="icon icon-coin-dollar">Valor em USD:</span>
                    <input type="number" name="usd" id="usd" step="1" min="1" value="" required>
                </label>
            </div>

            <div id="result11"></div>
            <div class="flex-box">
                <button class="btn btn-green btn-rounded" value="1" type="submit">
                    <img class="ds_none form_load" src="images/load_w.gif" alt="Enviando formulário!">
                    CONVERTER
                </button>
            </div>
        </fieldset>
    </form>
<!-- EX12 -->
    <form action="" id="ex12" method="post" class="auto_save ds_none" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="callback" value="Exercicios">
        <input type="hidden" name="callback_action" value="ex12">

        <fieldset>
            <legend><i class="icon icon-coin-dollar"></i>12. Faça um algoritmo para ler o salário de um funcionário e aumentá-Io em 15%. Após o aumento,
desconte 8% de impostos. Imprima o salário inicial, o salário com o aumento e o salário final.</legend>

            <div class="trigger_modal"></div>

            <div class="flex_box">
                <label for="usd">
                    <span class="icon icon-coin-dollar">Salário Inicial:</span>
                    <input type="number" name="usd" id="usd" step="1" min="1" value="" required>
                </label>
   
            </div>
            <div id="result12"> </div>
            <div class="flex-box">
                <button class="btn btn-green btn-rounded" value="1" type="submit">
                    <img class="ds_none form_load" src="images/load_w.gif" alt="Enviando formulário!">
                    CONVERTER
                </button>
            </div>
        </fieldset>

      <!-- EX13 -->  
    </form>
    <form action="" id="ex13" method="post" class="auto_save ds_none" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="callback" value="Exercicios">
        <input type="hidden" name="callback_action" value="ex13">

        <fieldset>
            <legend><i class="icon icon-coin-dollar"></i>13. Ler um número inteiro (assuma até três dígitos) e imprimir a saída da seguinte forma:
CENTENA = x
DEZENA = x
UNIDADE = x</legend>

            <div class="trigger_modal"></div>

            <div class="flex_box">
                <label for="usd">
                    <span class="icon icon-coin-dollar">Numero:</span>
                    <input type="number" name="usd" id="usd" step="1" min="1" value="" required>
                </label>

               
                <div id="result13"> </div>
            <div class="flex-box">
                <button class="btn btn-green btn-rounded" value="1" type="submit">
                    <img class="ds_none form_load" src="images/load_w.gif" alt="Enviando formulário!">
                    CONVERTER
                </button>
            </div>
        </fieldset>
    </form>
    <form action="" id="ex14" method="post" class="auto_save ds_none" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="callback" value="Exercicios">
        <input type="hidden" name="callback_action" value="ex14">

        <fieldset>
            <legend><i class="icon icon-coin-dollar"></i>14. Calcule a área de uma pizza que possui um raio R (pi=3.14).</legend>

            <div class="trigger_modal"></div>

            <div class="flex_box">
                <label for="usd">
                    <span class="icon icon-coin-dollar">Número: </span>
                    <input type="number" name="usd" id="usd" step="1" min="1" value="" required>
                </label>

               

               
            </div>

            <div id="result14"></div>
            <div class="flex-box">
                <button class="btn btn-green btn-rounded" value="1" type="submit">
                    <img class="ds_none form_load" src="images/load_w.gif" alt="Enviando formulário!">
                    CONVERTER
                </button>
            </div>
        </fieldset>
    </form>
    <form action="" id="ex15" method="post" class="auto_save ds_none" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="callback" value="Exercicios">
        <input type="hidden" name="callback_action" value="ex15">

        <fieldset>
            <legend><i class="icon icon-coin-dollar"></i>15. Três amigos, Carlos, André e Felipe. decidiram rachar igualmente a conta de um bar. Faça um
algoritmo para ler o valor total da conta e imprimir quanto cada um deve pagar, mas faça com que
Carlos e André não paguem centavos. Ex: uma conta de R$101,53 resulta em R$33,00 para
Carlos, R$33,00 para André e R$35,53 para Felipe.</legend>

            <div class="trigger_modal"></div>

            <div class="flex_box">
                <label for="usd">
                    <span class="icon icon-coin-dollar">Valor da Conta: </span>
                    <input type="number" name="usd" id="usd" step="1" min="1" value="" required>
                </label>

               

               
            </div>
            <div id="result15"></div>
            <div class="flex-box">
                <button class="btn btn-green btn-rounded" value="1" type="submit">
                    <img class="ds_none form_load" src="images/load_w.gif" alt="Enviando formulário!">
                    CONVERTER
                </button>
            </div>
        </fieldset>
    </form>
    </section>
</body>
</html>