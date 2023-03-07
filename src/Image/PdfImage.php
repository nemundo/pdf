<?php

namespace Nemundo\Pdf\Image;

use Nemundo\Pdf\Base\AbstractPdfObject;

class PdfImage extends AbstractPdfObject
{

    public $imageFilename;

    public $x=0;

    public $y=0;

    public function renderPdf(\FPDF $fpdf)
    {

        $fpdf->Image($this->imageFilename,$this->x,$this->y);

    }

}