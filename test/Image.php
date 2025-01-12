<?php

require __DIR__ . "/../config.php";

$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('image.pdf')
    ->getFullFilename();


$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;


$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
$img->imageFilename = 'C:\test\4096.jpg';
$img->width = 100;

$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
$img->imageFilename = 'C:\test\4096.jpg';
$img->width = 100;

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = '                                               ää';

$pdf->saveFile();





