# # ActivityReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_activity_id** | **string** | The ID (UUID) that uniquely identifies a campaign activity. | [optional]
**role** | **string** | The purpose of the individual campaign activity in the larger email campaign effort. Valid values are: &lt;ul&gt;   &lt;li&gt;primary_email — The main email marketing campaign that you send to contacts. The &lt;code&gt;primary_email&lt;/code&gt; contains the complete email content.&lt;/li&gt;   &lt;li&gt;permalink — A permanent link to a web accessible version of the &lt;code&gt;primary_email&lt;/code&gt; content without any personalized email information. For example, permalinks do not contain any of the contact details that you add to the &lt;code&gt;primary_email&lt;/code&gt; email content. &lt;/li&gt;   &lt;li&gt;resend — An email campaign that you resend to contacts that did not open the email campaign.&lt;/li&gt; &lt;/ul&gt; Constant Contact creates a &lt;code&gt;primary_email&lt;/code&gt; and a &lt;code&gt;permalink&lt;/code&gt; role campaign activity when you create an email campaign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
