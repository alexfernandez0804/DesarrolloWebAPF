<?php
class OperacionesCadena {
    public $cadena;

    public function __construct($cadena) {
        $this->cadena = $cadena;
    }

    public function invertir() {
        $invertida = '';
        for ($i = strlen($this->cadena) - 1; $i >= 0; $i--) {
            $invertida .= $this->cadena[$i];
        }
        return $invertida;
    }

    public function mayuscula() {
        $resultado = '';
        for ($i = 0; $i < strlen($this->cadena); $i++) {
            $letra = $this->cadena[$i];
            if ($letra >= 'a' && $letra <= 'z') {
                $letra = chr(ord($letra) - 32);
            }
            $resultado .= $letra;
        }
        return $resultado;
    }

    public function minuscula() {
        $resultado = '';
        for ($i = 0; $i < strlen($this->cadena); $i++) {
            $letra = $this->cadena[$i];
            if ($letra >= 'A' && $letra <= 'Z') {
                $letra = chr(ord($letra) + 32);
            }
            $resultado .= $letra;
        }
        return $resultado;
    }
}
?>
