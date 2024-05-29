# OpenAPI\Client\EmailSchedulingApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**retrieveEmailCampaignActivityPreviewUsingGET()**](EmailSchedulingApi.md#retrieveEmailCampaignActivityPreviewUsingGET) | **GET** /emails/activities/{campaign_activity_id}/previews | GET the HTML Preview of an Email Campaign Activity |
| [**retrieveEmailSchedulesUsingGET()**](EmailSchedulingApi.md#retrieveEmailSchedulesUsingGET) | **GET** /emails/activities/{campaign_activity_id}/schedules | GET an Email Campaign Activity Schedule |
| [**retrieveEmailSendHistoryUsingGET()**](EmailSchedulingApi.md#retrieveEmailSendHistoryUsingGET) | **GET** /emails/activities/{campaign_activity_id}/send_history | GET the Send History of an Email Campaign Activity |
| [**scheduleEmailCampaignActivityUsingPOST()**](EmailSchedulingApi.md#scheduleEmailCampaignActivityUsingPOST) | **POST** /emails/activities/{campaign_activity_id}/schedules | POST (Create) an Email Campaign Activity Schedule |
| [**testSendCampaignActivityUsingPOST()**](EmailSchedulingApi.md#testSendCampaignActivityUsingPOST) | **POST** /emails/activities/{campaign_activity_id}/tests | POST Test Send an Email Campaign Activity |
| [**unscheduleEmailCampaignActivityUsingDELETE()**](EmailSchedulingApi.md#unscheduleEmailCampaignActivityUsingDELETE) | **DELETE** /emails/activities/{campaign_activity_id}/schedules | DELETE an Email Campaign Activity Schedule |


## `retrieveEmailCampaignActivityPreviewUsingGET()`

```php
retrieveEmailCampaignActivityPreviewUsingGET($campaign_activity_id): 'ConstantContact\Client\Model\EmailCampaignActivityPreview
```

GET the HTML Preview of an Email Campaign Activity

Use this method to get the HTML preview of an email campaign activity. The HTML preview allows you to verify how the email campaign activity will look before you send it to contacts.  Custom code emails (`format_type` 5) use the Constant Contact account owner's contact information to process contact, custom field, and account variables in the preview.  This method returns the HTML preview encoded as a JSON string. You will need to decode the string before you can use it as valid HTML.

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


$apiInstance = new OpenAPI\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity.

try {
    $result = $apiInstance->retrieveEmailCampaignActivityPreviewUsingGET($campaign_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->retrieveEmailCampaignActivityPreviewUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |

### Return type

[**\OpenAPI\Client\Model\EmailCampaignActivityPreview**](../Model/EmailCampaignActivityPreview.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveEmailSchedulesUsingGET()`

```php
retrieveEmailSchedulesUsingGET($campaign_activity_id): 'ConstantContact\Client\Model\EmailScheduleResponseInner[]
```

GET an Email Campaign Activity Schedule

Use this method to return the current schedule for an email campaign activity. This schedule contains the date that Constant Contact will send the email campaign activity to contacts. If the email campaign activity is not in `SCHEDULED` status, this method returns an empty array and a 200 response code.

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


$apiInstance = new OpenAPI\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity.

try {
    $result = $apiInstance->retrieveEmailSchedulesUsingGET($campaign_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->retrieveEmailSchedulesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |

### Return type

[**\OpenAPI\Client\Model\EmailScheduleResponseInner[]**](../Model/EmailScheduleResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveEmailSendHistoryUsingGET()`

```php
retrieveEmailSendHistoryUsingGET($campaign_activity_id): 'ConstantContact\Client\Model\EmailSendHistoryInner[]
```

GET the Send History of an Email Campaign Activity

Use this method to return the send history of an email campaign activity. This method returns the send history as an array containing an object for each time you sent a specific email campaign activity to contacts.   Each send history object contains the email campaign activity send date, the number of contacts it was sent to, and the contact lists or segments used to send it. Each send history object also includes if the send attempt completed or encountered an error, and the reason why each error occurred. This method returns results in ascending order starting with the first send attempt.   If the email campaign activity has not been sent to contacts, this method returns a 200 response and an empty array.

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


$apiInstance = new OpenAPI\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity. You can return the send history for `primary_email` and `resend` role email campaign activities.

try {
    $result = $apiInstance->retrieveEmailSendHistoryUsingGET($campaign_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->retrieveEmailSendHistoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. You can return the send history for &#x60;primary_email&#x60; and &#x60;resend&#x60; role email campaign activities. | |

### Return type

[**\OpenAPI\Client\Model\EmailSendHistoryInner[]**](../Model/EmailSendHistoryInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleEmailCampaignActivityUsingPOST()`

```php
scheduleEmailCampaignActivityUsingPOST($campaign_activity_id, $body): 'ConstantContact\Client\Model\EmailScheduleResponseInner[]
```

POST (Create) an Email Campaign Activity Schedule

Use this method to schedule when Constant Contact will send an email campaign activity to contacts. Use the `scheduled_date` request body property to enter the ISO-8601 format date that you want Constant Contact to send the email campaign activity on.   Before you schedule an email campaign activity, you must update the email campaign activity and specify which contacts you want Constant Contact to send the email to. When you make a PUT call to update an email campaign activity, use the `contact_list_ids` or `segment_ids` array to add contacts.  You can only schedule email campaign activities that have the `primary_email` role and are in `DRAFT`, `DONE`, or `ERROR` status. When you schedule an email campaign activity in `DONE` status, Constant Contact does not send the email campaign activity to contacts that already received it. Constant Contact only sends the email campaign activity to any new contacts in the contact lists or segment you use.

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


$apiInstance = new OpenAPI\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity. You can only schedule email campaign activities that have the `primary_email` role.
$body = new 'ConstantContact\Client\Model\EmailScheduleInput(); // 'ConstantContact\Client\Model\EmailScheduleInput | A request body payload that contains the date that you want Constant Contact to send your email campaign activity on. Use `\"0\"` as the date to have Constant Contact immediately send the email campaign activity.

try {
    $result = $apiInstance->scheduleEmailCampaignActivityUsingPOST($campaign_activity_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->scheduleEmailCampaignActivityUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. You can only schedule email campaign activities that have the &#x60;primary_email&#x60; role. | |
| **body** | [**\OpenAPI\Client\Model\EmailScheduleInput**](../Model/EmailScheduleInput.md)| A request body payload that contains the date that you want Constant Contact to send your email campaign activity on. Use &#x60;\&quot;0\&quot;&#x60; as the date to have Constant Contact immediately send the email campaign activity. | |

### Return type

[**\OpenAPI\Client\Model\EmailScheduleResponseInner[]**](../Model/EmailScheduleResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testSendCampaignActivityUsingPOST()`

```php
testSendCampaignActivityUsingPOST($campaign_activity_id, $email_test_send_input)
```

POST Test Send an Email Campaign Activity

Use this method to send a test email to specific email addresses. Test emails allow you to verify how the email campaign activity will look before you send it to contacts. This method uses the `email_addresses` array in the request body to determine the recipients of the test email. The test email does not process any dynamic content in the email campaign activity. Dynamic content includes contact and custom field variables.  You can send up to 50 test emails each day. Each recipient you add to the `email_addresses` array in the request body counts towards this limit. Successfully sending a test email returns a 204 response code without a response body.

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


$apiInstance = new OpenAPI\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity. You can only test send email campaign activities that have the `primary_email` role.
$email_test_send_input = new 'ConstantContact\Client\Model\EmailTestSendInput(); // 'ConstantContact\Client\Model\EmailTestSendInput | A JSON request body that contains the recipients of the test email and an optional personal message.

try {
    $apiInstance->testSendCampaignActivityUsingPOST($campaign_activity_id, $email_test_send_input);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->testSendCampaignActivityUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. You can only test send email campaign activities that have the &#x60;primary_email&#x60; role. | |
| **email_test_send_input** | [**\OpenAPI\Client\Model\EmailTestSendInput**](../Model/EmailTestSendInput.md)| A JSON request body that contains the recipients of the test email and an optional personal message. | |

### Return type

void (empty response body)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unscheduleEmailCampaignActivityUsingDELETE()`

```php
unscheduleEmailCampaignActivityUsingDELETE($campaign_activity_id)
```

DELETE an Email Campaign Activity Schedule

Use this method to unschedule an email campaign activity by deleting the schedule. You can only unschedule email campaign activities that are in `SCHEDULED` status. Unscheduling reverts the email campaign activity to the status prior to `SCHEDULED`.

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


$apiInstance = new OpenAPI\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity.

try {
    $apiInstance->unscheduleEmailCampaignActivityUsingDELETE($campaign_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->unscheduleEmailCampaignActivityUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |

### Return type

void (empty response body)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
