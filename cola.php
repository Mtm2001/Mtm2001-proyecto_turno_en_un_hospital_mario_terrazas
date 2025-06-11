<?php
class Cola {
    private $elementos = [];

    public function __construct($elementos = []) {
        $this->elementos = $elementos;
    }

    public function encolar($paciente) {
        array_push($this->elementos, $paciente);
    }

    public function desencolar() {
        return array_shift($this->elementos);
    }

    public function obtenerCola() {
        return $this->elementos;
    }

    public function estaVacia() {
        return empty($this->elementos);
    }
}
?>
