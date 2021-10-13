<?php

class  DivisionTest extends PHPUnit\Framework\TestCase{

    public function test_divide_given_operands(){
        $dvision = new \App\Calculator\Division;
        $dvision->setOperands([100,2]); 
        $this->assertEquals(50,$dvision->calculate()); 
    }

    public function test_remove_division_by_given_zeroes(){
        $dvision = new \App\Calculator\Division;
        $dvision->setOperands([10,0,0,5,0]);

        $this->assertEquals(2,$dvision->calculate());
    }
}