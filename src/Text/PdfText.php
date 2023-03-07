<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;

class PdfText extends AbstractPdfObject
{

    public $text;

    public $font = PdfFont::ARIAL;

    public $fontSize = 12;

    public $bold = false;

    public $x = 0;

    public $y = 0;

    public $height=0;



    public function renderPdf(\FPDF $fpdf)
    {

        $bold='';
        if ($this->bold) {
            $bold = 'B';
        }

        $fpdf->SetFont($this->font, $bold, $this->fontSize);
        $fpdf->Write($this->height,$this->text);

        //$fpdf->Text($this->x, $this->y, $this->text);


    }


}