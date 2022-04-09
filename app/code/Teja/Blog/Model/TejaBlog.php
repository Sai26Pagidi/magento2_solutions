<?php

namespace Teja\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Teja\Blog\Api\Data\TejaBlogInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class TejaBlog extends AbstractModel implements TejaBlogInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'teja_blog';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Teja\Blog\Model\ResourceModel\TejaBlog');//it will be responsible for the database access for our model
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