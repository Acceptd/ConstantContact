# # EmailLinkClickCount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link_url** | **string** | The URL of a link in an email campaign activity. This URL is not normalized and appears the same as the URL in the email campaign activity. | [optional]
**url_id** | **string** | The ID for a unique link URL in an email campaign activity. | [optional]
**unique_clicks** | **int** | The number of unique contacts that clicked the link. | [optional]
**list_action** | **string** | If the link uses the click segmentation feature, this property contains the action that contacts trigger when they click the link. Currently the only available action is &lt;code&gt;add&lt;/code&gt;, which adds contacts that click the link to a contact list. | [optional]
**list_id** | **string** | If the link uses the click segmentation feature, this property contains the contact list linked with the &lt;code&gt;list_action&lt;/code&gt; property. | [optional]
**link_tag** | **string** | Link tags are not currently available in email campaigns. By default, this method combines results for duplicate link URLs. Link tags will allow users to get a separate link click report for each unique &lt;code&gt;link_tag&lt;/code&gt; value they use, even if URLs are not unique. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
