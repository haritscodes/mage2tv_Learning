<?php

namespace Learning\DependencyInjection\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    protected $resultPageFactory;
    public function __construct(PageFactory $pageFactory){
        $this->resultPageFactory = $pageFactory;
    }
    public function execute(){
        $page=$this->resultPageFactory->create();
        $page->getConfig()->getTitle()->set("Dependency Injection in Magento 2");
        return $page;
    }
}