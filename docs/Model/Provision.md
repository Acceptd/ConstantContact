# # Provision

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_email** | **string** | A valid email address to associate with the client account. |
**contact_phone** | **string** | The contact phone number to associate with the client account. | [optional]
**country_code** | **string** | The two-letter country code (ISO 3166-1 code) that specifies the country in which the client resides. |
**organization_name** | **string** | The name of organization that identifies the client account. | [optional]
**organization_phone** | **string** | The organization phone number. To set the organization phone number using the user interface, select &lt;b&gt;My Settings&lt;/b&gt; and in the &lt;b&gt;Organization Information&lt;/b&gt; section, select &lt;b&gt;Edit Organization Information&lt;/b&gt;. | [optional]
**state_code** | **string** | The two-letter state code that represents the US state (&lt;code&gt;country_code&lt;/code&gt; is &lt;code&gt;US&lt;/code&gt; ) or Canadian province (&lt;code&gt;country_code&lt;/code&gt; is &lt;code&gt;CA&lt;/code&gt;) where the client&#39;s organization is physically located. Leave the &lt;code&gt;state_code&lt;/code&gt; blank for non-US states and Canadian provinces. |
**time_zone_id** | **string** | The offical time zone to use to represent the physical location associated with the client account. | [optional]
**website** | **string** | The client&#39;s website URL. Specifying the website URL eliminates the need for clients to provide that information. Requires a valid URL starting with http:// or https://. | [optional]
**login_name** | **string** | A unique login name to associate with the client account. The name must only contain alphanumeric characters and &#39;-&#39;, &#39;_&#39;, &#39;@&#39;,&#39;.&#39;,&#39;+&#39;. |
**password** | **string** | Required if not using Single Sign On (SSO) or external authenticator. The password to associate with the client account. Passwords must be a minimum of six characters in length and have no spaces. The password is not returned in the response payload for security reasons. If using SSO authentication, use &lt;code&gt;external_provider&lt;/code&gt; and &lt;code&gt;external_id&lt;/code&gt; instead of &lt;code&gt;password&lt;/code&gt;. | [optional]
**first_name** | **string** | The client account owner&#39;s first name. | [optional]
**last_name** | **string** | The client account owner&#39;s last name. | [optional]
**partner_account_id** | **string** | The unique client account identifier that partners define and use for billing and reporting purposes. | [optional]
**billing_locale** | **string** | The currency to use when billing the client account. Valid values are: &lt;code&gt;en_US&lt;/code&gt; (default, US Dollars) or &lt;code&gt;en_GB&lt;/code&gt; (British Pounds). | [optional]
**managed_site_owner** | **bool** | By default, if the client account is setup as a managed account &lt;code&gt;managed_site_owner&lt;/code&gt; is automatically set to &lt;code&gt;true&lt;/code&gt; and attempting to override the setting with &lt;code&gt;false&lt;/code&gt; is ignored. This helps to avoid getting an account into an unknown state. | [optional]
**enable_single_billing** | **bool** | If a partner account is setup to allow for single billing and the &lt;code&gt;managed_site_owner&lt;/code&gt; property is set to &lt;code&gt;true&lt;/code&gt;, use this property to enable the single billing feature for the client account. See your account manager for more information. | [optional]
**gdpr_opt_out** | **bool** | When creating accounts for users who have opted-out of any marketing communications, set  the &lt;code&gt; gdpr_opt_out&lt;/code&gt;  to &lt;code&gt;true&lt;/code&gt;  so that Constant Contact does not send any marketing communications to the account. | [optional]
**external_id** | **string** | The ID used to uniquely identify the client account for the external authenticator. Do not use the &lt;code&gt;password&lt;/code&gt; property when using an external authenticator. | [optional]
**external_provider** | **string** | The name of the provider who externally authenticates this customer. For example, PayPal or Yahoo. Do not use the &lt;code&gt;password&lt;/code&gt; property when using an external authenticator. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
