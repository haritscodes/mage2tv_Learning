<?php

namespace Learning\DependencyInjection\Model;
class Injectable implements InjectableInterface{
    public function getId():string{
        return 'class Injectables';
    }
}
