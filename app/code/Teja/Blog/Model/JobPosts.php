<?php

namespace Teja\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Teja\Blog\Api\Data\JobPostsInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class JobPosts extends AbstractModel implements JobPostsInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'job_posts';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Teja\Blog\Model\ResourceModel\JobPosts');//it will be responsible for the database access for our model
    }


 public function getJobId()
    {
        return $this->getData(self::JOB_ID);
    }
    
    public function getJobName()
    {
        return $this->getData(self::JOB_NAME);
    }

    public function getJobPlace()
    {
        return $this->getData(self::JOB_PLACE);
    }
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }


   
    
     public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

   

    public function setJobId($job_id)
    {
        return $this->setData(self::JOB_ID, $job_id);
    }
    public function setJobName($job_name)
    {
        return $this->setData(self::JOB_NAME, $job_name);
    }
    public function setJobPlace($job_place)
    {
        return $this->setData(self::JOB_PLACE, $job_place);
    }
    public function setCreatedAt($created_at)
    {
        return $this->setData(self::CREATED_AT, $created_at);
    }   
    
    
}