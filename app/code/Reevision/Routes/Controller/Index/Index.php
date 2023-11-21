<?php
declare(strict_types= 1);
namespace Reevision\Routes\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements ActionInterface{
    protected $rawFactory;
    public function __construct(RawFactory $rawFactory){
        $this->rawFactory= $rawFactory;
    }
    public function execute(){
        return $this->rawFactory->create()->setContents("Example");
    }
}