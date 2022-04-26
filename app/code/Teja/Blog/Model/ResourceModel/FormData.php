<?php

namespace Teja\Blog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class FormData extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('registration_form', 'id');//this is how our page will connect to db table
    }
}