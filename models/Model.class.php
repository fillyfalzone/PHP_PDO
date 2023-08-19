<?php
    //create the abstract class model which cannot be instantiated, but only child classes will be instantiated
    abstract class Model{
        private static $pdo; // we define it in static so that it is accessible by all child classes

        //connection to database 
        private static function setBdd(){
            self::$pdo = new PDO("mysql:host=localhost;dbname=books;charset=utf8", "root", "" );
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //parameter element to manage errors
        }

        //coonection to database will be accesible  ionly from child classes
        protected function getBdd(){
            if(self::$pdo === NULL){
                self::setBdd();
            }
            return self::$pdo;
        } 
    }
?>