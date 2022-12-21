<?php
    // OBJECT ORIENTED PROGRAMING

    /*
        From PHP5 onwards you can write PHP in either a procedural or 
        object oriented way. OOP cinsits of classes that can hold 
        'properties' and 'methods'. Objects can be created from classes.
    
    */

    class User {
        // Properties are attributes that belong to a class

        public $name;
        public $email;
        public $password;

        // A constructor is a method that runs when an object is created

        public function __construct($name, $email, $password) {
            $this -> name = $name;
            $this -> email = $email;
            $this -> password = $password;
        }

        // Method is a function that belongs to a 
        
        function set_name ($name) {
            $this -> name = $name;
        }

        function get_name () {
            return $this -> name;
        }
    }

    // Instantiate a user object

    $user1 = new User('Owuor', 'owuor@mails.com', 'password');

    $user1 -> name = 'Owuor';
    $user1 -> email = 'owuor@mails.com';
    $user1 -> password = 'password';

    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by 
    // inheriting classes

    echo $user1 -> email . '<br>';

    $user1 -> set_name('Chris');

    echo $user1 -> name . '<br>';

    $user2 = new User('Fix', 'fixit@mails.com', 'passcode');
    $user2 -> set_name('Fix');

    echo $user2 -> name . '<br>'; 
    echo $user2 -> password . '<br>';

    echo $user1 -> get_name() . '<br>';

    // INHERITANCE

    class Employee extends User {
        public function __construct($name, $email, $password, $title) {
            parent::__construct($name, $email, $password);
            $this -> title = $title;
        } 

        public function get_title() {
            return $this -> title;
        }
    }

    // Employee Intance

    $employee1 = new Employee ('Sara', 'sara@mails.com', 'password', 'manager');
    echo $employee1 -> get_title() . '<br>';
?>