<?php

require __DIR__ . "/../config.php";

(new \Nemundo\Project\Path\TmpPath())->createPath();


$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('test3.pdf')
    ->getFullFilename();


$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;
$pdf->documentTitle = 'Ein Title öäädsf';
$pdf->author = 'Ürsel';

$pdf->pageSize= \Nemundo\Pdf\Document\PageSize::A4;
$pdf->pageOrientation= \Nemundo\Pdf\Document\PageOrientation::PORTRAIT;
$pdf->margin = 80;

\Nemundo\Pdf\Config\PdfConfig::$defaultFont = \Nemundo\Pdf\Text\PdfFont::COURIER;
\Nemundo\Pdf\Config\PdfConfig::$defaultFontSize= 14;

//new \Nemundo\Pdf\Page\NewPage($pdf);

$newLine = "\n";


$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ää asfasdf asdf asdf asdfa sdfasdf asdf asd'.$newLine;



$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->bold = true;
$text->text = '2. Line';


new \Nemundo\Pdf\Page\NewPage($pdf);

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ää asfasdf asdf asdf asdfa sdfasdf asdf asd';


$newLine = new \Nemundo\Pdf\Text\PdfNewLine($pdf);
$newLine->height= 100;




$pdf->saveFile();

