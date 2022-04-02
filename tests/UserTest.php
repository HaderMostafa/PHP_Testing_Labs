<?php 
use Lab\User;

class UserTest extends PHPUnit\Framework\TestCase {

    public static $user;

    public static function  setUpBeforeClass():void{
    //    static member "self not this"
    //    object to access name & email func
        self::$user=new User();
    }

    public function test_Get_name(){
        return $this->assertTrue(self::$user->name()=="samy");
    }

    public function test_Set_name(){
        return $this->assertTrue(self::$user->name('ahmed')=='ahmed');
    }

    public function test_get_email(){
        return $this->assertTrue(self::$user->email()=='samy@gmail.com');
    }

    public function test_set_email(){
        return $this->assertTrue(self::$user->email('ahmed@yahoo.com')=='ahmed@yahoo.com');
    }
}
