<?php include '../config.php'?>

<?php

    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem'];
    $id_ref = $_GET['id_ref'];
    
    $edicao = editar($conexao, $id, $nome, $email, $mensagem, $id_ref);

    function editar($conexao, $id, $nome, $email, $mensagem, $id_ref){
       $sql = mysqli_query($conexao, "update `contato` set `id` = '$id',`nome` = '$nome', `email` = '$email', `mensagem` = '$mensagem' WHERE `contato`.`id` = $id_ref;");
       return 1;
   }

   if ($edicao == 1) {
       echo("<h2>Edição bem sucedida!!</h2>");
       echo "<a title='Listar' href='listar.php'> LISTAR </a>";
   }else{
       echo("<h2>Não foi possível editar...</h2>");
       echo "<a title='Listar' href='listar.php'>";
   }

  

?>