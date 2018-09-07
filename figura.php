<?php
abstract class Figura
{
    
    protected $perimetro;
    protected $area;
    public function __construct(Int $perimetro, int $area)
    {
        $this->perimetro = $perimetro;
        $this->area = $area;
    }

    public function getPerimetro()
    {
        return $this->perimetro;
    }

    public function getArea()
    {
        return $this->area;
    }

}


?>