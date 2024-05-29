# # EmailAddressPut

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | The email address of the contact. The email address must be unique for each contact. |
**permission_to_send** | **string** | Identifies the type of permission that the Constant Contact account has to send email to the contact. Types of permission: explicit, implicit, not_set, pending_confirmation, temp_hold, unsubscribed. | [optional]
**created_at** | **\DateTime** | Date and time that the email_address was created, in ISO-8601 format. System generated. | [optional] [readonly]
**updated_at** | **\DateTime** | Date and time that the email_address was last updated, in ISO-8601 format. System generated. | [optional] [readonly]
**opt_in_date** | **\DateTime** | Date and time that the email_address was opted-in to receive email from the account, in ISO-8601 format. System generated. | [optional] [readonly]
**opt_out_source** | **string** | Describes the source of the unsubscribed/opt-out action: either Account or Contact. If the Contact opted-out, then the account cannot send any campaigns to this contact until the contact opts back in. If the Account, then the account can add the contact back to any lists and send to them. Displayed only if contact has been unsubscribed/opt-out. | [optional] [readonly]
**opt_out_date** | **\DateTime** | Date and time that the contact unsubscribed/opted-out of receiving email from the account, in ISO-8601 format. Displayed only if contact has been unsubscribed/opt-out. System generated. | [optional] [readonly]
**opt_out_reason** | **string** | The reason, as provided by the contact, that they unsubscribed/opted-out of receiving email campaigns. | [optional]
**confirm_status** | **string** | Indicates if the contact confirmed their email address after they subscribed to receive emails. Possible values: pending, confirmed, off. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
