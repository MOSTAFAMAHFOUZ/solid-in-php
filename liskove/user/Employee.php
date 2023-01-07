<?php 

namespace Liskove;


class Employee{

    private $salary;

    public function tax(){
        return $this->salary - ($this->salary * 0.10);
    }



    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}