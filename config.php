<?php 

$db = new PDO('mysql:host=localhost;dbname=junior_hackers;','root','root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
session_start();

?>