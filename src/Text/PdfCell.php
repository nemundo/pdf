<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;

class PdfCell extends AbstractPdfObject
{

    use FontStyleTrait;

    public $text;

    public $width = 100;

    public $height = 10;

    public $border = 1;

    //private $textList = [];


    /*public function addText($text)
    {

        $this->textList[] = $text;
        return $this;


    }*/


    public function renderPdf(\FPDF $fpdf)
    {

        //$fpdf->Ln(10);

        $this->loadStyle($fpdf);

        $fpdf->Cell($this->width,$this->height, $this->text, $this->border);

        /*foreach ($this->textList as $text) {
            $fpdf->Cell(40, 10, $text, $this->border);
        }*/

    }


}