<?php
    class NightsWatch implements IFighter {
        public function recruit($person) {
            if ($person instanceof IFighter)
                $person->fight();
        }
        public function fight() {
        }
    }
?>