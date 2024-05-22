<?php

use Nemundo\Pdf\Unit\PdfUnit;

require __DIR__ . "/../config.php";

(new \Nemundo\Project\Path\TmpPath())->createPath();


$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('textbox.pdf')
    ->getFullFilename();


$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->unit = PdfUnit::MILLIMETER;
$pdf->filename = $filename;
$pdf->margin=10;

$pdf->pageSize = \Nemundo\Pdf\Document\PageSize::A4;
$pdf->pageOrientation = \Nemundo\Pdf\Document\PageOrientation::PORTRAIT;

\Nemundo\Pdf\Config\PdfConfig::$defaultFont = \Nemundo\Pdf\Text\PdfFont::COURIER;
\Nemundo\Pdf\Config\PdfConfig::$defaultFontSize = 14;

/*
$box = new \Nemundo\Pdf\Text\PdfTextBox($pdf);
$box->x = 125;
$box->y=60;
$box->text = "Line1\nLine2\nLine3";
*/

$box = new \Nemundo\Pdf\Text\PdfMultiCell($pdf);
$box->x = 125;
$box->y = 60;
$box->height = 10;
$box->width = 50;
$box->text = "Line1\nLine2\nLine3";

$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
$img->imageFilename = 'C:\test\brief\logo_quer.png';
$img->x = 0;
$img->y = 0;
$img->width= 20;




/*
$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ää';

/*
$newLine = new \Nemundo\Pdf\Text\PdfNewLine($pdf);
$newLine->height = 100;
*/

$pdf->saveFile();





