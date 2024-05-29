# # ActivityDeleteListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_id** | **string** | Unique ID for the delete list batch job. | [optional]
**state** | **string** | The state of the request:  &lt;p&gt;&lt;ul&gt;  &lt;li&gt;initialized - request has been received&lt;/li&gt;  &lt;li&gt;processing - request is being processed&lt;/li&gt;  &lt;li&gt;completed - job completed&lt;/li&gt;  &lt;li&gt;cancelled - request was cancelled&lt;/li&gt;  &lt;li&gt;failed - job failed to complete&lt;/li&gt;  &lt;li&gt;timed_out - the request timed out before completing\&quot;&lt;/li&gt;   &lt;/ul&gt; &lt;/p&gt; | [optional]
**created_at** | **\DateTime** | Date and time that the request was received, in ISO-8601 formmat. | [optional]
**updated_at** | **\DateTime** | Date and time that the request status was updated, in ISO-8601 format. | [optional]
**percent_done** | **int** | Job completion percentage | [optional]
**activity_errors** | **string[]** | Array of messages describing the errors that occurred. | [optional]
**_links** | [**\OpenAPI\Client\Model\ActivityDeleteListsResponseLinks**](ActivityDeleteListsResponseLinks.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
