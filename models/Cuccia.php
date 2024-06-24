<?php

include __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto {
    public function getDettagli() {
        return parent::getDettagli() . " - (Cuccia per animali)";
    }
}