<?phpnamespace Nemundo\Pdf\Geometry;use Nemundo\Html\Container\AbstractHtmlContainer;use Nemundo\Pdf\Base\AbstractPdfObject;use Nemundo\Pdf\Color\PdfColor;use Nemundo\Pdf\Document\AbstractPdfDocument;class PdfRectangle extends AbstractPdfObject{    /**     * @var int     */    public $x;    /**     * @var int     */    public $y;    /**     * @var int     */    public $width;    /**     * @var int     */    public $height;    /**     * @var PdfColor     */    public $color;    /**     * @var int     */    public $borderWidth;    /**     * @var Color     */    public $borderColor;    public function __construct(AbstractPdfDocument $pdfDocument)    {        parent::__construct($pdfDocument);        $this->color=new PdfColor();    }    public function renderPdf(\FPDF $fpdf)    {        $fpdf->SetFillColor($this->color->r,$this->color->g,$this->color->b  );        $fpdf->Rect($this->x,$this->y, $this->width,$this->height,'F');    }//<rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />// stroke="black" stroke-width="3"    /*public function getContent()    {        /*$this->tagName = 'rect';        $this->addAttribute('x', $this->x);        $this->addAttribute('y', $this->y);        $this->addAttribute('width', $this->width);        $this->addAttribute('height', $this->height);        $this->addAttribute('fill', $this->color);        $this->addAttribute('stroke-width', $this->borderWidth);        $this->addAttribute('stroke', $this->borderColor);*//*        return parent::getContent();    }*/}