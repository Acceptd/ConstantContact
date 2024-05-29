# # PlanInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan_type** | **string** | The type of billing plan (&lt;code&gt;plan_type&lt;/code&gt;) to associate with a client&#39;s Constant Contact account. The type of billing plan determines which Constant Contact product features that the client account can access. The billing plan type that you enter must already exist in your plan group or a 400 error message is returned. After changing the &lt;code&gt;plan_type&lt;/code&gt; from &lt;code&gt;TRIAL&lt;/code&gt; to any other billing plan type, you cannot change it back to &lt;code&gt;TRIAL&lt;/code&gt;.   &lt;ul&gt;     &lt;li&gt;&lt;code&gt;TRIAL&lt;/code&gt;: A non-billable account with an expiration date that allows clients to try Constant Contact product features.&lt;/li&gt;      &lt;li&gt;&lt;code&gt;GOLD&lt;/code&gt;: A billable client account plan.&lt;/li&gt;      &lt;li&gt;&lt;code&gt;SILVER&lt;/code&gt;: A billable client account plan.&lt;/li&gt;      &lt;li&gt;&lt;code&gt;BRONZE&lt;/code&gt;: A billable client account plan.&lt;/li&gt;   &lt;/ul&gt; | [optional]
**billing_day_of_month** | **int** | This property is required if a client account is not set up to use single billing. You can choose to enter a specific day of the month or accept the default value, which is the day on which the &lt;code&gt;plan_type&lt;/code&gt; value changes from a &lt;code&gt;TRIAL&lt;/code&gt; plan to a different &lt;code&gt;plan_type&lt;/code&gt;. For trial accounts, the value defaults to null. You can only change the &lt;code&gt;billing_day_of_month&lt;/code&gt; when changing the &lt;code&gt;plan_type&lt;/code&gt; value from &lt;code&gt;TRIAL&lt;/code&gt; to a different &lt;code&gt;plan_type&lt;/code&gt;, otherwise the value you enter is ignored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
