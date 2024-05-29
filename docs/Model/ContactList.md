# # ContactList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**list_id** | **string** | Unique ID for the contact list | [readonly]
**name** | **string** | The name given to the contact list |
**description** | **string** | Text describing the list. | [optional]
**favorite** | **bool** | Identifies whether or not the account has favorited the contact list. | [optional] [default to false]
**created_at** | **\DateTime** | System generated date and time that the resource was created, in ISO-8601 format. | [optional] [readonly]
**updated_at** | **\DateTime** | Date and time that the list was last updated, in ISO-8601 format. System generated. | [optional] [readonly]
**deleted_at** | **\DateTime** | If the list was deleted, this property shows the date and time it was deleted, in ISO-8601 format. System generated. | [optional] [readonly]
**membership_count** | **int** | The total number of contacts that are members in a list. Does not apply to segment type lists. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
