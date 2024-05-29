# # ActivityTagging

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_id** | **string** | The system assigned UUID that uniquely identifies an activity. | [readonly]
**state** | **string** | The activity processing state. | [readonly]
**started_at** | **\DateTime** | Timestamp showing when processing started for the activity, in ISO-8601 format. | [optional] [readonly]
**completed_at** | **\DateTime** | Timestamp showing when processing completed for the activity, in ISO-8601 format. | [optional] [readonly]
**created_at** | **\DateTime** | Timestamp showing when the activity was first requested, in ISO-8601 format. | [optional] [readonly]
**updated_at** | **\DateTime** | Timestamp showing when the activity was last updated, in ISO-8601 format. | [optional] [readonly]
**percent_done** | **int** | The processing percent complete for the activity. | [optional] [readonly]
**activity_errors** | **string[]** | An array of error message strings describing the errors that occurred. | [optional] [readonly]
**status** | [**\OpenAPI\Client\Model\ActivityTaggingStatus**](ActivityTaggingStatus.md) |  | [optional]
**_links** | [**\OpenAPI\Client\Model\ActivityLinks**](ActivityLinks.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
