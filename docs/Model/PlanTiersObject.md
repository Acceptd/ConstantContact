# # PlanTiersObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan_type** | **string** | The billing plan that is associated with a client&#39;s Constant Contact account. The billing plan determines which Constant Contact product features that the client account can access. If you are not on the latest billing plan, contact the Constant Contact Partner Team. However, older billing plans and &lt;code&gt;plan_type&lt;/code&gt; enum values will continue to be supported. &lt;ul&gt;   &lt;li&gt;&lt;code&gt;TRIAL&lt;/code&gt;: Provides limited product features for a non-billed account and the account has an expiration date.&lt;/li&gt;   &lt;li&gt;&lt;code&gt;BRONZE&lt;/code&gt;: Billable plan that provides basic email and marketing tools.&lt;/li&gt;     &lt;li&gt;&lt;code&gt;SILVER&lt;/code&gt;: Billable plan that provides all features available in the &lt;code&gt;BRONZE&lt;/code&gt; plan, and adds some additional email campaign to features, such as contact segmentation and social media ads integration.&lt;/li&gt;   &lt;li&gt;&lt;code&gt;GOLD&lt;/code&gt;: Billable plan that provides all available product features.&lt;/li&gt; &lt;/ul&gt; | [optional]
**current_tiers** | [**\OpenAPI\Client\Model\TierObject[]**](TierObject.md) | Lists the billing plan tiers that are currently associated with a client account. | [optional]
**billing_status** | **string** | The client&#39;s account billing status. When you first create a client account the &lt;code&gt;billing_status&lt;/code&gt; defaults to &lt;code&gt;Trial&lt;/code&gt;. Billing status values include:   &lt;ul&gt;     &lt;li&gt;&lt;code&gt;Trial&lt;/code&gt; - A non-paying trial client account (default value).&lt;/li&gt;     &lt;li&gt;&lt;code&gt;Open&lt;/code&gt; - An active and paying client account.&lt;/li&gt;     &lt;li&gt;&lt;code&gt;Canceled&lt;/code&gt; - A canceled client account.&lt;/li&gt;     &lt;li&gt;&lt;code&gt;Trial End&lt;/code&gt; - The trial period has ended for this client account.&lt;/li&gt;   &lt;/ul&gt; | [optional]
**billing_day_of_month** | **int** | This property is required when an account is not set up to use single billing. For trial accounts, the value is initially set to &lt;code&gt;null&lt;/code&gt;. The value can only be changed when changing the &lt;code&gt;plan_type&lt;/code&gt; from a trial account to a different type of plan, otherwise the value you enter is ignored. You can choose to enter a specific day of month or except the default value, which is the day that the &lt;code&gt;plan_type&lt;/code&gt; value changes from a trial account plan to a different plan. Valid &lt;code&gt;billing_day_of_month&lt;/code&gt; values include &lt;code&gt;1&lt;/code&gt; through and including &lt;code&gt;31&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)