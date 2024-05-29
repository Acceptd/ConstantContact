# OpenAPI\Client\TechnologyPartnersWebhooksApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWebhooksSubscriptions()**](TechnologyPartnersWebhooksApi.md#deleteWebhooksSubscriptions) | **DELETE** /partner/webhooks/subscriptions/{topic_id} | DELETE Webhook Topic Subscriptions |
| [**getWebhooksCollection()**](TechnologyPartnersWebhooksApi.md#getWebhooksCollection) | **GET** /partner/webhooks/subscriptions | GET a Collection of Webhook Topic Subscriptions |
| [**getWebhooksTopic()**](TechnologyPartnersWebhooksApi.md#getWebhooksTopic) | **GET** /partner/webhooks/subscriptions/{topic_id} | GET Webhook Topic Subscription |
| [**putWebhooksTopic()**](TechnologyPartnersWebhooksApi.md#putWebhooksTopic) | **PUT** /partner/webhooks/subscriptions/{topic_id} | PUT Webhook Topic Subscription |
| [**testSendWebhooksTopic()**](TechnologyPartnersWebhooksApi.md#testSendWebhooksTopic) | **POST** /partner/webhooks/subscriptions/{topic_id}/tests | POST Test Send Webhook Notification |


## `deleteWebhooksSubscriptions()`

```php
deleteWebhooksSubscriptions($topic_id)
```

DELETE Webhook Topic Subscriptions

Use this DELETE method to unsubscribe your application from notifications on a certain `topic_id`. Possible `topic_id` values include:   * `1` - Billing tier upgrade.  * `2` - Billing tier downgrade.  * `3` - Account cancelled.  * `4` - Account disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure API key authorization: ctctPartnerAuthorizer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Unnamed', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Unnamed', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topic_id = 1; // string | Identifies a webhook topic.

try {
    $apiInstance->deleteWebhooksSubscriptions($topic_id);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersWebhooksApi->deleteWebhooksSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topic_id** | **string**| Identifies a webhook topic. | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooksCollection()`

```php
getWebhooksCollection(): 'ConstantContact\Client\Model\WebhooksSubscriptionCollectionInner[]
```

GET a Collection of Webhook Topic Subscriptions

Use this GET method to return a collection containing your application's webhook subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure API key authorization: ctctPartnerAuthorizer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Unnamed', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Unnamed', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebhooksCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersWebhooksApi->getWebhooksCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WebhooksSubscriptionCollectionInner[]**](../Model/WebhooksSubscriptionCollectionInner.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooksTopic()`

```php
getWebhooksTopic($topic_id): 'ConstantContact\Client\Model\WebhooksSubscriptionResponse
```

GET Webhook Topic Subscription

Use this GET method to return subscription information for a certain `topic_id`. Possible `topic_id` values include:    * `1` - Billing tier upgrade.   * `2` - Billing tier downgrade.   * `3` - Account cancelled.   * `4` - Account disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure API key authorization: ctctPartnerAuthorizer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Unnamed', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Unnamed', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topic_id = 1; // string | Identifies a webhook topic.

try {
    $result = $apiInstance->getWebhooksTopic($topic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersWebhooksApi->getWebhooksTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topic_id** | **string**| Identifies a webhook topic. | |

### Return type

[**\OpenAPI\Client\Model\WebhooksSubscriptionResponse**](../Model/WebhooksSubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putWebhooksTopic()`

```php
putWebhooksTopic($topic_id, $body): 'ConstantContact\Client\Model\WebhooksSubscriptionPutResp
```

PUT Webhook Topic Subscription

Use this PUT method to subscribe your application to a `topic_id` or to update the callback URI for an existing subscription. Possible `topic_id` values include:   * `1` - Billing tier upgrade.  * `2` - Billing tier downgrade.  * `3` - Account cancelled.  * `4` - Account disabled.  After you subscribe your application, Constant Contact will automatically start sending POST notifications for your chosen topic to your application's callback URI. This is an example of the POST notification request body:    ```   {\"url\":\"https://api.cc.email/v3/partner/accounts/a07e1my9tbw0/plan\",   \"api_key\":\"90ed8738-5190-44a3-bc12-c172930db12c\",   \"event_type\":\"tier.increase\"}   ``` </br> If your application does not return a success response after receiving a notification, Constant Contact will retry sending the POST notification at 1 minute intervals for up to an hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure API key authorization: ctctPartnerAuthorizer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Unnamed', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Unnamed', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topic_id = 1; // string | Identifies a webhook topic.
$body = new 'ConstantContact\Client\Model\WebhooksSubscriptionBody(); // 'ConstantContact\Client\Model\WebhooksSubscriptionBody | A JSON payload containing a callback URI. Constant Contact uses this callback URI to notify you about your chosen topic.

try {
    $result = $apiInstance->putWebhooksTopic($topic_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersWebhooksApi->putWebhooksTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topic_id** | **string**| Identifies a webhook topic. | |
| **body** | [**\OpenAPI\Client\Model\WebhooksSubscriptionBody**](../Model/WebhooksSubscriptionBody.md)| A JSON payload containing a callback URI. Constant Contact uses this callback URI to notify you about your chosen topic. | |

### Return type

[**\OpenAPI\Client\Model\WebhooksSubscriptionPutResp**](../Model/WebhooksSubscriptionPutResp.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testSendWebhooksTopic()`

```php
testSendWebhooksTopic($topic_id): 'ConstantContact\Client\Model\WebhooksTestSend
```

POST Test Send Webhook Notification

Use this POST method to validate a webhook subscription by triggering a test notification for your chosen webhook `topic_id`. Possible `topic_id` values include:   * `1` - Billing tier upgrade.  * `2` - Billing tier downgrade.  * `3` - Account cancelled.  * `4` - Account disabled.  After you successfully send this request, Constant Contact will automatically send a POST notification to your chosen topic's callback URI with example data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure API key authorization: ctctPartnerAuthorizer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Unnamed', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Unnamed', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topic_id = 1; // string | Identifies a webhook topic.

try {
    $result = $apiInstance->testSendWebhooksTopic($topic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersWebhooksApi->testSendWebhooksTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topic_id** | **string**| Identifies a webhook topic. | |

### Return type

[**\OpenAPI\Client\Model\WebhooksTestSend**](../Model/WebhooksTestSend.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
