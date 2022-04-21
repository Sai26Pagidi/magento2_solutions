<?php
namespace Haldir\Hammu\Api\Data;

interface GroupDataInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                   = 'id';
    const TITLE                 = 'title';
    const NAME                  = 'name';
    const TELEPHONE         =   'telephone';
    const DESCRIPTION     ='description';
    const STATUS            = 'status';
    const CREATEDAT     ='created_at';
    /**#@-*/


    public function getId();
    public function getTitle();
    public function getName();
    public function getTelephone();
    public function getDescription();
    public function getStatus();
    public function getCreatedAt();
    

    public function setId($id);
    public function setTitle($title);
    public function setName($name);
    public function setTelephone($telephone);
    public function setDescription($description);
    public function setStatus($status);
    public function setCreatedAt($created_at);
    
}