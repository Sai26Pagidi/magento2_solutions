<?php
namespace Haldir\Hammu\Model\ResourceModel\GroupData;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Haldir\Hammu\Model\GroupData::class, \Haldir\Hammu\Model\ResourceModel\GroupData::class);
    }
}