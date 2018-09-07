<?php 

class Rectangulo extends Figura
{
    protected $largo;
    protected $ancho;
    protected $perimetro;
    protected $area;

    public function __construct(Int $largo, Int $ancho, Int $perimetro = null, Int $area = null)
    {
        $this->largo = $largo;
        $this->ancho = $ancho;
        $this->perimeto = $this->calcularPerimetro();
        $this->area = $this->calcularArea($this->perimetro);
    }

    public function setLargo($largo)
    {
        $this->largo = $largo;
    }

    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    public function calcularPerimetro()
    {
        $doblarAncho = $this->ancho * 2;
        $doblarLargo = $this->largo * 2;

        return $doblarAncho + $doblarLargo;
    }

    public function calcularArea($perimetro)
    {
        $resultadoPerimetro = $this->perimetro / 2;
        $cuenta = $resultadoPerimetro - $this->ancho;
        $area = $cuenta - $this->ancho;

        return $area;
    }

}

?>