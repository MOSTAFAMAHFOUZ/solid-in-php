<?php
namespace Liskove;
use Liskove\Employee;

class Manager extends Employee{

    private $salary;

    public function tax(){
        return $this->salary - ($this->salary * 0.15);
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