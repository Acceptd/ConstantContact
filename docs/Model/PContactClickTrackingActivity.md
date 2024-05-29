# # PContactClickTrackingActivity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** | The unique ID that identifies the contact. |
**campaign_activity_id** | **string** | The unique ID that identifies of the campaign activity to use. |
**tracking_activity_type** | **string** | The tracked activity event type. |
**email_address** | **string** | The email address for the contact and tracking activity. |
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**device_type** | **string** | The type of device that was used to click the link. | [optional]
**url_id** | **string** | The ID used to uniquely identify the link. | [optional]
**link_url** | **string** | The URL link text. |
**created_time** | **\DateTime** | The time the tracking activity occurred. |
**deleted_at** | **\DateTime** | The time the Contact was deleted | [optional]
**sms_channel** | [**\OpenAPI\Client\Model\TrackingActivitySmsChannelDTO**](TrackingActivitySmsChannelDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
