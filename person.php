<?php



class Person{

    var $first_name;
    var $last_name;

    var $gender;

    var $is_employed = false;

    var $country ; 


    function fullName(){
        return "full name is: " . ($this->first_name . " " . $this->last_name);
    }



    function sayHello(){
        return "Hello world";
    }

    public function checkFromGender($gender){
        if ($gender == "male") {
            return "Your gender is male";
        }else{
            return "Your gender is female";
        }
    }

}