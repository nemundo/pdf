<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Document\AbstractPdfDocument;

class PdfText extends AbstractPdfObject
{

    use FontStyleTrait;

    public $text;

    public $height = 10;

    public function __construct(AbstractPdfDocument $pdfDocument)
    {

        parent::__construct($pdfDocument);
        $this->loadDefaultStyle();

    }

    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);

        $text  = mb_convert_encoding($this->text,  'ISO-8859-2','UTF-8');
        $fpdf->Write($this->height, $text);

    }

}