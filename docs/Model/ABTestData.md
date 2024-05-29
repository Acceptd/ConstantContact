# # ABTestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alternative_subject** | **string** | The alternate email subject line to use for A/B testing. |
**test_size** | **int** | The percentage of contact recipients to participate in the A/B Test. For example, if the value is 30, then 30% of contacts will receive the email campaign with subject line A, and 30% of contacts will receive the email campaign with subject line B. Valid values include &lt;code&gt;5&lt;/code&gt; to &lt;code&gt;50&lt;/code&gt; percent. Currently, A/B tests support subject line only. |
**winner_wait_duration** | **int** | The number of hours Constant Contact waits after the A/B test is sent before determining the winning subject line. The winner is the subject line with the highest number of contact opens. Valid values include &lt;code&gt;6&lt;/code&gt;, &lt;code&gt;12&lt;/code&gt;, &lt;code&gt;24&lt;/code&gt;, and &lt;code&gt;48&lt;/code&gt;. After the winner is determined, Constant Contact automatically sends the email campaign with the winning subject line to all the remaining contacts, which did not participate in the A/B test. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
