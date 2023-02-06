<?php

    abstract class Country{
        protected $slogan;
        public $hello;
        public function getSlogan(){
            return $this->slogan;
        }
        public function setSlogan($slogan){
            $this->slogan = $slogan;
        }
        abstract public function sayHello();
        
    }

    trait Active
        {
            public function defindYourSelf(){
                return get_class($this);
            }
        }

    interface Boss{
        public function checkValidSlogan();
    }
    class EnglandCountry extends Country implements Boss{

        use Active;
        public function sayHello()
        {
            echo "Hello";
        }
        public function checkValidSlogan()
        {
            $slogan = $this->getSlogan();
            $a = 'England';
            $b = 'English';
            if(strstr($slogan, $a ) || strstr($slogan, $b)){
                return true;
            }else{
                return false;
            }
        }
    }
    class VietnamCountry extends Country implements Boss{
        use Active;
        public function sayHello()
        {
            echo "Xin chao";
        }
        public function checkValidSlogan()
        {
            $slogan = $this->getSlogan();
            $a = 'Vietnam';
            $b = 'hust';
            if(strstr($slogan, $a) && strstr($slogan, $b)){
                return true;
            }else{
                return false;
            }
        }
    }
    $englandCountry = new EnglandCountry();
    $vietnamCountry = new VietnamCountry();
    $englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');
    $vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');

    $englandCountry->sayHello(); // Hello
    echo "\n";
    $vietnamCountry->sayHello(); // Xin chao
    echo "\n";

    var_dump($englandCountry->checkValidSlogan()); // true
    echo "\n";
    var_dump($vietnamCountry->checkValidSlogan()); // false
    echo "\n";

    echo 'I am ' . $englandCountry->defindYourSelf(); 
    echo "\n";
    echo 'I am ' . $vietnamCountry->defindYourSelf(); 

?>