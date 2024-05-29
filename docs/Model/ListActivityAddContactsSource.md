# # ListActivityAddContactsSource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**list_ids** | **string[]** | Specifies which contacts you are adding to lists as an array of up to 50 contact &lt;code&gt;list_id&lt;/code&gt; values. This property is mutually exclusive with &lt;code&gt;contact_ids&lt;/code&gt;, &lt;code&gt;all_active_contacts&lt;/code&gt;, and &lt;code&gt;segment_id&lt;/code&gt;. | [optional]
**all_active_contacts** | **bool** | Adds all active contacts to your targeted lists. This property is mutually exclusive with &lt;code&gt;contact_ids&lt;/code&gt;, &lt;code&gt;list_ids&lt;/code&gt;, and &lt;code&gt;segment_id&lt;/code&gt;. | [optional] [default to false]
**contact_ids** | **string[]** | Specifies which contacts (up to 500) you are adding to lists as an array of &lt;code&gt;contact_id&lt;/code&gt; values. This property is mutually exclusive with &lt;code&gt;list_ids&lt;/code&gt;, &lt;code&gt;all_active_contacts&lt;/code&gt;, and &lt;code&gt;segment_id&lt;/code&gt;. | [optional]
**segment_id** | **int** | Specifies which contacts you are adding to lists as a single &lt;code&gt;segment_id&lt;/code&gt; value. This property is mutually exclusive with &lt;code&gt;list_ids&lt;/code&gt;, &lt;code&gt;all_active_contacts&lt;/code&gt;, and &lt;code&gt;contact_ids&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
