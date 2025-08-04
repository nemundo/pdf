<?php

namespace Nemundo\Pdf\Site;

use Nemundo\Admin\Site\AbstractAdminIconSite;
use Nemundo\Web\Site\AbstractSiteTree;

abstract class AbstractPdfSite extends AbstractAdminIconSite
{

    public function __construct(?AbstractSiteTree $site = null)
    {
        $this->title = 'Pdf';
        $this->url = 'pdf';
        parent::__construct($site);
        $this->iconName = 'file-pdf';

    }


}