# # ContactPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | [**\OpenAPI\Client\Model\EmailAddressPost**](EmailAddressPost.md) |  | [optional]
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**job_title** | **string** | The job title of the contact. | [optional]
**company_name** | **string** | The name of the company where the contact works. | [optional]
**create_source** | **string** | Describes who added the contact; valid values are &lt;code&gt;Contact&lt;/code&gt; or &lt;code&gt;Account&lt;/code&gt;. Your integration must accurately identify &lt;code&gt;create_source&lt;/code&gt; for compliance reasons; value is set on POST, and is read-only going forward. | [optional]
**birthday_month** | **int** | The month value for the contact&#39;s birthday. Valid values are from 1 through 12. The &lt;code&gt;birthday_month&lt;/code&gt; property is required if you use &lt;code&gt;birthday_day&lt;/code&gt;. | [optional]
**birthday_day** | **int** | The day value for the contact&#39;s birthday. Valid values are from 1 through 31. The &lt;code&gt;birthday_day&lt;/code&gt; property is required if you use &lt;code&gt;birthday_month&lt;/code&gt;. | [optional]
**anniversary** | **string** | The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY. | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\ContactCustomField[]**](ContactCustomField.md) | Array of up to 25 &lt;code&gt;custom_field&lt;/code&gt; key value pairs. | [optional]
**phone_numbers** | [**\OpenAPI\Client\Model\PhoneNumberPut[]**](PhoneNumberPut.md) | Array of up to 3 phone numbers subresources. | [optional]
**street_addresses** | [**\OpenAPI\Client\Model\StreetAddressPut[]**](StreetAddressPut.md) | Array of up to 3 street address subresources. | [optional]
**list_memberships** | **string[]** | Array of &lt;code&gt;list_id&lt;/code&gt;s to which the contact is being subscribed, up to a maximum of 50. | [optional]
**taggings** | **string[]** | Array of tags (&lt;code&gt;tag_id&lt;/code&gt;) assigned to the contact, up to a maximum of 50. | [optional]
**notes** | [**\OpenAPI\Client\Model\Note[]**](Note.md) | An array of notes about the contact. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
