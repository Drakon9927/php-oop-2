<?php

include __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto {
    public function getDettagli() {
        return parent::getDettagli() . " - (Gioco per animali)";
    }
}