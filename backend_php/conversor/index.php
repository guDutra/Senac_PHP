<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="base" href="http://localhost:8080/backend_php/conversor">
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
            <option value="dolar">Cotação do Dolar</option>
            <option value="medidas">Conversor Métricos</option>
        </select>
    </form>


    <form action="" id="dolar" method="post" class="auto_save ds_none" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="callback" value="Conversor">
        <input type="hidden" name="callback_action" value="conversion">

        <fieldset>
            <legend><i class="icon icon-coin-dollar"></i>Conversor Monetário</legend>

            <div class="trigger_modal"></div>

            <div class="flex_box">
                <label for="usd">
                    <span class="icon icon-coin-dollar">Valor em USD:</span>
                    <input type="number" name="usd" id="usd" step="1" min="1" value="" required>
                </label>

                <label for="city">
                    <span>Cidade do Cambio</span>
                    <select name="city" id="city">
                        <option value="" disabled selected>Selecione a Cidade</option>
                        <option value="bh">Belo Horizonte</option>
                        <option value="rj">Rio De Janeiro</option>
                        <option value="sp">São Paulo</option>
                    </select>
                </label>

                <label for="result">
                    <span>A cotação em <mark id="ct"></mark> é  <b>R$</b></span>
                    <input type="text" name="result" placeholder="Valor em BRL" id="result" value="">
                </label>
            </div>

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