<?php
namespace Instances\TestingPlugins\Plugin;
class HeaderPlugin{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result){
        return "Hello Harit";
    }
}
?>