<?php

declare(strict_types=1);

namespace Learning\InjectableNotInjectablesExample\Service;
use Learning\InjectableNotInjectablesExample\Model\Supplier;
use Learning\InjectableNotInjectablesExample\Model\Item;
class Demand{
    protected Supplier $supplier;
    public function __construct(Supplier $supplier,protected Item $item){
        $this->supplier=$supplier;
    }
    public function getSupplier(): Supplier{
        return $this->supplier;
    }
    public function getItem(): Item{
        return $this->item;
    }
}