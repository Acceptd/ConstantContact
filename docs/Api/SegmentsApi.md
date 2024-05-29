# OpenAPI\Client\SegmentsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSegment()**](SegmentsApi.md#createSegment) | **POST** /segments | POST (create) a Segment |
| [**deleteSegment()**](SegmentsApi.md#deleteSegment) | **DELETE** /segments/{segment_id} | DELETE a Segment |
| [**getAccountSegments()**](SegmentsApi.md#getAccountSegments) | **GET** /segments | GET all Segments |
| [**getSegmentDetail()**](SegmentsApi.md#getSegmentDetail) | **GET** /segments/{segment_id} | GET a Segment&#39;s Details |
| [**updateSegment()**](SegmentsApi.md#updateSegment) | **PUT** /segments/{segment_id} | PUT (update) a Segment |
| [**updateSegmentName()**](SegmentsApi.md#updateSegmentName) | **PATCH** /segments/{segment_id}/name | PATCH (rename) a Segment |


## `createSegment()`

```php
createSegment($body): 'ConstantContact\Client\Model\SegmentDetail
```

POST (create) a Segment

Use this method to create a new segment. You create segments to target a subset of your contacts that meet your specific criteria for a marketing campaign. The segment `name` must be unique. The `segment_criteria` requires single-string escaped JSON. Constant Contact uses the contact data that you specify in the `segment_criteria` to evaluate and identify the contacts you want to target. Contact data can be grouped from different data sources, including:    -  **`tracking`**: Supports **or** and **and** groups.     -  **`contact`**: Supports **or** and **and** groups.     -  **`list_membership`**: Supports **or** groups.    -  **`tags`**: Supports **or** groups.  If you do not specify `list_membership` as criteria, Constant Contact evaluates all contacts in your account. To avoid returning a 400 error response, when specifying the `segment_criteria` do not request more than 500 email campaigns or a date range greater than 1825 days (5 years) be evaluated.  For more use case information, see the [Segments Overview](/api_guide/segments_overview.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\SegmentData(); // 'ConstantContact\Client\Model\SegmentData | The segment `name` and `segment_criteria` (requires single-string escaped JSON).

try {
    $result = $apiInstance->createSegment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SegmentData**](../Model/SegmentData.md)| The segment &#x60;name&#x60; and &#x60;segment_criteria&#x60; (requires single-string escaped JSON). | |

### Return type

[**\OpenAPI\Client\Model\SegmentDetail**](../Model/SegmentDetail.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSegment()`

```php
deleteSegment($segment_id)
```

DELETE a Segment

Use this method to delete a segment from your account. Before deleting a segment, verify that the segment is not associated with a scheduled campaign.  Deleted segments do not display in the results when using the `GET /segments` endpoint. If you know the `segment_id`, you can use the `GET /segments/{segment_id}` endpoint to view the deleted segment's details. A segment's details are preserved for external reference purposes, such as displaying the segment name in a campaign's history. For more use case information, see [Delete a Segment](/api_guide/segment_delete.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = 14; // int | The system generated ID that uniquely identifies the segment.

try {
    $apiInstance->deleteSegment($segment_id);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->deleteSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **segment_id** | **int**| The system generated ID that uniquely identifies the segment. | |

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

## `getAccountSegments()`

```php
getAccountSegments($limit, $sort_by): 'ConstantContact\Client\Model\SegmentsDTO
```

GET all Segments

Use this method to get a list of all segments associated with the account. You can sort segment results and limit the number of segments that display per page. Deleted segments are excluded from the results. For more use case information, see [Get All Segments](/api_guide/segment_get_all.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // string | The number of segments to return on a page.
$sort_by = sort_by=date; // string | Specify the segment sort order to use. Sort by name (`sort_by=name`) in ascending order, or sort by date (`sort_by=date`) in descending order with the most recently updated segments listed first.

try {
    $result = $apiInstance->getAccountSegments($limit, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getAccountSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **string**| The number of segments to return on a page. | [optional] [default to &#39;1000&#39;] |
| **sort_by** | **string**| Specify the segment sort order to use. Sort by name (&#x60;sort_by&#x3D;name&#x60;) in ascending order, or sort by date (&#x60;sort_by&#x3D;date&#x60;) in descending order with the most recently updated segments listed first. | [optional] [default to &#39;date&#39;] |

### Return type

[**\OpenAPI\Client\Model\SegmentsDTO**](../Model/SegmentsDTO.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSegmentDetail()`

```php
getSegmentDetail($segment_id): 'ConstantContact\Client\Model\SegmentDetail
```

GET a Segment's Details

Use this method to get details about a segment, including the segment criteria. If you know the `segment_id` You can also use this method to get details about a deleted segment. For more use case information, see [Get a Segment's Details](/api_guide/segment_get.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = 14; // int | The system-generated unique ID that identifies a segment.

try {
    $result = $apiInstance->getSegmentDetail($segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegmentDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **segment_id** | **int**| The system-generated unique ID that identifies a segment. | |

### Return type

[**\OpenAPI\Client\Model\SegmentDetail**](../Model/SegmentDetail.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSegment()`

```php
updateSegment($segment_id, $body): 'ConstantContact\Client\Model\SegmentDetail
```

PUT (update) a Segment

Use this method to update an existing segment's name (`name`) and/or contact selection criteria (`segment_criteria`). You must specify both the `name` and the `segment_criteria` in the request body, even if you don't plan to update both. The segment's name must be unique and the JSON must be valid (requires single-string escaped JSON). To avoid returning a 400 error response, when specifying the `segment_criteria` do not request more than 500 email campaigns or a date range greater than 1825 days (5 years) be evaluated. For more use case information, see [Update Segment Details](/api_guide/segment_update.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = 14; // int | The system generated ID that uniquely identifies the segment that you want to modify.
$body = new 'ConstantContact\Client\Model\SegmentData(); // 'ConstantContact\Client\Model\SegmentData | Include both the `name` and `segment_criteria` (single-string escaped JSON) in the body request, then make updates to either or both.

try {
    $result = $apiInstance->updateSegment($segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->updateSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **segment_id** | **int**| The system generated ID that uniquely identifies the segment that you want to modify. | |
| **body** | [**\OpenAPI\Client\Model\SegmentData**](../Model/SegmentData.md)| Include both the &#x60;name&#x60; and &#x60;segment_criteria&#x60; (single-string escaped JSON) in the body request, then make updates to either or both. | |

### Return type

[**\OpenAPI\Client\Model\SegmentDetail**](../Model/SegmentDetail.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSegmentName()`

```php
updateSegmentName($segment_id, $body): 'ConstantContact\Client\Model\SegmentDetail
```

PATCH (rename) a Segment

Use this method to update an existing segment `name` with a new unique name in the request body. For more use case information, see [Rename a Segment](/api_guide/segment_rename.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = 14; // int | The system generated ID that uniquely identifies the segment that you want to modify.
$body = new 'ConstantContact\Client\Model\SegmentName(); // 'ConstantContact\Client\Model\SegmentName | Include the existing segment `name` in the body request, then rename the segment using a unique new name.

try {
    $result = $apiInstance->updateSegmentName($segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->updateSegmentName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **segment_id** | **int**| The system generated ID that uniquely identifies the segment that you want to modify. | |
| **body** | [**\OpenAPI\Client\Model\SegmentName**](../Model/SegmentName.md)| Include the existing segment &#x60;name&#x60; in the body request, then rename the segment using a unique new name. | |

### Return type

[**\OpenAPI\Client\Model\SegmentDetail**](../Model/SegmentDetail.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
