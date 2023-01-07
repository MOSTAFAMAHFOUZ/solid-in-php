<?php

require_once 'HtmlPrint.php';
require_once 'JsonPrint.php';
require_once 'XMLPrint.php';
require_once 'PrintData.php';

$print = new PrintData();
echo $print->doPrint("xml");