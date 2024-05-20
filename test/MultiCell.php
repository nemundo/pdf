<?php

require __DIR__ . "/../config.php";

(new \Nemundo\Project\Path\TmpPath())->createPath();


$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('multicell.pdf')
    ->getFullFilename();

$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;


$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->text = '-äää';
$cell->width=50;

$cell = new \Nemundo\Pdf\Text\PdfMultiCell($pdf);


$cell->text = 'ääääasdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas asdf asdf asfd asdf asdfas ';


new \Nemundo\Pdf\Text\PdfNewLine($pdf);


$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ää';



$pdf->saveFile();

//$pdf->exportJpg($imgFilename);




