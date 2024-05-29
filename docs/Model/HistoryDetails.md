# # HistoryDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | The code representing the consent state, including &lt;code&gt;E&lt;/code&gt; for optin and &lt;code&gt;O&lt;/code&gt; for Optin. | [optional]
**source** | **string** | The code representing the consent source type, including &lt;code&gt;A&lt;/code&gt; for Account, &lt;code&gt;C&lt;/code&gt; for Contact, and &lt;code&gt;S&lt;/code&gt;&#39; for System. | [optional]
**consent_type** | **string** | The type of SMS consent used. | [optional]
**consent_action_time** | **\DateTime** | The date and time that SMS engagement data was last updated, in ISO-8601 format. System generated. | [optional]
**consent_action_type** | **string** | The type of consent action provided. | [optional]
**consent_medium_type** | **string** | The code representing the medium used to provide consent. Medium types include mobile device (&lt;code&gt;MD&lt;/code&gt;). lead generation form(&lt;code&gt;LF&lt;/code&gt;), deactivation by carrier(&lt;code&gt;CD&lt;/code&gt;), import_file:(&lt;code&gt;FI&lt;/code&gt;), and system (&lt;code&gt;SY&lt;/code&gt;). | [optional]
**source_consent_timestamp** | **string** | The time that SMS consent was last updated. | [optional]
**source_ip** | **string** | If applicable, the IP address from which the consent came. | [optional]
**source_sms_number** | **string** | If applicable, the SMS consent number associated with the source. | [optional]
**advertised_frequency** | **int** | If applicable, the advertising numeric component used to advertise to the contact.. For example, if &lt;code&gt;advertised_frequency&lt;/code&gt; is set to &lt;code&gt; 2&lt;/code&gt; , and  &lt;code&gt;advertised_interval&lt;/code&gt; is set to &lt;code&gt;M&lt;/code&gt;, the contact receives advertisements twice a month. | [optional]
**advertised_interval** | **string** | If applicable, the interval component used to advertise to the contact. For example, if &lt;code&gt;advertised_frequency&lt;/code&gt; is set to &lt;code&gt; 2&lt;/code&gt; , and  &lt;code&gt;advertised_interval&lt;/code&gt; is set to &lt;code&gt;M&lt;/code&gt;, the contact receives advertisements twice a month. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
