<?php
namespace Teja\Blog\Model\ResourceModel\TejaBlog;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Teja\Blog\Model\TejaBlog::class, \Teja\Blog\Model\ResourceModel\TejaBlog::class);//collection model is considered a resource model which allow us to filter and fetch a collection table data
    }
}