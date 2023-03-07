<?php

require  "config.php";


$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('test.pdf')
    ->getFullFilename();

$imgFilename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('test.jpg')
    ->getFullFilename();

$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;

/*$pdf->pageSize= \Nemundo\Pdf\Document\PageSize::A3;
$pdf->pageOrientation= \Nemundo\Pdf\Document\PageOrientation::LANDSCAPE;*/

$pdf->pageSize= \Nemundo\Pdf\Document\PageSize::CUSTOM;
$pdf->customSizeWidth= 500;  // 1225;
$pdf->customSizeHeight=500;  // 408;

/*
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
$line->y2 = 300;*/


$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
$img->imageFilename ='D:\Test_Data\Image\rigi.png';


/*$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->text = 'Hello World';
$text->font= \Nemundo\Pdf\Text\PdfFont::TIMES;

//$text->x = 100;

new \Nemundo\Pdf\Text\PdfNewLine($pdf);

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->text = 'Hello World';


$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 50;
$cell->text = 'Name';
$cell->bold=true;

$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 50;
$cell->text = 'Vorname';
$cell->italic=true;
$cell->underline=true;

new \Nemundo\Pdf\Text\PdfNewLine($pdf);

/*$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 300;
$cell->text = '';

$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 200;
$cell->text = '';*/



$pdf->writeFile();

//$pdf->exportJpg($imgFilename);




