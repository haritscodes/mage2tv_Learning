<?php

declare(strict_types=1);

namespace Learning\DependencyInjection\Model;
use Learning\DependencyInjection\Model\Injectable;
use Learning\DependencyInjection\Model\NonInjectableInterfaceFactory;
use Learning\DependencyInjection\Model\AbstractUtil;
use Learning\DependencyInjection\Model\HeavyOperation;
use Learning\DependencyInjection\Model\MethodInjection;
use Learning\DependencyInjection\Model\VirtualType\DefaultName;
use Learning\DependencyInjection\Model\Optional;
use Magento\Framework\DataObject;
class Main{
    protected Injectable $injectable;
    protected array $data;
    // protected NonInjectableFactory $NonInjectableFactory;
    protected NonInjectableInterfaceFactory $NonInjectableInterfaceFactory;
    protected AbstractUtil $Util;
    protected HeavyOperation $heavyOperation;

    protected MethodInjection $methodInjection;
    protected DefaultName $defaultName;
    protected Optional $optional;

    public function __construct(InjectableInterface $injectable,NonInjectableInterfaceFactory $NonInjectableInterfaceFactory,AbstractUtil $util ,HeavyOperation $heavyOperation,Optional $optional=null,DefaultName $defaultName,MethodInjection $methodInjection,array $data=[]){
        $this->injectable= $injectable;
        $this->NonInjectableInterfaceFactory= $NonInjectableInterfaceFactory;
        $this->data= $data;
        $this->Util= $util;
        $this->defaultName= $defaultName;
        $this->heavyOperation= $heavyOperation;
        $this->optional= $optional;
        $this->methodInjection= $methodInjection;
    }
    public function getId():string{ 
        return $this->data['id'];
    }
    public function getInjectable(): Injectable{
        return $this->injectable;
    }
    public function getNonInjectable(): NonInjectable{
        return $this->NonInjectableInterfaceFactory->create();
    }
    public function getUtil(): AbstractUtil{
        return $this->Util;
    }
    public function getHeavyOperation(): HeavyOperation{
        return $this->heavyOperation;
    }
    public function getDefaultName(): DefaultName{
        return $this->defaultName;
    }
    public function getOptianal(): Optional{
        return $this->optional;
    }
    public function getMethordInjectionName(): string{
        $dataObject=new DataObject(['name'=>'Method Injection']);
        return $this->methodInjection->getName($dataObject);
    }
}