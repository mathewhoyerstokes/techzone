<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Pos\Api;

final class PosRequestUri
{
    public const TOKEN_RESOURCE = 'token/';
    public const PRODUCT_RESOURCE = 'organizations/self/products/';
    public const PRODUCT_RESOURCE_V2 = 'organizations/self/products/v2/';
    public const PRODUCT_RESOURCE_COUNT = 'organizations/self/products/v2/count/';
    public const INVENTORY_RESOURCE_LOCATIONS = 'organizations/self/locations/';
    public const INVENTORY_RESOURCE_GET = 'organizations/self/inventory/locations/%s/';
    public const INVENTORY_RESOURCE_BULK = 'organizations/self/v2/inventory/bulk/';
    public const IMAGE_RESOURCE_BULK = 'v2/images/organizations/self/products/bulk';
    public const MERCHANT_INFORMATION = 'api/resources/organizations/self/';
    public const SUBSCRIPTION_RESOURCE = 'organizations/self/subscriptions/';
    public const SUBSCRIPTION_RESOURCE_DELETE = 'organizations/self/subscriptions/uuid/';

    private function __construct()
    {
    }
}
