<?php

namespace Nemundo\Pdf\Text;

trait PositionTrait
{

    public $x;

    public $y;

    protected function loadPosition(\FPDF $fpdf) {

        if ($this->x !== null) {
            //$fpdf->setX($this->x);
        }
        if ($this->y !== null) {
            //$fpdf->setY($this->y);
            $fpdf->setXY($this->x, $this->y);
        }


    }

}