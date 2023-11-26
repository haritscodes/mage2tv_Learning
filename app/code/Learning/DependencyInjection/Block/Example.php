<?php

declare(strict_types= 1);

namespace Learning\DependencyInjection\Block;

use Learning\DependencyInjection\Model\Main;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Example extends Template{
    protected Main $main;
    public function __construct(Context $context,Main $main, array $data=[]){
        parent::__construct($context, $data);
        $this->main=$main;  
    }

    public function getMain(): Main{
        return $this->main;
    }
}