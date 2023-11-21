<?php
declare (strict_types= 1);
namespace Revision\Routes\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements ActionInterface{
    protected $resultFactory;
    public function __construct(RawFactory $resultFactory){
        $this->resultFactory = $resultFactory;
    }
    public function execute(){
        return $this->resultFactory->create()->setContents("Examples");
    }
}