<?php

include __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto {
    public function getDettagli() {
        return parent::getDettagli() . " - (Cibo per animali)";
    }
}