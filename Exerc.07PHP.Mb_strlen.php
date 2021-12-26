<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.07PHP
     </title>
 </head>

 <body>
     <h1>Exerc.07PHP</h1>  

     <form>
         <input name="entrada" value="<?php if(isset($_GET["entrada"])) echo $_GET["entrada"]?>">
         <input type="submit">
     </form>          

     <?php
         if(isset($_GET["entrada"]))
         {
            $entrada = $_GET["entrada"];
         }

         echo $entrada;
         echo "<br>";
         echo "strlen: Contagem de caracteres considerando o acento como um caracter a mais => " . strlen($entrada) . ".";
         echo "<br>";
         echo "mb_strlen: Contagem de caracteres NÃO considerando o acento como um caracter a mais, pois foi mencionado a codificação UTF-8 entre parentêses => " . mb_strlen($entrada, "UTF-8") . ".";
       ?>
 </body>
</html>