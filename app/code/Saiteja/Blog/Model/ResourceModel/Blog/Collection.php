<?php
namespace Saiteja\Blog\Model\ResourceModel\Blog;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Saiteja\Blog\Model\Blog::class, \Saiteja\Blog\Model\ResourceModel\Blog::class);
    }
}