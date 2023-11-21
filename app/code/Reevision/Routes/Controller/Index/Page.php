<?php
namespace Reevision\Routes\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface{
    protected $pageFactory;
    public function __construct(PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }
    public function execute(){
        // to create a blank default page

        // return $this-$pageFactory->create()->

        // to create a default page with some custom content

        $page=$this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Testing Examples");
        return $page;
    }
}