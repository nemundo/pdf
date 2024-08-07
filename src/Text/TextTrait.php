<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Document\AbstractPdfDocument;

trait TextTrait
{

    public $text;


    protected function getText()
    {

        //$text = mb_convert_encoding($this->text, 'ISO-8859-2', 'UTF-8');

        $text = iconv('UTF-8', 'windows-1252', $this->text);

        return $text;

    }


}