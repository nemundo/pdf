<?php

namespace Nemundo\Pdf\Text;

class PdfMultiCell extends AbstractPdfCell
{

    use PositionTrait;

    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);
        $this->loadPosition($fpdf);
        $fpdf->MultiCell($this->width, $this->height, $this->getText(), $this->border);

        $fpdf->Cell($this->width, $this->height, $this->getText(), $this->border,0, $this->alignment);

    }

}