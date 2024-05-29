# # ActivityGeneric

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_id** | **string** | The ID that uniquely identifies the activity. |
**state** | **string** | The processing state for the activity. |
**created_at** | **\DateTime** | The system generated date and time that the resource was created, in ISO-8601 format. | [optional] [readonly]
**updated_at** | **\DateTime** | The system generated date and time that the resource was last updated, in ISO-8601 format. | [optional] [readonly]
**percent_done** | **int** | The percentage complete for the specified activity. | [optional] [readonly]
**activity_errors** | [**\OpenAPI\Client\Model\ActivityErrors[]**](ActivityErrors.md) | An array of error messages if errors occurred for a specified activity. The system returns an empty array if no errors occur. | [optional] [readonly]
**status** | [**\OpenAPI\Client\Model\ActivityGenericStatus**](ActivityGenericStatus.md) |  | [optional]
**_links** | [**\OpenAPI\Client\Model\TagsActivityLinks**](TagsActivityLinks.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
