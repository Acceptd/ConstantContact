# # AccountPhysicalAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | Line 1 of the organization&#39;s street address. |
**address_line2** | **string** | Line 2 of the organization&#39;s street address. | [optional]
**address_line3** | **string** | Line 3 of the organization&#39;s street address. | [optional]
**city** | **string** | The city where the organization is located. |
**state_code** | **string** | The two letter ISO 3166-1 code for the organization&#39;s state and only used if the &lt;code&gt;country_code&lt;/code&gt; is &lt;code&gt;US&lt;/code&gt; or &lt;code&gt;CA&lt;/code&gt;. If not, exclude this property from the request body. | [optional]
**state_name** | **string** | Use if the state where the organization is physically located is not in the United States or Canada. If  &lt;code&gt;country_code&lt;/code&gt; is  &lt;code&gt;US&lt;/code&gt; or &lt;code&gt;CA&lt;/code&gt;, exclude this property from the request body. | [optional]
**postal_code** | **string** | The postal code address (ZIP code) of the organization. This property is required if the &lt;code&gt;state_code&lt;/code&gt; is &lt;code&gt;US&lt;/code&gt; or &lt;code&gt;CA&lt;/code&gt;, otherwise exclude this property from the request body. | [optional]
**country_code** | **string** | The two letter &lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_3166-1&#39; target&#x3D;&#39;_blank&#39;&gt;ISO 3166-1 code&lt;/a&gt; for the organization&#39;s country. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
