<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Checkout\ExpressCheckout\Route;

use Shopware\Core\System\SalesChannel\ContextTokenResponse;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\HttpFoundation\Request;

/**
 * @deprecated tag:v3.0.0 - Will be removed. Use AbstractExpressPrepareCheckoutRoute instead
 */
abstract class AbstractExpressApprovePaymentRoute
{
    abstract public function getDecorated(): AbstractExpressApprovePaymentRoute;

    abstract public function approve(SalesChannelContext $salesChannelContext, Request $request): ContextTokenResponse;
}
