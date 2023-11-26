<?php

declare(strict_types=1);

namespace Learning\InjectableNotInjectablesExample\Model;

class Item{
    protected string $code="code: 111";
    public function setCode(string $code): void{
        $this->code= $code;
    }
    public function getCode():string{
        return $this->code;
    }
}