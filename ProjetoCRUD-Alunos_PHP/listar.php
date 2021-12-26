<html>
<head>
     <meta charset="UTF-8">
     <title>Listar os Dados</title>
</head>
<body>
     <a href="cadastrar.php">:: Cadastrar ::</a>
     <hr color=black>          
     <h1>Listar os Dados:</h1>

     <?php
     include('./_inc/inc.conex.php');
     
     //Executa um SQL e obtém um resultado.
     $sql = "select * from alunos"; 
     $result = mysqli_query($conn, $sql);
     
     //Manipula o resultado.
     foreach ($result as $linha)
     //Linha é um array onde cada item do array é uma coluna da tabela.
     {
          $nom = $linha['nome'];
          $ema = $linha['email'];
          $tel = $linha['telefone']; 
          //Envia para o navegador.
          echo $nom . ' - ' . $ema . ' - ' . $tel . '<br>';                    
     }

     //Fecha a conexão com o banco de dados.
     mysqli_close($conn);
     ?>
</body>
</html>