<?php
declare(strict_types=1);

namespace DaoNguyen\SamplePayment\Controller\Callback;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

class Index implements HttpGetActionInterface
{
    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute()
    {

    }
}
