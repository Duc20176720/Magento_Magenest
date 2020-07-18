<?php
namespace Simple\Slider\Controller\Adminhtml\Slider;

class Save extends \Magento\Backend\App\Action
{

    const ADMIN_RESOURCE = 'Display';

    protected $resultPageFactory;
    protected $contactFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Simple\Slider\Model\SliderFactory $contactFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->contactFactory = $contactFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();

        if($data)
        {
            try{
                $id = $data['slider_id'];

                $contact = $this->contactFactory->create()->load($id);

                $data = array_filter($data, function($value) {return $value !== ''; });

                $contact->setData($data);
                $contact->save();
                $this->messageManager->addSuccess(__('Successfully saved the item.'));
                $this->_objectManager->get('Magento\Backend\Model\Session')->setFormData(false);
                return $resultRedirect->setPath('slider/slider/index');
            }
            catch(\Exception $exception)
            {
                $this->messageManager->addError($exception->getMessage());
                $this->_objectManager->get('Magento\Backend\Model\Session')->setFormData($data);
                return $resultRedirect->setPath('slider/slider/index', ['slider_id' => $contact->getId()]);
            }
        }

        return $resultRedirect->setPath('slider/slider/index');
    }
}
