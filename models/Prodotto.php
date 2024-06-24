<?php

include __DIR__ . '/Categoria.php';

class Prodotto {
    public $id;
    public $nome;
    public $prezzo;
    public $descrizione;
    public $categoria;

    public function __construct($id, $nome, $prezzo, $descrizione, Categoria $categoria) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
        $this->categoria = $categoria;
    }

    public function getDettagli() {
        return "<h3>{$this->nome}</h3>
                <p>{$this->descrizione}</p>
                <strong>€{$this->prezzo}</strong>
                <em>{$this->categoria->getNome()}</em>";
    }
}