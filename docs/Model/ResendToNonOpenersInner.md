# # ResendToNonOpenersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resend_subject** | **string** | The subject line used when resending the email campaign activity. | [optional]
**delay_days** | **int** | The number of days to wait before Constant Contact resends the email. Valid values include &lt;code&gt;1&lt;/code&gt; to &lt;code&gt;10&lt;/code&gt; days. This value is only returned in the response results if the resend activity was created with &lt;code&gt;delay_days&lt;/code&gt; or the &lt;code&gt;delay_minutes&lt;/code&gt; equal to an exact day value. | [optional]
**delay_minutes** | **int** | The number of minutes to wait before Constant Contact resends the email. There are 1,440 minutes in a day. Valid values includes a minimum of &lt;code&gt;720&lt;/code&gt; (12 hours) and a maximum of &lt;code&gt;14,400&lt;/code&gt; minutes (10 days). This property is mutually exclusive with &lt;code&gt;delay_days&lt;/code&gt;. | [optional]
**resend_date** | **\DateTime** | The system generated date and time (in ISO-8601 format) that the email campaign activity was resent to non-openers (only included in the response results for sent resend activities). | [optional] [readonly]
**resend_request_id** | **string** | For scheduled or sent resend to non-opener emails, the system generates an ID that identifies the resend to non-openers activity. For draft email campaign resend activities, the system returns &lt;code&gt;DRAFT&lt;/code&gt;. | [optional]
**resend_status** | **string** | The status of the resend to non-openers campaign activity. The &lt;code&gt;resend_status&lt;/code&gt; is only returned in the response results if the campaign activity is either scheduled to be sent or was already sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
