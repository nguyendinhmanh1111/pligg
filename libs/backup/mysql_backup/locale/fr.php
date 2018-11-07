<?php

/**
 * MySQL Backup Pro French translation
 * 
 * @package GONX
 * @author Ben Yacoub Hatem <hatem@php.net>
 * @copyright Copyright (c) 2004
 * @version $Id$ - 08/04/2004 16:20:30 - fr.php
 * @access public
 **/
 
// Application title
$GONX["title"] = "&nbsp;&nbsp;MySQL Backup Pro� ";


$GONX["deleteconfirm"] = ' Etes vous sur de vouloir supprimer cette copie ?\nCliquer sur OK pour confirmer.';

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
$GONX['homepage'] = "<b>".$GONX["title"]."</b> est une solution compl�te pour les copies de sauvegardes de bases de donn�es MySQL.<br/>
			L'utilisation de l'application est assez simple :
			<ul>
			<li>En premier lieu <a href=\"?go=config\" class=tab-g>configurer</a> votre application (init.php doit �tre accessible en �criture - chmod 0777).</li>
			<li>Pour cr�er une backup veuillez cliquer sur <a href=\"?go=create\" class=tab-g>Cr�er une sauvegarde</a>.</li>
			<li>Vous pouvez <a href=\"?go=list\" class=tab-g>lister</a> les copies de sauvegardes disponible et restaurer la version que vous voulez.</li>
			</ul>
			Attention !! Vous devez prot�ger le r�pertoire \"backup\", et il sera pr�f�rable d'utiliser un r�pertoire non-web et v�rifier que ce fichier
			est accessible en lecture �criture (chmod 666).
			<br/><br/>
			Base de donn�es utilis�e : <b>".$GonxAdmin["dbname"]."</b>
			";
			
$GONX["installed"] = " est install�";
$GONX["notinstalled"] = " n'est pas install�";
$GONX["compression"] = "Compression PHP Modules";
$GONX["autherror"] = " Veuillez entrer un login et mot de passe correct pour acc�der � cette page";

$GONX["home"] = "Accueil";
$GONX["create"] = "Cr�er copie";
$GONX["list"] = "Lister / Importer";
$GONX["optimize"] = "Optimiser";
$GONX["monitor"] = "Moniteur";
$GONX["logout"] = "D�connecter";
			
$GONX["backup"] = "Copie de sauvegarde de ";
$GONX["iscorrectcreat"] = "est correctement cr�e dans";
$GONX["iscorrectimport"] = "est correctement cr�e import� dans la base de donn�es";
$GONX["selectbackupfile"] = "&nbsp;&nbsp;&nbsp;&nbsp;Veuillez choisir la copie de sauvegarde � importer depuis cette liste";
$GONX["importbackupfile"] = "Ou bien t�l�charger votre fichier de sauvegarde";
$GONX["delete"] = "Supprimer";
$GONX["nobckupfile"] = "Aucune copie de sauvegarde disponible. Cliquer sur <a href=\"?go=create\" class=tab-g>Cr�er une sauvegarde</a> pour sauvegarder votre BD";
$GONX["importbackup"] = "Importer une copie de sauvegarde";
$GONX["importbackupdump"] = "Utiliser MySQL Dump";
$GONX["configure"] = "Config";
$GONX["configureapp"] = "Configurer votre application </b><i>(Chmod 0777 init.php avant d'utiliser cette fonction)</i>";
$GONX["totalbackupsize"] = "Taille totale du r�pertoire de sauvegarde ";
$GONX["chgdisplayorder"] = "Modifier l'ordre d'affichage";
$GONX["next"] = "Suivante";
$GONX["prev"] = "Pr�c�dente";

$GONX["structonly"] = "Structure uniquement";
$GONX["checkall"] = "S�lectionner tout";
$GONX["uncheckall"] = "S�lectionner aucun";
$GONX["tablesmenuhelp"] = "<u>Aide</u>  : Si vous trouvez <label>un label</label> �a veut dire qu'il y a eu des changements dans cette table.";
$GONX["backupholedb"] = "Cliquez ici pour cr�er une copie de sauvegarde de la base enti�re :";
$GONX["selecttables"] = "Ou bien s�lectionnez les tables � sauvegarder :";

$GONX["ignoredtables"] = "Table ignor�e ";
$GONX["reservedwords"] = "Mot MySQL r�serv�";

?>