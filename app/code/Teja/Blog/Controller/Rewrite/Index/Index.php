<?php

namespace Teja\Blog\Controller\Rewrite\Index;


class Index extends \Saiteja\Myownmodule\Controller\Post\View
{
      
    public function execute()
    {
    	echo "Sometext";
    	exit();
        echo "I'm overriding the controller class of saiteja index post"; die();
       return parent::execute();
        //return $this->resultPageFactory->create();
    }
}