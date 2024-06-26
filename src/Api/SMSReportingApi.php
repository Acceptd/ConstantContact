<?php
/**
 * SMSReportingApi
 * PHP version 7.4
 *
 * @category Class
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AppConnect V3
 *
 * The Constant Contact, Inc. V3 public API, for building integrations with Constant Contact, the leading small-business email marketing platform.
 *
 * The version of the OpenAPI document: 3.0.2400
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ConstantContact\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ConstantContact\Client\ApiException;
use ConstantContact\Client\Configuration;
use ConstantContact\Client\HeaderSelector;
use ConstantContact\Client\ObjectSerializer;

/**
 * SMSReportingApi Class Doc Comment
 *
 * @category Class
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SMSReportingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getAllBulkSmsCampaignSummaries' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAllBulkSmsCampaignSummaries
     *
     * GET an SMS Campaigns Summary Report
     *
     * @param  string $limit Use to limit the number of results to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. (optional, default to '50')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllBulkSmsCampaignSummaries'] to see the possible values for this operation
     *
     * @throws 'ConstantContact\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return 'ConstantContact\Client\Model\SmsCampaignSummariesPage
     */
    public function getAllBulkSmsCampaignSummaries($limit = '50', string $contentType = self::contentTypes['getAllBulkSmsCampaignSummaries'][0])
    {
        list($response) = $this->getAllBulkSmsCampaignSummariesWithHttpInfo($limit, $contentType);
        return $response;
    }

    /**
     * Operation getAllBulkSmsCampaignSummariesWithHttpInfo
     *
     * GET an SMS Campaigns Summary Report
     *
     * @param  string $limit Use to limit the number of results to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. (optional, default to '50')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllBulkSmsCampaignSummaries'] to see the possible values for this operation
     *
     * @throws 'ConstantContact\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of 'ConstantContact\Client\Model\SmsCampaignSummariesPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllBulkSmsCampaignSummariesWithHttpInfo($limit = '50', string $contentType = self::contentTypes['getAllBulkSmsCampaignSummaries'][0])
    {
        $request = $this->getAllBulkSmsCampaignSummariesRequest($limit, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\ConstantContact\Client\Model\SmsCampaignSummariesPage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ConstantContact\Client\Model\SmsCampaignSummariesPage' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ConstantContact\Client\Model\SmsCampaignSummariesPage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ConstantContact\Client\Model\SmsCampaignSummariesPage';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ConstantContact\Client\Model\SmsCampaignSummariesPage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllBulkSmsCampaignSummariesAsync
     *
     * GET an SMS Campaigns Summary Report
     *
     * @param  string $limit Use to limit the number of results to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. (optional, default to '50')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllBulkSmsCampaignSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllBulkSmsCampaignSummariesAsync($limit = '50', string $contentType = self::contentTypes['getAllBulkSmsCampaignSummaries'][0])
    {
        return $this->getAllBulkSmsCampaignSummariesAsyncWithHttpInfo($limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllBulkSmsCampaignSummariesAsyncWithHttpInfo
     *
     * GET an SMS Campaigns Summary Report
     *
     * @param  string $limit Use to limit the number of results to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. (optional, default to '50')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllBulkSmsCampaignSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllBulkSmsCampaignSummariesAsyncWithHttpInfo($limit = '50', string $contentType = self::contentTypes['getAllBulkSmsCampaignSummaries'][0])
    {
        $returnType = '\ConstantContact\Client\Model\SmsCampaignSummariesPage';
        $request = $this->getAllBulkSmsCampaignSummariesRequest($limit, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllBulkSmsCampaignSummaries'
     *
     * @param  string $limit Use to limit the number of results to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. (optional, default to '50')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllBulkSmsCampaignSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllBulkSmsCampaignSummariesRequest($limit = '50', string $contentType = self::contentTypes['getAllBulkSmsCampaignSummaries'][0])
    {



        $resourcePath = '/reports/summary_reports/sms_campaign_summaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
