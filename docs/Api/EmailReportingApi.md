# OpenAPI\Client\EmailReportingApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllBulkEmailCampaignSummaries()**](EmailReportingApi.md#getAllBulkEmailCampaignSummaries) | **GET** /reports/summary_reports/email_campaign_summaries | GET an Email Campaigns Summary Report |
| [**getBounces()**](EmailReportingApi.md#getBounces) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/bounces | GET an Email Bounces Report |
| [**getCampaignActivityLinkStats()**](EmailReportingApi.md#getCampaignActivityLinkStats) | **GET** /reports/email_reports/{campaign_activity_id}/links | GET an Email Links Report |
| [**getClicks()**](EmailReportingApi.md#getClicks) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/clicks | GET an Email Clicks Report |
| [**getDidNotOpens()**](EmailReportingApi.md#getDidNotOpens) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/didnotopens | GET an Email Did Not Opens Report |
| [**getEmailCampaignActivitySummary()**](EmailReportingApi.md#getEmailCampaignActivitySummary) | **GET** /reports/stats/email_campaign_activities/{campaign_activity_ids} | GET an Email Campaign Activity Stats Report |
| [**getEmailSummary()**](EmailReportingApi.md#getEmailSummary) | **GET** /reports/stats/email_campaigns/{campaign_ids} | GET an Email Campaign Stats Report |
| [**getForwards()**](EmailReportingApi.md#getForwards) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/forwards | GET an Email Forwards Report |
| [**getOpens()**](EmailReportingApi.md#getOpens) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/opens | GET an Email Opens Report |
| [**getOptouts()**](EmailReportingApi.md#getOptouts) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/optouts | GET an Email Opt-outs Report |
| [**getSends()**](EmailReportingApi.md#getSends) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/sends | GET an Email Sends Report |
| [**getUniqueOpens()**](EmailReportingApi.md#getUniqueOpens) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/unique_opens | GET an Email Unique Opens Report |


## `getAllBulkEmailCampaignSummaries()`

```php
getAllBulkEmailCampaignSummaries($limit): 'ConstantContact\Client\Model\BulkEmailCampaignSummariesPage
```

GET an Email Campaigns Summary Report

Use this method to get aggregate email campaign statistics for up to five hundred email campaigns. The response results include the total number of times that each contact uniquely interacted with each tracked campaign activity.  Results are sorted in descending order by the date that the email was last sent (<code>last_sent_date</code>). Use the <code>limit</code> query parameter to limit the number of email campaign summary reports listed on each page.     For more use case information, see \"[Get an Email Campaign Summary Report](/api_guide/email_bulk_campaign_summary_report.html)\"

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // string | Use the `limit` query parameter to limit the number of email campaign summaries to return on a single page. The default is `50` and the maximum is `500` per page.

try {
    $result = $apiInstance->getAllBulkEmailCampaignSummaries($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getAllBulkEmailCampaignSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **string**| Use the &#x60;limit&#x60; query parameter to limit the number of email campaign summaries to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |

### Return type

[**\OpenAPI\Client\Model\BulkEmailCampaignSummariesPage**](../Model/BulkEmailCampaignSummariesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBounces()`

```php
getBounces($campaign_activity_id, $bounce_code, $limit): 'ConstantContact\Client\Model\BouncesTrackingActivitiesPage
```

GET an Email Bounces Report

Use this method to get a report listing contact bounce data for the specified email campaign activity. This report lists the most recent bounce data first and includes contact information, such as the contact's email address, unique ID, and the email bounce date and time. Use the <code>bounce_code</code> query parameter to limit the type of bounce data to return.  For more use case information, see [Get a Bounces Report for an Email Campaign Activity](/api_guide/email_summary_bounces_report.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 'campaign_activity_id_example'; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$bounce_code = array('bounce_code_example'); // string[] | To return results for a specific bounce code, select the `bounce_code` from the drop-down list. To return results for multiple codes, repeat the bounce code parameter for each. For example, to return results for bounce codes `B` and `D` use `bounce_code=B&bounce_code=D`.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getBounces($campaign_activity_id, $bounce_code, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getBounces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **bounce_code** | [**string[]**](../Model/string.md)| To return results for a specific bounce code, select the &#x60;bounce_code&#x60; from the drop-down list. To return results for multiple codes, repeat the bounce code parameter for each. For example, to return results for bounce codes &#x60;B&#x60; and &#x60;D&#x60; use &#x60;bounce_code&#x3D;B&amp;bounce_code&#x3D;D&#x60;. | [optional] |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\OpenAPI\Client\Model\BouncesTrackingActivitiesPage**](../Model/BouncesTrackingActivitiesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignActivityLinkStats()`

```php
getCampaignActivityLinkStats($campaign_activity_id, $no_clicks): 'ConstantContact\Client\Model\EmailLinks
```

GET an Email Links Report

Use this method to return link details, including the number of unique contacts that clicked each link in an email campaign activity, and the type of action associated with clicking each link. To include link details for links that were not clicked, set the `no_clicks` query parameter to `true`.  You can return reporting data for `primary_email` and `resend` role email campaign activities. For more use case information, see [Get an Email Links Report](/api_guide/email_links_report.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The unique ID for an email campaign activity.
$no_clicks = true; // bool | Set this query parameter to `true` to  return details for links that were not clicked in the response results.

try {
    $result = $apiInstance->getCampaignActivityLinkStats($campaign_activity_id, $no_clicks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getCampaignActivityLinkStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |
| **no_clicks** | **bool**| Set this query parameter to &#x60;true&#x60; to  return details for links that were not clicked in the response results. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EmailLinks**](../Model/EmailLinks.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClicks()`

```php
getClicks($campaign_activity_id, $url_id, $limit): 'ConstantContact\Client\Model\ClicksTrackingActivitiesPage
```

GET an Email Clicks Report

Use this method to get each time a contact clicked a link, the click date and time, and the device type they used. Use the `url_id` query parameter to get a clicks report for a specific link URL. Clicks report data is sorted with most recent activity listed first.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = c8cdf384-15ca-4dcc-9b6f-4c91121fdc23; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$url_id = 49920742166; // int | The ID that uniquely identifies a single link URL for which you want to get a clicks report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getClicks($campaign_activity_id, $url_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getClicks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **url_id** | **int**| The ID that uniquely identifies a single link URL for which you want to get a clicks report. | [optional] |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\OpenAPI\Client\Model\ClicksTrackingActivitiesPage**](../Model/ClicksTrackingActivitiesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDidNotOpens()`

```php
getDidNotOpens($campaign_activity_id, $limit): 'ConstantContact\Client\Model\DidNotOpensTrackingActivitiesPage
```

GET an Email Did Not Opens Report

Use this method to get a report listing each contact that was sent, but did not open the specified email campaign activity. This report lists contact information such as the contact's email address and unique ID, and the date and time that the email campaign activity was sent. This report lists the most recent activity first. For more use case information, see [Get a Did Not Opens Report for an Email Campaign Activity](/api_guide/email_summary_non_opens_report.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getDidNotOpens($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getDidNotOpens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\OpenAPI\Client\Model\DidNotOpensTrackingActivitiesPage**](../Model/DidNotOpensTrackingActivitiesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignActivitySummary()`

```php
getEmailCampaignActivitySummary($campaign_activity_ids): 'ConstantContact\Client\Model\CampaignActivityStatsQueryResultEmail
```

GET an Email Campaign Activity Stats Report

Use this method to get performance tracking statistics for up to ten email campaign activities. Statistics include the total number of times contacts interacted with your campaigns and how.  For each `campaign_activity_id`, this method returns the `campaign_id`, the total counts (`stats`) for each type of tracked email activity, and the date and time that Constant Contact last refreshed (`last_refresh_time`) the `stats`.  When requesting statistics for multiple email campaign activities, if one or more of the `campaign_activity_ids` do not exist, were deleted, or do not have any stats associated with it, the `campaign_activity_ids` and error details display under `errors`. If any single specified `campaign_activity_id` is invalid (malformed), a 404 error response is returned for all campaign activities.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_ids = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | A comma-separated list of `campaign_activity_id`s (UUID's).

try {
    $result = $apiInstance->getEmailCampaignActivitySummary($campaign_activity_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getEmailCampaignActivitySummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_ids** | **string**| A comma-separated list of &#x60;campaign_activity_id&#x60;s (UUID&#39;s). | |

### Return type

[**\OpenAPI\Client\Model\CampaignActivityStatsQueryResultEmail**](../Model/CampaignActivityStatsQueryResultEmail.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSummary()`

```php
getEmailSummary($campaign_ids): 'ConstantContact\Client\Model\CampaignStatsQueryResultEmail
```

GET an Email Campaign Stats Report

Use this method to get email campaign performance tracking statistics for one or more campaigns, including the total number of times contacts interacted with your campaigns and how.  For each `campaign_id`, this method returns lists that include total counts (`stats`) for each type of tracked email and relevant campaign-related percentages (`percents`). It also returns the date and time at which the campaign stats were last refreshed. If any specified `campaign_id` is invalid, a 404 error response is returned for all campaigns.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_ids = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | A comma-separated list of `campaign_id`s (UUID's).

try {
    $result = $apiInstance->getEmailSummary($campaign_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getEmailSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_ids** | **string**| A comma-separated list of &#x60;campaign_id&#x60;s (UUID&#39;s). | |

### Return type

[**\OpenAPI\Client\Model\CampaignStatsQueryResultEmail**](../Model/CampaignStatsQueryResultEmail.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForwards()`

```php
getForwards($campaign_activity_id, $limit): 'ConstantContact\Client\Model\ForwardsTrackingActivitiesPage
```

GET an Email Forwards Report

Use this method to get a report listing each time a contact forwarded the email campaign activity using the forwarding link in the email footer. The report includes general contact information, such as the contact's email address and unique ID, and the date and time that the email campaign activity was forwarded. Forwards report data is sorted with the most recent activity listed first. For more use case information, see [Get an Email Forwards Report](/api_guide/email_summary_forwards_report.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 'campaign_activity_id_example'; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getForwards($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getForwards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\OpenAPI\Client\Model\ForwardsTrackingActivitiesPage**](../Model/ForwardsTrackingActivitiesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpens()`

```php
getOpens($campaign_activity_id, $limit): 'ConstantContact\Client\Model\OpensTrackingActivitiesPage
```

GET an Email Opens Report

Use this method to get each time a contact opened a specific email campaign activity. This report includes general contact information such as the contact's email address and unique ID, the date and time they opened the email campaign activity, and the type of device they used to open it. This report lists the most recent activity first. For more use case information, see [Get an Opens report for an Email Campaign Activity](/api_guide/email_summary_opens_report.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The unique ID for an email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getOpens($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getOpens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\OpenAPI\Client\Model\OpensTrackingActivitiesPage**](../Model/OpensTrackingActivitiesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptouts()`

```php
getOptouts($campaign_activity_id, $limit): 'ConstantContact\Client\Model\OptoutsTrackingActivitiesPage
```

GET an Email Opt-outs Report

Use this method to get a report listing each contact that clicked the unsubscribe link in the email campaign activity to opt-out from receiving emails sent from your Constant Contact account. This report includes contact information, such as the contact's email address, unique ID, and the opt-out date and time. Opt-out report data is sorted with the most recent activity listed first. For more use case information, see [Get an Email Opt-outs Report](/api_guide/email_summary_optouts_report.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 'campaign_activity_id_example'; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getOptouts($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getOptouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\OpenAPI\Client\Model\OptoutsTrackingActivitiesPage**](../Model/OptoutsTrackingActivitiesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSends()`

```php
getSends($campaign_activity_id, $limit): 'ConstantContact\Client\Model\SendsTrackingActivitiesPage
```

GET an Email Sends Report

Use this method to get each contact that was sent a specific email campaign activity. This sends report includes general contact data such as the date and time that the email campaign activity was sent to a contact's email address, the contact's first and last name, and unique ID. This report lists the most recent activity first. For more use case information, see [Get an Sends report for an Email Campaign Activity](/api_guide/email_summary_sends_report.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The unique ID for an email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getSends($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getSends: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\OpenAPI\Client\Model\SendsTrackingActivitiesPage**](../Model/SendsTrackingActivitiesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniqueOpens()`

```php
getUniqueOpens($campaign_activity_id, $limit): 'ConstantContact\Client\Model\OpensTrackingActivitiesPage
```

GET an Email Unique Opens Report

Use this method to get a unique opens report that provides details about the last time that each contact opened the specified email campaign activity. This report includes general contact information such as the contact's email address and unique ID, the date and time they opened the email campaign activity, and the type of device they used to open it. This report lists the most recent activity first. For more use case information, see [Get an Unique Opens Report for an Email Campaign Activity](/api_guide/email_summary_unique_opens_report.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getUniqueOpens($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getUniqueOpens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\OpenAPI\Client\Model\OpensTrackingActivitiesPage**](../Model/OpensTrackingActivitiesPage.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
