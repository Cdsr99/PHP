<?php







?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Banco</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
        <br>
        <br>
        <div class="main">
        <pre>
       <form action="cadastro.php" method="POST"><br><br>
        Nome:          <input type="text" name="nome"><br><br>
        email:         <input type="email" name="email"><br><br>
        Tipo de conta: <input type="text" list="tipoConta"><br><br>
        <input type="submit" value="Criar conta">

       </form>
    </div>
       </pre>
    </center>

<datalist id="tipoConta">
    <option>Conta Corrente</option>
    <option>Conta Poupanca</option>
</datalist>

</body>
</html>