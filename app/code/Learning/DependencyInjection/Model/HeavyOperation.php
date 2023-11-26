<?php

declare(strict_types=1);
namespace Learning\DependencyInjection\Model;
class HeavyOperation{
    protected string $name;
    public function __construct(){
        // suppose we have this class which is not alway uses. it is only being used in some specific cases and we don't want this->init() to be called inside the contractor every time the application load and only wanted this->init() to be called when it is used. to do this we will use proxies.
        $this->init();
    }
    public function init():void{
        // suppose we have a very long query which is taking very long time.    
        $this->name="Class HeavyOperation";
    }
    public function getName():string{
        return $this->name;
    }
}