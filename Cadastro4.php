
<HTML>
<BODY>
<FORM method="POST" action="?action=save" name="meuForm">
Nome:       <INPUT type=TEXT  name=CAMPO_NOME
value=""CAMPO_NOME"]; ?>"
<BR>Idade:  <INPUT type=TEXT  name=CAMPO_IDADE
value=""CAMPO_IDADE"]; ?>"
<BR>E-mail: <INPUT type=TEXT  name=CAMPO_EMAIL
value=""CAMPO_EMAIL"]; ?>"

<BR>Sexo:   <INPUT type=RADIO name=CAMPO_SEXO value="M"
<? if($_POST["CAMPO_SEXO"] == "M"){ echo "checked"; } ?>
Masculino
<INPUT type=RADIO name=CAMPO_SEXO value="F"
<? if($_POST["CAMPO_SEXO"] == "F"){ echo "checked"; } ?>
Feminino

<BR>Curso:  <SELECT name=CAMPO_CURSO>
<OPTION <? if($_POST["CAMPO_CURSO"] == "Selecione...")
{ echo "selected"; } ?>
Selecione...</OPTION>
<OPTION <? if($_POST["CAMPO_CURSO"] == "Ciência da Computação")
{ echo "selected"; } ?>Ciência da Computação</OPTION>
<OPTION <? if($_POST["CAMPO_CURSO"] == "Bacharelado em Informática")
{ echo "selected"; } ?>
>Bacharelado em Informática</OPTION>
<OPTION <? if($_POST["CAMPO_CURSO"] == "Engenharia da Computação")
{ echo "selected"; } ?>
>Engenharia da Computação</OPTION>
</SELECT>

<BR>Conhecimentos:
<INPUT type=CHECKBOX name=CAMPO_CONHECIMENTOS[] value="Word"
<? if(in_array("Word", $_POST["CAMPO_CONHECIMENTOS"]) != false)
{ echo "checked"; }?> Microsoft Word
<INPUT type=CHECKBOX name=CAMPO_CONHECIMENTOS[] value="HTML"
<? if(in_array("HTML", $_POST["CAMPO_CONHECIMENTOS"]) != false)
{ echo "checked"; }?> HTML
<INPUT type=CHECKBOX name=CAMPO_CONHECIMENTOS[] value="JS"
<? if(in_array("JS", $_POST["CAMPO_CONHECIMENTOS"]) != false)
{ echo "checked"; }?> JavaScript
<INPUT type=CHECKBOX name=CAMPO_CONHECIMENTOS[] value="PHP"
<? if(in_array("PHP", $_POST["CAMPO_CONHECIMENTOS"]) != false)
{ echo "checked"; }?> PHP

<BR>
<INPUT type=RESET  value="Limpar">
<INPUT type=BUTTON onClick="validaForm();" value="Enviar">
</FORM>

</BODY>
</HTML>
