<?php
declare(strict_types=1);
namespace Learning\DependencyInjection\Model;

interface NonInjectableInterface{
    public function getId(): string;
}