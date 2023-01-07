<?php 


/* 
   Liskov's Substitution Principle says that each class that inherits from another can be used as its 
    parent without having to know the differences between them.
*/


require_once 'File.php';
require_once 'ReadOnlyFile.php';

$file = new ReadOnlyFile();
function typeInFile($file,$data){
    $file->write($data);
}
typeInFile($file,"new data to write");


// function readFromFile($file,$nameOfFile){
//     $file->read($nameOfFile);
// }

// readFromFile($file, "hamada.php");