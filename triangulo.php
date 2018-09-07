<?php
class Triangulo extends Figura
{
    protected $ladoUno;
    protected $perimetro;
    protected $area;
    public function __construct(Int $ladoUno, Int $perimetro = null, Int $area = null)
    {
        $this->ladoUno = $ladoUno;
        $this->perimetro = $this->calcularPerimetro();
        $this->area = $this->calcularArea();
    }

    public function getLado()
    {
        return $this->ladoUno;
    }

    public function setLado($lado)
    {
        $this->ladoUno = $lado;
    }

    public function calcularPerimetro()
    {
        $resultado= $this->ladoUno * 3;
        return $resultado;
    }

    public function calcularArea()
    {
        $cuenta = 1.7320508075 / 4 ;
        $cuentaDos = $this->ladoUno * $this->ladoUno;
        $resultado = $cuenta * $cuentaDos;

        return $resultado;
    }


}


?>