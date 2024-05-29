# # PartnerAccountSiteOwnerListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**encoded_account_id** | **string** | The obfuscated ID used to uniquely identify a client account. | [optional] [readonly]
**subscriber_count** | **int** | The total number of subscriber contacts that are associated with a client account. | [optional] [readonly]
**organization_name** | **string** | The name of the organization associated with this client account. | [optional] [readonly]
**site_owner_name** | **string** | The user name that identifies a client account. | [optional] [readonly]
**billing_status** | **string** | The client&#39;s account billing status. When you first create a client account the &#x60;billing status&#x60; defaults to &#x60;Trial&#x60;. Billing status values include: &lt;ul&gt;   &lt;li&gt;&lt;code&gt;Trial&lt;/code&gt; - A non-paying trial client account (default value).&lt;/li&gt;   &lt;li&gt;&lt;code&gt;Open&lt;/code&gt; - An active and paying client account.&lt;/li&gt;   &lt;li&gt;&lt;code&gt;Canceled&lt;/code&gt; - A canceled client account.&lt;/li&gt;   &lt;li&gt;&lt;code&gt;Trial End&lt;/code&gt; - The trial period has ended for this client account.&lt;/li&gt; &lt;/ul&gt; | [optional] [readonly]
**last_login_date** | **\DateTime** | The system generated date and time (ISO-8601) showing when the client last logged into their Constant Contact account. If a client has not logged into their account, the value is &#x60;null&#x60;. This property does not display in the results. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
