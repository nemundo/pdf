<?php

namespace Nemundo\Pdf\Base;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Pdf\Document\AbstractPdfDocument;

abstract class AbstractPdfObject extends AbstractBase
{

    abstract public function renderPdf(\FPDF $fpdf);


    public function __construct(?AbstractPdfDocument $pdfDocument = null)
    {

        if ($pdfDocument !== null) {
            $pdfDocument->addObject($this);
        }

    }

}