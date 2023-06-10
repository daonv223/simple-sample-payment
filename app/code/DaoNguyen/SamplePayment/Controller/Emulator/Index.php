<?php
declare(strict_types=1);

namespace DaoNguyen\SamplePayment\Controller\Emulator;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Payment/emulator/index controller.
 */
class Index implements HttpPostActionInterface
{
    /**
     * @param PageFactory $pageFactory
     */
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
