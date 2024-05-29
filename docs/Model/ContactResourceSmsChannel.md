# # ContactResourceSmsChannel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sms_channel_id** | **string** | The unique ID that identifies an SMS channel. | [optional]
**sms_address** | **string** | The phone number of the SMS-capable phone, which does not include the country code. | [optional]
**dial_code** | **string** | The dial code used for the SMS-capable phone. For example, the dial code for the United States is &lt;code&gt;1&lt;/code&gt;. | [optional]
**country_code** | **string** | The two character ISO country code used for the SMS-capable phone. For example, the country code for the United States is &lt;code&gt;US&lt;/code&gt;. | [optional]
**update_source** | **string** | Identifies who last updated SMS details for the contact. Valid values are Contact or Account | [optional]
**create_source** | **string** | Identifies who added SMS details for the contact. The value is set when you create SMS details for the contact. Valid values are &lt;code&gt;Contact&lt;/code&gt; or &lt;code&gt;Account&lt;/code&gt;. | [optional]
**sms_channel_consents** | [**\OpenAPI\Client\Model\SmsChannelConsentDetails[]**](SmsChannelConsentDetails.md) | Identifies SMS channel consent details such as the current permission status for the SMS channel and opt-in date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
