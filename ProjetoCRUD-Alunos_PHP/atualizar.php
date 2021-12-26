<html>
<head>
     <meta charset="UTF-8">
     <title>Atualizar Dados</title>
</head>
<body>
     <a href="listar.php">:: Voltar ::<a/>
     <hr color=black>
     <h1>Atualizar Dados:</h1>

     <form action="./_exe/atualizar.php" method="POST">
     Código: <input type="number" name="cod">
     <br><br>

     Nome: <input type="text" name="nom">
     <br><br>

     Email: <input type="text" name="ema">
     <br><br>

     Telefone: <input type="number" name="tel">
     <br><br>

     <button type="submit">Atualizar</button>
     </form>

     <?php
     include('./_inc/inc.mensagens.php');
     ?>
</body>
</html>