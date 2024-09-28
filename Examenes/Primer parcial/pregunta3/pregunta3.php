<?php

class pregunta3 {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
        setcookie('a', $a, time() + 3600);
        setcookie('b', $b, time() + 3600);
    }

    public function sumar() {
        $this->c = $this->a + $this->b;
        setcookie('c', $this->c, time() + 3600);
        return $this->c;
    }

    public function restar() {
        $this->c = $this->a - $this->b;
        setcookie('c', $this->c, time() + 3600);
        return $this->c;
    }

    public function multiplicar() {
        $this->c = $this->a * $this->b;
        setcookie('c', $this->c, time() + 3600);
        return $this->c;
    }

    public function dividir() {
        if ($this->b != 0) {
            $this->c = $this->a / $this->b;
            setcookie('c', $this->c, time() + 3600);
            return $this->c;
        } else {
            return "Error";
        }
    }
}
?>
