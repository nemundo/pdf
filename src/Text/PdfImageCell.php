<?php

namespace Nemundo\Pdf\Text;

class PdfImageCell extends AbstractPdfCell
{

    use PositionTrait;

    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);
        $this->loadPosition($fpdf);

        $fpdf->Cell($this->width, $this->height, $this->getText(), $this->border);

    }

}