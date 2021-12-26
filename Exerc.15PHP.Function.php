<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.15PHP
     </title>
 </head>   

 <body>
     <h1>Exerc.15PHP</h1>

     <form>
         Digite uma mensagem:
         <input name="mensagem"> <input type="submit"> 
     </form>

     <?php
     function ExibeMensagem($mensagem)
     {
         echo "Atenção. Temos uma mensagem para o usuário: ";
         echo "<b>$mensagem</b>";        
     }

     if(isset($_GET["mensagem"]))
     {
         ExibeMensagem($_GET["mensagem"]);
     }
     ?>
 </body>
</html>