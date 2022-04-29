<?php

namespace Haldir\Hammu\Controller\Index;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\View\Result\PageFactory;
use \Haldir\Hammu\Model\ResourceModel\GroupData\CollectionFactory as HaldirCollectionFactory;

class GroupData implements HttpGetActionInterface 
{
   
    protected $resultPageFactory;
    protected $_haldirCollectionFactory;
    
    public function __construct(PageFactory $resultPageFactory,HaldirCollectionFactory $haldirCollectionFactory) {

        $this->resultPageFactory = $resultPageFactory;
        $this->_haldirCollectionFactory = $haldirCollectionFactory;
    }
    
    public function execute()
    {
    	 $groupData=$this->_haldirCollectionFactory->create();
    	 $groupData->addFieldToSelect('*')->load();
            return $groupData;
    }
}