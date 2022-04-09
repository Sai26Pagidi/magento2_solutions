<?php
namespace Testing\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Testing\Blog\Model\ResourceModel\Blog\CollectionFactory as BlogCollectionFactory;
use \Testing\Blog\Model\BlogFactory as BlogFactory;

class BlogData extends Template
{
	protected $_blogFactory;
	protected $_blogCollectionFactory;

	public function __construct(
        Context $context,
        BlogCollectionFactory $blogCollectionFactory,
        BlogFactory $blogFactory,
        array $data = []
      )
    {
      $this->_blogCollectionFactory = $blogCollectionFactory;
    	$this->_blogFactory = $blogFactory;
      parent::__construct($context, $data);
    }
     public function getMydata()
    {
      
        $name = "richa is here";
        return $name;
    }
    public function getMyFunction()
    {
        $viewCollection = $this->_blogCollectionFactory ->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }
    public function getMyCollection()
    {
        $blogCollectionF = $this->_blogCollectionFactory ->create();
        //$blogCollectionF->addFieldToSelect(['id','title'])->load();
        $blogCollectionF->addFieldToSelect('*')->load();
        return $blogCollectionF->getItems();
    }
}