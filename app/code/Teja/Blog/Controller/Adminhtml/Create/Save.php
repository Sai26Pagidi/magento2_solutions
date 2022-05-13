<?php

declare(strict_types=1);

namespace Teja\Blog\Controller\Adminhtml\Create;

use Magento\Framework\Exception\LocalizedException;
use Teja\Blog\Model\JobPostsFactory;

class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;
    protected $_jobPostsFactory;
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor,
        JobPostsFactory $jobPostsFactory
    ) {
        $this->dataPersistor = $dataPersistor;
        $this->_jobPostsFactory = $jobPostsFactory;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $id = $this->getRequest()->getParam('id');
            $model = $this->_jobPostsFactory->create()->load($id);
          //  $model = $this->_objectManager->create(\Teja\Blog\Model\JobPosts::class)->load($id);
            // if (!$model->getId() && $id) {
            //     $this->messageManager->addErrorMessage(__('This Customform no longer exists.'));
            //     return $resultRedirect->setPath('*/*/');
            // }

            // if (isset($data['image'][0]['name']) && isset($data['image'][0]['tmp_name'])) {
            //     $data['image'] = $data['image'][0]['name'];
            //     $this->imageUploader = \Magento\Framework\App\ObjectManager::getInstance()->get(
            //         'Thecoachsmb\Customform\CustomformImageUpload'
            //     );
            //     $this->imageUploader->moveFileFromTmp($data['image']);
            // } elseif (isset($data['image'][0]['name']) && !isset($data['image'][0]['tmp_name'])) {
            //     $data['image'] = $data['image'][0]['name'];
            // } else {
            //     $data['image'] = null;
            // }
            $model->setData($data);

            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the JobForm.'));
                $this->dataPersistor->clear('smbcustomform');

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Customform.'));
            }

            $this->dataPersistor->set('smbcustomform', $data);
            return $resultRedirect->setPath('*/*/edit', ['id' => $this->getRequest()->getParam('id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
