<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;

class PdfText extends AbstractPdfObject
{

    use FontStyleTrait;

    public $text;

    /*public $font = PdfFont::ARIAL;

    public $fontSize = 12;

    public $bold = false;

    public $italic = false;

    public $underline = false;*/

    public $x = 0;

    public $y = 0;

    public $height = 0;


    public function renderPdf(\FPDF $fpdf)
    {


        $this->loadStyle($fpdf);

        /*$style = '';

        if ($this->bold) {
            $style .= 'B';
        }

        if ($this->italic) {
            $style .= 'I';
        }

        if ($this->underline) {
            $style .= 'U';
        }

        $fpdf->SetFont($this->font, $style, $this->fontSize);*/
        $fpdf->Write($this->height, $this->text);

        //$fpdf->Text($this->x, $this->y, $this->text);


    }


}