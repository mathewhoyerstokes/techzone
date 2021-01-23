<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\RestApi\Client;

use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use Swag\PayPal\RestApi\BaseURL;
use Swag\PayPal\RestApi\PartnerAttributionId;
use Swag\PayPal\RestApi\PayPalApiStruct;
use Swag\PayPal\RestApi\V1\Api\OAuthCredentials;
use Swag\PayPal\RestApi\V1\Resource\TokenResourceInterface;
use Swag\PayPal\Setting\Exception\PayPalSettingsInvalidException;
use Swag\PayPal\Setting\SwagPayPalSettingStruct;

class PayPalClient extends AbstractClient implements PayPalClientInterface
{
    /**
     * @var TokenResourceInterface
     */
    private $tokenResource;

    /**
     * @throws PayPalSettingsInvalidException
     */
    public function __construct(
        TokenResourceInterface $tokenResource,
        SwagPayPalSettingStruct $settings,
        LoggerInterface $logger,
        string $partnerAttributionId = PartnerAttributionId::PAYPAL_CLASSIC
    ) {
        $this->tokenResource = $tokenResource;

        $url = $settings->getSandbox() ? BaseURL::SANDBOX : BaseURL::LIVE;

        $clientId = $settings->getSandbox() ? $settings->getClientIdSandbox() : $settings->getClientId();
        $clientSecret = $settings->getSandbox() ? $settings->getClientSecretSandbox() : $settings->getClientSecret();

        if ($clientId === '') {
            throw new PayPalSettingsInvalidException($settings->getSandbox() ? 'clientIdSandbox' : 'clientId');
        }

        if ($clientSecret === '') {
            throw new PayPalSettingsInvalidException($settings->getSandbox() ? 'clientSecretSandbox' : 'clientSecret');
        }

        $credentials = $this->createCredentialsObject($clientId, $clientSecret);
        $authorizationHeader = $this->createAuthorizationHeaderValue($credentials, $url);

        $client = new Client([
            'base_uri' => $url,
            'headers' => [
                'PayPal-Partner-Attribution-Id' => $partnerAttributionId,
                'Authorization' => $authorizationHeader,
            ],
        ]);

        parent::__construct($client, $logger);
    }

    public function sendPostRequest(string $resourceUri, ?PayPalApiStruct $data, array $headers = []): array
    {
        $headers['content-type'] = 'application/json';
        $options = [
            'headers' => $headers,
            'json' => $data,
        ];

        return $this->post($resourceUri, $options);
    }

    public function sendGetRequest(string $resourceUri, array $headers = []): array
    {
        $options = [
            'headers' => $headers,
        ];

        return $this->get($resourceUri, $options);
    }

    /**
     * @param PayPalApiStruct[] $data
     */
    public function sendPatchRequest(string $resourceUri, array $data, array $headers = []): array
    {
        $headers['content-type'] = 'application/json';
        $options = [
            'headers' => $headers,
            'json' => $data,
        ];

        return $this->patch($resourceUri, $options);
    }

    public function sendDeleteRequest(string $resourceUri, array $headers = []): array
    {
        $options = [
            'headers' => $headers,
        ];

        return $this->delete($resourceUri, $options);
    }

    private function createCredentialsObject(string $clientId, string $clientSecret): OAuthCredentials
    {
        $credentials = new OAuthCredentials();
        $credentials->setRestId($clientId);
        $credentials->setRestSecret($clientSecret);

        return $credentials;
    }

    private function createAuthorizationHeaderValue(OAuthCredentials $credentials, string $url): string
    {
        $token = $this->tokenResource->getToken($credentials, $url);

        return \sprintf('%s %s', $token->getTokenType(), $token->getAccessToken());
    }
}
