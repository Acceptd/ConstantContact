<?php
/**
 * AccountEmailsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ConstantContact\Client
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
use ConstantContact\Client\ObjectSerializer;

/**
 * AccountEmailsInner Class Doc Comment
 *
 * @category Class
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountEmailsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountEmails_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email_address' => 'string',
        'email_id' => 'int',
        'confirm_status' => 'string',
        'confirm_time' => '\DateTime',
        'confirm_source_type' => 'string',
        'roles' => 'string[]',
        'pending_roles' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email_address' => null,
        'email_id' => 'int64',
        'confirm_status' => null,
        'confirm_time' => 'date-time',
        'confirm_source_type' => null,
        'roles' => null,
        'pending_roles' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email_address' => false,
        'email_id' => false,
        'confirm_status' => false,
        'confirm_time' => false,
        'confirm_source_type' => false,
        'roles' => false,
        'pending_roles' => false
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
        'email_address' => 'email_address',
        'email_id' => 'email_id',
        'confirm_status' => 'confirm_status',
        'confirm_time' => 'confirm_time',
        'confirm_source_type' => 'confirm_source_type',
        'roles' => 'roles',
        'pending_roles' => 'pending_roles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_address' => 'setEmailAddress',
        'email_id' => 'setEmailId',
        'confirm_status' => 'setConfirmStatus',
        'confirm_time' => 'setConfirmTime',
        'confirm_source_type' => 'setConfirmSourceType',
        'roles' => 'setRoles',
        'pending_roles' => 'setPendingRoles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_address' => 'getEmailAddress',
        'email_id' => 'getEmailId',
        'confirm_status' => 'getConfirmStatus',
        'confirm_time' => 'getConfirmTime',
        'confirm_source_type' => 'getConfirmSourceType',
        'roles' => 'getRoles',
        'pending_roles' => 'getPendingRoles'
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
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('email_id', $data ?? [], null);
        $this->setIfExists('confirm_status', $data ?? [], null);
        $this->setIfExists('confirm_time', $data ?? [], null);
        $this->setIfExists('confirm_source_type', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('pending_roles', $data ?? [], null);
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

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 80)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['email_id']) && ($this->container['email_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'email_id', must be bigger than or equal to 1.";
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
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address An email address associated with a Constant Contact account owner.
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        if ((mb_strlen($email_address) > 80)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling AccountEmailsInner., must be smaller than or equal to 80.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets email_id
     *
     * @return int|null
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param int|null $email_id The unique ID for an email address in a Constant Contact account.
     *
     * @return self
     */
    public function setEmailId($email_id)
    {
        if (is_null($email_id)) {
            throw new \InvalidArgumentException('non-nullable email_id cannot be null');
        }

        if (($email_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $email_id when calling AccountEmailsInner., must be bigger than or equal to 1.');
        }

        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets confirm_status
     *
     * @return string|null
     */
    public function getConfirmStatus()
    {
        return $this->container['confirm_status'];
    }

    /**
     * Sets confirm_status
     *
     * @param string|null $confirm_status The confirmation status of the account email address. When you add a new email address to an account, Constant Contact automatically sends an email to that address with a link to confirm it. You can use any account email address with a <code>CONFIRMED</code> status to create an email campaign.
     *
     * @return self
     */
    public function setConfirmStatus($confirm_status)
    {
        if (is_null($confirm_status)) {
            throw new \InvalidArgumentException('non-nullable confirm_status cannot be null');
        }
        $this->container['confirm_status'] = $confirm_status;

        return $this;
    }

    /**
     * Gets confirm_time
     *
     * @return \DateTime|null
     */
    public function getConfirmTime()
    {
        return $this->container['confirm_time'];
    }

    /**
     * Sets confirm_time
     *
     * @param \DateTime|null $confirm_time The date that the email address changed to <code>CONFIRMED</code> status in ISO-8601 format.
     *
     * @return self
     */
    public function setConfirmTime($confirm_time)
    {
        if (is_null($confirm_time)) {
            throw new \InvalidArgumentException('non-nullable confirm_time cannot be null');
        }
        $this->container['confirm_time'] = $confirm_time;

        return $this;
    }

    /**
     * Gets confirm_source_type
     *
     * @return string|null
     */
    public function getConfirmSourceType()
    {
        return $this->container['confirm_source_type'];
    }

    /**
     * Sets confirm_source_type
     *
     * @param string|null $confirm_source_type Describes who confirmed the email address. Valid values are:   <ul>   <li>SITE_OWNER — The Constant Contact account owner confirmed the email address.</li>   <li>SUPPORT — Constant Contact support staff confirmed the email address.</li>   <li>FORCEVERIFY — Constant Contact confirmed the email address without sending a confirmation email.</li>   <li>PARTNER — A Constant Contact partner confirmed the email address.</li>   </ul>
     *
     * @return self
     */
    public function setConfirmSourceType($confirm_source_type)
    {
        if (is_null($confirm_source_type)) {
            throw new \InvalidArgumentException('non-nullable confirm_source_type cannot be null');
        }
        $this->container['confirm_source_type'] = $confirm_source_type;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles Specifies the current role of a confirmed email address in an account. Each email address can have multiple roles or no role. Possible role values are: <ul> <li>CONTACT — The contact email for the Constant Contact account owner. Each account can only have one <code>CONTACT</code> role email.</li> <li>BILLING — The billing address for the Constant Contact account. Each account can only have one <code>BILLING</code> role email.</li> <li>JOURNALING — An email address that Constant Contact forwards all sent email campaigns to as part of the partner journaling compliance feature.</li> <li>REPLY_TO — The contact email used in the email campaign signature. Each account can only have one <code>REPLY_TO</code> role email.</li> <li>OTHER — An email address that does not fit into the other categories.</li> </ul> You can use any confirmed email address in the email campaign <code>from_email</code> and <code>reply_to_email</code> headers.
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets pending_roles
     *
     * @return string[]|null
     */
    public function getPendingRoles()
    {
        return $this->container['pending_roles'];
    }

    /**
     * Sets pending_roles
     *
     * @param string[]|null $pending_roles The planned role for an unconfirmed email address. Possible role values are: <ul> <li>CONTACT — The contact email for the Constant Contact account owner. Each account can only have one <code>CONTACT</code> role email.</li> <li>BILLING — The billing address for the Constant Contact account. Each account can only have one <code>BILLING</code> role email.</li> <li>JOURNALING — The email address that Constant Contact forwards all sent email campaigns to as part of the partner journaling compliance feature.</li> <li>REPLY_TO — The contact email used in the email campaign signature. Each account can only have one <code>REPLY_TO</code> role email. </li> <li>OTHER — An email address that does not fit into the other categories.</li> </ul>
     *
     * @return self
     */
    public function setPendingRoles($pending_roles)
    {
        if (is_null($pending_roles)) {
            throw new \InvalidArgumentException('non-nullable pending_roles cannot be null');
        }
        $this->container['pending_roles'] = $pending_roles;

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


