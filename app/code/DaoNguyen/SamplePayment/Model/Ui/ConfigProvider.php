<?php
declare(strict_types=1);

namespace DaoNguyen\SamplePayment\Model\Ui;

use Magento\Checkout\Model\ConfigProviderInterface;

class ConfigProvider implements ConfigProviderInterface
{
    public const CODE = 'daonguyen_sample_payment';

    /**
     * @inheritdoc
     */
    public function getConfig()
    {
        return [];
    }
}
