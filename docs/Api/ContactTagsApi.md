# OpenAPI\Client\ContactTagsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTag()**](ContactTagsApi.md#deleteTag) | **DELETE** /contact_tags/{tag_id} | DELETE a Tag |
| [**getTag()**](ContactTagsApi.md#getTag) | **GET** /contact_tags/{tag_id} | GET Tag Details |
| [**getTags()**](ContactTagsApi.md#getTags) | **GET** /contact_tags | GET Details for All Tags |
| [**postTag()**](ContactTagsApi.md#postTag) | **POST** /contact_tags | POST (Create) a Tag |
| [**putTag()**](ContactTagsApi.md#putTag) | **PUT** /contact_tags/{tag_id} | PUT (Update) a Tag |


## `deleteTag()`

```php
deleteTag($tag_id): \OpenAPI\Client\Model\ActivityGeneric
```

DELETE a Tag

Use this method to create an activity used to un-assign a tag from all assigned contacts and delete the tag. This is an asynchronous activity. To view activity details for the delete request, use the href link returned in the response. [Learn more](/api_guide/tags_delete.html).

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


$apiInstance = new OpenAPI\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 30c97dd0-332e-11eb-923c-fa163e595327; // string | The ID that uniquely identifies a tag in UUID format.

try {
    $result = $apiInstance->deleteTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| The ID that uniquely identifies a tag in UUID format. | |

### Return type

[**\OpenAPI\Client\Model\ActivityGeneric**](../Model/ActivityGeneric.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTag()`

```php
getTag($tag_id, $include_count): \OpenAPI\Client\Model\Tag
```

GET Tag Details

Use this method to get tag details for a specified `tag_id`. Use the `include_count` query parameter to include or exclude the total number of contacts to which this tag is assigned. To learn more, see  [Get a Tag's Details](/api_guide/tags_get_single.html).

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


$apiInstance = new OpenAPI\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = d938260a-af1e-11e9-a540-fa163e595123; // string | The ID that uniquely identifies a tag (UUID format).
$include_count = true; // bool | Use to include (`true`) or exclude (`false`) the total number of tagged contacts (`contacts_count`) from the results.

try {
    $result = $apiInstance->getTag($tag_id, $include_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->getTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| The ID that uniquely identifies a tag (UUID format). | |
| **include_count** | **bool**| Use to include (&#x60;true&#x60;) or exclude (&#x60;false&#x60;) the total number of tagged contacts (&#x60;contacts_count&#x60;) from the results. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTags()`

```php
getTags($limit, $include_count): \OpenAPI\Client\Model\Tags
```

GET Details for All Tags

Use this endpoint to get details for all tags in your account. Use the <code>include_count</code> query parameter to include the total number of contacts assigned each tag. Use the <code>limit</code> query parameter to limit the number of tag results returned per page. To get the next page of results, copy the <code>cursor={the cursor ID}</code> from the resulting href link and add it (<code>&</code>) to the URL. For example:  <p><code>/v3/contact_tags?limit=1&cursor=</code></p><p><code>bGltaXQ9MSZuZXh0PTJjZDgwMjdhLTc4YzAtMTFlOS1iZmQwLWZhMTYzZTZiMDFjMQ=</code></p> To learn more, see [Get Tags](/api_guide/tags_get.html).

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


$apiInstance = new OpenAPI\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Use to specify the number of tag results (up to `500`) to display per page of output. The default is `50`.
$include_count = true; // bool | Returns the total number of contacts (`contacts_count`) to which a tag applies.

try {
    $result = $apiInstance->getTags($limit, $include_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->getTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Use to specify the number of tag results (up to &#x60;500&#x60;) to display per page of output. The default is &#x60;50&#x60;. | [optional] [default to 50] |
| **include_count** | **bool**| Returns the total number of contacts (&#x60;contacts_count&#x60;) to which a tag applies. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Tags**](../Model/Tags.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTag()`

```php
postTag($body): \OpenAPI\Client\Model\Tag
```

POST (Create) a Tag

Use this method to create a new tag. The tag `name` is required and must be unique and can include most common keyboard symbols. Optionally, when creating a new tag you can specify the source (`tag_source`) used to identify the contacts to tag in the request body. [Learn more](/api_guide/tags_create.html).

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


$apiInstance = new OpenAPI\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\TagPost(); // \OpenAPI\Client\Model\TagPost | The JSON payload to use to create a new tag.

try {
    $result = $apiInstance->postTag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->postTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\TagPost**](../Model/TagPost.md)| The JSON payload to use to create a new tag. | |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putTag()`

```php
putTag($tag_id, $body): \OpenAPI\Client\Model\Tag
```

PUT (Update) a Tag

Use this method to rename an existing tag to a new unique tag name (`name`). The maximum length is 255 characters. The `tag_source` value cannot be updated using this method. You can set the `tag_source` value using the `POST contact_tags method`. [Learn more](/api_guide/tags_update.html)

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


$apiInstance = new OpenAPI\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 30c97dd0-332e-11eb-923c-fa163e595327; // string | The system generated ID used to uniquely identify the tag that you want to rename (UUID format).
$body = new \OpenAPI\Client\Model\TagPut(); // \OpenAPI\Client\Model\TagPut | The JSON payload used to update the tag name (`name`).

try {
    $result = $apiInstance->putTag($tag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->putTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| The system generated ID used to uniquely identify the tag that you want to rename (UUID format). | |
| **body** | [**\OpenAPI\Client\Model\TagPut**](../Model/TagPut.md)| The JSON payload used to update the tag name (&#x60;name&#x60;). | |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
