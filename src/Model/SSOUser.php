<?php
/**
 * SSOUser
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
 * SSOUser Class Doc Comment
 *
 * @category Class
 * @description Specify client account user&#39;s details. All fields are required.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SSOUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SSOUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'role_name' => 'string',
        'contact_email' => 'string',
        'login_name' => 'string',
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
        'first_name' => null,
        'last_name' => null,
        'role_name' => null,
        'contact_email' => null,
        'login_name' => null,
        'external_id' => null,
        'external_provider' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'first_name' => false,
        'last_name' => false,
        'role_name' => false,
        'contact_email' => false,
        'login_name' => false,
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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'role_name' => 'role_name',
        'contact_email' => 'contact_email',
        'login_name' => 'login_name',
        'external_id' => 'external_id',
        'external_provider' => 'external_provider'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'role_name' => 'setRoleName',
        'contact_email' => 'setContactEmail',
        'login_name' => 'setLoginName',
        'external_id' => 'setExternalId',
        'external_provider' => 'setExternalProvider'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'role_name' => 'getRoleName',
        'contact_email' => 'getContactEmail',
        'login_name' => 'getLoginName',
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
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('role_name', $data ?? [], null);
        $this->setIfExists('contact_email', $data ?? [], null);
        $this->setIfExists('login_name', $data ?? [], null);
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

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['role_name'] === null) {
            $invalidProperties[] = "'role_name' can't be null";
        }
        if ($this->container['contact_email'] === null) {
            $invalidProperties[] = "'contact_email' can't be null";
        }
        if ((mb_strlen($this->container['contact_email']) > 80)) {
            $invalidProperties[] = "invalid value for 'contact_email', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['login_name'] === null) {
            $invalidProperties[] = "'login_name' can't be null";
        }
        if ((mb_strlen($this->container['login_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'login_name', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ((mb_strlen($this->container['external_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['external_provider'] === null) {
            $invalidProperties[] = "'external_provider' can't be null";
        }
        if ((mb_strlen($this->container['external_provider']) > 80)) {
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name The client account user's first name.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        if ((mb_strlen($first_name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling SSOUser., must be smaller than or equal to 80.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name The client account user's last name.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        if ((mb_strlen($last_name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling SSOUser., must be smaller than or equal to 80.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets role_name
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     *
     * @param string $role_name The role (<code>account_manager</code> or <code>campaign_creator</code>) to assign the client account user.
     *
     * @return self
     */
    public function setRoleName($role_name)
    {
        if (is_null($role_name)) {
            throw new \InvalidArgumentException('non-nullable role_name cannot be null');
        }
        $this->container['role_name'] = $role_name;

        return $this;
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
     * @param string $contact_email The unique email address to associate with the new client account user.
     *
     * @return self
     */
    public function setContactEmail($contact_email)
    {
        if (is_null($contact_email)) {
            throw new \InvalidArgumentException('non-nullable contact_email cannot be null');
        }
        if ((mb_strlen($contact_email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $contact_email when calling SSOUser., must be smaller than or equal to 80.');
        }

        $this->container['contact_email'] = $contact_email;

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
     * @param string $login_name The login name to associate with the new client account user.
     *
     * @return self
     */
    public function setLoginName($login_name)
    {
        if (is_null($login_name)) {
            throw new \InvalidArgumentException('non-nullable login_name cannot be null');
        }
        if ((mb_strlen($login_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $login_name when calling SSOUser., must be smaller than or equal to 50.');
        }

        $this->container['login_name'] = $login_name;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id The unique ID used to identify the client account user to the external authenticator.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        if ((mb_strlen($external_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling SSOUser., must be smaller than or equal to 255.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets external_provider
     *
     * @return string
     */
    public function getExternalProvider()
    {
        return $this->container['external_provider'];
    }

    /**
     * Sets external_provider
     *
     * @param string $external_provider The unique name used to identify the external provider used to authenticate the client account user. For a list of external providers, contact the Constant Contact Partner Team.
     *
     * @return self
     */
    public function setExternalProvider($external_provider)
    {
        if (is_null($external_provider)) {
            throw new \InvalidArgumentException('non-nullable external_provider cannot be null');
        }
        if ((mb_strlen($external_provider) > 80)) {
            throw new \InvalidArgumentException('invalid length for $external_provider when calling SSOUser., must be smaller than or equal to 80.');
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


