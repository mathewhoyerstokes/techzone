<?php declare(strict_types=1);

namespace Shopware\Core\System\SalesChannel\SalesChannel;

use Shopware\Core\Checkout\Cart\Exception\CustomerNotLoggedInException;
use Shopware\Core\Checkout\Customer\Exception\AddressNotFoundException;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\Framework\Routing\Annotation\Since;
use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;
use Shopware\Core\PlatformRequest;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @deprecated tag:v6.4.0 - Use Store-API instead
 * @RouteScope(scopes={"sales-channel-api"})
 */
class SalesChannelContextController extends AbstractController
{
    /**
     * @var SalesChannelContextSwitcher
     */
    protected $contextSwitcher;

    public function __construct(SalesChannelContextSwitcher $contextSwitcher)
    {
        $this->contextSwitcher = $contextSwitcher;
    }

    /**
     * @Since("6.0.0.0")
     * @Route("/sales-channel-api/v{version}/context", name="sales-channel-api.context.update", methods={"PATCH"})
     *
     * @throws AddressNotFoundException
     * @throws CustomerNotLoggedInException
     */
    public function update(RequestDataBag $data, SalesChannelContext $context): JsonResponse
    {
        $this->contextSwitcher->update($data, $context);

        return new JsonResponse([
            PlatformRequest::HEADER_CONTEXT_TOKEN => $context->getToken(),
        ]);
    }

    /**
     * @Since("6.1.0.0")
     * @Route("/sales-channel-api/v{version}/context", name="sales-channel-api.context.get", methods={"GET"})
     */
    public function getContext(SalesChannelContext $context): JsonResponse
    {
        return new JsonResponse($context);
    }
}
