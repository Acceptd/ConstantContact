# # EmailCampaignActivityInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format_type** | **int** | The email format you are using to create the email campaign activity. The V3 API supports creating emails using &lt;code&gt;format_type&lt;/code&gt; 5 (custom code emails). |
**from_name** | **string** | The email sender&#39;s name to display for the email campaign activity. |
**from_email** | **string** | The sender&#39;s email address to use for the email campaign activity. You must use a confirmed Constant Contact account email address. Make a GET call to &lt;code&gt;/account/emails&lt;/code&gt; to return a collection of account emails and their confirmation status. |
**reply_to_email** | **string** | The sender&#39;s email address to use if the contact replies to the email campaign activity. You must use a confirmed Constant Contact account email address. Make a GET call to &lt;code&gt;/account/emails&lt;/code&gt; to return a collection of account emails and their confirmation status. |
**subject** | **string** | The text to display in the subject line that describes the email campaign activity. |
**preheader** | **string** | The email preheader for the email campaign activity. Contacts will view your preheader as a short summary that follows the subject line in their email client. Only &lt;code&gt;format_type&lt;/code&gt; 3, 4, and 5 email campaign activities use the preheader property. | [optional]
**html_content** | **string** | The HTML content for the email campaign activity. Only &lt;code&gt;format_type&lt;/code&gt; 5 (custom code emails) can contain &lt;code&gt;html_content&lt;/code&gt;. When creating a &lt;code&gt;format_type&lt;/code&gt; 5 custom code email, make sure that you include &lt;code&gt;[[trackingImage]]&lt;/code&gt; in the &lt;code&gt;&amp;lt;body&amp;gt;&lt;/code&gt; element of your HTML. |
**physical_address_in_footer** | [**\OpenAPI\Client\Model\EmailPhysicalAddress**](EmailPhysicalAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
