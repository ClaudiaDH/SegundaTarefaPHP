<?php
    $numero1 = 1;
    $numero2 = 2;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>segundaTarefaPHP</title>
</head>
<body>
    <h1>Resultados</h1>
    <!-- Primeiro -->
    <?php if($numero1 > $numero2){ ?>
        <p><?php echo $numeo1; ?></p>
    <?php } else {  ?>
        <p><?php echo $numero2; ?></p>
    <?php } ?>

    <!-- Segundo e Terceiro -->
    
    <?php 

        $x = 1;
        $y = 5;
        $numeroAleatorio = mt_rand($x,$y);
        if($numeroAleatorio == 3 || $numeroAleatorio == 5){
            echo $numeroAleatorio;
        }else if($numeroAleatorio != 3){
            echo "O número não é 3.";
        }
    
    ?>

    <?php echo "<br>"?>

    <!--Quarto -->
    <?php
        
        $numeroMenor = 1;
        $numeroMaior = 100;

        $numeroAleatorio2 = mt_rand($numeroMenor, $numeroMaior);
        
        if($numeroAleatorio2 > 50){
            echo "O número é maior que 50.";
        }else{
            echo "O número é menor que 50.";
        }
    ?>

    <?php echo "<br>"?>
    <!--Quinta-->
    <?php 

        $numeroMenorUm = 0;
        $numeroMaiorUm = 100;
        
        $numeroAleatorioTres = mt_rand($numeroMenorUm, $numeroMaiorUm);

        if(($numeroAleatorioTres > 50) && ($numeroAleatorioTres % 2 === 0) ){
            echo $numeroAleatorioTres;
            echo "O numero cumpre a condição!";
        }else{
            echo $numeroAleatorioTres;
            echo "O numero NAO cumpre a condicao.";
        }

    ?>
    <?php echo "<br>"?>

    <!--Sexta -->
    <?php

        $idade = 20;
        $casado = false;
        $sexo = "outro";
        
        if(($idade > 18) && ($casado == false) && ($sexo == "outro")){
            echo "Boas Vindas";
        }

    ?>
    <?php echo "<br>"?>

    <!--Setima-->
    <?php

        $quantidadeDeAlunos = 100;
        if($quantidadeDeAlunos){
            echo "true";

        }else{
            echo "false";
        }

    ?>
     <?php echo "<br>"?>

    <!--Oitava-->
    <?php
    $numero = 9;
    $valor = $numero % 2 == 0? "par": "impar";
    echo $valor;

    ?>

    <?php echo "<br>"?>

    <!--Nono e Decimo-->
    <?php
        $i = mt_rand(1,5);
        switch($i){
            case 1:
            echo "i é igual a " .$i;
            break;
            case 2:
            echo "i é igual a" . $i;
            break;
            default:
            echo "nao é igual 1 ou 2";
            break;
        }
    ?>
    
    <?php echo "<br>"?>
    <!--Decimo-->
    <?php
        $x = mt_rand(1,100);
        $y = mt_rand(1,100);
        if($x > $y){
            echo $x. " é maior que " .$y;
        }else if($x === $y){
            echo $x. " é igual a " .$y;
        }else{
            echo "Nenhuma delas";
        }
    ?>



</body>
</html>