<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\RestApi\V1\Api;

use Swag\PayPal\RestApi\PayPalApiStruct;
use Swag\PayPal\RestApi\V1\Api\Plan\BillingCycle;
use Swag\PayPal\RestApi\V1\Api\Plan\PaymentPreferences;
use Swag\PayPal\RestApi\V1\Api\Plan\Taxes;

/**
 * @codeCoverageIgnore
 * @experimental
 *
 * This class is experimental and not officially supported.
 * It is currently not used within the plugin itself. Use with caution.
 */
class Plan extends PayPalApiStruct
{
    /**
     * @var string
     */
    protected $productId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var BillingCycle[]
     */
    protected $billingCycles = [];

    /**
     * @var PaymentPreferences
     */
    protected $paymentPreferences;

    /**
     * @var Taxes
     */
    protected $taxes;

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return BillingCycle[]
     */
    public function getBillingCycles(): array
    {
        return $this->billingCycles;
    }

    /**
     * @param BillingCycle[] $billingCycles
     */
    public function setBillingCycles(array $billingCycles): void
    {
        $this->billingCycles = $billingCycles;
    }

    public function getPaymentPreferences(): PaymentPreferences
    {
        return $this->paymentPreferences;
    }

    public function setPaymentPreferences(PaymentPreferences $paymentPreferences): void
    {
        $this->paymentPreferences = $paymentPreferences;
    }

    public function getTaxes(): Taxes
    {
        return $this->taxes;
    }

    public function setTaxes(Taxes $taxes): void
    {
        $this->taxes = $taxes;
    }
}
