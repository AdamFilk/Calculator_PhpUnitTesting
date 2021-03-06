<?php

namespace App\Calculator;

class Calculator {
    protected $operations=[];

    public function setOperation(OperationInterface $operation){
        $this->operations[] = $operation;
    }
    public function setOperations(array $operations){
        $filtered_operations = array_filter($operations, function($operation){
            return $operation instanceof OperationInterface;
        });
        $this->operations = array_merge($this->operations,$filtered_operations);
    }
    public function getOperations(){
        return $this->operations;
    }
    public function calculation()
    {
        if(count($this->operations) > 1){
         return array_map(function($operation){
            return  $operation->calculate(); 
          },$this->operations);
        }
        return $this->operations[0]->calculate();
    }
}