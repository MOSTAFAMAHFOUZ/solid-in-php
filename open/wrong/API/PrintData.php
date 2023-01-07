<?php 



class PrintData{


    public function doPrint($type){
        if($type == "html"){
            $print = new HtmlPrint;
            return $print->printData();
        }elseif($type == "json"){
            $print = new JsonPrint();
            return $print->printJsonData();
        }elseif($type == "xml"){
            $print = new XMLPrint();
            return $print->printXMLData();
        }
    }
}