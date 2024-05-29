# # ResendToNonOpenersInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resend_subject** | **string** | The subject line used when resending the email campaign activity. |
**delay_days** | **int** | The number of days to wait before Constant Contact resends the email. Valid values include &lt;code&gt;1&lt;/code&gt; to &lt;code&gt;10&lt;/code&gt; days. This property is mutually exclusive with &lt;code&gt;delay_minutes&lt;/code&gt;. This value is only returned in the response results if the resend activity was created with &lt;code&gt;delay_days&lt;/code&gt; or the &lt;code&gt;delay_minutes&lt;/code&gt; equal to an exact day value. | [optional]
**delay_minutes** | **int** | The number of minutes to wait before Constant Contact resends the email campaign activity. There are 1,440 minutes in a day. Valid values includes a minimum of &lt;code&gt;720&lt;/code&gt; (12 hours) and a maximum of &lt;code&gt;14,400&lt;/code&gt; minutes (10 days). This property is mutually exclusive with &lt;code&gt;delay_days&lt;/code&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
