<?
$db = mysql_connect("localhost","root","");
mysql_select_db("data_base",$db);

$text = $_POST['text_chat'];
$result = mysql_query("INSERT INTO ajax_chat (text) VALUES ('".$text."')",$db);

?>