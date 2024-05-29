# # ActivityStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items_total_count** | **int** | The total number of items to be processed. | [optional] [readonly]
**items_completed_count** | **int** | The number of items processed in the activity request. | [optional] [readonly]
**person_count** | **int** | The total number of contacts in an import contacts request. | [optional] [readonly]
**error_count** | **int** | The number of non-correctable errors encountered during an import contacts request. | [optional] [readonly]
**correctable_count** | **int** | The number of correctable errors. Correctable errors include invalid email address format, birthday or anniversary format error, or does not have minimal contact information (no name or email address). Correctable errors are available in the product UI to correct. | [optional]
**cannot_add_to_list_count** | **int** | The number of contacts that cannot be added to a list because they were previously unsubscribed, valid for contacts_file_ or json_import requests. | [optional]
**list_count** | **int** | The number of lists processed in an add or remove list membership activity request. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
