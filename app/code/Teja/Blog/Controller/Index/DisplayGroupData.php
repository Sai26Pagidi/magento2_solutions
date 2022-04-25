<?php

namespace Teja\Blog\Controller\Index;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\View\Result\PageFactory;

class DisplayGroupData implements HttpGetActionInterface 
{
   
    protected $resultPageFactory;

    public function __construct(PageFactory $resultPageFactory) {
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
         //print_r("I'm in blog index.php"); die();
        return $this->resultPageFactory->create();
    }
}