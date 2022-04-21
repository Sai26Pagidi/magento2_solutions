<?php
namespace Teja\Blog\Api\Data;

interface FormDataInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                   = 'id';
    const NAME                 = 'title';
    const EMAIL     ='email';
    const TELEPHONE            = 'status';
    const COMMENT   = 'comment';
    const CREATED_AT = 'created_at';
    /**#@-*/


    public function getId();
    public function getName();
    public function getEmail();
    public function getTelephone();
    public function getComment();
    public function getCreatedAt();
    

    public function setId($id);
    public function setName($name);
    public function setEmail($email);
    public function setTelephone($telephone);
    public function setComment($comment);
    public function setCreatedAt($created_at);
}