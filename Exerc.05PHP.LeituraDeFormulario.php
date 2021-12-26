<html>
 <head>
     <meta charset="UTF-8">
     <title>
         Exerc.05PHP
     </title>
 </head>
 
 <body>
     <h1>Exerc.05PHP</h1>  
        
     <form>
         <input name="nome">
         <input type="submit">
     </form>  

     <?php
         //Isset = Fora. Testa se há um valor válido no formulário.
         //GET = Obter. Captura o atributo de name, digitado na URL.
         if (isset($_GET["nome"]))
            {
                $nome = $_GET["nome"];
                $texto = "Prezado [], por favor dirija-se ao prédio central.";
                $texto_final = str_replace("[]", $nome, $texto);
                echo $texto_final;
            }
       ?>
 </body>
</html>