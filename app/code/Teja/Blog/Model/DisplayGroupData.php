<?php

namespace Teja\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Teja\Blog\Api\Data\BlogInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class DisplayGroupData extends AbstractModel implements BlogInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'group_data';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Teja\Blog\Model\ResourceModel\DisplayGroupData');
    }


    public function getId()
    {
        return $this->getData(self::ID);
    }
    
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function getShortDescription()
    {
        return $this->getData(self::SHORT_DESCRIPTION);
    }

    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }
    public function getCreatedAt()
    {
        return $this->getData(self::CREATEDAT);
    }
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATEDAT);
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
    
    public function setShortDescription($shortDescription)
    {
        return $this->setData(self::SHORT_DESCRIPTION, $shortDescription);
    }

    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATEDAT,$createdAt);
    }
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATEDAT,$updatedAt);
    }
    
}