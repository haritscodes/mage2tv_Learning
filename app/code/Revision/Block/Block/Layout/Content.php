<?php

declare(strict_types= 1);
namespace Revision\Block\Block\Layout;
use Magento\Framework\View\Element\Template;

class Content extends Template{
    protected function _prepareLayout(){
        parent::_prepareLayout();
        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if ($pageMainTitle) {
            $pageMainTitle->setPageTitle("Magento Developer");
        }
        return $this;
    }
    public function setHeading(){
        return "Telling the Truth";
    }
}