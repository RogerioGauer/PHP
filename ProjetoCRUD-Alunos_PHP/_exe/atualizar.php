<?php
//Pegar os dados que vieram do formulário pelo método POST.
$cod = $_POST['cod'];
$nom = $_POST['nom'];
$ema = $_POST['ema'];
$tel = $_POST['tel'];

//Deveríamos fazer vários testes para confirmar se os dados estão corretos e etc.
 
//Conexão com o banco de dados.
include('../_inc/inc.conex.php');

//Executa um SQL e obtém o resultado.
$sql = "update alunos (codigo, nome, email, telefone)
        values ('$cod', '$nom', '$ema', '$tel')"; 
$result = mysqli_query($conn, $sql);

//Manipula um resultado.
if($result)
{    //Ok
     $destino = '../listar.php';
}

else
{    //bug
     $destino = '../cadastrar.php?cod=12';
}

//Fecha a conexão com o banco de dados.
mysqli_close($conn);

//Direciona para a página correta.
header("location: $destino");
?>