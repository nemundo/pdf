<?php

namespace Nemundo\Pdf\Text;

class HyperlinkPdf extends PdfText
{

    /**
     * @var string
     */
    public $url;

    public function renderPdf(\FPDF $fpdf)
    {

        $this->loadStyle($fpdf);

        //$text  = mb_convert_encoding($this->text,  'ISO-8859-2','UTF-8');
        $fpdf->Write($this->height, $this->getText(), $this->url);

    }

}