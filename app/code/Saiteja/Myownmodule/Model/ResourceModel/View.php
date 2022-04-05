<?php

namespace Saiteja\Myownmodule\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class View extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('myownmodule', 'id');//this is how our page will connect to db table
    }
}