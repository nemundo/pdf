<?php

require __DIR__ . "/../config.php";

(new \Nemundo\Project\Path\TmpPath())->createPath();


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
$pdf->customSizeWidth= 1225*.75;  // 1225;
$pdf->customSizeHeight=408*.75;
$pdf->pageOrientation=\Nemundo\Pdf\Document\PageOrientation::LANDSCAPE;

\Nemundo\Pdf\Config\PdfConfig::$defaultFont = \Nemundo\Pdf\Text\PdfFont::COURIER;
\Nemundo\Pdf\Config\PdfConfig::$defaultFontSize= 50;



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


//$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
//$img->imageFilename='D:\Tmp_Git\nemundo_com\web\data\event_event\image_image_cropping\325ed34b-b2bb-429b-a807-d07680c67d01.jpg';
//$img->imageFilename='D:\Tmp_Git\nemundo_com\web\data\event_event\image_image_cropping\325ed34b-b2bb-429b-a807-d07680c67d01.png';
//$img->imageFilename =  'D:\Tmp_Git\nemundo_com\tmp\7cbb2514-5a1b-44dc-9a16-7252839df70e.png';  // 'D:\Test_Data\Image\rigi.png';


$box = new \Nemundo\Pdf\Text\PdfTextBox($pdf);
$box->text = 'Hello';
$box->x = 300;
$box->y = 300;


/*$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->text = 'Hello World';
$text->font= \Nemundo\Pdf\Text\PdfFont::TIMES;

//$text->x = 100;

new \Nemundo\Pdf\Text\PdfNewLine($pdf);

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->text = 'Hello World';*/



$newLine = new \Nemundo\Pdf\Text\PdfNewLine($pdf);
$newLine->height= 100;



$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->width = 80;
$cell->height=30;
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



$pdf->saveFile();

//$pdf->exportJpg($imgFilename);




