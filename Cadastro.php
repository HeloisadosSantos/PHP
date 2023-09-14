
<HTML>
<HEAD>
<TITLE>EXEMPLO - Formulários</TITLE>
<SCRIPT language="JavaScript">
function validaForm()
{
var tamanho_nome = document.forms["meuForm"].CAMPO_NOME.value.length;
if(tamanho_nome < 5 || tamanho_nome > 64)
{
alert("O campo 'Nome' deve ter entre 5 e 64 caracteres.");
return false;
}

var idade = document.forms["meuForm"].CAMPO_IDADE.value;
if(isNaN(idade) || idade < 4 || idade > 120)
{
alert("O campo 'Idade' deve ter preenchido corretamente.");
return false;
}

var email = document.forms["meuForm"].CAMPO_EMAIL.value;
if(email.length < 5  || email.length > 128 ||
email.indexOf('@') == -1 || email.indexOf('.') == -1)
{
alert("O campo 'E-mail' deve ter preenchido corretamente.");
return false;
}

var campo_sexo = document.forms["meuForm"].CAMPO_SEXO;

var sexo = false;

for (i=0; i<campo_sexo.length; i++)
{
if(campo_sexo[i].checked == true)
{
sexo = campo_sexo[i].value;
break;
}
}
if(sexo == false)
{
alert("O campo 'Sexo' deve ser preenchido.");
return false;
}

var opcao_curso = document.forms["meuForm"].CAMPO_CURSO.selectedIndex;
if(opcao_curso == 0)
{
alert("O campo 'Curso' deve ser preenchido.");
return false;
}

var conhecimentos = document.forms["meuForm"].elements['CAMPO_CONHECIMENTOS[]'];
var conhecimentosMarcados = 0;
for (i=0; i<conhecimentos.length; i++)
{
if(conhecimentos[i].checked == true)
{
conhecimentosMarcados++;
}
}
if(conhecimentosMarcados != 2)
{
alert("É necessário marcar 2 conhecimentos.");
return false;
}
document.forms["meuForm"].submit();
}
</SCRIPT>
</HEAD>
</BODY>
</HTML>



