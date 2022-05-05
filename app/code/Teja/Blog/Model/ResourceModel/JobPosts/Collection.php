<?php
namespace Teja\Blog\Model\ResourceModel\JobPosts;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Teja\Blog\Model\JobPosts::class, \Teja\Blog\Model\ResourceModel\JobPosts::class);//collection model is considered a resource model which allow us to filter and fetch a collection table data
    }
}