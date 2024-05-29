# OpenAPI\Client\ContactListsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createList()**](ContactListsApi.md#createList) | **POST** /contact_lists | POST (create) a List |
| [**deleteListActivity()**](ContactListsApi.md#deleteListActivity) | **DELETE** /contact_lists/{list_id} | DELETE a List |
| [**getList()**](ContactListsApi.md#getList) | **GET** /contact_lists/{list_id} | GET a List |
| [**getListIdXrefs()**](ContactListsApi.md#getListIdXrefs) | **GET** /contact_lists/list_id_xrefs | GET a collection of V2 and V3 API List IDs |
| [**getLists()**](ContactListsApi.md#getLists) | **GET** /contact_lists | GET Lists Collection |
| [**putList()**](ContactListsApi.md#putList) | **PUT** /contact_lists/{list_id} | PUT (update) a List |


## `createList()`

```php
createList($body): \OpenAPI\Client\Model\ContactListPutPost
```

POST (create) a List

Create a new contact list resource

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


$apiInstance = new OpenAPI\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ListInput(); // \OpenAPI\Client\Model\ListInput | JSON payload defining the new contact list

try {
    $result = $apiInstance->createList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->createList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ListInput**](../Model/ListInput.md)| JSON payload defining the new contact list | |

### Return type

[**\OpenAPI\Client\Model\ContactListPutPost**](../Model/ContactListPutPost.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteListActivity()`

```php
deleteListActivity($list_id): \OpenAPI\Client\Model\ActivityDeleteListResponse
```

DELETE a List

Deletes the specified contact list and its membership. DELETE List requests are processed asynchronously, and you can track the status of the request by making a GET call to the URI shown in the `_links` property in the response.

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


$apiInstance = new OpenAPI\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = cbc05bac-6a41-46fa-a063-79961763bf4b; // string | Unique ID of the list to delete

try {
    $result = $apiInstance->deleteListActivity($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->deleteListActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**| Unique ID of the list to delete | |

### Return type

[**\OpenAPI\Client\Model\ActivityDeleteListResponse**](../Model/ActivityDeleteListResponse.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getList()`

```php
getList($list_id, $include_membership_count): \OpenAPI\Client\Model\ContactList
```

GET a List

Use this method to get details about a specific contact list (`list_id`).

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


$apiInstance = new OpenAPI\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = cbc05bac-6a41-46fa-a063-79961763bf4b; // string | The system generated ID that uniquely identifies a contact list.
$include_membership_count = all; // string | Returns the total number of contacts per list that meet your selection criteria. Set the `include_membership_count` to `active`, to count only active contacts, or `all` to include all contacts in the count.

try {
    $result = $apiInstance->getList($list_id, $include_membership_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**| The system generated ID that uniquely identifies a contact list. | |
| **include_membership_count** | **string**| Returns the total number of contacts per list that meet your selection criteria. Set the &#x60;include_membership_count&#x60; to &#x60;active&#x60;, to count only active contacts, or &#x60;all&#x60; to include all contacts in the count. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContactList**](../Model/ContactList.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListIdXrefs()`

```php
getListIdXrefs($sequence_ids): \OpenAPI\Client\Model\ListXrefs
```

GET a collection of V2 and V3 API List IDs

<div class=\"Msg Msg--warning\"><p class=\"note-text\">Use this endpoint to migrate your locally stored V2 contact list data to the new V3 format. Developers are expected to use this endpoint sparingly. This endpoint is NOT intended for regular or repeated use. Constant Contact will eventually deprecate and remove this endpoint.</p></div>  This GET call retrieves a collection of cross-referenced list sequence IDs (`id` used in the V2 API) and UUIDs (`list_id` used in the V3 API). This endpoint is intended for developers who have an existing V2 API integration, and are migrating their users to a new V3 API integration. The V2 and V3 APIs use different resource ID formats. Use the `sequence_ids` query parameter to specify a set of comma delimited V2 list ids to cross-reference. See [Migrating Apps and Data to V3](/api_guide/migration_overview.html) to learn more.\"

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


$apiInstance = new OpenAPI\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_ids = 1995998026,1882999944,1775099999; // string | Comma delimited list of V2 API list `ids` to cross-reference with the V3 API `list_id` value. Endpoint accepts a maximum of 500 ids at a time.

try {
    $result = $apiInstance->getListIdXrefs($sequence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getListIdXrefs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_ids** | **string**| Comma delimited list of V2 API list &#x60;ids&#x60; to cross-reference with the V3 API &#x60;list_id&#x60; value. Endpoint accepts a maximum of 500 ids at a time. | |

### Return type

[**\OpenAPI\Client\Model\ListXrefs**](../Model/ListXrefs.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLists()`

```php
getLists($limit, $include_count, $include_membership_count, $name, $status): \OpenAPI\Client\Model\ContactListArray
```

GET Lists Collection

Use this method to return details about all contact lists for the account. <div class=\"Msg\"><p class=\"note-text\">This method does not currently support filtering results using the contact list update date.</p></div>

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


$apiInstance = new OpenAPI\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Use to specify the number of results displayed per page of output, from 1 - 500, default = 50.
$include_count = true; // bool | Set `include_count` to `true` to return the total number of contact lists that meet your selection criteria.
$include_membership_count = all; // string | Use to include the total number of contacts per list. Set to  `active`, to count only active (mailable) contacts, or `all` to count all contacts.
$name = TopTier; // string | Use to get details for a single list by entering the full name of the list.
$status = all; // string | Use to get lists by status. Accepts comma-separated status values.

try {
    $result = $apiInstance->getLists($limit, $include_count, $include_membership_count, $name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Use to specify the number of results displayed per page of output, from 1 - 500, default &#x3D; 50. | [optional] [default to 50] |
| **include_count** | **bool**| Set &#x60;include_count&#x60; to &#x60;true&#x60; to return the total number of contact lists that meet your selection criteria. | [optional] [default to false] |
| **include_membership_count** | **string**| Use to include the total number of contacts per list. Set to  &#x60;active&#x60;, to count only active (mailable) contacts, or &#x60;all&#x60; to count all contacts. | [optional] |
| **name** | **string**| Use to get details for a single list by entering the full name of the list. | [optional] |
| **status** | **string**| Use to get lists by status. Accepts comma-separated status values. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContactListArray**](../Model/ContactListArray.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putList()`

```php
putList($list_id, $json_put_body): \OpenAPI\Client\Model\ContactListPutPost
```

PUT (update) a List

Updates an existing contact list resource, specified by `list_id`

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


$apiInstance = new OpenAPI\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = cbc05bac-6a41-46fa-a063-79961763bf4b; // string | Unique ID of the contact list to update
$json_put_body = new \OpenAPI\Client\Model\ListInput(); // \OpenAPI\Client\Model\ListInput | JSON payload containing updates to the specified contact list

try {
    $result = $apiInstance->putList($list_id, $json_put_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->putList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**| Unique ID of the contact list to update | |
| **json_put_body** | [**\OpenAPI\Client\Model\ListInput**](../Model/ListInput.md)| JSON payload containing updates to the specified contact list | |

### Return type

[**\OpenAPI\Client\Model\ContactListPutPost**](../Model/ContactListPutPost.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
