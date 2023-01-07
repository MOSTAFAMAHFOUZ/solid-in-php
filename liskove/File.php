<?php 



class File{

    public function read($file){
        echo "read from parent file";
    }


    public function write($data){
        echo "write into file  - $data";
    }
}