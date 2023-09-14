
<body>
<html

<form method="POST" action="recebe_dados.php">


    <table border="1">
        <tr>
            <th>  <p>E-mail:<input type="text" name="email" size="20" </p>
            <th> Senha:<input type="passWord" name="senha" size="10"></p></th>
        </tr>
        <tr>
            <td><p>Nome:<input type="text" name="nome" size="20"></p></td>
            <td><p>Idade:<input type="text" name="Username" size="3"</p>&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td> <p>Cidade:<input type="text" name="cidade" size="20">&nbsp;&nbsp;</p>
            </td> <p>Estado:<input type="text" name="estado" size=""maxlength="2"</p></td>
        </tr>
        <tr><button> Enviar</button></tr>
    </table>

        <title> Desenvolvendo websites com php</title>

<br>

$username = $_POST["username"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST ["email"];
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];

$erro=0;

if (strlen($username)<5){
    echo "O username deve possuir no mínimo 5 caracteres<br>"; $erro=1;
}
if (strlen($senha)<5){
    echo "A senha deve possuir no mínimo 5 caracteres. <br>"; $erro=1;
}
if (empty($nome) OR strstr ($nome,'')==FALSE){
    echo "Favor digitar seu nome corretamentE.<br>";$erro=1;
}
if (strlen($email)<8 || strstr ($email, '@')==FALSE){
    echo "Favor digitar seu E-MAIL corretament.<br>";$erro=1;
}
if (empy($cidade)){
    echo "Favor digitar sua cidade.<br>";$erro
}
if (strlen($estado)!=2){
    echo "Favor digitar seu estado corretamente.<br>";$erro=1;
}
//VERIFICA SE NÃO HOUVE ERRO
if ($erro==0){
    echo "Todos os dados foram digitados corretamente!";
}
?>
        </body>
        </html>


