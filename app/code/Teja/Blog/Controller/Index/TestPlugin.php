<?php
namespace Teja\Blog\Controller\Index;

class TestPlugin extends \Magento\Framework\App\Action\Action 
{
	protected $_name;
	public function execute()
	{
		echo __METHOD__.'</br>';
     echo $this->setName('TestPlugin Function');
	}
	public function setName($name)
	{
		echo __METHOD__.'</br>';
	 return $this->_name = $name;
	}
}