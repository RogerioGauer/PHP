<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.11PHP
     </title>
 </head>   

 <body>
     <h1>Exerc.11PHP</h1>

     <?php
      $array = array(10,20,30,40,50);
      $i = 0;

      while($i < 5)
      {
        echo $array[$i++];
        echo "<br>";
      }

      /* Código equivalente ao supra escrito.
      $array = array(5,4,3,2,1);
      echo $array[0];
      echo "<br>";
      echo $array[1];
      echo "<br>";
      echo $array[2];
      echo "<br>";
      echo $array[3];
      echo "<br>";
      echo $array[4];
      */   
     ?>
 </body>
</html>