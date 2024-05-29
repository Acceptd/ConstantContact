# # ListActivityRemoveContactsSource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**list_ids** | **string[]** | Specifies which contacts to remove from your target lists as an array of up to 50 contact &lt;code&gt;list_id&lt;/code&gt; values. This property is mutually exclusive with &lt;code&gt;contact_ids&lt;/code&gt; and &lt;code&gt;all_active_contacts&lt;/code&gt;. | [optional]
**all_active_contacts** | **bool** | Removes all active contacts from your targeted lists. This property is mutually exclusive with &lt;code&gt;contact_ids&lt;/code&gt; and &lt;code&gt;list_ids&lt;/code&gt;. | [optional] [default to false]
**contact_ids** | **string[]** | Specifies which contacts to remove from your target lists as an array of &lt;code&gt;contact_id&lt;/code&gt; values. This property is mutually exclusive with &lt;code&gt;list_ids&lt;/code&gt; and &lt;code&gt;all_active_contacts&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
