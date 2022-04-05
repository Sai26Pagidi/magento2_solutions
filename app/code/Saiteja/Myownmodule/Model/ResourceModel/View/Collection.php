<?php
namespace Saiteja\Myownmodule\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Saiteja\Myownmodule\Model\View::class, \Saiteja\Myownmodule\Model\ResourceModel\View::class);
    }
}