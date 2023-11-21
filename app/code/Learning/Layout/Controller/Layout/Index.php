<?php
declare(strict_type=1);
namespace Learning\Layout\Controller\Layout;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    protected $pageFactory;
    public function __construct(PageFactory $pageFactory){
        $this->pageFactory= $pageFactory;
    }
    public function execute(){
        $result= $this->pageFactory->create();
        // $result->getConfig()->getTitle()->set("Harit Sharma");
        // $result->getLayout()->getBlock('page.main.title')->setPageTitle("Harit Sharma, Magento developer");
        return $result;
    }
}