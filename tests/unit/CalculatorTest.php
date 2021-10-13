<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function test_can_set_single_operation(){
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([10,5]);

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperation($addition);

        $this->assertCount(1,$calculator->getOperations());

    }

    public function test_can_set_multiple_operations(){
        $addition1 = new \App\Calculator\Addition;
        $addition1->setOperands([10,5]);

        $addition2 = new \App\Calculator\Addition;
        $addition2->setOperands([10,5]);

        $calculator = new App\Calculator\Calculator; 
        $calculator->setOperations([$addition1,$addition2]);
        $this->assertCount(2,$calculator->getOperations());
    }

    public function test_ingnoring_operation_if_not_instance_of_operation_interface()
    {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([10,5]);

        $calculator = new App\Calculator\Calculator; 
        $calculator->setOperations([$addition,'cats','dogs']);

        $this->assertCount(1,$calculator->getOperations());

    }

    /** @test */
    public function can_calculate_result()
    {
        $addition= new \App\Calculator\Addition;
        $addition->setOperands([5,10]);

         $calculator = new App\Calculator\Calculator; 
        $calculator->setOperation($addition);

        $this->assertEquals(15,$calculator->calculation());
    }

    /** @test */
    public function can_calculate_multiple_result()
    {
        $addition= new \App\Calculator\Addition;
        $addition->setOperands([5,10]);

        $division= new \App\Calculator\Division;
        $division->setOperands([250,10]);

        $calculator = new App\Calculator\Calculator; 
        $calculator->setOperations([$addition,$division]);

        $this->assertIsArray($calculator->calculation());
        $this->assertEquals(15,$calculator->calculation()[0]);
        $this->assertEquals(25,$calculator->calculation()[1]);
    }
}