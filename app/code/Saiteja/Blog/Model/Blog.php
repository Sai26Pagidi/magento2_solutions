<?php

namespace Saiteja\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Saiteja\Blog\Api\Data\BlogInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Blog extends AbstractModel implements BlogInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'sai_blog';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Saiteja\Blog\Model\ResourceModel\Blog');
    }


 public function getId()
    {
        return $this->getData(self::ID);
    }
    
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }


    /**
     * Get Content
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    
     public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

   

    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
    
}