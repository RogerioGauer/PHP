<html>
<head>
     <meta charset="UTF-8">
     <title>Cadastrar Dados</title>
</head>
<body>
     <a href="listar.php">:: Voltar ::<a/>
     <hr color=black>

     <h1>Cadastrar Dados:</h1>

     <form action="./_exe/cadastrar.php" method="POST">
     Código: <input type="number" name="cod">
     <br><br>

     Nome: <input type="text" name="nom">
     <br><br>

     Email: <input type="text" name="ema">
     <br><br>

     Telefone: <input type="number" name="tel">
     <br><br>

     <button type="submit">Cadastrar</button>
     </form>

     <?php
     include('./_inc/inc.mensagens.php');
     ?>
</body>
</html>