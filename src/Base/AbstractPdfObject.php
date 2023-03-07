<?php

namespace Nemundo\Pdf\Base;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Pdf\Document\AbstractPdfDocument;
use Nemundo\Svg\Color\RgbColor;

abstract class AbstractPdfObject extends AbstractBase
{

    //abstract public function getDrawObject(AbstractPdfDocument  $pdfDocument);

    abstract public function renderPdf(\FPDF $fpdf);


    public function __construct(AbstractPdfDocument $pdfDocument)
    {

        $pdfDocument->addObject($this);

        /*if ($imageGenerator !== null) {
            $imageGenerator->addObject($this);
        }*/

    }


}