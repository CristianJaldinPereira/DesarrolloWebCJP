<?php
class _operaciones
{
    private $a, $b, $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function calcularSuma()
    {
        $suma = $this->a + $this->b + $this->c;
        return $suma;
    }
    public function calcularMayor()
    {
        if (($this->a > $this->b) && ($this->a > $this->c)) {
            return $this->a;
        } 
        
        if(($this->b > $this->c) && ($this->b > $this->a)){
            return $this->b;
        }

        if(($this->c > $this->b) && ($this->c > $this->a)){
            return $this->c;
        }
    }

    /*public function mostrarCalculos(){
    }*/
}
?>
