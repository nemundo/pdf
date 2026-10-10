<?php

namespace Nemundo\Pdf\Text;

trait TextTrait
{

    public $text;


    protected function getText()
    {

        $text = '';

        //$text = mb_convert_encoding($this->text, 'ISO-8859-2', 'UTF-8');
        if ($this->text !== null) {
            $text = iconv('UTF-8', 'windows-1252', $this->text);
        }

        return $text;

    }

}