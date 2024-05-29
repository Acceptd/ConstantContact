<?php
/**
 * ContactResource
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AppConnect V3
 *
 * The Constant Contact, Inc. V3 public API, for building integrations with Constant Contact, the leading small-business email marketing platform.
 *
 * The version of the OpenAPI document: 3.0.2400
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ConstantContact\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ContactResource Class Doc Comment
 *
 * @category Class
 * @description Use this endpoint to retrieve (GET), update (PUT), or DELETE an existing contact resource specified using the &lt;code&gt;contact_id&lt;/code&gt; path parameter.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactResource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_id' => 'string',
        'email_address' => '\OpenAPI\Client\Model\EmailAddress',
        'first_name' => 'string',
        'last_name' => 'string',
        'job_title' => 'string',
        'company_name' => 'string',
        'birthday_month' => 'int',
        'birthday_day' => 'int',
        'anniversary' => 'string',
        'update_source' => 'string',
        'create_source' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'custom_fields' => '\OpenAPI\Client\Model\ContactCustomField[]',
        'phone_numbers' => '\OpenAPI\Client\Model\PhoneNumber[]',
        'street_addresses' => '\OpenAPI\Client\Model\StreetAddress[]',
        'list_memberships' => 'string[]',
        'taggings' => 'string[]',
        'notes' => '\OpenAPI\Client\Model\Note[]',
        'sms_channel' => '\OpenAPI\Client\Model\ContactResourceSmsChannel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contact_id' => 'uuid',
        'email_address' => null,
        'first_name' => null,
        'last_name' => null,
        'job_title' => null,
        'company_name' => null,
        'birthday_month' => null,
        'birthday_day' => null,
        'anniversary' => null,
        'update_source' => null,
        'create_source' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'deleted_at' => 'date',
        'custom_fields' => null,
        'phone_numbers' => null,
        'street_addresses' => null,
        'list_memberships' => 'uuid',
        'taggings' => 'uuid',
        'notes' => null,
        'sms_channel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contact_id' => false,
        'email_address' => false,
        'first_name' => false,
        'last_name' => false,
        'job_title' => false,
        'company_name' => false,
        'birthday_month' => false,
        'birthday_day' => false,
        'anniversary' => false,
        'update_source' => false,
        'create_source' => false,
        'created_at' => false,
        'updated_at' => false,
        'deleted_at' => false,
        'custom_fields' => false,
        'phone_numbers' => false,
        'street_addresses' => false,
        'list_memberships' => false,
        'taggings' => false,
        'notes' => false,
        'sms_channel' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'contact_id' => 'contact_id',
        'email_address' => 'email_address',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'job_title' => 'job_title',
        'company_name' => 'company_name',
        'birthday_month' => 'birthday_month',
        'birthday_day' => 'birthday_day',
        'anniversary' => 'anniversary',
        'update_source' => 'update_source',
        'create_source' => 'create_source',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
        'custom_fields' => 'custom_fields',
        'phone_numbers' => 'phone_numbers',
        'street_addresses' => 'street_addresses',
        'list_memberships' => 'list_memberships',
        'taggings' => 'taggings',
        'notes' => 'notes',
        'sms_channel' => 'sms_channel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'email_address' => 'setEmailAddress',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'job_title' => 'setJobTitle',
        'company_name' => 'setCompanyName',
        'birthday_month' => 'setBirthdayMonth',
        'birthday_day' => 'setBirthdayDay',
        'anniversary' => 'setAnniversary',
        'update_source' => 'setUpdateSource',
        'create_source' => 'setCreateSource',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt',
        'custom_fields' => 'setCustomFields',
        'phone_numbers' => 'setPhoneNumbers',
        'street_addresses' => 'setStreetAddresses',
        'list_memberships' => 'setListMemberships',
        'taggings' => 'setTaggings',
        'notes' => 'setNotes',
        'sms_channel' => 'setSmsChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'email_address' => 'getEmailAddress',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'job_title' => 'getJobTitle',
        'company_name' => 'getCompanyName',
        'birthday_month' => 'getBirthdayMonth',
        'birthday_day' => 'getBirthdayDay',
        'anniversary' => 'getAnniversary',
        'update_source' => 'getUpdateSource',
        'create_source' => 'getCreateSource',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt',
        'custom_fields' => 'getCustomFields',
        'phone_numbers' => 'getPhoneNumbers',
        'street_addresses' => 'getStreetAddresses',
        'list_memberships' => 'getListMemberships',
        'taggings' => 'getTaggings',
        'notes' => 'getNotes',
        'sms_channel' => 'getSmsChannel'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('contact_id', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('job_title', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('birthday_month', $data ?? [], null);
        $this->setIfExists('birthday_day', $data ?? [], null);
        $this->setIfExists('anniversary', $data ?? [], null);
        $this->setIfExists('update_source', $data ?? [], null);
        $this->setIfExists('create_source', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('phone_numbers', $data ?? [], null);
        $this->setIfExists('street_addresses', $data ?? [], null);
        $this->setIfExists('list_memberships', $data ?? [], null);
        $this->setIfExists('taggings', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('sms_channel', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['job_title']) && (mb_strlen($this->container['job_title']) > 50)) {
            $invalidProperties[] = "invalid value for 'job_title', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['anniversary']) && (mb_strlen($this->container['anniversary']) > 10)) {
            $invalidProperties[] = "invalid value for 'anniversary', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['custom_fields']) && (count($this->container['custom_fields']) > 25)) {
            $invalidProperties[] = "invalid value for 'custom_fields', number of items must be less than or equal to 25.";
        }

        if (!is_null($this->container['phone_numbers']) && (count($this->container['phone_numbers']) > 3)) {
            $invalidProperties[] = "invalid value for 'phone_numbers', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['street_addresses']) && (count($this->container['street_addresses']) > 3)) {
            $invalidProperties[] = "invalid value for 'street_addresses', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['list_memberships']) && (count($this->container['list_memberships']) > 50)) {
            $invalidProperties[] = "invalid value for 'list_memberships', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['taggings']) && (count($this->container['taggings']) > 50)) {
            $invalidProperties[] = "invalid value for 'taggings', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['notes']) && (count($this->container['notes']) > 150)) {
            $invalidProperties[] = "invalid value for 'notes', number of items must be less than or equal to 150.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id Unique ID for each contact resource
     *
     * @return self
     */
    public function setContactId($contact_id)
    {
        if (is_null($contact_id)) {
            throw new \InvalidArgumentException('non-nullable contact_id cannot be null');
        }
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return \OpenAPI\Client\Model\EmailAddress|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param \OpenAPI\Client\Model\EmailAddress|null $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The first name of the contact.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        if ((mb_strlen($first_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling ContactResource., must be smaller than or equal to 50.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The last name of the contact.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        if ((mb_strlen($last_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling ContactResource., must be smaller than or equal to 50.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string|null $job_title The job title of the contact.
     *
     * @return self
     */
    public function setJobTitle($job_title)
    {
        if (is_null($job_title)) {
            throw new \InvalidArgumentException('non-nullable job_title cannot be null');
        }
        if ((mb_strlen($job_title) > 50)) {
            throw new \InvalidArgumentException('invalid length for $job_title when calling ContactResource., must be smaller than or equal to 50.');
        }

        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name The name of the company where the contact works.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        if ((mb_strlen($company_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $company_name when calling ContactResource., must be smaller than or equal to 50.');
        }

        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets birthday_month
     *
     * @return int|null
     */
    public function getBirthdayMonth()
    {
        return $this->container['birthday_month'];
    }

    /**
     * Sets birthday_month
     *
     * @param int|null $birthday_month The month value for the contact's birthday. Valid values are from 1 through 12. You must use this property with <code>birthday_month</code>.
     *
     * @return self
     */
    public function setBirthdayMonth($birthday_month)
    {
        if (is_null($birthday_month)) {
            throw new \InvalidArgumentException('non-nullable birthday_month cannot be null');
        }
        $this->container['birthday_month'] = $birthday_month;

        return $this;
    }

    /**
     * Gets birthday_day
     *
     * @return int|null
     */
    public function getBirthdayDay()
    {
        return $this->container['birthday_day'];
    }

    /**
     * Sets birthday_day
     *
     * @param int|null $birthday_day The day value for the contact's birthday. Valid values are from 1 through 12. You must use this property with <code>birthday_day</code>.
     *
     * @return self
     */
    public function setBirthdayDay($birthday_day)
    {
        if (is_null($birthday_day)) {
            throw new \InvalidArgumentException('non-nullable birthday_day cannot be null');
        }
        $this->container['birthday_day'] = $birthday_day;

        return $this;
    }

    /**
     * Gets anniversary
     *
     * @return string|null
     */
    public function getAnniversary()
    {
        return $this->container['anniversary'];
    }

    /**
     * Sets anniversary
     *
     * @param string|null $anniversary The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY.
     *
     * @return self
     */
    public function setAnniversary($anniversary)
    {
        if (is_null($anniversary)) {
            throw new \InvalidArgumentException('non-nullable anniversary cannot be null');
        }
        if ((mb_strlen($anniversary) > 10)) {
            throw new \InvalidArgumentException('invalid length for $anniversary when calling ContactResource., must be smaller than or equal to 10.');
        }

        $this->container['anniversary'] = $anniversary;

        return $this;
    }

    /**
     * Gets update_source
     *
     * @return string|null
     */
    public function getUpdateSource()
    {
        return $this->container['update_source'];
    }

    /**
     * Sets update_source
     *
     * @param string|null $update_source Identifies who last updated the contact; valid values are  <code>Contact</code> or <code>Account</code>.
     *
     * @return self
     */
    public function setUpdateSource($update_source)
    {
        if (is_null($update_source)) {
            throw new \InvalidArgumentException('non-nullable update_source cannot be null');
        }
        $this->container['update_source'] = $update_source;

        return $this;
    }

    /**
     * Gets create_source
     *
     * @return string|null
     */
    public function getCreateSource()
    {
        return $this->container['create_source'];
    }

    /**
     * Sets create_source
     *
     * @param string|null $create_source Describes who added the contact; valid values are <code>Contact</code> or <code>Account</code>. Your integration must accurately identify <code>create_source</code> for compliance reasons; value is set when contact is created.
     *
     * @return self
     */
    public function setCreateSource($create_source)
    {
        if (is_null($create_source)) {
            throw new \InvalidArgumentException('non-nullable create_source cannot be null');
        }
        $this->container['create_source'] = $create_source;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at System generated date and time that the resource was created, in ISO-8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at System generated date and time that the contact was last updated, in ISO-8601 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at For deleted contacts (<code>email_address</code> contains <code>opt_out_source</code> and <code>opt_out_date</code>), shows the date of deletion.
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        if (is_null($deleted_at)) {
            throw new \InvalidArgumentException('non-nullable deleted_at cannot be null');
        }
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \OpenAPI\Client\Model\ContactCustomField[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \OpenAPI\Client\Model\ContactCustomField[]|null $custom_fields Array of up to 25 <code>custom_field</code> subresources.
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }

        if ((count($custom_fields) > 25)) {
            throw new \InvalidArgumentException('invalid value for $custom_fields when calling ContactResource., number of items must be less than or equal to 25.');
        }
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \OpenAPI\Client\Model\PhoneNumber[]|null
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \OpenAPI\Client\Model\PhoneNumber[]|null $phone_numbers Array of up to 3 <code>phone_numbers</code> subresources.
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {
        if (is_null($phone_numbers)) {
            throw new \InvalidArgumentException('non-nullable phone_numbers cannot be null');
        }

        if ((count($phone_numbers) > 3)) {
            throw new \InvalidArgumentException('invalid value for $phone_numbers when calling ContactResource., number of items must be less than or equal to 3.');
        }
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets street_addresses
     *
     * @return \OpenAPI\Client\Model\StreetAddress[]|null
     */
    public function getStreetAddresses()
    {
        return $this->container['street_addresses'];
    }

    /**
     * Sets street_addresses
     *
     * @param \OpenAPI\Client\Model\StreetAddress[]|null $street_addresses Array of up to 3 <code>street_addresses</code> subresources.
     *
     * @return self
     */
    public function setStreetAddresses($street_addresses)
    {
        if (is_null($street_addresses)) {
            throw new \InvalidArgumentException('non-nullable street_addresses cannot be null');
        }

        if ((count($street_addresses) > 3)) {
            throw new \InvalidArgumentException('invalid value for $street_addresses when calling ContactResource., number of items must be less than or equal to 3.');
        }
        $this->container['street_addresses'] = $street_addresses;

        return $this;
    }

    /**
     * Gets list_memberships
     *
     * @return string[]|null
     */
    public function getListMemberships()
    {
        return $this->container['list_memberships'];
    }

    /**
     * Sets list_memberships
     *
     * @param string[]|null $list_memberships Array of up to 50 <code>list_ids</code> to which the contact is subscribed.
     *
     * @return self
     */
    public function setListMemberships($list_memberships)
    {
        if (is_null($list_memberships)) {
            throw new \InvalidArgumentException('non-nullable list_memberships cannot be null');
        }

        if ((count($list_memberships) > 50)) {
            throw new \InvalidArgumentException('invalid value for $list_memberships when calling ContactResource., number of items must be less than or equal to 50.');
        }
        $this->container['list_memberships'] = $list_memberships;

        return $this;
    }

    /**
     * Gets taggings
     *
     * @return string[]|null
     */
    public function getTaggings()
    {
        return $this->container['taggings'];
    }

    /**
     * Sets taggings
     *
     * @param string[]|null $taggings Array of tags (<code>tag_id</code>) assigned to the contact, up to a maximum of 50.
     *
     * @return self
     */
    public function setTaggings($taggings)
    {
        if (is_null($taggings)) {
            throw new \InvalidArgumentException('non-nullable taggings cannot be null');
        }

        if ((count($taggings) > 50)) {
            throw new \InvalidArgumentException('invalid value for $taggings when calling ContactResource., number of items must be less than or equal to 50.');
        }
        $this->container['taggings'] = $taggings;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \OpenAPI\Client\Model\Note[]|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \OpenAPI\Client\Model\Note[]|null $notes An array of notes about the contact listed by most recent note first.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }

        if ((count($notes) > 150)) {
            throw new \InvalidArgumentException('invalid value for $notes when calling ContactResource., number of items must be less than or equal to 150.');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets sms_channel
     *
     * @return \OpenAPI\Client\Model\ContactResourceSmsChannel|null
     */
    public function getSmsChannel()
    {
        return $this->container['sms_channel'];
    }

    /**
     * Sets sms_channel
     *
     * @param \OpenAPI\Client\Model\ContactResourceSmsChannel|null $sms_channel sms_channel
     *
     * @return self
     */
    public function setSmsChannel($sms_channel)
    {
        if (is_null($sms_channel)) {
            throw new \InvalidArgumentException('non-nullable sms_channel cannot be null');
        }
        $this->container['sms_channel'] = $sms_channel;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


