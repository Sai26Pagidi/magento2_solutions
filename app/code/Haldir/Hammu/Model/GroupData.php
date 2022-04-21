<?php

namespace Haldir\Hammu\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Haldir\Hammu\Api\Data\GroupDataInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class GroupData extends AbstractModel implements GroupDataInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'haldir_groupdata';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Haldir\Hammu\Model\ResourceModel\GroupData');
    }


 public function getId()
    {
        return $this->getData(self::ID);
    }
    
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

     public function getName()
    {
        return $this->getData(self::NAME);
    }

     public function getTelephone()
    {
        return $this->getData(self::TELEPHONE);
    }


    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }


    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATEDAT);
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

    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    public function setTelephone($telephone)
    {
        return $this->setData(self::TELEPHONE, $telephone);
    }

    
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

     public function setCreatedAt($created_at)
    {
        return $this->setData(self::CREATEDAT, $created_at);
    }
    
}