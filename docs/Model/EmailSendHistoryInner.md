# # EmailSendHistoryInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**send_id** | **int** | Uniquely identifies each send history object using the number of times that you sent the email campaign activity as a sequence starting at &lt;code&gt;1&lt;/code&gt;. For example, when you send a specific email campaign activity twice this method returns an object with a &lt;code&gt;send_id&lt;/code&gt; of 1 for the first send and an object with a &lt;code&gt;send_id&lt;/code&gt; of 2 for the second send. | [optional]
**contact_list_ids** | **string[]** | The contacts lists that Constant Contact sent email campaign activity to as an array of contact &lt;code&gt;list_id&lt;/code&gt; strings. | [optional]
**segment_ids** | **int[]** | The contact segments that Constant Contact sent the email campaign activity to as an array of &lt;code&gt;segment_id&lt;/code&gt; integers. | [optional]
**count** | **int** | The number of contacts that Constant Contact sent this email campaign activity to. This property is specific to each send history object. When you resend an email campaign activity, Constant Contact only sends it to new contacts in the contact lists or segments you are using. | [optional]
**run_date** | **\DateTime** | The system generated date and time that Constant Contact sent the email campaign activity to contacts in ISO-8601 format. | [optional]
**send_status** | **string** | The send status for the email campaign activity. Valid values are: &lt;ul&gt;    &lt;li&gt;&lt;code&gt;COMPLETED&lt;/code&gt;: Constant Contact successfully sent the email campaign activity.&lt;/li&gt;   &lt;li&gt;&lt;code&gt;ERRORED&lt;/code&gt;: Constant Contact encountered an error when sending the email campaign activity.&lt;li&gt; &lt;/ul&gt; | [optional]
**reason_code** | **int** | The reason why the send attempt completed or encountered an error. This method returns &lt;code&gt;0&lt;/code&gt; if Constant Contact successfully sent the email campaign activity to contacts. Possible &lt;code&gt;reason_code&lt;/code&gt; values are: &lt;ul&gt;       &lt;li&gt;0 — Constant Contact successfully sent the email to contacts.&lt;/li&gt;       &lt;li&gt;1 — An error occurred when sending this email. Try scheduling it again, or contact &lt;a href&#x3D;&#39;http://support.constantcontact.com&#39; target&#x3D;&#39;_blank&#39;&gt;Customer Support&lt;/a&gt;.&lt;/li&gt;       &lt;li&gt;2 — We were unable to send the email. Please contact our &lt;a href&#x3D;&#39;http://knowledgebase.constantcontact.com/articles/KnowledgeBase/5782-contact-an-account-review-and-deliverability-specialist&#39; target&#x3D;&#39;_blank&#39;&gt;Account Review Team&lt;/a&gt; for more information.&lt;/li&gt;       &lt;li&gt;3 — This Constant Contact account cannot currently send emails. This can be due to billing or product expiration.&lt;/li&gt;       &lt;li&gt;4 — You&#39;re not able to send the email to that many contacts. Remove contacts from the contact lists you are using or select a list with fewer contacts.&lt;/li&gt;       &lt;li&gt;5 — The email is currently in staging. For more information, see the &lt;a href&#x3D;&#39;http://knowledgebase.constantcontact.com/articles/KnowledgeBase/7402-email-staging&#39; target&#x3D;&#39;_blank&gt;Email Staging Knowledge Base article&lt;/a&gt;.&lt;/li&gt;       &lt;li&gt;6 — Constant Contact was unable to finish sending this email to all of the contacts on your list. Please contact &lt;a href&#x3D;&#39;http://support.constantcontact.com&#39; target&#x3D;&#39;_blank&#39;&gt;Customer Support&lt;/a&gt; for more information.&lt;/li&gt;       &lt;li&gt;7 — The email contains invalid images. This can be caused when one or more images in the email are longer available in your image library.&lt;/li&gt;       &lt;li&gt;8 — The email contains a link URL that exceeds 1005 characters.&lt;/li&gt;       &lt;li&gt;9 — Constant Contact was unable to verify your authenticated Sender address. Please contact &lt;a href&#x3D;&#39;http://support.constantcontact.com&#39; target&#x3D;&#39;_blank&#39;&gt;Customer Support&lt;/a&gt; for more information.&lt;/li&gt;       &lt;li&gt;10 — Constant Contact was unable to verify your authenticated Sender address. Please contact &lt;a href&#x3D;&#39;http://support.constantcontact.com&#39; target&#x3D;&#39;_blank&#39;&gt;Customer Support&lt;/a&gt; for more information.&lt;/li&gt;       &lt;li&gt;11 — This Constant Contact account cannot send survey invitations.&lt;/li&gt;       &lt;li&gt;12 — Constant Contact attempted to send the email, but there were no eligible contacts to send it to. This can be caused by an invalid contact list, a contact list with no contacts, or a contact list with no new contacts during a resend. This method displays &lt;code&gt;reason_code&lt;/code&gt; 12 as a send attempt with a &lt;code&gt;send_status&lt;/code&gt; of COMPLETED and a &lt;code&gt;count&lt;/code&gt; of 0.&lt;/li&gt; &lt;/ul&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
