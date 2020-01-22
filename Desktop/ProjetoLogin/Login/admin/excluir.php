<?php include '../config.php'?>
<?php

    $id = $_GET['id'];
    $exclusao = excluir($conexao, $id);

   function excluir($conexao, $id){
       $sql = mysqli_query($conexao, "delete from `contato` where `contato`.`id` = $id");
       return 1;
   }

   if ($exclusao == 1) {
       echo("<h2>Exclusão bem sucedida!!</h2>");
       echo "<a title='Listar' href='listar.php'> LISTAR </a>";
   }else{
       echo("<h2>Cadastro não excluido...");
       echo "<a title='Listar' href='listar.php'> LISTAR </a>";
   }

?>