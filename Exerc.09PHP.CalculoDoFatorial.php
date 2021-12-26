<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.09PHP
     </title>
 </head>  

 <body>
     <h1>Exerc.09PHP</h1>    
     <form>
         Calcular o Fatorial do número: <input name="numero"> <input type="submit">
     </form>
     <hr color=black>

     <?php
         if (isset($_GET["numero"]))
         {
            $entrada = $_GET["numero"];
            $numero = $_GET["numero"];
            $fatorial = $numero;
            $numero = $numero - 1;

            if($fatorial == 0)
            $fatorial = 1;

            while($numero > 1)
            {
                $fatorial = $fatorial * $numero;
                $numero = $numero - 1;
            }

            echo "O Fatorial do número $entrada é $fatorial";           
         }
       ?>
 </body>
</html>