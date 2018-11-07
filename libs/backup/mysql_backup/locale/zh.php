<?php

/**
 * MySQL Backup Pro Chinese translation
 * 
 * @package GONX
 * @author Ben Yacoub Hatem <hatem@php.net>
 * @author Translation by Avenger <avenger@php.net> website : http://www.phpe.net/
 * @copyright Copyright (c) 2004
 * @version $Id$ - 08/04/2004 16:20:30 - zh.php
 * @access public
 **/
 
// Application title
$GONX["title"] = "MySQL Backup Pro&trade;";

$GONX["deleteconfirm"] = 'ȷ��Ҫɾ�����ļ���\n\n���ȷ�ϰ�ť������';

$GONX["header"] = '<html>
<head>
<title>'.$GONX["title"].'</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
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
$GONX['homepage'] = "<b>".$GONX["title"]."</b> ��һ����� Mysql ���ݿⱸ�ݼ��ָ����������������<br/> <br />
			ʹ�ò��裺
			<ul>
			<li>������Ҫ�����ĳ������ <a href=\"?go=config\" class=tab-g>����</a> (linux�� init.php ��������ҪΪ 0777)��</li>
			<li>Ҫ����һ�����ݣ����� <a href=\"?go=create\" class=tab-g>��������</a>��</li>
			<li><a href=\"?go=list\" class=tab-g>�������</a> �鿴�Ѿ����ڵ����ݿⱸ�ݡ�</li>
			</ul>
			�����˱������� \"backup\" Ŀ¼��һ���ȽϺõİ취�ǽ���һ���� WEB Ŀ¼ (�޷�ͨ��WEB����) �����������ı������ݡ�
			<br/><br/>
			��ǰ���ݿ�: <b>".$GonxAdmin["dbname"]."</b>
			";
			
$GONX["installed"] = " �Ѿ�����װ";
$GONX["notinstalled"] = " ��û�а�װ";
$GONX["compression"] = "PHP ѹ��ģ��";
$GONX["autherror"] = " ��������ȷ����֤��Ϣ";

$GONX["home"] = "��ҳ";
$GONX["create"] = "��������";
$GONX["list"] = "�����б�/����";
$GONX["optimize"] = "�Ż����ݿ�";
$GONX["monitor"] = "���ݿ�����";
$GONX["logout"] = "ע��";
			
$GONX["backup"] = "��������";
$GONX["iscorrectcreat"] = "�ɹ�����";
$GONX["iscorrectimport"] = "�ɹ�������";
$GONX["selectbackupfile"] = "&nbsp;&nbsp;&nbsp;&nbsp;���������ѡ���Ѿ����ڵı������ݽ��лָ�";
$GONX["importbackupfile"] = "�����������ϴ����صı�������";
$GONX["delete"] = "ɾ��";
$GONX["nobckupfile"] = "û���κα������ݴ��ڡ� ��� <a href=\"?go=create\" class=tab-g>��������</a> ������һ���µı�����Ŀ";
$GONX["importbackup"] = "���뱸���ļ�";
$GONX["importbackupdump"] = "ʹ�� MySQL Dump";
$GONX["configure"] = "��ʼ������";
$GONX["configureapp"] = "��ʼ������ </b><i>(��ȷ�� init.php ������Ϊ��д [0777])</i>";
$GONX["totalbackupsize"] = "����Ŀ¼�ܴ�С ";
$GONX["chgdisplayorder"] = "����";
$GONX["next"] = "��һ��";
$GONX["prev"] = "��һ��";

$GONX["structonly"] = "���ṹ";
$GONX["checkall"] = "ȫѡ";
$GONX["uncheckall"] = "ȡ��ȫѡ";
$GONX["tablesmenuhelp"] = "<u><b>��ʾ</b></u>  : ��������� <label>labels</label> ��־��������Щ���ݿⴴ�����б����¹���";
$GONX["backupholedb"] = "�������������������������:";
$GONX["selecttables"] = "����������ѡ����Ҫ���ݵı�:";

$GONX["ignoredtables"] = "���Եı�";
$GONX["reservedwords"] = "Mysql ������";

?>