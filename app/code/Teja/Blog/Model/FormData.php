<?php

namespace Teja\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Teja\Blog\Api\Data\FormInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class FormData extends AbstractModel implements FormInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'form_data';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Teja\Blog\Model\ResourceModel\FormData');
    }


    public function getId()
    {
        return $this->getData(self::ID);
    }
    
    public function getName()
    {
        return $this->getData(self::NAME);
    }
    public function getPwd()
    {
        return $this->getData(self::PWD);
    }
    public function getCpwd()
    {
        return $this->getData(self::CPWD);
    }
    public function getRadio()
    {
        return $this->getData(self::RADIO);
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
    public function setPwd($pwd)
    {
        return $this->setData(self::PWD, $pwd);
    }
    public function setCpwd($cpwd)
    {
        return $this->setData(self::CPWD, $cpwd);
    }

    public function setRadio($radio)
    {
        return $this->setData(self::RADIO, $radio);
    }

    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }
    public function setTelephone($telephone)
    {
        return $this->setData(self::TELEPHONE,$telephone);
    }
    public function setComment($comment)
    {
        return $this->setData(self::COMMENT,$comment);
    }
    
}