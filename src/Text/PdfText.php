<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Document\AbstractPdfDocument;

class PdfText extends AbstractPdfObject
{

    use FontStyleTrait;
    use TextTrait;

    public $height = 10;

    public function __construct(AbstractPdfDocument $pdfDocument)
    {

        parent::__construct($pdfDocument);
        $this->loadDefaultStyle();

    }

    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);
        $fpdf->Write($this->height, $this->getText());

    }

}