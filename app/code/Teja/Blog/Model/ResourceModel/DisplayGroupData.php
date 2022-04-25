<?php

namespace Teja\Blog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class DisplayGroupData extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('teja_tab', 'id');//this is how our page will connect to db table
    }
}