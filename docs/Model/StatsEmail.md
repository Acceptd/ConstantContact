# # StatsEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**em_bounces** | **int** | Number of unique email bounces. | [optional]
**em_clicks** | **int** | Number of unique recipients who clicked any link in the email. | [optional]
**em_clicks_all** | **int** | Total number of non-unique email clicks. | [optional]
**em_clicks_all_computer** | **int** | Number of non-unique email clicks on a standard desktop or laptop computer. | [optional]
**em_clicks_all_mobile** | **int** | Number of non-unique email clicks on a mobile phone or similar small mobile device (e.g. iPhone). | [optional]
**em_clicks_all_tablet** | **int** | Number of non-unique email clicks on a small tablet type computer (e.g. iPad). | [optional]
**em_clicks_all_other** | **int** | Number of non-unique email clicks on an unknown device (e.g. Game Console or Wearable). | [optional]
**em_clicks_all_none** | **int** | Number of non-unique email clicks for which the device type was not captured. This will account for any clicks prior to when device type was collected and stored. | [optional]
**em_forwards** | **int** | Number of unique recipients who forwarded the email using the forward to a friend feature (not available for all types of emails). | [optional]
**em_not_opened** | **int** | Number of unique recipients who did not open the email. This is calculated as follows: &lt;code&gt;em_not_opened&lt;/code&gt; is equal to &lt;code&gt;em_sends - em_opens - em_bounces&lt;/code&gt;. This value is reported as zero if the calculation results in a negative value. | [optional]
**em_opens** | **int** | Number of unique recipients who opened the email. | [optional]
**em_opens_all** | **int** | Total number of non-unique email opens. | [optional]
**em_opens_all_computer** | **int** | Number of non-unique email opens on a standard desktop or laptop computer. | [optional]
**em_opens_all_mobile** | **int** | Number of non-unique email opens on a mobile phone or similar small mobile device (e.g. iPhone). | [optional]
**em_opens_all_tablet** | **int** | Number of non-unique email opens on a small tablet type computer (e.g. iPad). | [optional]
**em_opens_all_other** | **int** | Number of non-unique email opens on an unknown device (e.g. Game Console or Wearable). | [optional]
**em_opens_all_none** | **int** | Number of non-unique email opens for which the device type was not captured. This will account for any opens prior to when device type was collected and stored. | [optional]
**em_optouts** | **int** | Number of unique recipients who unsubscribed due to this email. | [optional]
**em_sends** | **int** | Number of unique email sends. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
