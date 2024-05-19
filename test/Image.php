<?php

require __DIR__ . "/../config.php";

$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('image.pdf')
    ->getFullFilename();


$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;


$pdf->pageSize = \Nemundo\Pdf\Document\PageSize::A4;
$pdf->pageOrientation = \Nemundo\Pdf\Document\PageOrientation::PORTRAIT;

$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
$img->imageFilename = 'C:\test\dam\download.png';
$img->x=0;
$img->y=0;

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ääa fasdf asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasd asdf asdf asdf asdfasdf';

$newLine = new \Nemundo\Pdf\Text\PdfNewLine($pdf);
$newLine->height = 10;

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'second';

$newLine = new \Nemundo\Pdf\Text\PdfNewLine($pdf);
$newLine->height = 10;



$newLine = new \Nemundo\Pdf\Text\PdfNewLine($pdf);
$newLine->height = 10;

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'second ddddddddddddddddddddd';


$pdf->saveFile();





