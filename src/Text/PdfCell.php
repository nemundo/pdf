<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Document\AbstractPdfDocument;

class PdfCell extends AbstractPdfObject
{

    use FontStyleTrait;

    public $text;

    public $width = 100;

    public $height = 10;

    public $border = 1;


    public function __construct(AbstractPdfDocument $pdfDocument)
    {

        parent::__construct($pdfDocument);
        $this->loadDefaultStyle();

    }


    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);
        $fpdf->Cell($this->width, $this->height, $this->text, $this->border);

    }

}