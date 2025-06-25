<?php
class Cola {
    private $elementos = [];
    private $historial = [];

    public function __construct($elementos = [], $historial = []) {
        $this->elementos = $elementos;
        $this->historial = $historial;
    }

    public function encolar($paciente) {
        array_push($this->elementos, $paciente);
    }

    public function desencolar() {
        $paciente = array_shift($this->elementos);
        if ($paciente) {
            array_push($this->historial, $paciente);
        }
        return $paciente;
    }

    public function restaurarUltimo() {
        $paciente = array_pop($this->historial);
        if ($paciente) {
            array_unshift($this->elementos, $paciente);
        }
        return $paciente;
    }

    public function obtenerCola() {
        return $this->elementos;
    }

    public function obtenerHistorial() {
        return $this->historial;
    }

    public function estaVacia() {
        return empty($this->elementos);
    }
}
?>
