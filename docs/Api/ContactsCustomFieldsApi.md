# OpenAPI\Client\ContactsCustomFieldsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCustomField()**](ContactsCustomFieldsApi.md#deleteCustomField) | **DELETE** /contact_custom_fields/{custom_field_id} | DELETE a custom_field |
| [**getCustomField()**](ContactsCustomFieldsApi.md#getCustomField) | **GET** /contact_custom_fields/{custom_field_id} | GET a custom_field |
| [**getCustomFields()**](ContactsCustomFieldsApi.md#getCustomFields) | **GET** /contact_custom_fields | GET custom_fields Collection |
| [**postCustomFields()**](ContactsCustomFieldsApi.md#postCustomFields) | **POST** /contact_custom_fields | POST (create) a custom_field |
| [**putCustomField()**](ContactsCustomFieldsApi.md#putCustomField) | **PUT** /contact_custom_fields/{custom_field_id} | PUT (update) a custom_field |


## `deleteCustomField()`

```php
deleteCustomField($custom_field_id)
```

DELETE a custom_field

This DELETE request deletes a custom_field from the user's account

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


$apiInstance = new OpenAPI\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | Unique ID of the custom_field on which to operate.

try {
    $apiInstance->deleteCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| Unique ID of the custom_field on which to operate. | |

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

## `getCustomField()`

```php
getCustomField($custom_field_id): \OpenAPI\Client\Model\CustomFieldResource
```

GET a custom_field

This GET call retrieves a `custom_field` resource, specified by `custom_field_id`.

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


$apiInstance = new OpenAPI\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | Unique ID of the `custom_field` on which to operate.

try {
    $result = $apiInstance->getCustomField($custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| Unique ID of the &#x60;custom_field&#x60; on which to operate. | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldResource**](../Model/CustomFieldResource.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomFields()`

```php
getCustomFields($limit): \OpenAPI\Client\Model\CustomFields
```

GET custom_fields Collection

This GET request returns all `custom_fields` defined in the user's account. <div class=\"Msg\"><p class=\"note-text\">This method does not currently support filtering results using the custom field update date.</p></div>

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


$apiInstance = new OpenAPI\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Specifies the number of results displayed per page of output, from 1 - 100, default = 50.

try {
    $result = $apiInstance->getCustomFields($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->getCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Specifies the number of results displayed per page of output, from 1 - 100, default &#x3D; 50. | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\CustomFields**](../Model/CustomFields.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomFields()`

```php
postCustomFields($body): \OpenAPI\Client\Model\CustomFieldResource
```

POST (create) a custom_field

This POST request adds a new `custom_field` to the user's account. A user can configure up to 100 `custom_fields` in their account.

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


$apiInstance = new OpenAPI\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CustomFieldInput(); // \OpenAPI\Client\Model\CustomFieldInput | The JSON payload required to create a new `custom_field`

try {
    $result = $apiInstance->postCustomFields($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->postCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CustomFieldInput**](../Model/CustomFieldInput.md)| The JSON payload required to create a new &#x60;custom_field&#x60; | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldResource**](../Model/CustomFieldResource.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCustomField()`

```php
putCustomField($custom_field_id, $body): \OpenAPI\Client\Model\CustomFieldResource
```

PUT (update) a custom_field

This PUT request updates an existing `custom_field` object.

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


$apiInstance = new OpenAPI\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | Unique ID of the `custom_field` on which to operate.
$body = new \OpenAPI\Client\Model\CustomFieldInput(); // \OpenAPI\Client\Model\CustomFieldInput | The JSON payload used to update an existing custom field. Any properties omitted in the PUT request are overwritten with a null value.

try {
    $result = $apiInstance->putCustomField($custom_field_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->putCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| Unique ID of the &#x60;custom_field&#x60; on which to operate. | |
| **body** | [**\OpenAPI\Client\Model\CustomFieldInput**](../Model/CustomFieldInput.md)| The JSON payload used to update an existing custom field. Any properties omitted in the PUT request are overwritten with a null value. | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldResource**](../Model/CustomFieldResource.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
