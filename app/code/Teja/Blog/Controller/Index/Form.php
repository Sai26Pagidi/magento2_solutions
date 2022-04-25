<?php

namespace Teja\Blog\Controller\Index;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Form implements HttpGetActionInterface 
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory) {
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Prints the information 
     * @return Page
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}