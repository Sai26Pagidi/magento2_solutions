<?php

namespace Teja\Blog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class JobPosts extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('job_posts', 'job_id');//resource model simply states the table for which the model will connect to
    }
}