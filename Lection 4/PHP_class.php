<?php
    class User {
        public $name;
        public $date;

        public function show(){
            echo $this->name, " ", $this->date;
        }
    }


    //code
    $alevtina = new User; //новый объект, который мы будем собирать по полям класса
    $alevtina->name = "Алевтина"; //в поле name вписываем алевтина
    $alevtina->date = 10;

    $alevtina->show(); // запускаем функцию, которая покажем нам два значения с полей




