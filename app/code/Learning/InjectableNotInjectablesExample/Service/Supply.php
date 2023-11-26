<?php

declare(strict_types=1);
namespace Learning\InjectableNotInjectablesExample\Service;
use Learning\InjectableNotInjectablesExample\Model\Supplier;
use Learning\InjectableNotInjectablesExample\Model\Item;
use Learning\InjectableNotInjectablesExample\Model\ItemFactory;
class Supply{
    protected Supplier $supplier;

    public function __construct(Supplier $supplier,protected ItemFactory $itemFactroy){
        $this->supplier= $supplier;
    }
    public function getSupplier(): Supplier{
        $this->supplier->setCode('123ABC');
        return $this->supplier;
    }
    public function getItem(): Item{
        $item= $this->itemFactroy->create();
        $item->setCode("Item: 244");
        return $item;
    }
}