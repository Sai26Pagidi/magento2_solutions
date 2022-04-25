<?php

namespace Teja\Blog\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Action\Context;
use \Teja\Blog\Model\DisplayGroupDataFactory as DisplayGroupDataFactory;


class InsertData extends Action 
{
   
    protected $resultPageFactory;
    protected $_displayGroupDataFactory;

    public function __construct(Context $context,PageFactory $resultPageFactory,DisplayGroupDataFactory $displayGroupDataFactory) {
        $this->resultPageFactory = $resultPageFactory;
        $this->_displayGroupDataFactory = $displayGroupDataFactory;
        parent::__construct($context);
    }

    public function execute()
    {
         $cars = array ("title"=>"inserting title","status"=>"0","short_description"=>"asdsa");
        $insertData = $this->_displayGroupDataFactory->create()->setData($cars)->save();
        $this->messageManager->addSuccessMessage(__('You Inserted the Record .'));
                // go to grid
        $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('tejablog/index/displaygroupdata');
    }
}