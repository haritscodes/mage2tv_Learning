<?php
declare(strict_types=1);
namespace Learning\DependencyInjection\Model\VirtualType;
use Learning\DependencyInjection\Model\VirtualType\Name;

class UpperCaseName extends Name{
    public function getName(string $name): string{
        return strtoupper(parent::getName($name));
    }
}   