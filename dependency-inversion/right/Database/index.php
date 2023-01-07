<?php

require_once 'DatabaseInterface.php';
require_once 'MysqlDB.php';
require_once 'SqlliteDB.php';
require_once 'DB.php';


// $db = new DB(new MysqlDB());
$db = new DB(new SqlliteDB());
echo $db->connection();