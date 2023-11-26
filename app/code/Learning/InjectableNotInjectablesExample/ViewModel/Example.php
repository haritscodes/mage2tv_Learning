<?php

declare(strict_types=1);
namespace Learning\InjectableNotInjectablesExample\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Learning\InjectableNotInjectablesExample\Service\Supply;
use Learning\InjectableNotInjectablesExample\Service\Demand;
class Example implements ArgumentInterface{
    protected Supply $supply;
    public function __construct(Supply $supply, protected Demand $demand){
        $this->supply= $supply;
    }

    public function getSupply(): Supply{
        return $this->supply;
    }
    public function getDemand(): Demand{
        return $this->demand;
    }
}