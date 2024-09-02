<?php
class Pila {
private $elemento =[];
private $tope;
private $max;

public function __construct($max)
{
    $this->$max=$max;
    $this->$tope= 0;
}
public  function insertar($elem)
{
    if($thi->$max==$this->$tope)
    {
        echo "pila llena";
    
    }
    else
    {
        $this->elemento($this->$tope);
        $this->$tope++;
    }
}
public  function eliminar()
{
    if($thi->$tope==0)
    {
        echo "pila vacia";
    
    }
    else
    {
        $elem=elemento[$this->$tope];
        $this->$tope--;
        return $elem;
    }
}
public function mostrar()
{
    for($i=0;$i<$this->$tope;$i++)
    {
        echo $this->elemento[$i].'<br>';
    }
}

}

