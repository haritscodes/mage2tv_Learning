<?php

namespace Learning\Removelayout\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    protected $resultFactory;
    public function __construct(PageFactory $pageFactory){
        $this->resultFactory = $pageFactory;
    }
    public function execute(){
        return $this->resultFactory->create();
    }
}