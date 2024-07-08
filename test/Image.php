<?php

require __DIR__ . "/../config.php";

$filename = (new \Nemundo\Project\Path\TmpPath())
    ->addPath('image.pdf')
    ->getFullFilename();


$pdf = new \Nemundo\Pdf\Document\PdfDocument();
$pdf->filename = $filename;


$pdf->pageSize = \Nemundo\Pdf\Document\PageSize::A4;
$pdf->pageOrientation = \Nemundo\Pdf\Document\PageOrientation::PORTRAIT;

/*$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = "\t\t\tTest1\n\t\t\tTest2";*/

$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->text = "Hello\nWorld";
$cell->width = 110;
$cell->border = false;

$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->text = "Hello\nWorld";
$cell->width = 110;
$cell->border = false;

new \Nemundo\Pdf\Text\PdfNewLine($pdf);

$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->text = "Hello\nWorld";
$cell->width = 110;
$cell->border = false;

$cell = new \Nemundo\Pdf\Text\PdfCell($pdf);
$cell->text = "Hello\nWorld";
$cell->width = 110;
$cell->border = false;


/*
$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = "kad\t\t\t\t\t\t\tTest1\n";

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = "test123\t\t\t\t\t\t\tTest1\n";

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = "\t\t\t\t\t\t\t\t\t\t\t\t\t\tTest1\n";


/*
$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = '$£Neue interessante Iäöäöäitiativen – ein UpdaVolksinitiativen:
•	Atomwaffenverbots-Initiativete';

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'Neue interessante Initiativen - ein Update';

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";


$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
$img->imageFilename = 'C:\test\dam\download.png';

$img = new \Nemundo\Pdf\Image\PdfImage($pdf);
$img->imageFilename = 'C:\test\dam\download.png';

$text = new \Nemundo\Pdf\Text\PdfText($pdf);
$text->height = 10;
$text->text = 'ääa fasdf asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasd asdf asdf asdf asdfasdf';



/*$img->x=0;
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
$text->text = 'second ddddddddddddddddddddd';*/


$pdf->saveFile();





