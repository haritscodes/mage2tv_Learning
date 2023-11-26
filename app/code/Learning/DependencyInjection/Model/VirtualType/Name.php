<?php

declare(strict_types=1);
namespace Learning\DependencyInjection\Model\VirtualType;

class Name{
    public function getName(string $name): string{
        return $name;
    }
}