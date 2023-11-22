<?php

namespace Revision\Layout\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    protected $resultPageFactory;

    public function __construct(PageFactory $pageFactory){
        $this->resultPageFactory= $pageFactory;
    }
    public function execute(){
        return $this->resultPageFactory->create();
    }
}