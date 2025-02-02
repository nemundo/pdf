<?php

require __DIR__ . "/../config.php";

(new \Nemundo\Project\Path\TmpPath())->createPath();


$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('multicell.pdf')
    ->getFullFilename();

$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;


$cell = new \Nemundo\Pdf\Text\PdfMultiCell($pdf);
$cell->border = 1;
$cell->width = 100;
$cell->text = 'One';

$cell = new \Nemundo\Pdf\Text\PdfMultiCell($pdf);
$cell->border = 1;
$cell->width = 100;
$cell->text = 'Two';


$pdf->saveFile();

//$pdf->exportJpg($imgFilename);




