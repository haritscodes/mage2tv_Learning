<?php

namespace Learning\InjectableNotInjectablesExample\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    public function __construct(protected PageFactory $pageFactory){}
    public function execute(){
        return $this->pageFactory->create();
    }
}