<?php


require_once 'ExportPdf.php';
require_once 'ExportCsv.php';
require_once 'ExportFile.php';


$file = new ExportFile(new ExportCsv());
$file->exportTool()->downloadPDF("C://new-path/new.txt");