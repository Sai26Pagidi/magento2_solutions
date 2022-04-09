<?php
namespace Testing\Blog\Api\Data;

interface BlogInterface
{
	 /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
     const ID='id';
     const TITLE='title';
     const SHORT_DESCRIPTION='short_description';
     const STATUS='status';

     public function getId();
     public function getTitle();
     public function getShortDescription();//if underscore then change it to with next lettter capital and remove underscore 
     public function getStatus();


     public function serId($id);
     public function setTitle($title);
     public function setShortDescription($shortDescription);//if underscore then change it to with next lettter capital and remove underscore 
     public function setStatus($status);
}