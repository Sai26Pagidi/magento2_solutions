<?php

namespace Haldir\Hammu\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Haldir\Hammu\Model\ResourceModel\GroupData\CollectionFactory as GroupDataCollectionFactory;

class GroupData extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_groupDataCollectionFactory = null;
    
    
    public function __construct(
        Context $context,
        GroupDataCollectionFactory $groupDataCollectionFactory,
        array $data = []
    ) {
        $this->_groupDataCollectionFactory  = $groupDataCollectionFactory;
        parent::__construct($context, $data);
    }

    //fetching group of records 
    public function getCollection()
    {
        $blogCollection = $this->_groupDataCollectionFactory ->create()->addFieldToSelect('*')->load();
        return $blogCollection->getItems();
    }

    
    public function getArticleUrl($blog) {
        return $this->getUrl('blog/index/view/id/'. $blog, ['_secure' => true]);
    }
   
      
}