<?php

namespace Nemundo\Pdf\Document;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Pdf\Base\AbstractPdfObject;
use Nemundo\Pdf\Unit\PdfUnit;

abstract class AbstractPdfDocument extends AbstractBase
{

    public $filename;

    public $pageOrientation = PageOrientation::PORTRAIT;

    public $pageSize = PageSize::A4;

    public $unit = PdfUnit::POINT;

    public $margin;

    public $documentTitle;

    public $author;


    public $customSizeWidth;

    public $customSizeHeight;

    /**
     * @var AbstractPdfObject[]
     */
    private $pdfObjectList = [];


    public function __construct()
    {

        $this->loadDocument();

    }


    protected function loadDocument()
    {

    }


    public function addObject(AbstractPdfObject $pdfObject)
    {

        $this->pdfObjectList[] = $pdfObject;
        return $this;

    }


    private function load($destination)
    {

        require(__DIR__ . '/../../lib/fpdf/fpdf.php');

        $fpdf = new \FPDF($this->pageOrientation, $this->unit);

        if ($this->documentTitle !==null) {
            $fpdf->SetSubject($this->documentTitle,true);
        }

        if ($this->author !==null) {
            $fpdf->SetSubject($this->author,true);
        }

        if ($this->margin !== null) {
            $fpdf->SetTopMargin($this->margin);
            $fpdf->SetLeftMargin($this->margin);
            $fpdf->SetRightMargin($this->margin);
        }

        if ($this->pageSize === PageSize::CUSTOM) {
            $fpdf->AddPage($this->pageOrientation, [$this->customSizeWidth, $this->customSizeHeight]);
        } else {
            $fpdf->AddPage($this->pageOrientation, $this->pageSize);
        }

        foreach ($this->pdfObjectList as $pdfObject) {
            $pdfObject->renderPdf($fpdf);
        }

        $fpdf->Output($destination, $this->filename);

    }


    public function sendToBrowser()
    {

        $this->load('I');
        return $this;

    }


    public function forceToDownload()
    {

        $this->load('F');
        return $this;

    }


    public function saveFile()
    {

        $this->load('F');
        return $this;

    }


    public function exportJpg($imageFilename)
    {

        $this->exportImage($imageFilename, 'jpg');
        return $this;

    }


    public function exportPng($imageFilename)
    {

        $this->exportImage($imageFilename, 'png');
        return $this;

    }


    private function exportImage($filename, $fileExtension)
    {

        $im = new \Imagick($this->filename);
        $im->setImageFormat($fileExtension);
        $im->writeImage($filename);


    }

}