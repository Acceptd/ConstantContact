# # TierObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usage_type** | **string** | Identifies the tier usage type that is associated with the billing plan. | [optional] [readonly] [default to 'CONTACTS']
**current_usage** | **float** | The number of active contacts (default) used within the current tier. | [optional] [readonly]
**tier** | **int** | The billing tier level that is associated with a client account. By default, the system determines the tier level to use based on the number of active contacts currently in the client account at the time of billing. Billing tiers may differ. The following shows an example billing tier: &lt;ul&gt;   &lt;li&gt;level &lt;code&gt;1&lt;/code&gt; &#x3D; 0 - 500 contacts&lt;/li&gt;   &lt;li&gt;level &lt;code&gt;2&lt;/code&gt; &#x3D; 501 - 1000 contacts&lt;/li&gt;   &lt;li&gt;level &lt;code&gt;3&lt;/code&gt; &#x3D; 1001 - ...&lt;/li&gt; &lt;/ul&gt; | [optional] [readonly]
**tier_min** | **float** | The minimum number of active contacts for the tier level. | [optional] [readonly]
**tier_max** | **float** | The maximum number of active contacts for the tier level. | [optional] [readonly]
**price** | **float** | The billing price set for the tier used to bill the client account each month. | [optional] [readonly]
**currency_code** | **string** | The currency (ISO currency code) used to price the tier for a client account. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
