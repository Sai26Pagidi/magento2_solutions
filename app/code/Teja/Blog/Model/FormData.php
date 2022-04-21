<?php

namespace Teja\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Teja\Blog\Api\Data\FormDataInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class FormData extends AbstractModel implements FormDataInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'form_blog';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Teja\Blog\Model\ResourceModel\FormData');//it will be responsible for the database access for our model
    }


 public function getId()
    {
        return $this->getData(self::ID);
    }
    
    public function getName()
    {
        return $this->getData(self::NAME);
    }
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }


    public function getTelephone()
    {
        return $this->getData(self::TELEPHONE);
    }

    public function getComment()
    {
        return $this->getData(self::COMMENT);
    }
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    
     public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

   

    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    public function setTelephone($telephone)
    {
        return $this->setData(self::TELEPHONE, $telephone);
    }
    public function setComment($comment)
    {
        return $this->setData(self::COMMENT, $comment);
    }
    public function setCreatedAt($created_at)
    {
        return $this->setData(self::CREATED_AT, $created_at);
    }
    
}