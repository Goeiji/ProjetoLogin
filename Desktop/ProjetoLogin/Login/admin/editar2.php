<?php

$id = $_GET['id_ref'];

echo "<html>
    <form method='get' action='editar.php'>
        <label for='id_ref'> ID_ref </label>
        <input type='text' name='id_ref' value='$id' readonly/><br><br>

        <label for='id'> ID </label>
        <input type='text' name='id'/><br><br>

        <label for='nome'> Nome </label>
        <input type='text' name='nome'/><br><br>
            
        <label for='email'> Email </label>
        <input type='email' name='email'/><br><br>

        <label for='mensagem'> Mensagem </label><br>
        <textarea rows='10' cols='40' name='mensagem'></textarea><br><br>
            
        <input type='submit' value='EDITAR'>
    </form>
    </html>";
?>