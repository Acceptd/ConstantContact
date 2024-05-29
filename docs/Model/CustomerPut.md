# # CustomerPut

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_email** | **string** | The confirmed email address that is associated with the account owner. | [optional]
**contact_phone** | **string** | The account owner&#39;s contact phone number (up to 25 characters in length). | [optional]
**country_code** | **string** | The two-letter &lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_3166-1&#39; target&#x3D;&#39;_blank&#39;&gt;ISO 3166-1 code&lt;/a&gt; representing the organization&#39;s country. | [optional]
**encoded_account_id** | **string** | The read only encoded account ID that uniquely identifies the account. | [optional] [readonly]
**first_name** | **string** | The account owner&#39;s first name. | [optional]
**last_name** | **string** | The account owner&#39;s last name. | [optional]
**organization_name** | **string** | The name of the organization that is associated with this account. | [optional]
**organization_phone** | **string** | The phone number of the organization that is associated with this account. | [optional]
**state_code** | **string** | The two letter &lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_3166-1&#39; target&#x3D;&#39;_blank&#39;&gt;ISO 3166-1 code&lt;/a&gt; used to specify the state to associate with the account. This property is required if the &lt;code&gt;country_code&lt;/code&gt; is US (United States). | [optional]
**time_zone_id** | **string** | The time zone to use for the account; as defined in the IANA time-zone database (see http://www.iana.org/time-zones). | [optional]
**website** | **string** | The organization&#39;s website URL. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
