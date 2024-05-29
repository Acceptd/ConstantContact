# # ContactResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** | Unique ID for each contact resource | [optional] [readonly]
**email_address** | [**\OpenAPI\Client\Model\EmailAddress**](EmailAddress.md) |  | [optional]
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**job_title** | **string** | The job title of the contact. | [optional]
**company_name** | **string** | The name of the company where the contact works. | [optional]
**birthday_month** | **int** | The month value for the contact&#39;s birthday. Valid values are from 1 through 12. You must use this property with &lt;code&gt;birthday_month&lt;/code&gt;. | [optional]
**birthday_day** | **int** | The day value for the contact&#39;s birthday. Valid values are from 1 through 12. You must use this property with &lt;code&gt;birthday_day&lt;/code&gt;. | [optional]
**anniversary** | **string** | The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY. | [optional]
**update_source** | **string** | Identifies who last updated the contact; valid values are  &lt;code&gt;Contact&lt;/code&gt; or &lt;code&gt;Account&lt;/code&gt;. | [optional]
**create_source** | **string** | Describes who added the contact; valid values are &lt;code&gt;Contact&lt;/code&gt; or &lt;code&gt;Account&lt;/code&gt;. Your integration must accurately identify &lt;code&gt;create_source&lt;/code&gt; for compliance reasons; value is set when contact is created. | [optional]
**created_at** | **\DateTime** | System generated date and time that the resource was created, in ISO-8601 format. | [optional] [readonly]
**updated_at** | **\DateTime** | System generated date and time that the contact was last updated, in ISO-8601 format. | [optional] [readonly]
**deleted_at** | **\DateTime** | For deleted contacts (&lt;code&gt;email_address&lt;/code&gt; contains &lt;code&gt;opt_out_source&lt;/code&gt; and &lt;code&gt;opt_out_date&lt;/code&gt;), shows the date of deletion. | [optional] [readonly]
**custom_fields** | [**\OpenAPI\Client\Model\ContactCustomField[]**](ContactCustomField.md) | Array of up to 25 &lt;code&gt;custom_field&lt;/code&gt; subresources. | [optional]
**phone_numbers** | [**\OpenAPI\Client\Model\PhoneNumber[]**](PhoneNumber.md) | Array of up to 3 &lt;code&gt;phone_numbers&lt;/code&gt; subresources. | [optional]
**street_addresses** | [**\OpenAPI\Client\Model\StreetAddress[]**](StreetAddress.md) | Array of up to 3 &lt;code&gt;street_addresses&lt;/code&gt; subresources. | [optional]
**list_memberships** | **string[]** | Array of up to 50 &lt;code&gt;list_ids&lt;/code&gt; to which the contact is subscribed. | [optional]
**taggings** | **string[]** | Array of tags (&lt;code&gt;tag_id&lt;/code&gt;) assigned to the contact, up to a maximum of 50. | [optional]
**notes** | [**\OpenAPI\Client\Model\Note[]**](Note.md) | An array of notes about the contact listed by most recent note first. | [optional]
**sms_channel** | [**\OpenAPI\Client\Model\ContactResourceSmsChannel**](ContactResourceSmsChannel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
