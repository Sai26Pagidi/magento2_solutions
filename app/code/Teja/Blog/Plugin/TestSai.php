<?php
namespace Teja\Blog\Plugin;
class TestSai{
    public function beforeSetName(\Teja\Blog\Controller\Index\TestPlugin $subject,$name){
        echo __METHOD__.'</br>';
        $name = $name.' Welcome to the Before File';
        return $name;
    }
}