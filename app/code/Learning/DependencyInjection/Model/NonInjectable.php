<?php

namespace Learning\DependencyInjection\Model;
use Learning\DependencyInjection\Model\NonInjectableInterface;
class NonInjectable implements NonInjectableInterface{

    public function getId(): string{
        return "Class Non-Injectable";
    }
}