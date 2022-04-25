<?php

namespace Teja\Blog\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Action\Context;
use \Teja\Blog\Model\DisplayGroupDataFactory as DisplayGroupDataFactory;


class DeleteData extends Action 
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
        $delId = $this->getRequest()->getParams('id');
       //here we need to connect to the model and load the record based on id
        $this->_displayGroupDataFactory->create()->load($delId)->delete();

        $this->messageManager->addSuccessMessage(__('You Deleted the Record .'));
        $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('tejablog/index/displaygroupdata');//**('star/star') means it will redirect to the same page  */
    }
}