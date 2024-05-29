# Constant Contact SDK

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Acceptd/ConstantContact.git"
    }
  ],
  "require": {
    "Acceptd/ConstantContact": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2_access_code
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountServicesApi(
    // If you want to use a custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new 'ConstantContact\Client\Model\AccountEmailInput(); // 'ConstantContact\Client\Model\AccountEmailInput | A JSON request payload containing the new email address you want to add to the Constant Contact account.

try {
    $result = $apiInstance->addAccountEmailAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->addAccountEmailAddress: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.cc.email/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountServicesApi* | [**addAccountEmailAddress**](docs/Api/AccountServicesApi.md#addaccountemailaddress) | **POST** /account/emails | POST Add an Account Email Address
*AccountServicesApi* | [**getAccountById**](docs/Api/AccountServicesApi.md#getaccountbyid) | **GET** /account/summary | GET a Summary of Account Details
*AccountServicesApi* | [**getPhysicalAddress**](docs/Api/AccountServicesApi.md#getphysicaladdress) | **GET** /account/summary/physical_address | GET the Physical Address for the Account
*AccountServicesApi* | [**getUserPrivileges**](docs/Api/AccountServicesApi.md#getuserprivileges) | **GET** /account/user/privileges | GET User Privileges
*AccountServicesApi* | [**putCustomerById**](docs/Api/AccountServicesApi.md#putcustomerbyid) | **PUT** /account/summary | PUT (update) Account Details
*AccountServicesApi* | [**putPhysicalAddress**](docs/Api/AccountServicesApi.md#putphysicaladdress) | **PUT** /account/summary/physical_address | PUT (update) the Physical Address for an Account
*AccountServicesApi* | [**retrieveEmailAddresses**](docs/Api/AccountServicesApi.md#retrieveemailaddresses) | **GET** /account/emails | GET a Collection of Account Email Addresses
*BulkActivitiesApi* | [**bulkImportContactsJSON**](docs/Api/BulkActivitiesApi.md#bulkimportcontactsjson) | **POST** /activities/contacts_json_import | Import Contacts using a JSON Payload
*BulkActivitiesApi* | [**contactsCSVImport**](docs/Api/BulkActivitiesApi.md#contactscsvimport) | **POST** /activities/contacts_file_import | Import Contacts using a CSV File
*BulkActivitiesApi* | [**getActivity**](docs/Api/BulkActivitiesApi.md#getactivity) | **GET** /activities/{activity_id} | GET an Activity Status
*BulkActivitiesApi* | [**getActivityStatusCollection**](docs/Api/BulkActivitiesApi.md#getactivitystatuscollection) | **GET** /activities | GET Activity Status Collection
*BulkActivitiesApi* | [**getContactsExport**](docs/Api/BulkActivitiesApi.md#getcontactsexport) | **GET** /contact_exports/{file_export_id} | Retrieve Exported Contacts File
*BulkActivitiesApi* | [**postContactDelete**](docs/Api/BulkActivitiesApi.md#postcontactdelete) | **POST** /activities/contact_delete | Delete Contacts in Bulk
*BulkActivitiesApi* | [**postContactsExport**](docs/Api/BulkActivitiesApi.md#postcontactsexport) | **POST** /activities/contact_exports | Export Contacts to a File
*BulkActivitiesApi* | [**postCustomFieldDelete**](docs/Api/BulkActivitiesApi.md#postcustomfielddelete) | **POST** /activities/custom_fields_delete | Delete Custom Fields
*BulkActivitiesApi* | [**postListAddContact**](docs/Api/BulkActivitiesApi.md#postlistaddcontact) | **POST** /activities/add_list_memberships | Add Contacts to Lists
*BulkActivitiesApi* | [**postListDelete**](docs/Api/BulkActivitiesApi.md#postlistdelete) | **POST** /activities/list_delete | Delete Contact Lists
*BulkActivitiesApi* | [**postListRemoveContact**](docs/Api/BulkActivitiesApi.md#postlistremovecontact) | **POST** /activities/remove_list_memberships | Remove Contacts from Lists
*BulkActivitiesApi* | [**postTagAddContact**](docs/Api/BulkActivitiesApi.md#posttagaddcontact) | **POST** /activities/contacts_taggings_add | Add Tags to Contacts
*BulkActivitiesApi* | [**postTagDelete**](docs/Api/BulkActivitiesApi.md#posttagdelete) | **POST** /activities/contacts_tags_delete | Delete Tags
*BulkActivitiesApi* | [**postTagRemoveContact**](docs/Api/BulkActivitiesApi.md#posttagremovecontact) | **POST** /activities/contacts_taggings_remove | Remove Tags from Contacts
*ContactListsApi* | [**createList**](docs/Api/ContactListsApi.md#createlist) | **POST** /contact_lists | POST (create) a List
*ContactListsApi* | [**deleteListActivity**](docs/Api/ContactListsApi.md#deletelistactivity) | **DELETE** /contact_lists/{list_id} | DELETE a List
*ContactListsApi* | [**getList**](docs/Api/ContactListsApi.md#getlist) | **GET** /contact_lists/{list_id} | GET a List
*ContactListsApi* | [**getListIdXrefs**](docs/Api/ContactListsApi.md#getlistidxrefs) | **GET** /contact_lists/list_id_xrefs | GET a collection of V2 and V3 API List IDs
*ContactListsApi* | [**getLists**](docs/Api/ContactListsApi.md#getlists) | **GET** /contact_lists | GET Lists Collection
*ContactListsApi* | [**putList**](docs/Api/ContactListsApi.md#putlist) | **PUT** /contact_lists/{list_id} | PUT (update) a List
*ContactTagsApi* | [**deleteTag**](docs/Api/ContactTagsApi.md#deletetag) | **DELETE** /contact_tags/{tag_id} | DELETE a Tag
*ContactTagsApi* | [**getTag**](docs/Api/ContactTagsApi.md#gettag) | **GET** /contact_tags/{tag_id} | GET Tag Details
*ContactTagsApi* | [**getTags**](docs/Api/ContactTagsApi.md#gettags) | **GET** /contact_tags | GET Details for All Tags
*ContactTagsApi* | [**postTag**](docs/Api/ContactTagsApi.md#posttag) | **POST** /contact_tags | POST (Create) a Tag
*ContactTagsApi* | [**putTag**](docs/Api/ContactTagsApi.md#puttag) | **PUT** /contact_tags/{tag_id} | PUT (Update) a Tag
*ContactsApi* | [**countContact**](docs/Api/ContactsApi.md#countcontact) | **GET** /contacts/counts | GET Contact Consent Counts
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | POST (create) a Contact
*ContactsApi* | [**createOrUpdateContact**](docs/Api/ContactsApi.md#createorupdatecontact) | **POST** /contacts/sign_up_form | Create or Update a Contact
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /contacts/{contact_id} | DELETE a Contact
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /contacts/{contact_id} | GET a Contact
*ContactsApi* | [**getContactIdXrefs**](docs/Api/ContactsApi.md#getcontactidxrefs) | **GET** /contacts/contact_id_xrefs | GET a collection of V2 and V3 API contact IDs
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | GET Contacts Collection
*ContactsApi* | [**getSmsEngagementHistory**](docs/Api/ContactsApi.md#getsmsengagementhistory) | **GET** /contacts/sms_engagement_history/{contact_id} | GET SMS Engagement History for a Contact
*ContactsApi* | [**putContact**](docs/Api/ContactsApi.md#putcontact) | **PUT** /contacts/{contact_id} | PUT (update) a Contact
*ContactsCustomFieldsApi* | [**deleteCustomField**](docs/Api/ContactsCustomFieldsApi.md#deletecustomfield) | **DELETE** /contact_custom_fields/{custom_field_id} | DELETE a custom_field
*ContactsCustomFieldsApi* | [**getCustomField**](docs/Api/ContactsCustomFieldsApi.md#getcustomfield) | **GET** /contact_custom_fields/{custom_field_id} | GET a custom_field
*ContactsCustomFieldsApi* | [**getCustomFields**](docs/Api/ContactsCustomFieldsApi.md#getcustomfields) | **GET** /contact_custom_fields | GET custom_fields Collection
*ContactsCustomFieldsApi* | [**postCustomFields**](docs/Api/ContactsCustomFieldsApi.md#postcustomfields) | **POST** /contact_custom_fields | POST (create) a custom_field
*ContactsCustomFieldsApi* | [**putCustomField**](docs/Api/ContactsCustomFieldsApi.md#putcustomfield) | **PUT** /contact_custom_fields/{custom_field_id} | PUT (update) a custom_field
*ContactsReportingApi* | [**getContactOpenClickRate**](docs/Api/ContactsReportingApi.md#getcontactopenclickrate) | **GET** /reports/contact_reports/{contact_id}/open_and_click_rates | GET Average Open and Click Rates
*ContactsReportingApi* | [**getContactTracking**](docs/Api/ContactsReportingApi.md#getcontacttracking) | **GET** /reports/contact_reports/{contact_id}/activity_details | GET Contact Activity Details
*ContactsReportingApi* | [**getContactTrackingCount**](docs/Api/ContactsReportingApi.md#getcontacttrackingcount) | **GET** /reports/contact_reports/{contact_id}/activity_summary | GET Contact Action Summary
*EmailCampaignsApi* | [**createEmailCampaignUsingPOST**](docs/Api/EmailCampaignsApi.md#createemailcampaignusingpost) | **POST** /emails | POST (Create) a New Email Campaign
*EmailCampaignsApi* | [**createResendToNonOpenersUsingPOST**](docs/Api/EmailCampaignsApi.md#createresendtononopenersusingpost) | **POST** /emails/activities/{campaign_activity_id}/non_opener_resends | POST a Resend to Non-openers Campaign Activity
*EmailCampaignsApi* | [**deleteResendToNonOpenersUsingDELETE**](docs/Api/EmailCampaignsApi.md#deleteresendtononopenersusingdelete) | **DELETE** /emails/activities/{campaign_activity_id}/non_opener_resends/{resend_request_id} | DELETE a Resend to Non Openers Activity
*EmailCampaignsApi* | [**removeEmailCampaignUsingDELETE**](docs/Api/EmailCampaignsApi.md#removeemailcampaignusingdelete) | **DELETE** /emails/{campaign_id} | DELETE an Email Campaign
*EmailCampaignsApi* | [**renameEmailCampaignUsingPATCH**](docs/Api/EmailCampaignsApi.md#renameemailcampaignusingpatch) | **PATCH** /emails/{campaign_id} | PATCH (Update) an Email Campaign Name
*EmailCampaignsApi* | [**retrieveEmailCampaignActivityUsingGET**](docs/Api/EmailCampaignsApi.md#retrieveemailcampaignactivityusingget) | **GET** /emails/activities/{campaign_activity_id} | GET a Single Email Campaign Activity
*EmailCampaignsApi* | [**retrieveEmailCampaignUsingGET**](docs/Api/EmailCampaignsApi.md#retrieveemailcampaignusingget) | **GET** /emails/{campaign_id} | GET Details About a Single Email Campaign
*EmailCampaignsApi* | [**retrieveEmailCampaignsUsingGET**](docs/Api/EmailCampaignsApi.md#retrieveemailcampaignsusingget) | **GET** /emails | GET a Collection of Email Campaigns
*EmailCampaignsApi* | [**retrieveResendToNonOpenersUsingGET**](docs/Api/EmailCampaignsApi.md#retrieveresendtononopenersusingget) | **GET** /emails/activities/{campaign_activity_id}/non_opener_resends | GET Details for a Resend to Non-openers Campaign Activity
*EmailCampaignsApi* | [**retrieveXrefMappingsUsingGET**](docs/Api/EmailCampaignsApi.md#retrievexrefmappingsusingget) | **GET** /emails/campaign_id_xrefs | GET a Collection of V2 and V3 API Email Campaign Identifiers
*EmailCampaignsApi* | [**updateEmailCampaignActivityUsingPUT**](docs/Api/EmailCampaignsApi.md#updateemailcampaignactivityusingput) | **PUT** /emails/activities/{campaign_activity_id} | PUT (Update) An Email Campaign Activity
*EmailCampaignsABTestsApi* | [**createEmailCampaignABTestUsingPOST**](docs/Api/EmailCampaignsABTestsApi.md#createemailcampaignabtestusingpost) | **POST** /emails/activities/{campaign_activity_id}/abtest | POST (Create) an A/B Test for an Email Campaign Activity
*EmailCampaignsABTestsApi* | [**deleteEmailCampaignABTestUsingDELETE**](docs/Api/EmailCampaignsABTestsApi.md#deleteemailcampaignabtestusingdelete) | **DELETE** /emails/activities/{campaign_activity_id}/abtest | DELETE an A/B Test for an Email Campaign Activity
*EmailCampaignsABTestsApi* | [**retrieveEmailCampaignABTestUsingGET**](docs/Api/EmailCampaignsABTestsApi.md#retrieveemailcampaignabtestusingget) | **GET** /emails/activities/{campaign_activity_id}/abtest | GET A/B Test Details for an Email Campaign Activity
*EmailReportingApi* | [**getAllBulkEmailCampaignSummaries**](docs/Api/EmailReportingApi.md#getallbulkemailcampaignsummaries) | **GET** /reports/summary_reports/email_campaign_summaries | GET an Email Campaigns Summary Report
*EmailReportingApi* | [**getBounces**](docs/Api/EmailReportingApi.md#getbounces) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/bounces | GET an Email Bounces Report
*EmailReportingApi* | [**getCampaignActivityLinkStats**](docs/Api/EmailReportingApi.md#getcampaignactivitylinkstats) | **GET** /reports/email_reports/{campaign_activity_id}/links | GET an Email Links Report
*EmailReportingApi* | [**getClicks**](docs/Api/EmailReportingApi.md#getclicks) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/clicks | GET an Email Clicks Report
*EmailReportingApi* | [**getDidNotOpens**](docs/Api/EmailReportingApi.md#getdidnotopens) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/didnotopens | GET an Email Did Not Opens Report
*EmailReportingApi* | [**getEmailCampaignActivitySummary**](docs/Api/EmailReportingApi.md#getemailcampaignactivitysummary) | **GET** /reports/stats/email_campaign_activities/{campaign_activity_ids} | GET an Email Campaign Activity Stats Report
*EmailReportingApi* | [**getEmailSummary**](docs/Api/EmailReportingApi.md#getemailsummary) | **GET** /reports/stats/email_campaigns/{campaign_ids} | GET an Email Campaign Stats Report
*EmailReportingApi* | [**getForwards**](docs/Api/EmailReportingApi.md#getforwards) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/forwards | GET an Email Forwards Report
*EmailReportingApi* | [**getOpens**](docs/Api/EmailReportingApi.md#getopens) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/opens | GET an Email Opens Report
*EmailReportingApi* | [**getOptouts**](docs/Api/EmailReportingApi.md#getoptouts) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/optouts | GET an Email Opt-outs Report
*EmailReportingApi* | [**getSends**](docs/Api/EmailReportingApi.md#getsends) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/sends | GET an Email Sends Report
*EmailReportingApi* | [**getUniqueOpens**](docs/Api/EmailReportingApi.md#getuniqueopens) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/unique_opens | GET an Email Unique Opens Report
*EmailSchedulingApi* | [**retrieveEmailCampaignActivityPreviewUsingGET**](docs/Api/EmailSchedulingApi.md#retrieveemailcampaignactivitypreviewusingget) | **GET** /emails/activities/{campaign_activity_id}/previews | GET the HTML Preview of an Email Campaign Activity
*EmailSchedulingApi* | [**retrieveEmailSchedulesUsingGET**](docs/Api/EmailSchedulingApi.md#retrieveemailschedulesusingget) | **GET** /emails/activities/{campaign_activity_id}/schedules | GET an Email Campaign Activity Schedule
*EmailSchedulingApi* | [**retrieveEmailSendHistoryUsingGET**](docs/Api/EmailSchedulingApi.md#retrieveemailsendhistoryusingget) | **GET** /emails/activities/{campaign_activity_id}/send_history | GET the Send History of an Email Campaign Activity
*EmailSchedulingApi* | [**scheduleEmailCampaignActivityUsingPOST**](docs/Api/EmailSchedulingApi.md#scheduleemailcampaignactivityusingpost) | **POST** /emails/activities/{campaign_activity_id}/schedules | POST (Create) an Email Campaign Activity Schedule
*EmailSchedulingApi* | [**testSendCampaignActivityUsingPOST**](docs/Api/EmailSchedulingApi.md#testsendcampaignactivityusingpost) | **POST** /emails/activities/{campaign_activity_id}/tests | POST Test Send an Email Campaign Activity
*EmailSchedulingApi* | [**unscheduleEmailCampaignActivityUsingDELETE**](docs/Api/EmailSchedulingApi.md#unscheduleemailcampaignactivityusingdelete) | **DELETE** /emails/activities/{campaign_activity_id}/schedules | DELETE an Email Campaign Activity Schedule
*LandingPagesReportingApi* | [**getContactAdds**](docs/Api/LandingPagesReportingApi.md#getcontactadds) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_adds | GET a Unique Contacts Adds Landing Page Report
*LandingPagesReportingApi* | [**getContactOpens**](docs/Api/LandingPagesReportingApi.md#getcontactopens) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_contact_opens | GET a Contacts Opens Landing Page Report
*LandingPagesReportingApi* | [**getUniqueContactClicks**](docs/Api/LandingPagesReportingApi.md#getuniquecontactclicks) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_clicks | GET a Unique Contacts Clicks Landing Page Report
*LandingPagesReportingApi* | [**getUniqueContactOpens**](docs/Api/LandingPagesReportingApi.md#getuniquecontactopens) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_opens | GET a Unique Contacts Opens Landing Page Report
*LandingPagesReportingApi* | [**getUniqueContactSMSOptIns**](docs/Api/LandingPagesReportingApi.md#getuniquecontactsmsoptins) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_sms_optins | GET a Unique Contacts SMS Opt-In Landing Page Report
*LandingPagesReportingApi* | [**getUniqueContactUpdates**](docs/Api/LandingPagesReportingApi.md#getuniquecontactupdates) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_updates | GET a Unique Contacts Updates Landing Page Report
*SMSReportingApi* | [**getAllBulkSmsCampaignSummaries**](docs/Api/SMSReportingApi.md#getallbulksmscampaignsummaries) | **GET** /reports/summary_reports/sms_campaign_summaries | GET an SMS Campaigns Summary Report
*SegmentsApi* | [**createSegment**](docs/Api/SegmentsApi.md#createsegment) | **POST** /segments | POST (create) a Segment
*SegmentsApi* | [**deleteSegment**](docs/Api/SegmentsApi.md#deletesegment) | **DELETE** /segments/{segment_id} | DELETE a Segment
*SegmentsApi* | [**getAccountSegments**](docs/Api/SegmentsApi.md#getaccountsegments) | **GET** /segments | GET all Segments
*SegmentsApi* | [**getSegmentDetail**](docs/Api/SegmentsApi.md#getsegmentdetail) | **GET** /segments/{segment_id} | GET a Segment&#39;s Details
*SegmentsApi* | [**updateSegment**](docs/Api/SegmentsApi.md#updatesegment) | **PUT** /segments/{segment_id} | PUT (update) a Segment
*SegmentsApi* | [**updateSegmentName**](docs/Api/SegmentsApi.md#updatesegmentname) | **PATCH** /segments/{segment_id}/name | PATCH (rename) a Segment
*TechnologyPartnersApi* | [**cancelAccount**](docs/Api/TechnologyPartnersApi.md#cancelaccount) | **PUT** /partner/accounts/{encoded_account_id}/status/cancel | PUT Cancel the Billing Plan for a Client Account
*TechnologyPartnersApi* | [**createSSOUser**](docs/Api/TechnologyPartnersApi.md#createssouser) | **POST** /partner/accounts/{encoded_account_id}/users/sso | POST a User Under a Partner&#39;s SSO-Enabled Client Account
*TechnologyPartnersApi* | [**getPartnerSiteOwners**](docs/Api/TechnologyPartnersApi.md#getpartnersiteowners) | **GET** /partner/accounts | GET Partner Client Accounts
*TechnologyPartnersApi* | [**getPlan**](docs/Api/TechnologyPartnersApi.md#getplan) | **GET** /partner/accounts/{encoded_account_id}/plan | GET Billing Plan Details for a Client Account
*TechnologyPartnersApi* | [**partnerAccountOperationsPostSync**](docs/Api/TechnologyPartnersApi.md#partneraccountoperationspostsync) | **POST** /partner/accounts/{encoded_account_id}/account_operations/sync | POST Send an API request on Behalf of a Client Account
*TechnologyPartnersApi* | [**provision**](docs/Api/TechnologyPartnersApi.md#provision) | **POST** /partner/accounts | POST (create) a Partner Client Account
*TechnologyPartnersApi* | [**setPlan**](docs/Api/TechnologyPartnersApi.md#setplan) | **PUT** /partner/accounts/{encoded_account_id}/plan | PUT (update) Billing Plan Details for a Client Account
*TechnologyPartnersWebhooksApi* | [**deleteWebhooksSubscriptions**](docs/Api/TechnologyPartnersWebhooksApi.md#deletewebhookssubscriptions) | **DELETE** /partner/webhooks/subscriptions/{topic_id} | DELETE Webhook Topic Subscriptions
*TechnologyPartnersWebhooksApi* | [**getWebhooksCollection**](docs/Api/TechnologyPartnersWebhooksApi.md#getwebhookscollection) | **GET** /partner/webhooks/subscriptions | GET a Collection of Webhook Topic Subscriptions
*TechnologyPartnersWebhooksApi* | [**getWebhooksTopic**](docs/Api/TechnologyPartnersWebhooksApi.md#getwebhookstopic) | **GET** /partner/webhooks/subscriptions/{topic_id} | GET Webhook Topic Subscription
*TechnologyPartnersWebhooksApi* | [**putWebhooksTopic**](docs/Api/TechnologyPartnersWebhooksApi.md#putwebhookstopic) | **PUT** /partner/webhooks/subscriptions/{topic_id} | PUT Webhook Topic Subscription
*TechnologyPartnersWebhooksApi* | [**testSendWebhooksTopic**](docs/Api/TechnologyPartnersWebhooksApi.md#testsendwebhookstopic) | **POST** /partner/webhooks/subscriptions/{topic_id}/tests | POST Test Send Webhook Notification

## Models

- [ABTestData](docs/Model/ABTestData.md)
- [APIErrorSchemaInner](docs/Model/APIErrorSchemaInner.md)
- [AccountCancellation](docs/Model/AccountCancellation.md)
- [AccountEmailCreateResponse](docs/Model/AccountEmailCreateResponse.md)
- [AccountEmailInput](docs/Model/AccountEmailInput.md)
- [AccountEmailsInner](docs/Model/AccountEmailsInner.md)
- [AccountPhysicalAddress](docs/Model/AccountPhysicalAddress.md)
- [AccountSuspension](docs/Model/AccountSuspension.md)
- [Activities](docs/Model/Activities.md)
- [ActivitiesActivitiesInner](docs/Model/ActivitiesActivitiesInner.md)
- [Activity](docs/Model/Activity.md)
- [ActivityDeleteCustomFields](docs/Model/ActivityDeleteCustomFields.md)
- [ActivityDeleteListResponse](docs/Model/ActivityDeleteListResponse.md)
- [ActivityDeleteListsResponse](docs/Model/ActivityDeleteListsResponse.md)
- [ActivityDeleteListsResponseLinks](docs/Model/ActivityDeleteListsResponseLinks.md)
- [ActivityDeleteListsResponseLinksSelf](docs/Model/ActivityDeleteListsResponseLinksSelf.md)
- [ActivityDeleteListsResponseStatus](docs/Model/ActivityDeleteListsResponseStatus.md)
- [ActivityDeleteStatus](docs/Model/ActivityDeleteStatus.md)
- [ActivityDeleteStatusLinks](docs/Model/ActivityDeleteStatusLinks.md)
- [ActivityDeleteStatusLinksSelf](docs/Model/ActivityDeleteStatusLinksSelf.md)
- [ActivityDeleteStatusStatus](docs/Model/ActivityDeleteStatusStatus.md)
- [ActivityErrors](docs/Model/ActivityErrors.md)
- [ActivityExportStatus](docs/Model/ActivityExportStatus.md)
- [ActivityExportStatusStatus](docs/Model/ActivityExportStatusStatus.md)
- [ActivityGeneric](docs/Model/ActivityGeneric.md)
- [ActivityGenericStatus](docs/Model/ActivityGenericStatus.md)
- [ActivityImport](docs/Model/ActivityImport.md)
- [ActivityImportStatus](docs/Model/ActivityImportStatus.md)
- [ActivityLinks](docs/Model/ActivityLinks.md)
- [ActivityLinksResults](docs/Model/ActivityLinksResults.md)
- [ActivityLinksSelf](docs/Model/ActivityLinksSelf.md)
- [ActivityListsMembership](docs/Model/ActivityListsMembership.md)
- [ActivityListsMembershipStatus](docs/Model/ActivityListsMembershipStatus.md)
- [ActivityReference](docs/Model/ActivityReference.md)
- [ActivityStatus](docs/Model/ActivityStatus.md)
- [ActivityStatusExportLink](docs/Model/ActivityStatusExportLink.md)
- [ActivityStatusExportLinkResults](docs/Model/ActivityStatusExportLinkResults.md)
- [ActivityStatusExportLinkSelf](docs/Model/ActivityStatusExportLinkSelf.md)
- [ActivityStatusLink](docs/Model/ActivityStatusLink.md)
- [ActivityTagging](docs/Model/ActivityTagging.md)
- [ActivityTaggingStatus](docs/Model/ActivityTaggingStatus.md)
- [AuthorizationErrorSchema](docs/Model/AuthorizationErrorSchema.md)
- [BouncesTrackingActivitiesPage](docs/Model/BouncesTrackingActivitiesPage.md)
- [BouncesTrackingActivity](docs/Model/BouncesTrackingActivity.md)
- [BulkCampaignSummary](docs/Model/BulkCampaignSummary.md)
- [BulkEmailCampaignSummariesPage](docs/Model/BulkEmailCampaignSummariesPage.md)
- [BulkEmailCampaignSummariesPercents](docs/Model/BulkEmailCampaignSummariesPercents.md)
- [BulkEmailCampaignSummary](docs/Model/BulkEmailCampaignSummary.md)
- [BulkSmsCampaignSummariesPercents](docs/Model/BulkSmsCampaignSummariesPercents.md)
- [CampaignActivityStatsQueryResultEmail](docs/Model/CampaignActivityStatsQueryResultEmail.md)
- [CampaignActivityStatsResultGenericStatsEmailActivity](docs/Model/CampaignActivityStatsResultGenericStatsEmailActivity.md)
- [CampaignActivitySummary](docs/Model/CampaignActivitySummary.md)
- [CampaignStatsQueryResultEmail](docs/Model/CampaignStatsQueryResultEmail.md)
- [CampaignStatsResultGenericStatsEmailPercentsEmail](docs/Model/CampaignStatsResultGenericStatsEmailPercentsEmail.md)
- [ClicksTrackingActivitiesPage](docs/Model/ClicksTrackingActivitiesPage.md)
- [ClicksTrackingActivity](docs/Model/ClicksTrackingActivity.md)
- [CompanyLogo](docs/Model/CompanyLogo.md)
- [ContactCampaignActivitiesSummary](docs/Model/ContactCampaignActivitiesSummary.md)
- [ContactCreateOrUpdateInput](docs/Model/ContactCreateOrUpdateInput.md)
- [ContactCreateOrUpdateInputStreetAddress](docs/Model/ContactCreateOrUpdateInputStreetAddress.md)
- [ContactCreateOrUpdateResponse](docs/Model/ContactCreateOrUpdateResponse.md)
- [ContactCustomField](docs/Model/ContactCustomField.md)
- [ContactDelete](docs/Model/ContactDelete.md)
- [ContactList](docs/Model/ContactList.md)
- [ContactListArray](docs/Model/ContactListArray.md)
- [ContactListPutPost](docs/Model/ContactListPutPost.md)
- [ContactOpenAndClickRates](docs/Model/ContactOpenAndClickRates.md)
- [ContactPostRequest](docs/Model/ContactPostRequest.md)
- [ContactPutRequest](docs/Model/ContactPutRequest.md)
- [ContactResource](docs/Model/ContactResource.md)
- [ContactResourceSmsChannel](docs/Model/ContactResourceSmsChannel.md)
- [ContactTrackingActivitiesPage](docs/Model/ContactTrackingActivitiesPage.md)
- [ContactTrackingActivity](docs/Model/ContactTrackingActivity.md)
- [ContactXref](docs/Model/ContactXref.md)
- [ContactXrefs](docs/Model/ContactXrefs.md)
- [Contacts](docs/Model/Contacts.md)
- [ContactsCounts](docs/Model/ContactsCounts.md)
- [ContactsExport](docs/Model/ContactsExport.md)
- [ContactsJsonImport](docs/Model/ContactsJsonImport.md)
- [CreateOrUpdateContactCustomField](docs/Model/CreateOrUpdateContactCustomField.md)
- [CrossReference](docs/Model/CrossReference.md)
- [CrossReferenceResponse](docs/Model/CrossReferenceResponse.md)
- [CustomFieldId100](docs/Model/CustomFieldId100.md)
- [CustomFieldInput](docs/Model/CustomFieldInput.md)
- [CustomFieldResource](docs/Model/CustomFieldResource.md)
- [CustomFields](docs/Model/CustomFields.md)
- [Customer](docs/Model/Customer.md)
- [CustomerPhysicalAddress](docs/Model/CustomerPhysicalAddress.md)
- [CustomerPut](docs/Model/CustomerPut.md)
- [DidNotOpensTrackingActivitiesPage](docs/Model/DidNotOpensTrackingActivitiesPage.md)
- [DidNotOpensTrackingActivity](docs/Model/DidNotOpensTrackingActivity.md)
- [EmailAddress](docs/Model/EmailAddress.md)
- [EmailAddressPost](docs/Model/EmailAddressPost.md)
- [EmailAddressPut](docs/Model/EmailAddressPut.md)
- [EmailCampaign](docs/Model/EmailCampaign.md)
- [EmailCampaignActivity](docs/Model/EmailCampaignActivity.md)
- [EmailCampaignActivityDocumentProperties](docs/Model/EmailCampaignActivityDocumentProperties.md)
- [EmailCampaignActivityInput](docs/Model/EmailCampaignActivityInput.md)
- [EmailCampaignActivityPreview](docs/Model/EmailCampaignActivityPreview.md)
- [EmailCampaignComplete](docs/Model/EmailCampaignComplete.md)
- [EmailCampaignName](docs/Model/EmailCampaignName.md)
- [EmailCampaigns](docs/Model/EmailCampaigns.md)
- [EmailLinkClickCount](docs/Model/EmailLinkClickCount.md)
- [EmailLinks](docs/Model/EmailLinks.md)
- [EmailPhysicalAddress](docs/Model/EmailPhysicalAddress.md)
- [EmailScheduleInput](docs/Model/EmailScheduleInput.md)
- [EmailScheduleResponseInner](docs/Model/EmailScheduleResponseInner.md)
- [EmailSendHistoryInner](docs/Model/EmailSendHistoryInner.md)
- [EmailTestSendInput](docs/Model/EmailTestSendInput.md)
- [EmailsLink](docs/Model/EmailsLink.md)
- [EmailsPagingLinks](docs/Model/EmailsPagingLinks.md)
- [FileObject](docs/Model/FileObject.md)
- [FileStatusArrayInner](docs/Model/FileStatusArrayInner.md)
- [ForwardsTrackingActivitiesPage](docs/Model/ForwardsTrackingActivitiesPage.md)
- [ForwardsTrackingActivity](docs/Model/ForwardsTrackingActivity.md)
- [HeadersObject](docs/Model/HeadersObject.md)
- [HistoryDetails](docs/Model/HistoryDetails.md)
- [JsonImportContact](docs/Model/JsonImportContact.md)
- [Link](docs/Model/Link.md)
- [Links](docs/Model/Links.md)
- [ListActivityAddContacts](docs/Model/ListActivityAddContacts.md)
- [ListActivityAddContactsSource](docs/Model/ListActivityAddContactsSource.md)
- [ListActivityRemoveContacts](docs/Model/ListActivityRemoveContacts.md)
- [ListActivityRemoveContactsSource](docs/Model/ListActivityRemoveContactsSource.md)
- [ListIdList100](docs/Model/ListIdList100.md)
- [ListInput](docs/Model/ListInput.md)
- [ListXref](docs/Model/ListXref.md)
- [ListXrefs](docs/Model/ListXrefs.md)
- [LpreportingLinks](docs/Model/LpreportingLinks.md)
- [LpreportingNext](docs/Model/LpreportingNext.md)
- [MyLibraryFileCollectionInner](docs/Model/MyLibraryFileCollectionInner.md)
- [MyLibraryFileCollectionInnerThumbnail](docs/Model/MyLibraryFileCollectionInnerThumbnail.md)
- [Next](docs/Model/Next.md)
- [Note](docs/Model/Note.md)
- [OpensTrackingActivitiesPage](docs/Model/OpensTrackingActivitiesPage.md)
- [OpensTrackingActivity](docs/Model/OpensTrackingActivity.md)
- [OptoutsTrackingActivitiesPage](docs/Model/OptoutsTrackingActivitiesPage.md)
- [OptoutsTrackingActivity](docs/Model/OptoutsTrackingActivity.md)
- [PContactAddTrackingActivitiesPage](docs/Model/PContactAddTrackingActivitiesPage.md)
- [PContactAddTrackingActivity](docs/Model/PContactAddTrackingActivity.md)
- [PContactClickTrackingActivitiesPage](docs/Model/PContactClickTrackingActivitiesPage.md)
- [PContactClickTrackingActivity](docs/Model/PContactClickTrackingActivity.md)
- [PContactOpenTrackingActivity](docs/Model/PContactOpenTrackingActivity.md)
- [PContactOpensTrackingActivitiesPage](docs/Model/PContactOpensTrackingActivitiesPage.md)
- [PContactSMSOptInTrackingActivitiesPage](docs/Model/PContactSMSOptInTrackingActivitiesPage.md)
- [PContactSMSOptInTrackingActivity](docs/Model/PContactSMSOptInTrackingActivity.md)
- [PContactUpdateTrackingActivitiesPage](docs/Model/PContactUpdateTrackingActivitiesPage.md)
- [PContactUpdateTrackingActivity](docs/Model/PContactUpdateTrackingActivity.md)
- [PagedEmailCampaignResponse](docs/Model/PagedEmailCampaignResponse.md)
- [PaginationLinks](docs/Model/PaginationLinks.md)
- [PagingLinks](docs/Model/PagingLinks.md)
- [PartnerAccount](docs/Model/PartnerAccount.md)
- [PartnerAccountOperationsRequest](docs/Model/PartnerAccountOperationsRequest.md)
- [PartnerAccountSiteOwnerListInner](docs/Model/PartnerAccountSiteOwnerListInner.md)
- [PartnersLink](docs/Model/PartnersLink.md)
- [PathParamObject](docs/Model/PathParamObject.md)
- [PercentsEmail](docs/Model/PercentsEmail.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PhoneNumberPut](docs/Model/PhoneNumberPut.md)
- [PlanInfo](docs/Model/PlanInfo.md)
- [PlanTiersObject](docs/Model/PlanTiersObject.md)
- [Provision](docs/Model/Provision.md)
- [ProvisionResponse](docs/Model/ProvisionResponse.md)
- [QueryParamObject](docs/Model/QueryParamObject.md)
- [ReportingLinks](docs/Model/ReportingLinks.md)
- [ReportingNext](docs/Model/ReportingNext.md)
- [ReportingsmsLinks](docs/Model/ReportingsmsLinks.md)
- [ReportingsmsNext](docs/Model/ReportingsmsNext.md)
- [ResendToNonOpenersInner](docs/Model/ResendToNonOpenersInner.md)
- [ResendToNonOpenersInput](docs/Model/ResendToNonOpenersInput.md)
- [ResendToNonOpenersObject](docs/Model/ResendToNonOpenersObject.md)
- [SSOUser](docs/Model/SSOUser.md)
- [SegmentData](docs/Model/SegmentData.md)
- [SegmentDetail](docs/Model/SegmentDetail.md)
- [SegmentMaster](docs/Model/SegmentMaster.md)
- [SegmentName](docs/Model/SegmentName.md)
- [SegmentsDTO](docs/Model/SegmentsDTO.md)
- [SendsTrackingActivitiesPage](docs/Model/SendsTrackingActivitiesPage.md)
- [SendsTrackingActivity](docs/Model/SendsTrackingActivity.md)
- [SmsCampaignSummariesPage](docs/Model/SmsCampaignSummariesPage.md)
- [SmsChannelConsentDetails](docs/Model/SmsChannelConsentDetails.md)
- [SmsEngagementHistoryInner](docs/Model/SmsEngagementHistoryInner.md)
- [StatsEmail](docs/Model/StatsEmail.md)
- [StatsEmailActivity](docs/Model/StatsEmailActivity.md)
- [StatsError](docs/Model/StatsError.md)
- [StreetAddress](docs/Model/StreetAddress.md)
- [StreetAddressPut](docs/Model/StreetAddressPut.md)
- [Tag](docs/Model/Tag.md)
- [TagAddRemoveContacts](docs/Model/TagAddRemoveContacts.md)
- [TagAddRemoveContactsExclude](docs/Model/TagAddRemoveContactsExclude.md)
- [TagAddRemoveContactsSource](docs/Model/TagAddRemoveContactsSource.md)
- [TagIdList500Limit](docs/Model/TagIdList500Limit.md)
- [TagPost](docs/Model/TagPost.md)
- [TagPut](docs/Model/TagPut.md)
- [Tags](docs/Model/Tags.md)
- [TagsActivityLinks](docs/Model/TagsActivityLinks.md)
- [TagsActivityLinksSelf](docs/Model/TagsActivityLinksSelf.md)
- [TagsLinks](docs/Model/TagsLinks.md)
- [TagsPagingLinks](docs/Model/TagsPagingLinks.md)
- [TierObject](docs/Model/TierObject.md)
- [TrackingActivitySmsChannelDTO](docs/Model/TrackingActivitySmsChannelDTO.md)
- [UniqueEmailCounts](docs/Model/UniqueEmailCounts.md)
- [UniqueSmsCounts](docs/Model/UniqueSmsCounts.md)
- [UserPrivilegesResourceInner](docs/Model/UserPrivilegesResourceInner.md)
- [WebhooksSubscriptionBody](docs/Model/WebhooksSubscriptionBody.md)
- [WebhooksSubscriptionCollectionInner](docs/Model/WebhooksSubscriptionCollectionInner.md)
- [WebhooksSubscriptionPutResp](docs/Model/WebhooksSubscriptionPutResp.md)
- [WebhooksSubscriptionResponse](docs/Model/WebhooksSubscriptionResponse.md)
- [WebhooksTestSend](docs/Model/WebhooksTestSend.md)

## Authorization

Authentication schemes defined for the API:
### oauth2_implicit

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://authz.constantcontact.com/oauth2/default/v1/authorize`
- **Scopes**: 
    - **contact_data**: Read or modify contact data.
    - **campaign_data**: Read or modify email campaign data.
    - **account_read**: Read account data.
    - **account_update**: Modify account data.

### oauth2_access_code

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://authz.constantcontact.com/oauth2/default/v1/authorize`
- **Scopes**: 
    - **contact_data**: Read or modify contact data.
    - **campaign_data**: Read or modify email campaign data.
    - **account_read**: Read account data.
    - **account_update**: Modify account data.

### ctctPartnerAuthorizer

- **Type**: API key
- **API key parameter name**: Unnamed
- **Location**: HTTP header


### api_key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0.2400`
    - Generator version: `7.6.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
