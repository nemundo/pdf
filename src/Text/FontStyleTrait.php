<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Config\PdfConfig;

trait FontStyleTrait
{

    public $font;

    public $fontSize;

    public $bold = false;

    public $italic = false;

    public $underline = false;


    protected function loadDefaultStyle()
    {

        $this->font = PdfConfig::$defaultFont;
        $this->fontSize = PdfConfig::$defaultFontSize;

    }


    protected function loadStyle(\FPDF $fpdf)
    {

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