<?php

namespace Teja\Blog\Controller\Adminhtml\Create;

use \Magento\Framework\App\Action\Action;
use \Magento\Backend\App\Action\Context;
use \Teja\Blog\Model\JobPostsFactory;
class Delete extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    protected $_jobPostsFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, JobPostsFactory $jobPostsFactory) {
        $this->_jobPostsFactory = $jobPostsFactory;
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
                $del = $this->_jobPostsFactory->create()->load($data['id'])->delete();
                $this->messageManager->addSuccessMessage(__("Record Delete Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can't delete record, Please try again."));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }
}