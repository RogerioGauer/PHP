<html>
    <head>
        <meta charset="UTF-8">
        <title>
         Exerc.04PHP
        </title>
    </head>
    <body>
        <h1>Exerc.04PHP</h1>    
         <?php
         $texto = "Prezado [], por favor dirija-se ao prédio central.";
         $nome = "João";

         //replace = substituir. Substitui a variável entre colchetes, pela variável inserida após a mesma. 
         $texto_final = str_replace("[]", $nome, $texto);
         echo $texto_final;
         ?>
    </body>
</html>