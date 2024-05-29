# # EmailCampaigns

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **string** | The unique ID used to identify the email campaign (UUID format). | [optional]
**created_at** | **\DateTime** | The system generated date and time that this email campaign was created. This string is readonly and is in ISO-8601 format. | [optional] [readonly]
**current_status** | **string** | The current status of the email campaign. Valid values are: &lt;ul&gt;   &lt;li&gt;Draft — An email campaign that you have created but have not sent to contacts.&lt;/li&gt;   &lt;li&gt;Scheduled — An email campaign that you have scheduled for Constant Contact to send to contacts.&lt;/li&gt;   &lt;li&gt;Executing — An email campaign that Constant Contact is currently sending to contacts. Email campaign activities are only in this status briefly.&lt;/li&gt;   &lt;li&gt;Done — An email campaign that you successfully sent to contacts.&lt;/li&gt;   &lt;li&gt;Error — An email campaign activity that encountered an error.&lt;/li&gt;   &lt;li&gt;Removed — An email campaign that a user deleted. Users can view and restore deleted emails through the UI.&lt;/li&gt; &lt;/ul&gt; | [optional]
**name** | **string** | The descriptive name the user provides to identify this campaign. Campaign names must be unique for each account ID. | [optional]
**type** | **string** | Identifies the type of campaign that you select when creating the campaign. Newsletter and Custom Code email campaigns are the primary types. | [optional]
**type_code** | **int** | The code used to identify the email campaign &#x60;type&#x60;. &lt;ul&gt;   &lt;li&gt; 1  (Default) &lt;/li&gt;   &lt;li&gt; 2  (Bulk Email) &lt;/li&gt;   &lt;li&gt; 10 (Newsletter) &lt;/li&gt;   &lt;li&gt; 11 (Announcement) &lt;/li&gt;   &lt;li&gt; 12 (Product/Service News) &lt;/li&gt;   &lt;li&gt; 14 (Business Letter) &lt;/li&gt;   &lt;li&gt; 15 (Card) &lt;/li&gt;   &lt;li&gt; 16 (Press release)&lt;/li&gt;   &lt;li&gt; 17 (Flyer) &lt;/li&gt;   &lt;li&gt; 18 (Feedback Request) &lt;/li&gt;   &lt;li&gt; 19 (Ratings and Reviews) &lt;/li&gt;   &lt;li&gt; 20 (Event Announcement) &lt;/li&gt;   &lt;li&gt; 21 (Simple Coupon) &lt;/li&gt;   &lt;li&gt; 22 (Sale Promotion) &lt;/li&gt;   &lt;li&gt; 23 (Product Promotion) &lt;/li&gt;   &lt;li&gt; 24 (Membership Drive) &lt;/li&gt;   &lt;li&gt; 25 (Fundraiser) &lt;/li&gt;   &lt;li&gt; 26 (Custom Code Email)&lt;/li&gt;   &lt;li&gt; 57 (A/B Test)&lt;/li&gt; &lt;/ul&gt; | [optional]
**updated_at** | **\DateTime** | The system generated date and time showing when the campaign was last updated. This string is read only and is in ISO-8601 format. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
