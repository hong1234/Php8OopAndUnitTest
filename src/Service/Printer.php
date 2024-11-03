<?php
namespace Demo\Service;

use Demo\Entity\PrintAble;

class Printer
{
    public $printAbles = array();

    public function add(PrintAble $item){
        $this->printAbles[] = $item;
    }

    public function getTop(){
        return $this->printAbles[count($this->printAbles)-1];
    }

    public function printAll(){
        foreach($this->printAbles as $item){
            $item->printMySelf();
        }
    }

    public function printAllOnConsole(){
        foreach($this->printAbles as $item){
            $item->printMySelfOnConsole();
        }
    }
}




