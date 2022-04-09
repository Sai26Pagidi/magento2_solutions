<?php
namespace Testing\Blog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Blog extends AbstractDb
{
	 /**
     * Post Abstract Resource Constructor
     * @return void
     */
	protected function _construct()
	{
		$this->_init('blog','id');//in resource we have to declare table name and primary key of table///this is how our page will connect to db table
	}
}
