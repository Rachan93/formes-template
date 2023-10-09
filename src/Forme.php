<?php

namespace Opmvpc\Formes;

abstract class Forme {
    protected $couleur;

    public function __construct($couleur = '#FFFFFF') {
        $this->couleur = $couleur;
    }

    public function getCouleur() {
        return $this->couleur;
    }
}
