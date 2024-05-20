<?php

namespace Nemundo\Pdf\Text;

class PdfMultiCell extends AbstractPdfCell
{


    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);
        $fpdf->MultiCell($this->width, $this->height, $this->getText(), $this->border);

    }

}