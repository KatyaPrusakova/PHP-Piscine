<?php
    class Tyrion {
        public function sleepWith($person) {
            if ($person instanceof Jaime or $person instanceof Cersei)
                print("Not event if I'm drunk !".PHP_EOL);
            else if ($person instanceof Sansa)
                print("Let's do this.".PHP_EOL);
        }
    }
?>