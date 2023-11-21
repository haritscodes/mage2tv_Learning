<?php
declare(strict_types= 1);
namespace Instances\ExamplePlugin\Plugin;
class Cart{
    public function beforeAddProduct(\Magento\Checkout\Model\Cart $subject,$productInfo,$requestInfo=null){
        $requestInfo['qty']=10;  // increate quantity by 10
        return [$productInfo,$requestInfo];
    }
    
    public function aroundAddProduct(\Magento\Checkout\Model\Cart $subject, \Closure $proceed, $productInfo, $requestInfo=null){
        $requestInfo['qty']=5;
        $result=$proceed($productInfo, $requestInfo);
        return $result;
    }
}
?>