# # ActivityImportStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items_total_count** | **int** | The total number of rows in the import file. | [optional] [readonly]
**person_count** | **int** | The total number of contacts in the import file. | [optional] [readonly]
**error_count** | **int** | The number of non-correctable errors encountered during the file import. | [optional] [readonly]
**correctable_count** | **int** | The number of correctable errors. Correctable errors are: invalid email address format, birthday or anniversary format error, or does not have minimal contact information (no name or email address). Correctable errors are available in the product UI to correct. | [optional] [readonly]
**cannot_add_to_list_count** | **int** | The number of previously unsubscribed contacts in the import - they cannot be added to a list. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
