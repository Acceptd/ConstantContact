# # TrackingActivitySmsChannelDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | The ISO country code that is associated with SMS address. | [optional]
**state** | **string** | The SMS channel status:   &lt;ul&gt;&lt;li&gt;&lt;code&gt;N&lt;/code&gt;: not_set&lt;li&gt;      &lt;li&gt;&lt;code&gt;T&lt;/code&gt;: temp_hold&lt;li&gt;      &lt;li&gt;&lt;code&gt;P&lt;/code&gt;: pending_confirmation&lt;li&gt;      &lt;li&gt;&lt;code&gt;I&lt;/code&gt;: implicit&lt;li&gt;      &lt;li&gt;&lt;code&gt;E&lt;/code&gt;: explicit&lt;li&gt;      &lt;li&gt;&lt;code&gt;O&lt;/code&gt;: unsubscribed&lt;li&gt;      &lt;li&gt;&lt;code&gt;D&lt;/code&gt;:deprecated&lt;li&gt;&lt;/ul&gt; | [optional]
**formatted_international** | **string** | The formatted SMS number returned if the SMS &lt;code&gt;country_code&lt;/code&gt; does not match the contacts &lt;code&gt;country_code&lt;/code&gt;. | [optional]
**formatted_national** | **string** | The formatted SMS number returned if the SMS &lt;code&gt;country_code&lt;/code&gt; matches the contacts &lt;code&gt;country_code&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
