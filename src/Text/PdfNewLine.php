<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;

class PdfNewLine extends AbstractPdfObject
{

    public $height = 10;

    public function renderPdf(\FPDF $fpdf)
    {

        $fpdf->Ln($this->height);

    }

}