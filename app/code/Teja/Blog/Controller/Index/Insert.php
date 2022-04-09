<?php

namespace Teja\Blog\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \Teja\Blog\Model\TejaBlogFactory;

class Insert extends Action 
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    protected $_tejaBlogFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory,
       
     TejaBlogFactory $tejaBlogFactory) 
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->_tejaBlogFactory = $tejaBlogFactory;
        parent::__construct($context);
    }

    /**
     * Prints the information 
     * @return Page
     */
    public function execute()
    {
        $cars = array (
                array("Volvo","22",0),
                array("BMW","15",1),
                array("Saab","5",0),
                array("Land Rover","17",1)
                );
        $insertData = $this->_tejaBlogFactory->create()->setData($cars)->save();
        $this->messageManager->addSuccessMessage(__('You Inserted the Record .'));
                // go to grid
        $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
    }
}