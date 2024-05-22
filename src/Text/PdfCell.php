<?php

namespace Nemundo\Pdf\Text;

class PdfCell extends AbstractPdfCell
{

    use PositionTrait;

    //public $x;

    //public $y;

    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);
$this->loadPosition($fpdf);

/*
        if ($this->x !== null) {
            $fpdf->setX($this->x);
        }
        if ($this->y !== null) {
            $fpdf->setY($this->y);
        }*/

        $fpdf->Cell($this->width, $this->height, $this->getText(), $this->border);

    }

}