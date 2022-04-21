<?php
namespace Teja\Blog\Model\ResourceModel\FormData;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Teja\Blog\Model\FormData::class, \Teja\Blog\Model\ResourceModel\FormData::class);//collection model is considered a resource model which allow us to filter and fetch a collection table data
    }
}