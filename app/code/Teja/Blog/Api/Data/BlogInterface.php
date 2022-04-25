<?php
namespace Teja\Blog\Api\Data;

interface BlogInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                   = 'id';
    const TITLE                 = 'title';
    const SHORT_DESCRIPTION     ='short_description';
    const STATUS            = 'status';
    const CREATEDAT         ='created_at';
    const UPDATEDAT         ='updated_at';
    /**#@-*/


    public function getId();
    public function getTitle();
    public function getShortDescription();
    public function getStatus();
    public function getCreatedAt();
    public function getUpdatedAt();
    
    

    public function setId($id);
    public function setTitle($title);
    public function setShortDescription($description);
    public function setStatus($status);
    public function setCreatedAt($createdAt);
    public function setUpdatedAt($updatedAt);
    
}