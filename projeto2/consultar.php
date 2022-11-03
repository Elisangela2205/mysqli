<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar cliente</title>
</head>
<body>
    <h1>consultar cliente</h1>
    <hr>
    <?php
    // abrir a conexão com o banco
    include_once'./conexao.php';
    //montar a instrução para ir ao banco
    $sql = "select * from cliente";

    $result = mysqli_query($con,$sql);//executa a consulta no mysql

    $totalregistro = mysqli_num_rows($result);
    if($totalregistro > 0){
        //echo"encontrou...".$totalregistro;
        ?>
        <table width= '800px' border="1px">
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td>Data de cadastro</td>
        </tr>
    <?php
    whille($row = mysqli_fetch_array($result)){
        
        echo"<tr>";
        echo"<td>".$row["nome"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"<td>".$row["telefone"]."</td>";
        echo"<td>".$row["dtcadastro"]."</td>";
        echo"</tr>";
    
    }
    echo"</table>total registros:".$totalregistro;


    }else{
        echo"nenhum registro cadastrado!";

    }
    ?>
</body>
</html>