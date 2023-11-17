<?php
namespace Instances\ExamplePlugin\Plugin;
class Product{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
        return "Diwali Sale Exclusive " . $result; //exclusive deals on diwali
    }
}
?>