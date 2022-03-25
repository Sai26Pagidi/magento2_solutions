<?php

namespace Teja\Blog\Controller\Post;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\View\Result\PageFactory;

class View implements HttpGetActionInterface 
{

    public function execute()
    {
        print_r("I'm in Blog view.php"); die();
    }
}