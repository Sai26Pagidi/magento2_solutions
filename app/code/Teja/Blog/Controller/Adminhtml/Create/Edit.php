<?php

namespace Teja\Blog\Controller\Adminhtml\Create;
use \Magento\Framework\App\Action\Action;
use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \Teja\Blog\Model\JobPostsFactory;

class Edit extends \Magento\Backend\App\Action
{
    
    protected $resultPageFactory;
	protected $_jobPostsFactory;
    protected $_coreRegistry;
    
    
    public function __construct(Context $context,PageFactory $resultPageFactory,
	JobPostsFactory $jobPostsFactory, \Magento\Framework\Registry $coreRegistry
	) {
        $this->resultPageFactory = $resultPageFactory;
		$this->_jobPostsFactory = $jobPostsFactory;
		$this->_coreRegistry = $coreRegistry;
    parent::__construct($context,$coreRegistry);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $id = $this->getRequest()->getParam('id');
        if($id){
            $jobPostsFactory = $this->_jobPostsFactory->create()->load($id);
        $this->_coreRegistry->register('job_listing_editForm', $jobPostsFactory); 
        }
        return $resultPage;
    }

}