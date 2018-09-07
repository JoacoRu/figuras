<?php 

class Circulo extends Figura
{
    protected $diametro;
    protected $radio;
    protected $perimetro;
    protected $area;

    public function __construct(Int $diametro, Int $radio = null, Int $perimetro = null, Int $area = null)
    {
        $this->diametro = $diametro;
        $this->radio = $this->calcularRadio();
        $this->perimetro = $this->calcularPerimetro();
        $this->area = $this->calcularArea();
    }

    public function getDiametro()
    {
        return $this->diametro;
    }

    public function calcularRadio()
    {
        $resultado = $this->diametro / 2;
        return $resultado;
    }

    public function calcularPerimetro()
    {
        $cuenta = 3.1416 * $this->diametro;
        return $cuenta;
    }

    public function calcularArea()
    {
        $cuenta = $this->perimetro * $this->radio;
        $resultado = $cuenta / 2;

        return $resultado;
    }
}


?>