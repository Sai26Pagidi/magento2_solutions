<?php
namespace Teja\Blog\Api\Data;

interface FormInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                   = 'id';
    const NAME                 = 'name';
    const PWD                  ='pwd';
    const CPWD                 = 'cpwd';
    const RADIO                ='radio';
    const EMAIL                ='email';
    const TELEPHONE            ='telephone';
    const COMMENT              ='comment';
    /**#@-*/


    public function getId();
    public function getName();
    public function getPwd();
    public function getCpwd();
    public function getRadio();
    public function getEmail();
    public function getTelephone();
    public function getComment();
    
    

    public function setId($id);
    public function setName($name);
    public function setPwd($pwd);
    public function setCpwd($cpwd);
    public function setRadio($radio);
    public function setEmail($email);
    public function setTelephone($telephone);
    public function setComment($comment);
    
}