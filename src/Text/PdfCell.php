<?php

namespace Nemundo\Pdf\Text;

class PdfCell extends AbstractPdfCell
{

    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);
        $fpdf->Cell($this->width, $this->height, $this->getText(), $this->border);

    }

}