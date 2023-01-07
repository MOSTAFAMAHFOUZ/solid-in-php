<?php


require_once 'ExportFileInterface.php';
require_once 'ExportPdf.php';
require_once 'ExportCsv.php';
require_once 'ExportFile.php';
require_once 'ExportXml.php';


$file = new ExportFile(new ExportXml());
$file->export("file path");