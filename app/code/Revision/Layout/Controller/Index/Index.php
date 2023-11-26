<?php

declare(strict_types=1);

namespace Revision\Layout\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
class Index implements ActionInterface{
    protected $resultFactory;
    public function __construct(PageFactory $pageFactory){
        $this->resultFactory=$pageFactory;
    }
    public function execute(){
        return $this->resultFactory->create();
    }
}