<?php

namespace Nemundo\Pdf\Page;

use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Document\PageOrientation;
use Nemundo\Pdf\Document\PageSize;

class NewPage extends AbstractPdfObject
{

    public $pageOrientation = PageOrientation::PORTRAIT;

    public $pageSize = PageSize::A4;

    public function renderPdf(\FPDF $fpdf)
    {

        $fpdf->AddPage($this->pageOrientation, $this->pageSize);

    }

}