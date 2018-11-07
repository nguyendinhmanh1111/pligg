<?php

/**
 * MySQL Backup Pro Protuguese brasilian translation
 * 
 * @package GONX
 * @author Ben Yacoub Hatem <hatem@php.net>
 * @copyright Copyright (c) 2004
 * @version $Id$ - 08/04/2004 16:20:30 - en.php
 * @access public
 **/
 // Traduzido por Leandro Fernandes <soumaisjava@yahoo.com.br>
// Application title
$GONX["title"] = "&nbsp;&nbsp;MySQL Backup Pro� ";

$GONX["deleteconfirm"] = ' Voc� est� certo que deseja apagar este arquivo?\nClique OK para confirmar.';

$GONX["header"] = '<html>
<head>
<title>'.$GONX["title"].'</title>
<style type="text/css" media="screen">@import "style.css";</style>
<script language="JavaScript" type="text/javascript">
<!--
function ConfirmDelete() {
	return confirm("' . $GONX[ "deleteconfirm" ] . '";)
}
//-->
</script>
</head>
<body>
';

// Home page content
$GONX['homepage'] = "<b>".$GONX["title"]."</b> � uma solu��o completa para criar e restaurar backup's da base MySQL.<br/>
			O uso da aplica��o � muito f�cil :
			<ul>
			<li>Primeiro <a href=\"?go=config\" class=tab-g>configure</a> Sua aplica��o (init.php deve possuir chmod como 0777).</li>
			<li>Para criar um backup apenas clique <a href=\"?go=create\" class=tab-g>Criar um Backup</a>.</li>
			<li>Voc� pode <a href=\"?go=list\" class=tab-g>listar</a> Restaurar backup's dispon�veis.</li>
			</ul>
			n�o esque�a de proteger o diret�rio de \"backup\", e � recomend�vel n�o ser um diret�rio acess�vel pela web, onde o sistema cria uma copia segura do banco de dados.
			<br/><br/>
			Database usada : <b>".$GonxAdmin["dbname"]."</b>
			";
			
$GONX["installed"] = " est� instalado";
$GONX["notinstalled"] = " n�o est� instalado";
$GONX["compression"] = "M�dulo de compress�o do PHP";
$GONX["autherror"] = " Por favor entre com um nome de usu�rio correto e senha para acessa esta �rea";

$GONX["home"] = "Home";
$GONX["create"] = "Criar um Backup";
$GONX["list"] = "Listar/Importar backup";
$GONX["optimize"] = "Otimizar";
$GONX["monitor"] = "Monitorar";
$GONX["logout"] = "Logout";
			
$GONX["backup"] = "Backup de";
$GONX["iscorrectcreat"] = "foi criado em";
$GONX["iscorrectimport"] = "foi importado para o banco de dados";
$GONX["selectbackupfile"] = "&nbsp;&nbsp;&nbsp;&nbsp;seleciona por backups dispon�veis";
$GONX["importbackupfile"] = "Ou faz upload do arquivo aqui";
$GONX["delete"] = "Apagar";
$GONX["nobckupfile"] = "N�o existem arquivos de backup dispon�veis. Clique em <a href=\"?go=create\" class=tab-g>Criar um backup</a> para criar um backup do banco de dados";
$GONX["importbackup"] = "Importar arquivo de Backup";
$GONX["configure"] = "Configurar";
$GONX["configureapp"] = "Configurar sua applica��o </b><i>(Chmod 0777 init.php antes de usar esta aplica��o)</i>";
$GONX["totalbackupsize"] = "Tamanho total do diret�rio de backup";
$GONX["chgdisplayorder"] = "Mudar a ordem de exibi��o";
$GONX["next"] = "Pr�ximo";
$GONX["prev"] = "Anterior";

$GONX["structonly"] = "Estrutura somente";
$GONX["checkall"] = "Marcar todos";
$GONX["uncheckall"] = "Desmarcar todos";
$GONX["tablesmenuhelp"] = "<u>Help</u>  : Se voc� ver <label>labels</label> ele permite que fa�a mudan�as nas tabelas.";
$GONX["backupholedb"] = "clique aqui para criar uma regra de backup para o banco de dados :";
$GONX["selecttables"] = "Ou selecione as tabelas de backup agora :";

$GONX["ignoredtables"] = "Tabela iginorada";
$GONX["reservedwords"] = "Palavra reservada do MySQL";

?>