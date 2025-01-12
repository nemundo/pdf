<?php

require __DIR__ . "/../config.php";

$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('rectangle.pdf')
    ->getFullFilename();


$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;

$rectangle = new \Nemundo\Pdf\Geometry\PdfRectangle($pdf);
$rectangle->width = 200;
$rectangle->height = 100;
$rectangle->color->r = 100;
$rectangle->color->g = 100;
$rectangle->color->b = 100;

$rectangle = new \Nemundo\Pdf\Geometry\PdfRectangle($pdf);
$rectangle->width = 200;
$rectangle->height = 100;
$rectangle->x = 300;
$rectangle->y = 300;
$rectangle->color->r = 200;
$rectangle->color->g = 200;
$rectangle->color->b = 200;

$pdf->saveFile();





