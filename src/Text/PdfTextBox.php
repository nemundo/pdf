<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Document\AbstractPdfDocument;

class PdfTextBox extends AbstractPdfObject
{

    use FontStyleTrait;

    public $text;

    public $x = 0;

    public $y = 0;

    //public $height = 0;

    public function __construct(AbstractPdfDocument $pdfDocument)
    {

        parent::__construct($pdfDocument);
        $this->loadDefaultStyle();

    }

    public function renderPdf(\FPDF $fpdf)
    {


        $this->loadStyle($fpdf);

        //$fpdf->Write($this->height, $this->text);

        $fpdf->Text($this->x, $this->y, $this->text);


    }


}