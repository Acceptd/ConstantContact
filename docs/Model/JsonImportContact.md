# # JsonImportContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email address of the contact. This method identifies each unique contact using their email address. |
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**job_title** | **string** | The job title of the contact. | [optional]
**company_name** | **string** | The name of the company where the contact works. | [optional]
**birthday_month** | **int** | The month value for the contact&#39;s birthday. Valid values are from 1 through 12. The &lt;code&gt;birthday_month&lt;/code&gt; property is required if you use &lt;code&gt;birthday_day&lt;/code&gt;. | [optional]
**birthday_day** | **int** | The day value for the contact&#39;s birthday. Valid values are from 1 through 31. The &lt;code&gt;birthday_day&lt;/code&gt; property is required if you use &lt;code&gt;birthday_month&lt;/code&gt;. | [optional]
**anniversary** | **string** | The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY. | [optional]
**phone** | **string** | The primary phone number for the contact. Use this field to add the default kind of phone number to the imported contact&#39;s phone number. Default &lt;code&gt;kind&lt;/code&gt; is &lt;code&gt;other&lt;/code&gt;. | [optional]
**home_phone** | **string** | The home phone number for the contact. | [optional]
**work_phone** | **string** | The work phone number for the contact. | [optional]
**mobile_phone** | **string** | The mobile phone number for the contact. | [optional]
**other_phone** | **string** | A phone number for the contact. | [optional]
**street** | **string** | Line one of the primary street address for the contact. Use this field to add the default kind of street to the imported contact&#39;s street address. The default &lt;code&gt;kind&lt;/code&gt; is &lt;code&gt;home&lt;/code&gt;. which maps to the &lt;code&gt;street_addresses&lt;/code&gt; array&#x60; in the response. | [optional]
**street2** | **string** | Line two of the primary street address for the contact. This value is automatically appended to the &lt;code&gt;street&lt;/code&gt; value. Use this field to add the default kind for line two of the street address to the imported contact&#39;s address. The default &lt;code&gt;kind&lt;/code&gt; is &lt;code&gt;other&lt;/code&gt;. | [optional]
**city** | **string** | The name of the primary city for the contact. Use this field to add the default kind of city to the imported contact&#39;s home address. The default &lt;code&gt;kind&lt;/code&gt; is &lt;code&gt;home&lt;/code&gt;. | [optional]
**state** | **string** | The name of the primary state or province for the contact. Use this field to add the default kind of state to the imported contact&#39;s home address. The default &lt;code&gt;kind&lt;/code&gt; is &lt;code&gt;home&lt;/code&gt;. | [optional]
**zip** | **string** | The zip or postal code associated with the contact&#39;s primary address. Use this field to add the default kind of zip to the imported contact&#39;s street address. The default &lt;code&gt;kind&lt;/code&gt; is &lt;code&gt;home&lt;/code&gt;. | [optional]
**country** | **string** | The name of the primary country where the contact is located. Use this field to add the default kind of country to the imported contact&#39;s street address. The default &lt;code&gt;kind&lt;/code&gt; is &lt;code&gt;home&lt;/code&gt;. | [optional]
**home_street** | **string** | Line one of the home street address for the contact. | [optional]
**home_street2** | **string** | Line two of the home street address for the contact. This value is automatically appended to the &lt;code&gt;home_street&lt;/code&gt; value. | [optional]
**home_city** | **string** | The name of the city where the contact lives. | [optional]
**home_state** | **string** | The name of the home state or province where the contact lives. | [optional]
**home_zip** | **string** | The zip or postal code associated with the contact&#39;s home address. | [optional]
**home_country** | **string** | The name of the country where the contact lives. | [optional]
**work_street** | **string** | Line one of the work street address for the contact. | [optional]
**work_street2** | **string** | Line two of the work street address for the contact. This value is automatically appended to the &lt;code&gt;work_street&lt;/code&gt; value. | [optional]
**work_city** | **string** | The name of the city where the contact works. | [optional]
**work_state** | **string** | The name of the state or province where the contact works. | [optional]
**work_zip** | **string** | The zip or postal code associated with the contact&#39;s work address. | [optional]
**work_country** | **string** | The name of the country where the contact works. | [optional]
**other_street** | **string** | Line one of the other street address for the contact. | [optional]
**other_street2** | **string** | Line two of the other street address for the contact. This value is automatically appended to the &lt;code&gt;other_street&lt;/code&gt; value. | [optional]
**other_city** | **string** | The name of another city where the contact is located. | [optional]
**other_state** | **string** | The name of another state or province where the contact is located. | [optional]
**other_zip** | **string** | The zip or postal code associated with the contact&#39;s other address. | [optional]
**other_country** | **string** | The name of another country where the contact is located. | [optional]
**cfcustom_field_name** | **string** | The name of this property is dynamic based on the custom fields you want to import. Use a key-value pair where the key is an existing custom field name prefixed with &lt;code&gt;cf:&lt;/code&gt;, and the value is a custom field string value. For example, if you have a custom field named &lt;code&gt;first_name&lt;/code&gt; you can use &lt;code&gt;\&quot;cf:first_name\&quot;:\&quot;Joe\&quot;&lt;/code&gt;. Each contact can contain up to 25 different custom fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
