<?php

namespace Haldir\Hammu\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class GroupData extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('haldir_hammu', 'id');//this is how our page will connect to db table
    }
}