<?php
namespace Harit\Routes\Controller\Tester;
use Magento\Framework\App\ActionInterface;
class Tester implements ActionInterface{
    public function execute(){
        die("Tester route");
    }
}
?>