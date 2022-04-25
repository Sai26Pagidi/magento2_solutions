<?php

namespace Teja\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Teja\Blog\Model\ResourceModel\DisplayGroupData\CollectionFactory as GroupDataCollectionFactory;

class DisplayGroupData extends Template
{
    
    protected $_groupDataCollectionFactory = null;
    
    /**
     * Constructor
     *
     * @param Context $context
     * @param ViewCollectionFactory $viewCollectionFactory
     * @param array $data
     */
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
        /** @var ViewCollection $viewCollection */
       $groupDataCollection = $this->_groupDataCollectionFactory->create()->addFieldToSelect('*')->load();
       return $groupDataCollection->getItems();
    }
    public function getTitleUrl($tit)
    {
        return $this->getUrl('tejablog/index/displaygroupdata/id/'.$tit);
    }
    public function getDescritpionUrl($des)
    {
        return $this->getUrl('tejablog/index/description/short_description/'.$des);
    }
    public function getDeleteUrl($del)
    {
        return $this->getUrl('tejablog/index/deletedata/id/'. $del, ['_secure' => true]);
    }
}