<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Document\AbstractPdfDocument;

class PdfText extends AbstractPdfObject
{

    use FontStyleTrait;

    public $text;

    /*public $x = 0;

    public $y = 0;*/

    public $height = 0;

    public function __construct(AbstractPdfDocument $pdfDocument)
    {

        parent::__construct($pdfDocument);
        $this->loadDefaultStyle();

    }

    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);

        $textNew = iconv('utf-8', 'ISO-8859-2', $this->text);

        $fpdf->Write($this->height, $textNew);

        //$fpdf->Text($this->x, $this->y, $this->text);


    }


}