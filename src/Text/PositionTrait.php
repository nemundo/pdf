<?php

namespace Nemundo\Pdf\Text;

trait PositionTrait
{

    public $x;

    public $y;

    protected function loadPosition(\FPDF $fpdf)
    {

        if ($this->x !== null && $this->y == null) {
            $fpdf->setX($this->x);
        }

        if ($this->y !== null && $this->x == null) {
            $fpdf->setY($this->y);
        }

        if ($this->y !== null && $this->x !== null) {
            $fpdf->setXY($this->x, $this->y);
        }

    }

}