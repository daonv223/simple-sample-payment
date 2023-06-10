<?php
declare(strict_types=1);

namespace DaoNguyen\SamplePayment\Controller\Emulator;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Success implements HttpPostActionInterface
{
    public function __construct(private readonly PageFactory $pageFactory)
    {
    }

    /**
     * Execute action based on request and return result.
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->pageFactory->create();
    }
}
