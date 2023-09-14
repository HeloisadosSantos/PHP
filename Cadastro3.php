
<html>
    <title>Desenvolvimento Website com PHP</title>

<body>
    <p align="center"><big><big><strong>Cadastramento - Etapa 3 de 3</strong></big></big></p>

    <form method="POST" action="cadastra.php">

        <input type="hidden" name="nome" value="< echo $_POST["nome"];?">
        <input type="hidden" name="email" value="<echo $_POST["email"];?">
        <input type="hidden" name="datanascimento" value="< echo $_POST["datanascimento"];?">
        <input type="hidden" name="sexo" value="< echo $_POST["sexo"];?">
        <input type="hidden" name="profissao" value="< echo $_POST["profissao"];?">

        <input type="hidden" name="telefone" value="< echo $_POST["telefone"];?">
        <input type="hidden" name="endereco" value="< echo $_POST["endereco"];?">
        <input type="hidden" name="cidade" value="< echo $_POST["cidade"];?">
        <input type="hidden" name="estado" value="< echo $_POST["estado"];?">
        <input type="hidden" name="cep" value="< echo $_POST["cep"];?">

        <div align="center"><center><p>Username:<input type="text" name="username" size="10"></p>
        </center></div><div align="center"><center><p> Senha:<input type="text" name="senha" size="10"></p>
        </center></div><div align="center"><center><p><Confirme sua Senha:<input type="text" name="confirma senha" size="10"></p>
        </center></div><div align="center"><center><p><input type="submit" value="Finalizar Castro" name="fim"></p>

        </form>

        </body>
        </html>