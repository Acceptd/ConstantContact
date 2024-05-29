<?php
/**
 * Provision
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Provision Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Provision implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Provision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_email' => 'string',
        'contact_phone' => 'string',
        'country_code' => 'string',
        'organization_name' => 'string',
        'organization_phone' => 'string',
        'state_code' => 'string',
        'time_zone_id' => 'string',
        'website' => 'string',
        'login_name' => 'string',
        'password' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'partner_account_id' => 'string',
        'billing_locale' => 'string',
        'managed_site_owner' => 'bool',
        'enable_single_billing' => 'bool',
        'gdpr_opt_out' => 'bool',
        'external_id' => 'string',
        'external_provider' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contact_email' => null,
        'contact_phone' => null,
        'country_code' => null,
        'organization_name' => null,
        'organization_phone' => null,
        'state_code' => null,
        'time_zone_id' => null,
        'website' => null,
        'login_name' => null,
        'password' => null,
        'first_name' => null,
        'last_name' => null,
        'partner_account_id' => null,
        'billing_locale' => null,
        'managed_site_owner' => null,
        'enable_single_billing' => null,
        'gdpr_opt_out' => null,
        'external_id' => null,
        'external_provider' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contact_email' => false,
        'contact_phone' => false,
        'country_code' => false,
        'organization_name' => false,
        'organization_phone' => false,
        'state_code' => false,
        'time_zone_id' => false,
        'website' => false,
        'login_name' => false,
        'password' => false,
        'first_name' => false,
        'last_name' => false,
        'partner_account_id' => false,
        'billing_locale' => false,
        'managed_site_owner' => false,
        'enable_single_billing' => false,
        'gdpr_opt_out' => false,
        'external_id' => false,
        'external_provider' => false
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
        'contact_email' => 'contact_email',
        'contact_phone' => 'contact_phone',
        'country_code' => 'country_code',
        'organization_name' => 'organization_name',
        'organization_phone' => 'organization_phone',
        'state_code' => 'state_code',
        'time_zone_id' => 'time_zone_id',
        'website' => 'website',
        'login_name' => 'login_name',
        'password' => 'password',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'partner_account_id' => 'partner_account_id',
        'billing_locale' => 'billing_locale',
        'managed_site_owner' => 'managed_site_owner',
        'enable_single_billing' => 'enable_single_billing',
        'gdpr_opt_out' => 'gdpr_opt_out',
        'external_id' => 'external_id',
        'external_provider' => 'external_provider'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_email' => 'setContactEmail',
        'contact_phone' => 'setContactPhone',
        'country_code' => 'setCountryCode',
        'organization_name' => 'setOrganizationName',
        'organization_phone' => 'setOrganizationPhone',
        'state_code' => 'setStateCode',
        'time_zone_id' => 'setTimeZoneId',
        'website' => 'setWebsite',
        'login_name' => 'setLoginName',
        'password' => 'setPassword',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'partner_account_id' => 'setPartnerAccountId',
        'billing_locale' => 'setBillingLocale',
        'managed_site_owner' => 'setManagedSiteOwner',
        'enable_single_billing' => 'setEnableSingleBilling',
        'gdpr_opt_out' => 'setGdprOptOut',
        'external_id' => 'setExternalId',
        'external_provider' => 'setExternalProvider'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_email' => 'getContactEmail',
        'contact_phone' => 'getContactPhone',
        'country_code' => 'getCountryCode',
        'organization_name' => 'getOrganizationName',
        'organization_phone' => 'getOrganizationPhone',
        'state_code' => 'getStateCode',
        'time_zone_id' => 'getTimeZoneId',
        'website' => 'getWebsite',
        'login_name' => 'getLoginName',
        'password' => 'getPassword',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'partner_account_id' => 'getPartnerAccountId',
        'billing_locale' => 'getBillingLocale',
        'managed_site_owner' => 'getManagedSiteOwner',
        'enable_single_billing' => 'getEnableSingleBilling',
        'gdpr_opt_out' => 'getGdprOptOut',
        'external_id' => 'getExternalId',
        'external_provider' => 'getExternalProvider'
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
        $this->setIfExists('contact_email', $data ?? [], null);
        $this->setIfExists('contact_phone', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('organization_phone', $data ?? [], null);
        $this->setIfExists('state_code', $data ?? [], null);
        $this->setIfExists('time_zone_id', $data ?? [], null);
        $this->setIfExists('website', $data ?? [], null);
        $this->setIfExists('login_name', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('partner_account_id', $data ?? [], null);
        $this->setIfExists('billing_locale', $data ?? [], null);
        $this->setIfExists('managed_site_owner', $data ?? [], null);
        $this->setIfExists('enable_single_billing', $data ?? [], null);
        $this->setIfExists('gdpr_opt_out', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('external_provider', $data ?? [], null);
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

        if ($this->container['contact_email'] === null) {
            $invalidProperties[] = "'contact_email' can't be null";
        }
        if ((mb_strlen($this->container['contact_email']) > 80)) {
            $invalidProperties[] = "invalid value for 'contact_email', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['contact_phone']) && (mb_strlen($this->container['contact_phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'contact_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['contact_phone']) && (mb_strlen($this->container['contact_phone']) < 5)) {
            $invalidProperties[] = "invalid value for 'contact_phone', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((mb_strlen($this->container['country_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['organization_phone']) && (mb_strlen($this->container['organization_phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'organization_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['organization_phone']) && (mb_strlen($this->container['organization_phone']) < 5)) {
            $invalidProperties[] = "invalid value for 'organization_phone', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['state_code'] === null) {
            $invalidProperties[] = "'state_code' can't be null";
        }
        if ($this->container['login_name'] === null) {
            $invalidProperties[] = "'login_name' can't be null";
        }
        if ((mb_strlen($this->container['login_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'login_name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['login_name']) < 6)) {
            $invalidProperties[] = "invalid value for 'login_name', the character length must be bigger than or equal to 6.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 80)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 6)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 6.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) < 2)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) < 2)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['partner_account_id']) && (mb_strlen($this->container['partner_account_id']) > 80)) {
            $invalidProperties[] = "invalid value for 'partner_account_id', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['external_provider']) && (mb_strlen($this->container['external_provider']) > 80)) {
            $invalidProperties[] = "invalid value for 'external_provider', the character length must be smaller than or equal to 80.";
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
     * Gets contact_email
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string $contact_email A valid email address to associate with the client account.
     *
     * @return self
     */
    public function setContactEmail($contact_email)
    {
        if (is_null($contact_email)) {
            throw new \InvalidArgumentException('non-nullable contact_email cannot be null');
        }
        if ((mb_strlen($contact_email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $contact_email when calling Provision., must be smaller than or equal to 80.');
        }

        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets contact_phone
     *
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    /**
     * Sets contact_phone
     *
     * @param string|null $contact_phone The contact phone number to associate with the client account.
     *
     * @return self
     */
    public function setContactPhone($contact_phone)
    {
        if (is_null($contact_phone)) {
            throw new \InvalidArgumentException('non-nullable contact_phone cannot be null');
        }
        if ((mb_strlen($contact_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $contact_phone when calling Provision., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($contact_phone) < 5)) {
            throw new \InvalidArgumentException('invalid length for $contact_phone when calling Provision., must be bigger than or equal to 5.');
        }

        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The two-letter country code (ISO 3166-1 code) that specifies the country in which the client resides.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        if ((mb_strlen($country_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Provision., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Provision., must be bigger than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string|null $organization_name The name of organization that identifies the client account.
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        if (is_null($organization_name)) {
            throw new \InvalidArgumentException('non-nullable organization_name cannot be null');
        }
        if ((mb_strlen($organization_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $organization_name when calling Provision., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($organization_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $organization_name when calling Provision., must be bigger than or equal to 1.');
        }

        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets organization_phone
     *
     * @return string|null
     */
    public function getOrganizationPhone()
    {
        return $this->container['organization_phone'];
    }

    /**
     * Sets organization_phone
     *
     * @param string|null $organization_phone The organization phone number. To set the organization phone number using the user interface, select <b>My Settings</b> and in the <b>Organization Information</b> section, select <b>Edit Organization Information</b>.
     *
     * @return self
     */
    public function setOrganizationPhone($organization_phone)
    {
        if (is_null($organization_phone)) {
            throw new \InvalidArgumentException('non-nullable organization_phone cannot be null');
        }
        if ((mb_strlen($organization_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $organization_phone when calling Provision., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($organization_phone) < 5)) {
            throw new \InvalidArgumentException('invalid length for $organization_phone when calling Provision., must be bigger than or equal to 5.');
        }

        $this->container['organization_phone'] = $organization_phone;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string $state_code The two-letter state code that represents the US state (<code>country_code</code> is <code>US</code> ) or Canadian province (<code>country_code</code> is <code>CA</code>) where the client's organization is physically located. Leave the <code>state_code</code> blank for non-US states and Canadian provinces.
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        if (is_null($state_code)) {
            throw new \InvalidArgumentException('non-nullable state_code cannot be null');
        }
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string|null
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string|null $time_zone_id The offical time zone to use to represent the physical location associated with the client account.
     *
     * @return self
     */
    public function setTimeZoneId($time_zone_id)
    {
        if (is_null($time_zone_id)) {
            throw new \InvalidArgumentException('non-nullable time_zone_id cannot be null');
        }
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website The client's website URL. Specifying the website URL eliminates the need for clients to provide that information. Requires a valid URL starting with http:// or https://.
     *
     * @return self
     */
    public function setWebsite($website)
    {
        if (is_null($website)) {
            throw new \InvalidArgumentException('non-nullable website cannot be null');
        }
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets login_name
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->container['login_name'];
    }

    /**
     * Sets login_name
     *
     * @param string $login_name A unique login name to associate with the client account. The name must only contain alphanumeric characters and '-', '_', '@','.','+'.
     *
     * @return self
     */
    public function setLoginName($login_name)
    {
        if (is_null($login_name)) {
            throw new \InvalidArgumentException('non-nullable login_name cannot be null');
        }
        if ((mb_strlen($login_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $login_name when calling Provision., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($login_name) < 6)) {
            throw new \InvalidArgumentException('invalid length for $login_name when calling Provision., must be bigger than or equal to 6.');
        }

        $this->container['login_name'] = $login_name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password Required if not using Single Sign On (SSO) or external authenticator. The password to associate with the client account. Passwords must be a minimum of six characters in length and have no spaces. The password is not returned in the response payload for security reasons. If using SSO authentication, use <code>external_provider</code> and <code>external_id</code> instead of <code>password</code>.
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        if ((mb_strlen($password) > 80)) {
            throw new \InvalidArgumentException('invalid length for $password when calling Provision., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($password) < 6)) {
            throw new \InvalidArgumentException('invalid length for $password when calling Provision., must be bigger than or equal to 6.');
        }

        $this->container['password'] = $password;

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
     * @param string|null $first_name The client account owner's first name.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        if ((mb_strlen($first_name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Provision., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($first_name) < 2)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Provision., must be bigger than or equal to 2.');
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
     * @param string|null $last_name The client account owner's last name.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        if ((mb_strlen($last_name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Provision., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($last_name) < 2)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Provision., must be bigger than or equal to 2.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets partner_account_id
     *
     * @return string|null
     */
    public function getPartnerAccountId()
    {
        return $this->container['partner_account_id'];
    }

    /**
     * Sets partner_account_id
     *
     * @param string|null $partner_account_id The unique client account identifier that partners define and use for billing and reporting purposes.
     *
     * @return self
     */
    public function setPartnerAccountId($partner_account_id)
    {
        if (is_null($partner_account_id)) {
            throw new \InvalidArgumentException('non-nullable partner_account_id cannot be null');
        }
        if ((mb_strlen($partner_account_id) > 80)) {
            throw new \InvalidArgumentException('invalid length for $partner_account_id when calling Provision., must be smaller than or equal to 80.');
        }

        $this->container['partner_account_id'] = $partner_account_id;

        return $this;
    }

    /**
     * Gets billing_locale
     *
     * @return string|null
     */
    public function getBillingLocale()
    {
        return $this->container['billing_locale'];
    }

    /**
     * Sets billing_locale
     *
     * @param string|null $billing_locale The currency to use when billing the client account. Valid values are: <code>en_US</code> (default, US Dollars) or <code>en_GB</code> (British Pounds).
     *
     * @return self
     */
    public function setBillingLocale($billing_locale)
    {
        if (is_null($billing_locale)) {
            throw new \InvalidArgumentException('non-nullable billing_locale cannot be null');
        }
        $this->container['billing_locale'] = $billing_locale;

        return $this;
    }

    /**
     * Gets managed_site_owner
     *
     * @return bool|null
     */
    public function getManagedSiteOwner()
    {
        return $this->container['managed_site_owner'];
    }

    /**
     * Sets managed_site_owner
     *
     * @param bool|null $managed_site_owner By default, if the client account is setup as a managed account <code>managed_site_owner</code> is automatically set to <code>true</code> and attempting to override the setting with <code>false</code> is ignored. This helps to avoid getting an account into an unknown state.
     *
     * @return self
     */
    public function setManagedSiteOwner($managed_site_owner)
    {
        if (is_null($managed_site_owner)) {
            throw new \InvalidArgumentException('non-nullable managed_site_owner cannot be null');
        }
        $this->container['managed_site_owner'] = $managed_site_owner;

        return $this;
    }

    /**
     * Gets enable_single_billing
     *
     * @return bool|null
     */
    public function getEnableSingleBilling()
    {
        return $this->container['enable_single_billing'];
    }

    /**
     * Sets enable_single_billing
     *
     * @param bool|null $enable_single_billing If a partner account is setup to allow for single billing and the <code>managed_site_owner</code> property is set to <code>true</code>, use this property to enable the single billing feature for the client account. See your account manager for more information.
     *
     * @return self
     */
    public function setEnableSingleBilling($enable_single_billing)
    {
        if (is_null($enable_single_billing)) {
            throw new \InvalidArgumentException('non-nullable enable_single_billing cannot be null');
        }
        $this->container['enable_single_billing'] = $enable_single_billing;

        return $this;
    }

    /**
     * Gets gdpr_opt_out
     *
     * @return bool|null
     */
    public function getGdprOptOut()
    {
        return $this->container['gdpr_opt_out'];
    }

    /**
     * Sets gdpr_opt_out
     *
     * @param bool|null $gdpr_opt_out When creating accounts for users who have opted-out of any marketing communications, set  the <code> gdpr_opt_out</code>  to <code>true</code>  so that Constant Contact does not send any marketing communications to the account.
     *
     * @return self
     */
    public function setGdprOptOut($gdpr_opt_out)
    {
        if (is_null($gdpr_opt_out)) {
            throw new \InvalidArgumentException('non-nullable gdpr_opt_out cannot be null');
        }
        $this->container['gdpr_opt_out'] = $gdpr_opt_out;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id The ID used to uniquely identify the client account for the external authenticator. Do not use the <code>password</code> property when using an external authenticator.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        if ((mb_strlen($external_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling Provision., must be smaller than or equal to 255.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets external_provider
     *
     * @return string|null
     */
    public function getExternalProvider()
    {
        return $this->container['external_provider'];
    }

    /**
     * Sets external_provider
     *
     * @param string|null $external_provider The name of the provider who externally authenticates this customer. For example, PayPal or Yahoo. Do not use the <code>password</code> property when using an external authenticator.
     *
     * @return self
     */
    public function setExternalProvider($external_provider)
    {
        if (is_null($external_provider)) {
            throw new \InvalidArgumentException('non-nullable external_provider cannot be null');
        }
        if ((mb_strlen($external_provider) > 80)) {
            throw new \InvalidArgumentException('invalid length for $external_provider when calling Provision., must be smaller than or equal to 80.');
        }

        $this->container['external_provider'] = $external_provider;

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

