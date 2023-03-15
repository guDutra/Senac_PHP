<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio5</title>
</head>

<body>

    <form action="#" method="post">

        <div class="flex-box justify-center align-items-center">

            <label for="price">
                <input type="text" name="price" value="" id="price" placeholder="price" required>
            </label>

            <label for="payment">
                <input type="text" name="payment" value="" id="payment" placeholder="payment" required>
            </label>
        </div>
        <div class="result">
            <?php

            $calcLiters = function ($price, $payment) {
                $liters = $payment / $price;

                return $liters;
            };

            if ($_POST) {

                echo "<p> How many liters you paid: {$calcLiters($_POST['price'],$_POST['payment'])} </p>";
            }
            unset($_POST); ///serve para matar a variavel do post ou seja tirar a locação de espaço da variavel
            ?>
        </div>


        <div class="flex-box actions">
            <button class="red" type="reset">LIMPAR</button>
            <button class="green" type="submit"> CALCULAR</button>
        </div>
    </form>

</body>

</html>