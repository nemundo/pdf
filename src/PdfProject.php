<?php

namespace Nemundo\Pdf;

use Nemundo\Core\Path\Path;
use Nemundo\Project\AbstractProject;

class PdfProject extends AbstractProject
{
    public function loadProject()
    {
        $this->project = 'Pdf';
        $this->projectName = 'pdf';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = (new Path())
            ->addPath(__DIR__)
            ->addParentPath()
            ->addPath('model')
            ->getPath();
    }
}