<?php
namespace Saiteja\Myownmodule\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                   = 'id';
    const TITLE                 = 'title';
    const NAME                 = 'name';
    const SHORT_DESCRIPTION     ='short_description';
    const CREATED_AT            = 'created_at';
    /**#@-*/


    public function getId();
    public function getTitle();
    public function getName();
    public function getShortDescription();
    public function getCreatedAt();
    

    public function setId($id);
    public function setTitle($title);
    public function setName($name);
    public function setShortDescription($shortDescription);
    public function setCreatedAt($createdAt);
    
}