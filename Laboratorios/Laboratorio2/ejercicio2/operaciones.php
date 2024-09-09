<?php
session_start();

class operaciones {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calcularSuma() {
        return $this->a + $this->b + $this->c;
    }

    public function calcularMayor() {
        return max($this->a, $this->b, $this->c);
    }
}

if (isset($_SESSION['a']) && isset($_SESSION['b']) && isset($_SESSION['c'])) {
    $operaciones = new Operaciones($_SESSION['a'], $_SESSION['b'], $_SESSION['c']);
    
    $_SESSION['suma'] = $operaciones->calcularSuma();
    $_SESSION['mayor'] = $operaciones->calcularMayor();

    header('Location: resultados.php');
    exit();
}
?>
