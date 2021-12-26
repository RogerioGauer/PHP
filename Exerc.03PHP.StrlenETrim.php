<html>
    <head>
        <meta charset="UTF-8">
        <title>
         Exerc.03PHP
        </title>
    </head>
    <body>
        <h1>Exerc.03PHP</h1>    
         <?php
          $nome = "Pedro Silva";
          echo "strlen = Contagem de caracteres de uma string ($nome) : " . strlen($nome);
          
          echo "<br>";
          echo "<br>";

          $nome = "Pedro Silva "; //Espaço a mais após Silva.
          echo "strlen = Contagem de caracteres de uma string ($nome): " . strlen($nome);
                   
          echo "<br>";
          echo "<br>";

          $nome2 = trim($nome);
          echo "trim = Contagem de caracteres de uma string ($nome), ignorando espaços em branco antes e após uma string: " . strlen($nome2);

          echo "<br>";
          echo "<br>";

          echo "strlen(trim($)) = Aninhando os dois comandos acima, temos a contagem de caracteres de uma string ($nome), ignorando espaços em branco antes e após a string: " . strlen(trim($nome));
        ?>
    </body>
</html>