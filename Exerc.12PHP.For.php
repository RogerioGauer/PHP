<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.12PHP
     </title>
 </head>   

 <body>
     <h1>Exerc.12PHP</h1>

     <form>
         Entre com uma lista de nomes separados por vírgula: 
         <input name="lista"> <input type="submit">
     </form>

     <?php
     if(isset($_GET["lista"]))
     {
         $lista = $_GET["lista"];
         $nomes = explode(",", $lista); 
         $total_elementos = count($nomes);
        
         //Código equivalente ao de baixo:
         $i = 0;
         while($i < $total_elementos)
         {
             echo "Este é o nome $i: " . $nomes[$i];
             // ou - echo "Este é o nome " . ($i + 1) . ": " . $nomes[$i];
             echo "<br>";
             $i++;
         }

         echo "<br>";
         echo "<br>"; 

         for($i = 0; $i < $total_elementos; $i++)
         {
             echo "Este é o nome $i: " . $nomes[$i];
             //ou - echo "Este é o nome " . ($i + 1) . ":" . $nomes[$i];
             echo "<br>";
         }
     }
     ?>
 </body>
</html>