<?php
namespace Testing\Blog\Model\ResourceModel\Blog;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
	protected function __construct()
	{
		$this->_init(\Testing\Blog\Model\Blog::class,\Testing\Blog\Model\ResourceModel\Blog::class);
		//here we define model and resource model class name
	}
}