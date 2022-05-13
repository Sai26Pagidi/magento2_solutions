<?php 
namespace Teja\Blog\Controller\Adminhtml\Create; 
class AddJobPosts extends \Magento\Backend\App\Action {
protected $forwardFactory;
	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Backend\Model\View\Result\ForwardFactory $forwardFactory
	)
	{
		parent::__construct($context);
		$this->forwardFactory = $forwardFactory;
	}
	public function execute()
	{
		$resultPage = $this->forwardFactory->create();

		return $resultPage->forward('edit');
	}
}