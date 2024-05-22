<?php

namespace Nemundo\Pdf\Image;

use Nemundo\Pdf\Base\AbstractPdfObject;

class PdfImage extends AbstractPdfObject
{

    public $imageFilename;

    public $x;

    public $y;

    public $width;

    public $height;

    public function renderPdf(\FPDF $fpdf)
    {

        $fpdf->Image($this->imageFilename, $this->x, $this->y, $this->width, $this->height);

    }

}