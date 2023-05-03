<?php

    class room
    {
        public $chair;
        private $almirah;
        public $window;
        public $door;
        public $switches;
        function door_open(){
            echo "door is open<br>";
        }
        function door_close(){
            echo "door is close<br>";
        }
        protected function almirah_open()
        {
            echo "almirah is opened<br>";
        }
        protected function almirah_close()
        {
            echo "almirah is locked<br>";
        }
        function switches_on(){
            echo "switch on<br>";
        }
        function switches_off(){
            echo "switch off<br>";
        }
    }

    class waiting_room extends room{
        
        function almirah_o(){
            $this->almirah_open();
        }

        function almirah_c(){
            $this->almirah_close();
        }
    }

    $obj = new waiting_room();

    $obj->switches_on();
    $obj->door_open();
    $obj->almirah_o();
    $obj->chair = 4;
    $obj->window = 2;    

?>