<?php

namespace VendorClassCuatro\ModuloClassCuatro\Controller\Example;

/* Dependencias del controlador */

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // Devuelve una respuesta que renderiza una pagina
        return $this->resultPageFactory->create();
    }


}

