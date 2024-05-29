# OpenAPI\Client\BulkActivitiesApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkImportContactsJSON()**](BulkActivitiesApi.md#bulkImportContactsJSON) | **POST** /activities/contacts_json_import | Import Contacts using a JSON Payload |
| [**contactsCSVImport()**](BulkActivitiesApi.md#contactsCSVImport) | **POST** /activities/contacts_file_import | Import Contacts using a CSV File |
| [**getActivity()**](BulkActivitiesApi.md#getActivity) | **GET** /activities/{activity_id} | GET an Activity Status |
| [**getActivityStatusCollection()**](BulkActivitiesApi.md#getActivityStatusCollection) | **GET** /activities | GET Activity Status Collection |
| [**getContactsExport()**](BulkActivitiesApi.md#getContactsExport) | **GET** /contact_exports/{file_export_id} | Retrieve Exported Contacts File |
| [**postContactDelete()**](BulkActivitiesApi.md#postContactDelete) | **POST** /activities/contact_delete | Delete Contacts in Bulk |
| [**postContactsExport()**](BulkActivitiesApi.md#postContactsExport) | **POST** /activities/contact_exports | Export Contacts to a File |
| [**postCustomFieldDelete()**](BulkActivitiesApi.md#postCustomFieldDelete) | **POST** /activities/custom_fields_delete | Delete Custom Fields |
| [**postListAddContact()**](BulkActivitiesApi.md#postListAddContact) | **POST** /activities/add_list_memberships | Add Contacts to Lists |
| [**postListDelete()**](BulkActivitiesApi.md#postListDelete) | **POST** /activities/list_delete | Delete Contact Lists |
| [**postListRemoveContact()**](BulkActivitiesApi.md#postListRemoveContact) | **POST** /activities/remove_list_memberships | Remove Contacts from Lists |
| [**postTagAddContact()**](BulkActivitiesApi.md#postTagAddContact) | **POST** /activities/contacts_taggings_add | Add Tags to Contacts |
| [**postTagDelete()**](BulkActivitiesApi.md#postTagDelete) | **POST** /activities/contacts_tags_delete | Delete Tags |
| [**postTagRemoveContact()**](BulkActivitiesApi.md#postTagRemoveContact) | **POST** /activities/contacts_taggings_remove | Remove Tags from Contacts |


## `bulkImportContactsJSON()`

```php
bulkImportContactsJSON($body): 'ConstantContact\Client\Model\ActivityImport
```

Import Contacts using a JSON Payload

Use this method to create an asynchronous background job that adds new contacts or updates existing contacts by importing a JSON payload. This method requires a request body that contains the contact data you are importing and the contact lists to which you want to add the imported contacts. Importing a new contact automatically sets the contact's `permission_to_send` property as `implicit` and the `opt_in_source` property as `Account`. Importing an existing contact only updates the contact properties you include in the request. For each contact, you can import up to three addresses and three phone numbers. International phone numbers are currently not supported. To import custom fields, prefix the custom field name with `cf:` and add it as a contact property. For example, use the property name `cf:first_name` if you have a custom field named first_name. The custom field must already exist in the Constant Contact account you are using. Each contact can contain up to 25 custom fields.  The request body payload has a maximum size of 4 megabytes (MB). If the request body exceeds 4 MB, this method only imports the first 4 MB and drops the remaining data. Use the activity URL to check the status of the import activity request.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\ContactsJsonImport(); // 'ConstantContact\Client\Model\ContactsJsonImport | The JSON request payload that contains the contact data and contact lists for the import.

try {
    $result = $apiInstance->bulkImportContactsJSON($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->bulkImportContactsJSON: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ContactsJsonImport**](../Model/ContactsJsonImport.md)| The JSON request payload that contains the contact data and contact lists for the import. | |

### Return type

[**\OpenAPI\Client\Model\ActivityImport**](../Model/ActivityImport.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsCSVImport()`

```php
contactsCSVImport($file, $list_ids): 'ConstantContact\Client\Model\ActivityImport
```

Import Contacts using a CSV File

This multipart method creates an asynchronous background job that adds or updates contacts by importing a CSV file containing contact information. Do not use a Content-Type header value with this method.  Importing a new contact automatically sets the contact's `permission_to_send` property as `implicit` and the `opt_in_source` property as `Account`. Importing an existing contact only updates the contact properties you include in the request.  The CSV file has a maximum of 40,000 lines including the header row (39,999 contacts) and a maximum file size of 4 megabytes (MB).  Lines above the 40,000 line maximum are not processed. If the request body exceeds 4 MB, only the contacts contained in the first 4 MB are imported and the remaining data is dropped.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | The CSV file you are importing. The column headings that you can use in the file are: `first_name`, `last_name`, `email`, `phone`, `job_title`, `anniversary`, `birthday_day`, `birthday_month`, `company_name`, `street`, `street2`, `city`, `state`, `zip`, and `country`. The only required column heading is `email`.  You can also use custom fields as column headings. Enter the custom field name prefixed with `cf:` as the column heading. For example, use `cf:first_name` as the header name if you have a custom field named \\\"first_name\\\". The custom field must already exist in the Constant Contact account you are using. Depending on the custom field data type, you can enter dates or strings as the value of the custom field. Each contact can contain up to 25 different custom fields.
$list_ids = array('list_ids_example'); // string[] | Specify which contact lists you are adding all imported contacts to as an array of up to 50 contact `list_id` values.

try {
    $result = $apiInstance->contactsCSVImport($file, $list_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->contactsCSVImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| The CSV file you are importing. The column headings that you can use in the file are: &#x60;first_name&#x60;, &#x60;last_name&#x60;, &#x60;email&#x60;, &#x60;phone&#x60;, &#x60;job_title&#x60;, &#x60;anniversary&#x60;, &#x60;birthday_day&#x60;, &#x60;birthday_month&#x60;, &#x60;company_name&#x60;, &#x60;street&#x60;, &#x60;street2&#x60;, &#x60;city&#x60;, &#x60;state&#x60;, &#x60;zip&#x60;, and &#x60;country&#x60;. The only required column heading is &#x60;email&#x60;.  You can also use custom fields as column headings. Enter the custom field name prefixed with &#x60;cf:&#x60; as the column heading. For example, use &#x60;cf:first_name&#x60; as the header name if you have a custom field named \\\&quot;first_name\\\&quot;. The custom field must already exist in the Constant Contact account you are using. Depending on the custom field data type, you can enter dates or strings as the value of the custom field. Each contact can contain up to 25 different custom fields. | |
| **list_ids** | [**string[]**](../Model/string.md)| Specify which contact lists you are adding all imported contacts to as an array of up to 50 contact &#x60;list_id&#x60; values. | |

### Return type

[**\OpenAPI\Client\Model\ActivityImport**](../Model/ActivityImport.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActivity()`

```php
getActivity($activity_id): 'ConstantContact\Client\Model\Activity
```

GET an Activity Status

This endpoint returns an activity status report.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The unique ID of the activity to GET

try {
    $result = $apiInstance->getActivity($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->getActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activity_id** | **string**| The unique ID of the activity to GET | |

### Return type

[**\OpenAPI\Client\Model\Activity**](../Model/Activity.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActivityStatusCollection()`

```php
getActivityStatusCollection($limit, $state): 'ConstantContact\Client\Model\Activities
```

GET Activity Status Collection

This endpoint returns a collection of activities. Use the state query parameter to include only activities with a specific status (processing, completed, cancelled, failed, or time_out). Use the limit query parameter to define the number of activities returned per page. Learn [more](/api_guide/activity_status.html).

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Specifies the number of results displayed per page of output, from 1 - 500, default = 50.
$state = processing; // string | Use this parameter to filter the response to include only activities in one of the following states: cancelled, completed, failed, processing, or timed_out.

try {
    $result = $apiInstance->getActivityStatusCollection($limit, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->getActivityStatusCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Specifies the number of results displayed per page of output, from 1 - 500, default &#x3D; 50. | [optional] [default to 50] |
| **state** | **string**| Use this parameter to filter the response to include only activities in one of the following states: cancelled, completed, failed, processing, or timed_out. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Activities**](../Model/Activities.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactsExport()`

```php
getContactsExport($file_export_id): string
```

Retrieve Exported Contacts File

Use this endpoint to retrieve (GET) a CSV file containing exported contacts by providing the `activity_id` of a completed CSV export activity.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_export_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The unique ID of the exported file provided in the results: section of the export contacts activity response.

try {
    $result = $apiInstance->getContactsExport($file_export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->getContactsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_export_id** | **string**| The unique ID of the exported file provided in the results: section of the export contacts activity response. | |

### Return type

**string**

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactDelete()`

```php
postContactDelete($body): 'ConstantContact\Client\Model\ActivityDeleteStatus
```

Delete Contacts in Bulk

Use this endpoint to bulk delete contacts in an account. Contacts to delete are specified by contact_id (up to 500), or by list_id (up to 50 lists); all contacts that are members of the list_ids are deleted. Deleted contacts won’t receive email from you, and they don’t count as active contacts. Unlike unsubscribed contacts, deleted contacts can be added back to an account. [Learn how to revive deleted contacts](/api_guide/contacts_delete.html#revive).

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\ContactDelete(); // 'ConstantContact\Client\Model\ContactDelete | The request body contains an array of contact_ids <em>or</em> list_ids. All contact_ids provided are deleted, or all members of each specified list_id are deleted.

try {
    $result = $apiInstance->postContactDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postContactDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ContactDelete**](../Model/ContactDelete.md)| The request body contains an array of contact_ids &lt;em&gt;or&lt;/em&gt; list_ids. All contact_ids provided are deleted, or all members of each specified list_id are deleted. | |

### Return type

[**\OpenAPI\Client\Model\ActivityDeleteStatus**](../Model/ActivityDeleteStatus.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactsExport()`

```php
postContactsExport($body): 'ConstantContact\Client\Model\ActivityExportStatus
```

Export Contacts to a File

Use this method to create an activity that exports contacts and contact details to a CSV file. By default, all contacts are exported. To filter contacts to export, specify the source to use, `contact_id`, `list_id`, or `segment_id` (all mutually exclusive). By default, all contact related fields are exported. Use the fields array to only export specific contact fields. You must export `email_address` to successfully export `email_optin_source`, `email_optin_date`, `email_optout_source`, `email_optout_date`, or `email_optout_reason`. After Constant Contact finishes processing the activity, use the `results` link in the response body to retrieve the CSV file.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\ContactsExport(); // 'ConstantContact\Client\Model\ContactsExport | A JSON payload that specifies the contacts (rows in the CSV file) and contact properties (columns in the CSV file) you want to export.

try {
    $result = $apiInstance->postContactsExport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postContactsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ContactsExport**](../Model/ContactsExport.md)| A JSON payload that specifies the contacts (rows in the CSV file) and contact properties (columns in the CSV file) you want to export. | |

### Return type

[**\OpenAPI\Client\Model\ActivityExportStatus**](../Model/ActivityExportStatus.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomFieldDelete()`

```php
postCustomFieldDelete($body): 'ConstantContact\Client\Model\ActivityDeleteCustomFields
```

Delete Custom Fields

Use this endpoint to delete up to 100 custom fields for an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\CustomFieldId100(); // 'ConstantContact\Client\Model\CustomFieldId100 | An array of `custom_field_id`'s to delete.

try {
    $result = $apiInstance->postCustomFieldDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postCustomFieldDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CustomFieldId100**](../Model/CustomFieldId100.md)| An array of &#x60;custom_field_id&#x60;&#39;s to delete. | |

### Return type

[**\OpenAPI\Client\Model\ActivityDeleteCustomFields**](../Model/ActivityDeleteCustomFields.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postListAddContact()`

```php
postListAddContact($body): 'ConstantContact\Client\Model\ActivityListsMembership
```

Add Contacts to Lists

Use this method to create an activity that adds contacts to one or more lists. Each contact can be a member of up to 50 lists. Use the properties in the `source` object to specify the contacts you want to add to lists. Use the `list_ids` array to specify which lists you want to add your source contacts to.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\ListActivityAddContacts(); // 'ConstantContact\Client\Model\ListActivityAddContacts | The JSON payload used to create the 'add contacts to lists' activity

try {
    $result = $apiInstance->postListAddContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postListAddContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ListActivityAddContacts**](../Model/ListActivityAddContacts.md)| The JSON payload used to create the &#39;add contacts to lists&#39; activity | |

### Return type

[**\OpenAPI\Client\Model\ActivityListsMembership**](../Model/ActivityListsMembership.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postListDelete()`

```php
postListDelete($body): 'ConstantContact\Client\Model\ActivityDeleteListsResponse
```

Delete Contact Lists

Use this endpoint to delete up to 100 contact lists in an account.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\ListIdList100(); // 'ConstantContact\Client\Model\ListIdList100 | An array of `list_id`'s to delete.

try {
    $result = $apiInstance->postListDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postListDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ListIdList100**](../Model/ListIdList100.md)| An array of &#x60;list_id&#x60;&#39;s to delete. | |

### Return type

[**\OpenAPI\Client\Model\ActivityDeleteListsResponse**](../Model/ActivityDeleteListsResponse.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postListRemoveContact()`

```php
postListRemoveContact($body): 'ConstantContact\Client\Model\ActivityListsMembership
```

Remove Contacts from Lists

Use this method to create an activity that removes contacts from one or more lists. Use the properties in the `source` object to remove specific contacts from your targeted lists. Use the `list_ids` array to specify the lists from which you want to remove the source contacts.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\ListActivityRemoveContacts(); // 'ConstantContact\Client\Model\ListActivityRemoveContacts | The JSON payload used to create the 'remove contacts from lists' activity

try {
    $result = $apiInstance->postListRemoveContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postListRemoveContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ListActivityRemoveContacts**](../Model/ListActivityRemoveContacts.md)| The JSON payload used to create the &#39;remove contacts from lists&#39; activity | |

### Return type

[**\OpenAPI\Client\Model\ActivityListsMembership**](../Model/ActivityListsMembership.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTagAddContact()`

```php
postTagAddContact($body): 'ConstantContact\Client\Model\ActivityTagging
```

Add Tags to Contacts

Use this method to create an asynchronous activity that adds one or more tags to all contacts meeting your contact filtering criteria. Use the `source` type to identify contacts from which the specified tags (`tag_id`) are added. Source criteria are mutually exclusive. If the source is `all_active_contacts` or `list_ids`, you can optionally choose to `exclude` contacts by `contact_id`. Use the activity link in the results to check the status of your request. For more use case information, see \"[Add Tags to Contacts](/api_guide/add_tagging_activity.html)

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\TagAddRemoveContacts(); // 'ConstantContact\Client\Model\TagAddRemoveContacts | The JSON payload used to create an asynchronous activity that adds tags to contacts that meet your specified contact filtering criteria.

try {
    $result = $apiInstance->postTagAddContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postTagAddContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\TagAddRemoveContacts**](../Model/TagAddRemoveContacts.md)| The JSON payload used to create an asynchronous activity that adds tags to contacts that meet your specified contact filtering criteria. | |

### Return type

[**\OpenAPI\Client\Model\ActivityTagging**](../Model/ActivityTagging.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTagDelete()`

```php
postTagDelete($body): 'ConstantContact\Client\Model\ActivityTagging
```

Delete Tags

Use this method to create an asynchronous activity that deletes up to 500 tags. Deleted tags are automatically removed from tagged contacts. Use the `tag_ids` array of string values in the request body to specify which tags to delete.

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\TagIdList500Limit(); // 'ConstantContact\Client\Model\TagIdList500Limit | An array of string values (`tag_id`s) to delete.

try {
    $result = $apiInstance->postTagDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postTagDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\TagIdList500Limit**](../Model/TagIdList500Limit.md)| An array of string values (&#x60;tag_id&#x60;s) to delete. | |

### Return type

[**\OpenAPI\Client\Model\ActivityTagging**](../Model/ActivityTagging.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTagRemoveContact()`

```php
postTagRemoveContact($body): 'ConstantContact\Client\Model\ActivityTagging
```

Remove Tags from Contacts

Use this method to create an asynchronous activity that removes one or more tags from all contacts meeting your contact filtering criteria. Filtering criteria must include the `source` type used to identify contacts from which the specified tags (`tag_id`) are removed. Source types are mutually exclusive. If the specified source is either `all_active_contacts` or `list_ids`, you can optionally choose to `exclude` specified contacts by `contact_id`. Use the activity link in the results to check the status of your request.\" For more use case information, see \"[Remove Tags from Contacts](/api_guide/remove_tagging_activity.html)

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


$apiInstance = new OpenAPI\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\TagAddRemoveContacts(); // 'ConstantContact\Client\Model\TagAddRemoveContacts | The JSON payload used to create an asynchronous activity that removes tags from contacts meeting your specified contact filtering criteria.

try {
    $result = $apiInstance->postTagRemoveContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postTagRemoveContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\TagAddRemoveContacts**](../Model/TagAddRemoveContacts.md)| The JSON payload used to create an asynchronous activity that removes tags from contacts meeting your specified contact filtering criteria. | |

### Return type

[**\OpenAPI\Client\Model\ActivityTagging**](../Model/ActivityTagging.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [api_key](../../README.md#api_key), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
