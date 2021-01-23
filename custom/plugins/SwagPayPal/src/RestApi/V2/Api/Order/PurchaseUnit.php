<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\RestApi\V2\Api\Order;

use Swag\PayPal\RestApi\PayPalApiStruct;
use Swag\PayPal\RestApi\V2\Api\Order\PurchaseUnit\Amount;
use Swag\PayPal\RestApi\V2\Api\Order\PurchaseUnit\Item;
use Swag\PayPal\RestApi\V2\Api\Order\PurchaseUnit\Payee;
use Swag\PayPal\RestApi\V2\Api\Order\PurchaseUnit\Payments;
use Swag\PayPal\RestApi\V2\Api\Order\PurchaseUnit\Shipping;

class PurchaseUnit extends PayPalApiStruct
{
    /**
     * @var string
     */
    protected $referenceId;

    /**
     * @var Amount
     */
    protected $amount;

    /**
     * @var Payee
     */
    protected $payee;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $customId;

    /**
     * @var string|null
     */
    protected $invoiceId;

    /**
     * @var Item[]|null
     */
    protected $items;

    /**
     * @var Shipping
     */
    protected $shipping;

    /**
     * @var Payments
     */
    protected $payments;

    public function getReferenceId(): string
    {
        return $this->referenceId;
    }

    public function setReferenceId(string $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    public function getAmount(): Amount
    {
        return $this->amount;
    }

    public function setAmount(Amount $amount): void
    {
        $this->amount = $amount;
    }

    public function getPayee(): Payee
    {
        return $this->payee;
    }

    public function setPayee(Payee $payee): void
    {
        $this->payee = $payee;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCustomId(): ?string
    {
        return $this->customId;
    }

    public function setCustomId(?string $customId): void
    {
        $this->customId = $customId;
    }

    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    public function setInvoiceId(?string $invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return Item[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param Item[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function getPayments(): Payments
    {
        return $this->payments;
    }

    public function setPayments(Payments $payments): void
    {
        $this->payments = $payments;
    }
}
