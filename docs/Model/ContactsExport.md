# # ContactsExport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_ids** | **string[]** | Exports up to 500 specific contacts. This property is mutually exclusive with &lt;code&gt;list_ids&lt;/code&gt;. | [optional]
**list_ids** | **string[]** | Exports all of the contacts inside of up to 50 contact lists. This property is mutually exclusive with &lt;code&gt;contact_ids&lt;/code&gt;. | [optional]
**segment_id** | **int** | Specify the &lt;code&gt;segment_id&lt;/code&gt; from which you want to export all contacts that meet the specified &lt;code&gt;segment_criteria&lt;/code&gt;. This property is mutually exclusive with &lt;code&gt;contact_ids&lt;/code&gt; and &lt;code&gt;list_ids&lt;/code&gt;. You can only specify one &lt;code&gt;segment_id&lt;/code&gt;. | [optional]
**fields** | **string[]** | Use this array to export specific contact fields. You must export &lt;code&gt;email_address&lt;/code&gt; to successfully export &lt;code&gt;email_optin_source&lt;/code&gt;, &lt;code&gt;email_optin_date&lt;/code&gt;, &lt;code&gt;email_optout_source&lt;/code&gt;, &lt;code&gt;email_optout_date&lt;/code&gt;, or &lt;code&gt;email_optout_reason&lt;/code&gt;. | [optional]
**status** | **string** | Allows you to export only contacts that have a specific status value. Possible values are &lt;code&gt;active&lt;/code&gt;, &lt;code&gt;unsubscribed&lt;/code&gt;, or &lt;code&gt;removed&lt;/code&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
