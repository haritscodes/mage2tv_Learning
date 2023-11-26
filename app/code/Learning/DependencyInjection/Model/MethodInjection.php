<?php

declare(strict_types= 1);

namespace Learning\DependencyInjection\Model;
use Magento\Framework\DataObject;
class MethodInjection{
    public function getName(DataObject $dataObject){
        return $dataObject->getData('name');
    }
}