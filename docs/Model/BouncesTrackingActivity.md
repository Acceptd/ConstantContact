# # BouncesTrackingActivity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** | The ID that uniquely identifies a contact. |
**campaign_activity_id** | **string** | The ID that uniquely identifies the email campaign activity. |
**tracking_activity_type** | **string** | The type of email tracking activity, &lt;code&gt;em_bounces&lt;/code&gt;, that this report includes. |
**email_address** | **string** | The contact&#39;s email address that was used when the email campaign activity bounced. |
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**bounce_code** | **string** | The one-character string used to specify the reason for the email bounce. Valid codes include:  &lt;ul&gt;&lt;li&gt;&lt;code&gt;B&lt;/code&gt; - Non-existent address; the contact&#39;s Internet Service Provider (ISP) indicates that the email address doesn&#39;t exist.&lt;/li&gt;  &lt;li&gt;&lt;code&gt;D&lt;/code&gt; - Undeliverable; after repeated delivery attempts, no response was received from the contact&#39;s ISP.&lt;/li&gt;  &lt;li&gt;&lt;code&gt;F&lt;/code&gt; - Full; the contact&#39;s mailbox is full.&lt;/li&gt;  &lt;li&gt;&lt;code&gt;S&lt;/code&gt; - Suspended; the contact&#39;s address was reported as non-existent by the ISP and is suspended from delivery.&lt;/li&gt;  &lt;li&gt;&lt;code&gt;V&lt;/code&gt; - Vacation/autoreply; the contact set an autoreply, but the message was delivered.&lt;/li&gt;  &lt;li&gt;&lt;code&gt;X&lt;/code&gt; - Other; the contact&#39;s ISP specified another reason that the message cannot be delivered.&lt;/li&gt;  &lt;li&gt;&lt;code&gt;Z&lt;/code&gt; - Blocked; the recipient&#39;s ISP chose not to deliver the email. For example, the ISP may have flagged the email as spam.&lt;/li&gt;&lt;/ul&gt; |
**current_email_address** | **string** | The contact&#39;s most current email address. If &lt;code&gt;email_address&lt;/code&gt; was updated after the email bounce activity occurred, &lt;code&gt;current_ email_address&lt;/code&gt; displays the updated address. If updates were not made to &lt;code&gt;email_address&lt;/code&gt;, the &lt;code&gt;email_address&lt;/code&gt; and &lt;code&gt;current_email_address&lt;/code&gt; are the same. | [optional]
**created_time** | **\DateTime** | The date and time that the email bounce tracking activity occurred. |
**deleted_at** | **\DateTime** | If applicable, the date when the contact was deleted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
