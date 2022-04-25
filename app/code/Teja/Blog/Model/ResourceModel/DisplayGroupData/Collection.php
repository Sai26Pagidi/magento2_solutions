<?php
namespace Teja\Blog\Model\ResourceModel\DisplayGroupData;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Teja\Blog\Model\DisplayGroupData::class, \Teja\Blog\Model\ResourceModel\DisplayGroupData::class);
    }
}