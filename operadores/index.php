<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <title></title>
</head>

<body>
    <div>
        <?php
         $n1 = -80.555;
         $n2 = 8;
         echo "<h1>Os números recebidos foram $n1 e $n2</h1>"; 
         /** SOMA */
         echo "</br> A soma entre eles vale " . ($n1 + $n2);
         /** SUBTRAÇÃO */
         echo "</br> A subtração entre eles vale " . ($n1 - $n2);
         /** DIVISÃO */
         echo "</br> A divisão entre eles vale " . ($n1 / $n2);
         /** MULTIPLICAÇÃO */
         echo "</br> A multiplicação entre eles vale " . ($n1 * $n2);
         /** MODULO */
         echo "</br> O módulo deles vale " . ($n1 % $n2);
         /** VALOR ABSOLUTO */
         echo "</br> O valor absoluto de $n1 é " . abs($n1) . " e de $n2 é " . abs($n2);
         /** POTENCIAÇÃO  */
         echo "</br> O valor de $n1<sup>$n2</sup> é " . pow($n1, $n2);
         /** RAIZ QUADRADA */
         echo "</br> A raiz quadrada de $n1 é " . sqrt($n1 * (-1));
         /** ARREDONDAMENTOS
          * (round - arredondamento padrão)
          * (ceil - arredondamento para cima)
          * (floor - arredondamento para baixo)*/
         echo "</br> O valor arredondado de $n1 é " . round($n1);
         /** PARTE INTEIRA */
         echo "<br> A parte inteira de $n1 é " . intval($n1);
         /** FORMATAÇÃO
          * number_format($n1 -variável- ,2 -número de casas decimais- ,
          * "," -caractere usado para separar os decimos das unidades- ,
          * "." -caractere usado para separar as casas de milhar-); */
         echo "<br> O valor de $n1 em moeda é R$" . number_format($n1,2, "," , ".");

        ?>
    </div>

</body>

</html>