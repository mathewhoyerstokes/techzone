<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\RestApi\V2\Api\Order\Payer;

use Swag\PayPal\RestApi\PayPalApiStruct;
use Swag\PayPal\RestApi\V2\Api\Order\Payer\Phone\PhoneNumber;

class Phone extends PayPalApiStruct
{
    /**
     * @var string
     */
    protected $phoneType;

    /**
     * @var PhoneNumber
     */
    protected $phoneNumber;

    public function getPhoneType(): string
    {
        return $this->phoneType;
    }

    public function setPhoneType(string $phoneType): void
    {
        $this->phoneType = $phoneType;
    }

    public function getPhoneNumber(): PhoneNumber
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(PhoneNumber $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }
}
