<?php

namespace Teja\Blog\Controller\Index;
use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \Teja\Blog\Model\TejaBlogFactory;

class Edit extends Action
{
    
    protected $resultPageFactory;
	protected $_tejaBlogFactory;
    
    
    public function __construct(Context $context,PageFactory $resultPageFactory,
	TejaBlogFactory $tejaBlogFactory
	) {
        $this->resultPageFactory = $resultPageFactory;
		$this->_tejaBlogFactory = $tejaBlogFactory;
    parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');  
        echo $id;
        $this->_tejaBlogFactory->create()->load($id)->setId($id)->setTitle('teja_blog')->setDescription('asdf')->save();  
        echo "Editeddd";
            return ;
    }
   
}