<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.06PHP
     </title>
 </head>

 <body>
     <h1>Exerc.06PHP</h1>    
     
     <form>
     <input name="nome"> - <input name="sobrenome"> - <input type="submit">
     </form>

     <?php
       if((isset($_GET["nome"])) && (isset($_GET["sobrenome"])))
       {
           $nome = $_GET["nome"];
           echo "Nome de Usuário: $nome";
           echo "<br>";
           $sobrenome = $_GET["sobrenome"];
           $nomecompleto = $nome . " " . $sobrenome;
           echo "<br>";
           echo "Total de caracteres de $nomecompleto: " . strlen(trim($nomecompleto));
       }
       ?>
 </body>
</html>