<?php
namespace Lab;

class User {
	private $name, $email;

	public function __construct() {
		$this->name = 'samy';
		$this->email = 'samy@gmail.com';
	}

    // default value 
    public function name($user_name="samy") {

        if ($user_name){
            //set value
            $this->name = $user_name;
        }
	    //get value
        return $this->name;
	}

    public function email($user_email="samy@gmail.com") {

        if ($user_email){
            //set value
            $this->email= $user_email;
        }
	    //get value
        return $this->email;
	}

    // private function set_name($uname){
    //     if ($uname="samy"){
    //         $this->name = $uname; 
    //     }
    // }

    // private function set_email($umail){
    //     if ($umail="samy@gmail.com"){
    //         $this->email = $umail; 
    //     }
    // }

    // private function get_name(){
    //   return $this->name; 
    // }

    // private function get_email(){
    //    return $this->email; 
    // }
}
