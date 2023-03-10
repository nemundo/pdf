<?php

namespace Nemundo\Pdf\Text;

trait FontStyleTrait
{

    public $font = PdfFont::ARIAL;

    public $fontSize = 12;

    public $bold = false;

    public $italic = false;

    public $underline = false;



    private function loadStyle(\FPDF $fpdf) {

        $style = '';

        if ($this->bold) {
            $style .= 'B';
        }

        if ($this->italic) {
            $style .= 'I';
        }

        if ($this->underline) {
            $style .= 'U';
        }

        $fpdf->SetFont($this->font, $style, $this->fontSize);


    }


}