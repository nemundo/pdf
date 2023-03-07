<?php

namespace Nemundo\Pdf\Document;

use Nemundo\Core\Base\AbstractDocument;
use Nemundo\Core\Debug\Debug;
use Nemundo\Pdf\Base\AbstractPdfObject;

abstract class AbstractPdfDocument extends AbstractDocument
{

    public $filename;

    public $pageOrientation = PageOrientation::PORTRAIT;

    public $pageSize = PageSize::A4;

    public $customSizeWidth;

    public $customSizeHeight;


    /**
     * @var AbstractPdfObject[]
     */
    private $pdfObjectList = [];


    public function __construct()
    {
        parent::__construct(null);
    }


    public function writeFile()
    {

        $this->load();

    }


    public function addObject(AbstractPdfObject $pdfObject)
    {

        $this->pdfObjectList[] = $pdfObject;
        return $this;

    }


    public function render()
    {
        parent::render();
    }


    private function load()
    {

        require(__DIR__ . '/../../lib/fpdf/fpdf.php');

        $fpdf = new \FPDF();

        if ($this->pageSize === PageSize::CUSTOM) {
            $fpdf->AddPage($this->pageOrientation, [$this->customSizeWidth, $this->customSizeHeight]);
        } else {
            $fpdf->AddPage($this->pageOrientation, $this->pageSize);
        }

        foreach ($this->pdfObjectList as $pdfObject) {
            $pdfObject->renderPdf($fpdf);
        }

        $fpdf->Output('F', $this->filename);

    }


    public function exportJpg($imageFilename)
    {

        $this->exportImage($imageFilename, 'jpg');
        return $this;

    }


    public function exportPng($imageFilename)
    {

        $this->exportImage($imageFilename, 'jpg');
        return $this;

    }


    private function exportImage($filename, $fileExtension)
    {

        $im = new \Imagick($this->filename);
        $im->setImageFormat($fileExtension);
        $im->writeImage($filename);

    }

}