<?php

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
    public function getMoreData(){
        return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aspernatur cum officia pariatur aliquid voluptates maxime repellendus, voluptas earum quas provident nesciunt quia optio quisquam deserunt dolores magni aut nisi.";
    }
} 