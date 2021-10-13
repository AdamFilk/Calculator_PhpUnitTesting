<?php

class AdditionTest extends \PHPUnit\Framework\TestCase{

    public function test_add_given_operation(){
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([5,10]); 
        $this->assertEquals(15,$addition->calculate()); 
    }

    public function test_no_operands_given_throw_exception_while_calculating(){
       
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([]); 
        $addition->calculate();
    }
}