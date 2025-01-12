<?php

namespace Nemundo\Pdf\Text;

use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Document\AbstractPdfDocument;

abstract class AbstractPdfCell extends AbstractPdfObject
{

    use FontStyleTrait;
    use TextTrait;

    public $width = 0;

    public $height = 20;

    public $border = 0;


    public function __construct(AbstractPdfDocument $pdfDocument)
    {

        parent::__construct($pdfDocument);
        $this->loadDefaultStyle();

    }

}