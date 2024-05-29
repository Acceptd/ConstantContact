# # PartnerAccountOperationsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_operation_url** | **string** | The API method path for the request you are sending on behalf of a managed child account. This value should be a V3 API URL without the https://api.cc.email/v3 base url and with any path parameter names included. For example: &lt;code&gt;/emails/activities/{campaign_activity_id}&lt;/code&gt;. |
**account_operation_method** | **string** | The http method for the request you are sending on behalf of a managed child account. |
**account_operation_payload** | **string** | The request payload for the request you are sending on behalf of a managed child account. If you provide a JSON payload using this parameter, make sure that the JSON is string escaped. | [optional]
**account_operation_query_parameters** | [**\OpenAPI\Client\Model\QueryParamObject[]**](QueryParamObject.md) | An array containing the query parameters for the request you are sending on behalf of a managed child account. | [optional]
**account_operation_path_parameters** | [**\OpenAPI\Client\Model\PathParamObject[]**](PathParamObject.md) | An array containing the path parameters for the request you are sending on behalf of a managed child account. | [optional]
**account_operation_headers** | [**\OpenAPI\Client\Model\HeadersObject[]**](HeadersObject.md) | An array containing the headers for the request you are sending on behalf of a managed child account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
