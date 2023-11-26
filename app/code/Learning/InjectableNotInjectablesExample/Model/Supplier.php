<?php

declare(strict_types= 1);

namespace Learning\InjectableNotInjectablesExample\Model;
class Supplier{
    protected string $code="";
    public function setCode(string $code): void{
        $this->code= $code;
    }
    public function getCode(){
        return $this->code;
    }
}
