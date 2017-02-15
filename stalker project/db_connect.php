<?php
//коннектимся к бд
$connect = mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("data_base") or die(mysql_error());