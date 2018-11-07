<?php

/**
 * MySQL Backup Pro Swedish translation
 * 
 * @package GONX
 * @author Ben Yacoub Hatem <hatem@php.net>
 * @copyright Copyright (c) 2004
 * @version $Id$ - 08/04/2004 16:20:30 - en.php
 * @access public
 * @Swedish localization by Bj�rn Mildh <bjorn at mildh dot se>
 **/
 
// Application title
$GONX["title"] = "&nbsp;&nbsp;MySQL Backup Pro� ";

$GONX["deleteconfirm"] = ' Vill du verkligen radera den h�r filen?\nKlicka OK f�r att bekr�fta.';

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
$GONX['homepage'] = "<b>".$GONX["title"]."</b> �r en komplett l�sning f�r att s�kerhetskopiera och �terst�lla en MySQL-databas.<br/>
			Det �r enkelt att anv�nda detta program:
			<ul>
			<li>B�rja med dina <a href=\"?go=config\" class=tab-g>inst�llningar</a> (init.php ska vara chmod till 0777).</li>
			<li>F�r att skapa en s�kerhetskopia, klicka p� <a href=\"?go=create\" class=tab-g>Skapa en s�kerhetskopia</a>.</li>
			<li>Du kan <a href=\"?go=list\" class=tab-g>lista</a> tillg�ngliga s�kerhetskopior f�r att �terst�lla till den kopia du vill ha.</li>
			</ul>
			Gl�m inte att skydda \"backup\"-katalogen. Det b�sta �r om du skapar den utanf�r webb-katalogen d�r systemet kan skapa en skyddade kopior av databasen.
			<br/><br/>
			Anv�nd databas: <b>".$GonxAdmin["dbname"]."</b>
			";
			
$GONX["installed"] = " �r installerad";
$GONX["notinstalled"] = " �r inte installerad";
$GONX["compression"] = "PHP kompressions-moduler";
$GONX["autherror"] = " Fyll i korrekt anv�ndarnamn och l�senord f�r att forts�tta";

$GONX["home"] = "Hem";
$GONX["create"] = "Skapa en s�kerhetskopia";
$GONX["list"] = "Lista/Importera s�kerhetskopior";
$GONX["optimize"] = "Optimera";
$GONX["monitor"] = "Detaljer";
$GONX["logout"] = "Logga ut";
			
$GONX["backup"] = "S�kerhetskopia fr�n";
$GONX["iscorrectcreat"] = "blev korrekt skapad i";
$GONX["iscorrectimport"] = "blev korrekt importerad i databasen";
$GONX["selectbackupfile"] = "&nbsp;&nbsp;&nbsp;&nbsp;V�lj n�gon av de tillg�ngliga s�kerhetskopiorna att �terst�lla fr�n";
$GONX["importbackupfile"] = "Eller ladda upp den h�r";
$GONX["delete"] = "Radera";
$GONX["nobckupfile"] = "Ingen s�kerhetskopia tillg�nglig. V�lj <a href=\"?go=create\" class=tab-g>Skapa s�kerhetskopia</a> f�r att skapa en s�kerhetskopia av din databas";
$GONX["importbackup"] = "Importera s�kerhetskopia fr�n fil";
$GONX["importbackupdump"] = "Anv�nd MySQL Dump";
$GONX["configure"] = "Inst�llningar";
$GONX["configureapp"] = "G�r inst�llningar f�r ditt program </b><i>(init.php m�ste vara chmod 0777 innan denna funktion anv�nds)</i>";
$GONX["totalbackupsize"] = "Total storlek av alla s�kerhetskopior ";
$GONX["chgdisplayorder"] = "�ndra listans sortering";
$GONX["next"] = "N�sta";
$GONX["prev"] = "F�rra";

$GONX["structonly"] = "Endast struktur";
$GONX["checkall"] = "Markera alla";
$GONX["uncheckall"] = "Avmarkera alla";
$GONX["tablesmenuhelp"] = "<u>Hj�lp</u>  : om du ser <label>rubriker</label> betyder det att tabellen �ndrats.";
$GONX["backupholedb"] = "Klicka h�r f�r att skapa en s�kerhetskopia av hela databasen:";
$GONX["selecttables"] = "Eller v�lj de tabeller du vill s�kerhetskopiera h�r:";

$GONX["ignoredtables"] = "Ignorerade tabeller";
$GONX["reservedwords"] = "Reserverade ord f�r MySQL";

?>