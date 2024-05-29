# # SmsChannelConsentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sms_consent_permission** | **string** | Identifies the current permission status for the SMS channel. | [optional]
**consent_type** | **string** |  | [optional]
**opt_in_date** | **\DateTime** | Date and time, in ISO-8601 format, that the contact subscribed/opted-in to receiving SMS from the account. Displays only if the contact subscribes/opts-in. System generated. | [optional] [readonly]
**opt_out_date** | **\DateTime** | Date and time, in ISO-8601 format, that the contact unsubscribed/opted-out of receiving SMS from the account. Displays only if the contact unsubscribed/opted-out. System generated. | [optional] [readonly]
**advertised_frequency** | **string** | The numeric used to set how often to send SMS advertisements during a specified time interval (&lt;code&gt;advertised_interval&lt;/code&gt;). For example, if the &lt;code&gt;advertised_frequency&lt;/code&gt; is set to &lt;code&gt;2&lt;/code&gt; and the  &lt;code&gt;advertised_interval&lt;/code&gt; is set to &lt;code&gt;monthly&lt;/code&gt;, the contact can receive up to two advertisements per month. | [optional]
**advertised_interval** | **string** | Identifies the unit of time used by Constant Contact to send SMS advertisements as a string enum. For example, if the &lt;code&gt;advertised_frequency&lt;/code&gt; is set to &lt;code&gt;2&lt;/code&gt; and the &lt;code&gt;advertised_interval&lt;/code&gt; is set to &lt;code&gt;monthly&lt;/code&gt;, the contact can receive up to two advertisements per month. | [optional]
**created_at** | **\DateTime** | Date and time that the SMS stats were created, in ISO-8601 format. System generated. | [optional] [readonly]
**updated_at** | **\DateTime** | Date and time that the SMS stats were updated, in ISO-8601 format. System generated. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
