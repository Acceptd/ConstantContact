# OpenAPI\Client\TechnologyPartnersApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAccount()**](TechnologyPartnersApi.md#cancelAccount) | **PUT** /partner/accounts/{encoded_account_id}/status/cancel | PUT Cancel the Billing Plan for a Client Account |
| [**createSSOUser()**](TechnologyPartnersApi.md#createSSOUser) | **POST** /partner/accounts/{encoded_account_id}/users/sso | POST a User Under a Partner&#39;s SSO-Enabled Client Account |
| [**getPartnerSiteOwners()**](TechnologyPartnersApi.md#getPartnerSiteOwners) | **GET** /partner/accounts | GET Partner Client Accounts |
| [**getPlan()**](TechnologyPartnersApi.md#getPlan) | **GET** /partner/accounts/{encoded_account_id}/plan | GET Billing Plan Details for a Client Account |
| [**partnerAccountOperationsPostSync()**](TechnologyPartnersApi.md#partnerAccountOperationsPostSync) | **POST** /partner/accounts/{encoded_account_id}/account_operations/sync | POST Send an API request on Behalf of a Client Account |
| [**provision()**](TechnologyPartnersApi.md#provision) | **POST** /partner/accounts | POST (create) a Partner Client Account |
| [**setPlan()**](TechnologyPartnersApi.md#setPlan) | **PUT** /partner/accounts/{encoded_account_id}/plan | PUT (update) Billing Plan Details for a Client Account |


## `cancelAccount()`

```php
cancelAccount($encoded_account_id, $body): \OpenAPI\Client\Model\AccountCancellation
```

PUT Cancel the Billing Plan for a Client Account

Use this PUT method to cancel a client's Constant Contact account. If the specified client account or technology partner account does not exist, the system returns a 404 error response. If the client account exists under a different technology partner account, the system returns a 400 error response.     To get a list of all canceled client accounts (`\"billing_status\": \"Canceled\"`), make a `GET` call to the `/partner/accounts` endpoint.    Only technology partners can access partner endpoints and partner endpoints cannot be tested using the API reference tester.    For more use case information, see [Cancel the Billing Plan for a Client Account](/api_guide/partners_plans_cancel.html) in the API guide.\"

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


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encoded_account_id = a07e1lxqqqo0; // string | The system generated ID that uniquely identifies the client account.
$body = new \OpenAPI\Client\Model\AccountCancellation(); // \OpenAPI\Client\Model\AccountCancellation | By default, the current date and time is automatically used as the cancellation date. However, you can specify a future date and time to cancel the account (`effective_date`) in the request body in ISO format. You can also enter the client's cancellation reason (`reason_id`).

try {
    $result = $apiInstance->cancelAccount($encoded_account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersApi->cancelAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **encoded_account_id** | **string**| The system generated ID that uniquely identifies the client account. | |
| **body** | [**\OpenAPI\Client\Model\AccountCancellation**](../Model/AccountCancellation.md)| By default, the current date and time is automatically used as the cancellation date. However, you can specify a future date and time to cancel the account (&#x60;effective_date&#x60;) in the request body in ISO format. You can also enter the client&#39;s cancellation reason (&#x60;reason_id&#x60;). | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountCancellation**](../Model/AccountCancellation.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSSOUser()`

```php
createSSOUser($encoded_account_id, $sso_user)
```

POST a User Under a Partner's SSO-Enabled Client Account

Use this endpoint to create a new user under a partner client account that has the Single Sign On (SSO) for all users feature enabled.

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


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encoded_account_id = a07e1lxqqqo0; // string | The encoded account ID that identifies the partner's client account to which to add the new user.
$sso_user = new \OpenAPI\Client\Model\SSOUser(); // \OpenAPI\Client\Model\SSOUser | The JSON payload used to create a new user under the specified partner's client account. All request body properties are required (`first_name`, `last_name`, `role_name`, `contact_email`, `login_name`, `external_id`, `external_provider`).

try {
    $apiInstance->createSSOUser($encoded_account_id, $sso_user);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersApi->createSSOUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **encoded_account_id** | **string**| The encoded account ID that identifies the partner&#39;s client account to which to add the new user. | |
| **sso_user** | [**\OpenAPI\Client\Model\SSOUser**](../Model/SSOUser.md)| The JSON payload used to create a new user under the specified partner&#39;s client account. All request body properties are required (&#x60;first_name&#x60;, &#x60;last_name&#x60;, &#x60;role_name&#x60;, &#x60;contact_email&#x60;, &#x60;login_name&#x60;, &#x60;external_id&#x60;, &#x60;external_provider&#x60;). | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPartnerSiteOwners()`

```php
getPartnerSiteOwners($offset, $limit, $account_type): \OpenAPI\Client\Model\PartnerAccount
```

GET Partner Client Accounts

Get all Constant Contact client accounts managed under your technology partner account. Use the `limit` query parameter to set the number of accounts to return on each results page. Use the `account_type` query parameter to filter client account results by type: `all` (default), `managed`, or `unmanaged`. Only technology partners can access partner endpoints and partner endpoints cannot be tested using the API reference tester. For more use case information, see [Get all Partner Client Accounts](/api_guide/partners_accts_get.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 'offset_example'; // string | Depending on the `limit` you specify, the system determines the `offset` parameter to use (number of records to skip) and includes it in the link used to get the next page of results
$limit = 50; // string | The number of client accounts to return on each page of results. The default value is `50`. Entering a `limit` value less than the minimum (`10`) or greater than the maximum (`50`) is ignored and the system uses the default values. Depending on the `limit` you specify, the system determines the `offset` parameter to use (number of records to skip) and includes it in the link used to get the next page of results.
$account_type = managed; // string | Filters client account results by account type: `all` (default), `managed`, or `unmanaged`. Excluding the `account_type` query parameter returns all client accounts for the partner.

try {
    $result = $apiInstance->getPartnerSiteOwners($offset, $limit, $account_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersApi->getPartnerSiteOwners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **string**| Depending on the &#x60;limit&#x60; you specify, the system determines the &#x60;offset&#x60; parameter to use (number of records to skip) and includes it in the link used to get the next page of results | [optional] |
| **limit** | **string**| The number of client accounts to return on each page of results. The default value is &#x60;50&#x60;. Entering a &#x60;limit&#x60; value less than the minimum (&#x60;10&#x60;) or greater than the maximum (&#x60;50&#x60;) is ignored and the system uses the default values. Depending on the &#x60;limit&#x60; you specify, the system determines the &#x60;offset&#x60; parameter to use (number of records to skip) and includes it in the link used to get the next page of results. | [optional] [default to &#39;50&#39;] |
| **account_type** | **string**| Filters client account results by account type: &#x60;all&#x60; (default), &#x60;managed&#x60;, or &#x60;unmanaged&#x60;. Excluding the &#x60;account_type&#x60; query parameter returns all client accounts for the partner. | [optional] [default to &#39;all&#39;] |

### Return type

[**\OpenAPI\Client\Model\PartnerAccount**](../Model/PartnerAccount.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlan()`

```php
getPlan($encoded_account_id): \OpenAPI\Client\Model\PlanTiersObject
```

GET Billing Plan Details for a Client Account

Use this GET method to return billing plan details for a client's Constant Contact account. If you are not on the latest billing plan, contact the Constant Contact Partner Team. However, older billing plans and `plan_type` enum values will continue to be supported. Only technology partners can access partner endpoints and partner endpoints cannot be tested using the API reference tester. For more use case information, see [Get Billing Plan Details for a Client Account](/api_guide/partners_plans_get.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encoded_account_id = a07e1lxqqqo0; // string | Specify the client's unique `encoded_account_id`.

try {
    $result = $apiInstance->getPlan($encoded_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **encoded_account_id** | **string**| Specify the client&#39;s unique &#x60;encoded_account_id&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\PlanTiersObject**](../Model/PlanTiersObject.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partnerAccountOperationsPostSync()`

```php
partnerAccountOperationsPostSync($encoded_account_id, $body)
```

POST Send an API request on Behalf of a Client Account

Use this API method to send an API request on behalf of a managed client account in your partnership.  The request body properties you use in this partner API call determine the structure of the API request that Constant Contact sends on behalf of the managed client account. This includes the HTTP url, HTTP method type, request body, request url parameters, request query parameters, and headers that for the request. You can use this `/partner/accounts/{encoded_account_id}/account_operations/sync` API method to send a request using non-partner v3 API methods.

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


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encoded_account_id = a07e1lxqqqo0; // string | An encoded account id for a managed account in your partnership.
$body = new \OpenAPI\Client\Model\PartnerAccountOperationsRequest(); // \OpenAPI\Client\Model\PartnerAccountOperationsRequest | A JSON request body that contains the structure of the HTTP request you are instructing Constant Contact to send on behalf of specific managed account in your partnership.

try {
    $apiInstance->partnerAccountOperationsPostSync($encoded_account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersApi->partnerAccountOperationsPostSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **encoded_account_id** | **string**| An encoded account id for a managed account in your partnership. | |
| **body** | [**\OpenAPI\Client\Model\PartnerAccountOperationsRequest**](../Model/PartnerAccountOperationsRequest.md)| A JSON request body that contains the structure of the HTTP request you are instructing Constant Contact to send on behalf of specific managed account in your partnership. | [optional] |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `provision()`

```php
provision($provision): \OpenAPI\Client\Model\ProvisionResponse
```

POST (create) a Partner Client Account

Use this POST method to create a new Constant Contact client account under your partner account, set up the billing plan for the account, and to add the new client to the default contact list.  Newly created accounts are free trials which give the user up to 60 days to try Constant Contact before buying. Trial accounts have limits depending on the services that are included.  If a field validation error occurs, a 400 response message is returned.  If provisioning does not complete successfully due to unavailable dependencies, such as database or dependent services, a 503 response message is returned. By default, the client account provision data is stored and processed when provisioning becomes available.  If the partner client account has the Single Sign On (SSO) for all users feature enabled, all users in the client account can sign into the account using SSO. This feature must be set up through the Constant Contact Partner team. For feature details, see [Configuring Identity Provider Initiated SSO](/api_guide/partner_sso_config.html). Some client account features will be supported in future releases.   For more use case information, see [Create a new Partner Client Account](/api_guide/partners_accts_create.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provision = new \OpenAPI\Client\Model\Provision(); // \OpenAPI\Client\Model\Provision | Create a new Constant Contact client account under your partner account. All required properties must be included in the JSON payload request.

try {
    $result = $apiInstance->provision($provision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersApi->provision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provision** | [**\OpenAPI\Client\Model\Provision**](../Model/Provision.md)| Create a new Constant Contact client account under your partner account. All required properties must be included in the JSON payload request. | |

### Return type

[**\OpenAPI\Client\Model\ProvisionResponse**](../Model/ProvisionResponse.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPlan()`

```php
setPlan($encoded_account_id, $body): \OpenAPI\Client\Model\PlanTiersObject
```

PUT (update) Billing Plan Details for a Client Account

Use this PUT method to update the type of billing plan to assign to the Constant Contact client account. The type of billing plan determines which Constant Contact product features that the client account can access. The billing plan type (`plan_type`) that you enter must already exist in the plan group. Attempting to change to a plan that is currently not available within your partner plan group results in a 400 error response code.  When you create a new client account, the `plan_type` defaults to `TRIAL` and the `billing_day_of_month` defaults to `null`. The `billing_day_of_month` property is required if a client account is not set up to use single billing. You can change the day of month (`billing_day_of_month`) in which to bill a client account only when changing the `plan_type` value from `TRIAL` to a different `plan_type`, otherwise the `billing_day_of_month` value you enter is ignored. You can choose to enter a specific day of the month or accept the default value, which is the day on which the `plan_type` value changes from a `TRIAL` plan to a different `plan_type`. Changing the `plan_type` from `TRIAL` to another `plan_type` automatically changes the `billing_status` from `Trial` to `Open`.  Only technology partners can access partner endpoints and partner endpoints cannot be tested using the API reference tester. If you are not on the latest billing plan, contact the Constant Contact Partner Team. However, older billing plans and `plan_type` enum values will continue to be supported.  For more use case information, see [PUT Billing Plan Details for a Client Account](/api_guide/partners_plans_update.html) in the API guide.

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


$apiInstance = new OpenAPI\Client\Api\TechnologyPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encoded_account_id = a07e1lxqqqo0; // string | Specify the client's unique `encoded_account_id`.
$body = new \OpenAPI\Client\Model\PlanInfo(); // \OpenAPI\Client\Model\PlanInfo | Update the billing plan (`plan_type`) for an existing Constant Contact client account. Options include:   - `TRIAL`: A non-billed account with an expiration date that allows clients to try Constant Contact product features.    - `GOLD`: A billable plan that provides all available product features.    - `SILVER`: A billable plan that provides all features available in the <code>BRONZE</code> plan, and adds some additional email campaign feature such as contact segmentation and social media advertisements.    - `BRONZE`: A billable plan that provides basic email and marketing tools.   If updating from a `TRIAL` plan (`plan_type`) to another type of billing plan, you have the option to update the day of month (`billing_day_of_month`) in which to bill the client account. Valid values include `1` through to and including `31`. Any additional billing plan properties and values that you include in the request body are ignored. If you are not on the latest billing plan, contact the Constant Contact Partner Team. However, older billing plans and `plan_type` enum values will continue to be supported.

try {
    $result = $apiInstance->setPlan($encoded_account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologyPartnersApi->setPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **encoded_account_id** | **string**| Specify the client&#39;s unique &#x60;encoded_account_id&#x60;. | |
| **body** | [**\OpenAPI\Client\Model\PlanInfo**](../Model/PlanInfo.md)| Update the billing plan (&#x60;plan_type&#x60;) for an existing Constant Contact client account. Options include:   - &#x60;TRIAL&#x60;: A non-billed account with an expiration date that allows clients to try Constant Contact product features.    - &#x60;GOLD&#x60;: A billable plan that provides all available product features.    - &#x60;SILVER&#x60;: A billable plan that provides all features available in the &lt;code&gt;BRONZE&lt;/code&gt; plan, and adds some additional email campaign feature such as contact segmentation and social media advertisements.    - &#x60;BRONZE&#x60;: A billable plan that provides basic email and marketing tools.   If updating from a &#x60;TRIAL&#x60; plan (&#x60;plan_type&#x60;) to another type of billing plan, you have the option to update the day of month (&#x60;billing_day_of_month&#x60;) in which to bill the client account. Valid values include &#x60;1&#x60; through to and including &#x60;31&#x60;. Any additional billing plan properties and values that you include in the request body are ignored. If you are not on the latest billing plan, contact the Constant Contact Partner Team. However, older billing plans and &#x60;plan_type&#x60; enum values will continue to be supported. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlanTiersObject**](../Model/PlanTiersObject.md)

### Authorization

[api_key](../../README.md#api_key), [ctctPartnerAuthorizer](../../README.md#ctctPartnerAuthorizer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
