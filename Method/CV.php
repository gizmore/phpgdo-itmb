<?php

namespace GDO\ITMB\Method;

use GDO\Core\GDT;

class CV extends \GDO\UI\MethodPage
{
    public function execute(): GDT
    {
        $this->getModule()->addCSS('css/gdo7-cv.css');
        return parent::execute();
    }
}
