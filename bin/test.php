<?php

require  "config.php";


$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('test.pdf')
    ->getFullFilename();

$imgFilename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('test.jpg')
    ->getFullFilename();



$pdf = new \Nemundo\Pdf\Document\PdfDocument($filename);

$pdf->filename = $filename;

$rectangle = new \Nemundo\Pdf\Geometry\PdfRectangle($pdf);
$rectangle->x = 100;
$rectangle->y = 100;
$rectangle->width = 100;
$rectangle->height=50;
$rectangle->color->r = 50;
$rectangle->color->g = 168;
$rectangle->color->b = 139;

$line = new \Nemundo\Pdf\Geometry\PdfLine($pdf);
$line->x1 = 0;
$line->y1 = 0;
$line->x2 = 300;
$line->y2 = 300;


$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
$img->imageFilename ='D:\Test_Data\Image\10854947_10152743529678310_6492468214749315590_o.jpg';  //  'D:\Test_Data\Image\logo.png';*/

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->text = 'Hello World';
//$text->x = 100;

new \Nemundo\Pdf\Text\PdfNewLine($pdf);

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->text = 'Hello World';


$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 50;
$cell->text = 'Name';

$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 50;
$cell->text = 'Vorname';

new \Nemundo\Pdf\Text\PdfNewLine($pdf);

/*$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 300;
$cell->text = '';

$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 200;
$cell->text = '';*/



$pdf->writeFile();

$pdf->exportJpg($imgFilename);




