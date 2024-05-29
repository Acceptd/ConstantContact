# # ContactsCounts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | Total number of contacts for the account. | [optional]
**explicit** | **int** | Total number of contacts explicitly confirmed. Consent is obtained when you explicitly ask your potential contacts for permission to send the email (for example, using a sign-up form) and they agree. After you obtain express consent, it is good forever or until the contact opts out. | [optional]
**implicit** | **int** | Total number of contacts implicitly confirmed. Consent is inferred based on actions, such as having an existing business relationship (making a purchase or donation, for example). In order to maintain implied consent to comply with CASL a contact must take a business action with you at least once every two years. Under CAN-Spam there is no need to maintain implied consent, it is assumed until the receiver indicates they no longer wish to receive messages. | [optional]
**pending** | **int** | Total number of contacts pending confirmation. Consent is requested and pending confirmation from the contact. | [optional]
**unsubscribed** | **int** | Total number of unsubscribed contacts. Consent is revoked when a contact has unsubscribed. | [optional]
**new_subscriber** | **int** | Total number of newly subscribed contacts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
