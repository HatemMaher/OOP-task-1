<?php 


class Employee{

    var $name;
    var $email;
    var $salary;
    var $is_manger = false;
    var $address;

    function checkSalary(){
        if (($this->salary) >= 9000) {
            echo "fw-bold text-primary";
        }else{
            echo "fst-italic text-danger";
        }
    }

    function checkFromManger(){
        if($this->is_manger){
            echo "Manger";
        }else{
            echo "Not Manger";
        }
    }

    function mangerTextColor(){
        if($this->is_manger){
            echo "text-success";
        }else{
            echo "text-danger";
        }
    }
}