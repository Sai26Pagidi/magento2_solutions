<?php

namespace Teja\Blog\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Action\Context;
use \Teja\Blog\Model\TejaBlogFactory;
class DeleteData extends Action 
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    protected $_tejaBlogFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory, TejaBlogFactory $tejaBlogFactory) {
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
    
        try {
            $data = $this->getRequest()->getParams('id');
            if ($data) {
                $del = $this->_tejaBlogFactory->create()->load($data['id'])->delete();
                $this->messageManager->addSuccessMessage(__("Record Delete Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can't delete record, Please try again."));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('tejablog/index/groupdata');
    }
}