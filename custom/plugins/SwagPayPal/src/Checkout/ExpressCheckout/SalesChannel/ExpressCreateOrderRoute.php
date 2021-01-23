<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Checkout\ExpressCheckout\SalesChannel;

use OpenApi\Annotations as OA;
use Shopware\Core\Checkout\Cart\SalesChannel\CartService;
use Shopware\Core\Framework\Plugin\Exception\DecorationPatternException;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Swag\PayPal\Checkout\TokenResponse;
use Swag\PayPal\OrdersApi\Builder\OrderFromCartBuilder;
use Swag\PayPal\RestApi\PartnerAttributionId;
use Swag\PayPal\RestApi\V2\Api\Order\ApplicationContext;
use Swag\PayPal\RestApi\V2\Resource\OrderResource;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"store-api"})
 */
class ExpressCreateOrderRoute extends AbstractExpressCreateOrderRoute
{
    /**
     * @var CartService
     */
    private $cartService;

    /**
     * @var OrderFromCartBuilder
     */
    private $orderFromCartBuilder;

    /**
     * @var OrderResource
     */
    private $orderResource;

    public function __construct(
        CartService $cartService,
        OrderFromCartBuilder $orderFromCartBuilder,
        OrderResource $orderResource
    ) {
        $this->cartService = $cartService;
        $this->orderFromCartBuilder = $orderFromCartBuilder;
        $this->orderResource = $orderResource;
    }

    public function getDecorated(): AbstractExpressCreateOrderRoute
    {
        throw new DecorationPatternException(self::class);
    }

    /**
     * @OA\Post(
     *     path="/store-api/v{version}/paypal/express/create-order",
     *     description="Creates a PayPal order from the existing cart",
     *     operationId="createPayPalExpressOrder",
     *     tags={"Store API", "PayPal"},
     *     @OA\Response(
     *         response="200",
     *         description="The new token of the order"
     *    )
     * )
     *
     * @Route(
     *     "/store-api/v{version}/paypal/express/create-order",
     *      name="store-api.paypal.express.create_order",
     *      methods={"POST"}
     * )
     */
    public function createPayPalOrder(SalesChannelContext $context): TokenResponse
    {
        $cart = $this->cartService->getCart($context->getToken(), $context);
        $order = $this->orderFromCartBuilder->getOrder($cart, $context, null, true);
        $order->getApplicationContext()->setShippingPreference(ApplicationContext::SHIPPING_PREFERENCE_GET_FROM_FILE);

        $orderResponse = $this->orderResource->create(
            $order,
            $context->getSalesChannel()->getId(),
            PartnerAttributionId::PAYPAL_EXPRESS_CHECKOUT
        );

        return new TokenResponse($orderResponse->getId());
    }
}
