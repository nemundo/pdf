<?php

require __DIR__ . "/../config.php";

(new \Nemundo\Project\Path\TmpPath())->createPath();


$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('letter.pdf')
    ->getFullFilename();


$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;


$pdf->pageSize = \Nemundo\Pdf\Document\PageSize::A4;
$pdf->pageOrientation = \Nemundo\Pdf\Document\PageOrientation::PORTRAIT;
$pdf->margin = 150;

\Nemundo\Pdf\Config\PdfConfig::$defaultFont = \Nemundo\Pdf\Text\PdfFont::COURIER;
\Nemundo\Pdf\Config\PdfConfig::$defaultFontSize = 14;



$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ää';

$newLine = new \Nemundo\Pdf\Text\PdfNewLine($pdf);
$newLine->height = 10;

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ää';


$pdf->saveFile();


//$pdf->exportJpg($imgFilename);




