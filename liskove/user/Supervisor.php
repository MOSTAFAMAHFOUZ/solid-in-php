<?php
namespace Liskove;

use Liskove\Employee;

class Supervisor extends Employee{

    private $salary;

    public function tax(){
        return $this->salary - ($this->salary * $this->salary /100);
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