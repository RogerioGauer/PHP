<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.14PHP
     </title>
 </head>   

 <body>
     <h1>Exerc.14PHP</h1>

     <form>
         Entre com uma lista de números separados por vírgula, para serem somados: 
         <input name="lista"> <input type="submit">
     </form>

     <?php
     if(isset($_GET["lista"]))
     {
         $lista = $_GET["lista"];
         $numeros = explode("," , $lista);
         $total_elementos = count($numeros);
         $somatorio = 0;

         for($i = 0; $i < $total_elementos; $i++)
         {
             if(is_numeric($numeros[$i]))
             {
                $somatorio += $numeros[$i];
             }
         }

         echo "O total da soma é: $somatorio";
     }
     ?>
 </body>
</html>