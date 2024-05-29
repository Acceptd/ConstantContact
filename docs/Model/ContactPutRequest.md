# # ContactPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | [**\OpenAPI\Client\Model\EmailAddressPut**](EmailAddressPut.md) |  | [optional]
**first_name** | **string** | The contact&#39;s first name | [optional]
**last_name** | **string** | The contact&#39;s last name | [optional]
**job_title** | **string** | The contact&#39;s job title | [optional]
**company_name** | **string** | Name of the company the contact works for. | [optional]
**birthday_month** | **int** | Accepts values from 1-12; must be used with &lt;code&gt;birthday_day&lt;/code&gt; | [optional]
**birthday_day** | **int** | Accepts values from 1-31; must be used with &lt;code&gt;birthday_month&lt;/code&gt; | [optional]
**anniversary** | **string** | The anniversary date; Accepted formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D, MM-DD-YYYY, M-D-YYYY | [optional]
**update_source** | **string** | Identifies who last updated the contact; valid values are &lt;code&gt;Contact&lt;/code&gt; or &lt;code&gt;Account&lt;/code&gt;. |
**custom_fields** | [**\OpenAPI\Client\Model\ContactCustomField[]**](ContactCustomField.md) | Array of up to 25 &lt;code&gt;custom_field&lt;/code&gt; subresources. | [optional]
**phone_numbers** | [**\OpenAPI\Client\Model\PhoneNumberPut[]**](PhoneNumberPut.md) | Array of up to 3 &lt;code&gt;phone_numbers&lt;/code&gt; subresources. | [optional]
**street_addresses** | [**\OpenAPI\Client\Model\StreetAddressPut[]**](StreetAddressPut.md) | Array of up to 3 &lt;code&gt;street_addresses&lt;/code&gt; subresources. | [optional]
**list_memberships** | **string[]** | Array of up to 50 &lt;code&gt;list_ids&lt;/code&gt; to which the contact is subscribed. | [optional]
**taggings** | **string[]** | Array of tags (&lt;code&gt;tag_id&lt;/code&gt;) assigned to the contact, up to a maximum of 50. | [optional]
**notes** | [**\OpenAPI\Client\Model\Note[]**](Note.md) | An array of notes about the contact listed by most recent note first. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
