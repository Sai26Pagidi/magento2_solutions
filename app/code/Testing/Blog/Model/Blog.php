<?php
namespace Testing\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Testing\Blog\Api\Data\BlogInterface;


class Blog extends AbstractModel implements BlogInterface, IdentityInterface
{
	const CACHE_TAG = 'test_blog';
	protected function __construct()
	{
		$this->_init('Testing\Blog\Model\ResourceModel\Blog');
		//declare resource model
	}
	  /**
     * Get ID
     *
     * @return int|null
     */
	public function getId()
	{
		return $this->getData(self::ID);
	}
	  /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
	public function getTitle()
	{
		return $this->getData(self::TITLE);
	}
	  /**
     * Set SHORT_DESCRIPTION
     *
     * @param string $shortDescription
     * @return $this
     */
	public function getShortDescription()
	{
		return $this->getData(self::SHORT_DESCRIPTION);

	}
	 /**
     * Get STATUS
     *
     * @return int|null
     */
	public function getStatus()
	{
		return $this->getData(self::STATUS);

	}
	// set data

	public function setId($id)
	{
		return $this->setData(self::ID,$id);

	}
	public function setTitle($title)
	{
		return $this->setData(self::TITLE,$title);

	}
	public function setShortDescription($shortDescription)
	{
		return $this->setData(self::SHORT_DESCRIPTION,$shortDescription);

	}
	public function setStatus($status)
	{
		return $this->setData(self::STATUS,$status);
	}

}