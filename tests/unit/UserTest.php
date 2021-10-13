<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
   public function testGetFirstName(){
       $user = new \App\Model\User;
       $user->setFirstName('Billy');
       $this->assertEquals($user->getFirstName(),'Billy');
   }
   public function testGetLastName(){
       $user = new \App\Model\User;
       $user->setLastName('Billy');
       $this->assertEquals($user->getLastName(),'Billy');
   }
   public function testGetFullName(){
       $user = new \App\Model\User;
       $user->setFirstName('Billy');
       $user->setLastName('Grant');
       $this->assertEquals($user->getFullName(),'Billy Grant');
   }
}