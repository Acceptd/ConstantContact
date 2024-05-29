# # EmailPhysicalAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | Line 1 of the organization&#39;s street address. |
**address_line2** | **string** | Line 2 of the organization&#39;s street address. | [optional]
**address_line3** | **string** | Line 3 of the organization&#39;s street address. | [optional]
**address_optional** | **string** | An optional address field for the organization. Only &lt;code&gt;format_type&lt;/code&gt; 3, 4, and 5 can use this property. | [optional]
**city** | **string** | The city where the organization sending the email campaign is located. | [optional]
**country_code** | **string** | The uppercase two letter &lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_3166-1&#39; target&#x3D;&#39;_blank&#39;&gt;ISO 3166-1 code&lt;/a&gt; for the organization&#39;s country. |
**country_name** | **string** | The full name of the country where the organization sending the email is located. Automatically generated using the &lt;code&gt;country_code&lt;/code&gt;. | [optional] [readonly]
**organization_name** | **string** | The name of the organization that is sending the email campaign. |
**postal_code** | **string** | The postal code address (ZIP code) of the organization. | [optional]
**state_code** | **string** | The uppercase two letter &lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_3166-1&#39; target&#x3D;&#39;_blank&#39;&gt;ISO 3166-1 code&lt;/a&gt; for the organization&#39;s state. This property is required if the &lt;code&gt;country_code&lt;/code&gt; is US (United States). | [optional]
**state_name** | **string** | The full state name for a &lt;code&gt;state_code&lt;/code&gt; that is inside the United States. Automatically generated using the &lt;code&gt;state_code&lt;/code&gt;. | [optional] [readonly]
**state_non_us_name** | **string** | The full state name for a &lt;code&gt;state_code&lt;/code&gt; that is outside the United States. This property is not read only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
