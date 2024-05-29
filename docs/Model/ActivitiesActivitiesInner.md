# # ActivitiesActivitiesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_id** | **string** | Unique ID for the activity. | [optional] [readonly]
**state** | **string** | The state of the request: &lt;p&gt;&lt;ul&gt;   &lt;li&gt;initialized - request has been received&lt;/li&gt;   &lt;li&gt;processing - request is being processed&lt;/li&gt;   &lt;li&gt;completed - job completed&lt;/li&gt;   &lt;li&gt;cancelled - request was cancelled&lt;/li&gt;   &lt;li&gt;failed - job failed to complete&lt;/li&gt;   &lt;li&gt;timed_out - the request timed out before completing\&quot;&lt;/li&gt;   &lt;/ul&gt; &lt;/p&gt; | [optional]
**started_at** | **\DateTime** | Timestamp showing when we began processing the activity request, in ISO-8601 format. | [optional] [readonly]
**completed_at** | **\DateTime** | Timestamp showing when we completed processing the activity, in ISO-8601 format. | [optional] [readonly]
**created_at** | **\DateTime** | Timestamp showing when we created the activity, in ISO-8601 format. | [optional] [readonly]
**updated_at** | **\DateTime** | Timestamp showing when we last updated the activity, in ISO-8601 format. | [optional] [readonly]
**source_file_name** | **string** | Name of the file used for an add_contacts activity. | [optional] [readonly]
**percent_done** | **int** | Shows the percent done for an activity that we are still processing. | [optional] [readonly]
**activity_errors** | **string[]** | Array of messages describing the errors that occurred. | [optional]
**status** | [**\OpenAPI\Client\Model\ActivityStatus**](ActivityStatus.md) |  | [optional]
**_links** | [**\OpenAPI\Client\Model\ActivityStatusExportLink**](ActivityStatusExportLink.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
