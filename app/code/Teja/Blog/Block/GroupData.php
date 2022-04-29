<?php

namespace Teja\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Teja\Blog\Model\ResourceModel\TejaBlog\CollectionFactory as TejaBlogCollectionFactory;


class GroupData extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_blogCollectionFactory = null;
    
    public function __construct(
        Context $context,
        TejaBlogCollectionFactory $blogCollectionFactory,
        array $data = []
    ) {
        $this->_blogCollectionFactory  = $blogCollectionFactory;
        parent::__construct($context, $data);
    }

    //fetching group of records 
    public function getCollection()

    {
        /** @var ViewCollection $viewCollection */
        $blogCollection = $this->_blogCollectionFactory ->create();
        $blogCollection->addFieldToSelect('*')->load();
        return $blogCollection->getItems();
    }
    public function getArticleUrl($blog) {
        return $this->getUrl('tejablog/index/groupdata/id/'. $blog, ['_secure' => true]);
        //return '/blog/index/index/id/' . $blog;
    }
    public function getDeleteUrl($tejablog) {
        return $this->getUrl('tejablog/index/deletedata/id/'. $tejablog, ['_secure' => true]);
        //return '/blog/index/index/id/' . $blog;
    }
    public function getFormAction()
    {
        return $this->getUrl('tejablog/index/post', ['_secure' => true]);
    }

}