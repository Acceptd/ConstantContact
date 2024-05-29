# OpenAPI\Client\SMSReportingApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllBulkSmsCampaignSummaries()**](SMSReportingApi.md#getAllBulkSmsCampaignSummaries) | **GET** /reports/summary_reports/sms_campaign_summaries | GET an SMS Campaigns Summary Report |


## `getAllBulkSmsCampaignSummaries()`

```php
getAllBulkSmsCampaignSummaries($limit): \OpenAPI\Client\Model\SmsCampaignSummariesPage
```

GET an SMS Campaigns Summary Report

Use this method to get a summary of aggregate tracking statistics for up to 500 SMS campaigns.  The response results include the total number of times that each contact uniquely interacted with each tracked campaign activity. Results are sorted in descending order by the date the SMS was last sent (`last_sent_date`). Use the `limit` query parameter to limit the number of results returned per page. For example, if you may want to compare the tracking statistics for the last five SMS campaigns to those in the previous five SMS campaigns, set the `limit` parameter to `5`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SMSReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // string | Use to limit the number of results to return on a single page. The default is `50` and the maximum is `500` per page.

try {
    $result = $apiInstance->getAllBulkSmsCampaignSummaries($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSReportingApi->getAllBulkSmsCampaignSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **string**| Use to limit the number of results to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |

### Return type

[**\OpenAPI\Client\Model\SmsCampaignSummariesPage**](../Model/SmsCampaignSummariesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
