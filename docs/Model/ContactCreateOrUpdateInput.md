# # ContactCreateOrUpdateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | **string** | The email address for the contact. This method identifies each unique contact using their email address. If the email address exists in the account, this method updates the contact. If the email address is new, this method creates a new contact. |
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**job_title** | **string** | The job title of the contact. | [optional]
**company_name** | **string** | The name of the company where the contact works. | [optional]
**phone_number** | **string** | The phone number for the contact. | [optional]
**list_memberships** | **string[]** | The contact lists you want to add the contact to as an array of up to 50 contact &lt;code&gt;list_id&lt;/code&gt; values. You must include at least one &lt;code&gt;list_id&lt;/code&gt;. |
**custom_fields** | [**\OpenAPI\Client\Model\CreateOrUpdateContactCustomField[]**](CreateOrUpdateContactCustomField.md) | The custom fields you want to add to the contact as an array of up to 50 custom field objects. | [optional]
**anniversary** | **string** | The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY. | [optional]
**birthday_month** | **int** | The month value for the contact&#39;s birthday. Valid values are from 1 through 12. The &lt;code&gt;birthday_month&lt;/code&gt; property is required if you use &lt;code&gt;birthday_day&lt;/code&gt;. | [optional]
**birthday_day** | **int** | The day value for the contact&#39;s birthday. Valid values are from 1 through 31. The &lt;code&gt;birthday_day&lt;/code&gt; property is required if you use &lt;code&gt;birthday_month&lt;/code&gt;. | [optional]
**street_address** | [**\OpenAPI\Client\Model\ContactCreateOrUpdateInputStreetAddress**](ContactCreateOrUpdateInputStreetAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
