<?php

require __DIR__ . "/../config.php";

(new \Nemundo\Project\Path\TmpPath())->createPath();


$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('test2.pdf')
    ->getFullFilename();





$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;


$pdf->pageSize= \Nemundo\Pdf\Document\PageSize::A3;
$pdf->pageOrientation= \Nemundo\Pdf\Document\PageOrientation::PORTRAIT;

\Nemundo\Pdf\Config\PdfConfig::$defaultFont = \Nemundo\Pdf\Text\PdfFont::COURIER;
\Nemundo\Pdf\Config\PdfConfig::$defaultFontSize= 14;



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



/*$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->text = 'Hello World';
$text->font= \Nemundo\Pdf\Text\PdfFont::TIMES;

//$text->x = 100;

new \Nemundo\Pdf\Text\PdfNewLine($pdf);*/

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ää';


$newLine = new \Nemundo\Pdf\Text\PdfNewLine($pdf);
$newLine->height= 100;




$pdf->exportPdf();

//$pdf->exportJpg($imgFilename);




