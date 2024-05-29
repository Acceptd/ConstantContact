<?php
/**
 * EmailAddress
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
use 'ConstantContact\Client\ObjectSerializer;

/**
 * EmailAddress Class Doc Comment
 *
 * @category Class
 * @description A contact subresource describing the contact&#39;s email address.
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'permission_to_send' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'opt_in_source' => 'string',
        'opt_in_date' => '\DateTime',
        'opt_out_source' => 'string',
        'opt_out_date' => '\DateTime',
        'opt_out_reason' => 'string',
        'confirm_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'permission_to_send' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'opt_in_source' => null,
        'opt_in_date' => 'date-time',
        'opt_out_source' => null,
        'opt_out_date' => 'date-time',
        'opt_out_reason' => null,
        'confirm_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
        'permission_to_send' => false,
        'created_at' => false,
        'updated_at' => false,
        'opt_in_source' => false,
        'opt_in_date' => false,
        'opt_out_source' => false,
        'opt_out_date' => false,
        'opt_out_reason' => false,
        'confirm_status' => false
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
        'address' => 'address',
        'permission_to_send' => 'permission_to_send',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'opt_in_source' => 'opt_in_source',
        'opt_in_date' => 'opt_in_date',
        'opt_out_source' => 'opt_out_source',
        'opt_out_date' => 'opt_out_date',
        'opt_out_reason' => 'opt_out_reason',
        'confirm_status' => 'confirm_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'permission_to_send' => 'setPermissionToSend',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'opt_in_source' => 'setOptInSource',
        'opt_in_date' => 'setOptInDate',
        'opt_out_source' => 'setOptOutSource',
        'opt_out_date' => 'setOptOutDate',
        'opt_out_reason' => 'setOptOutReason',
        'confirm_status' => 'setConfirmStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'permission_to_send' => 'getPermissionToSend',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'opt_in_source' => 'getOptInSource',
        'opt_in_date' => 'getOptInDate',
        'opt_out_source' => 'getOptOutSource',
        'opt_out_date' => 'getOptOutDate',
        'opt_out_reason' => 'getOptOutReason',
        'confirm_status' => 'getConfirmStatus'
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('permission_to_send', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('opt_in_source', $data ?? [], null);
        $this->setIfExists('opt_in_date', $data ?? [], null);
        $this->setIfExists('opt_out_source', $data ?? [], null);
        $this->setIfExists('opt_out_date', $data ?? [], null);
        $this->setIfExists('opt_out_reason', $data ?? [], null);
        $this->setIfExists('confirm_status', $data ?? [], null);
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

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ((mb_strlen($this->container['address']) > 80)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['opt_out_reason']) && (mb_strlen($this->container['opt_out_reason']) > 255)) {
            $invalidProperties[] = "invalid value for 'opt_out_reason', the character length must be smaller than or equal to 255.";
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address The email address of the contact. The email address must be unique for each contact.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        if ((mb_strlen($address) > 80)) {
            throw new \InvalidArgumentException('invalid length for $address when calling EmailAddress., must be smaller than or equal to 80.');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets permission_to_send
     *
     * @return string|null
     */
    public function getPermissionToSend()
    {
        return $this->container['permission_to_send'];
    }

    /**
     * Sets permission_to_send
     *
     * @param string|null $permission_to_send Identifies the type of permission that the Constant Contact account has to send email to the contact. Types of permission: explicit, implicit, not_set, pending_confirmation, temp_hold, unsubscribed.
     *
     * @return self
     */
    public function setPermissionToSend($permission_to_send)
    {
        if (is_null($permission_to_send)) {
            throw new \InvalidArgumentException('non-nullable permission_to_send cannot be null');
        }
        $this->container['permission_to_send'] = $permission_to_send;

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
     * @param \DateTime|null $created_at Date and time that the email_address was created, in ISO-8601 format. System generated.
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
     * @param \DateTime|null $updated_at Date and time that the email_address was last updated, in ISO-8601 format. System generated.
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
     * Gets opt_in_source
     *
     * @return string|null
     */
    public function getOptInSource()
    {
        return $this->container['opt_in_source'];
    }

    /**
     * Sets opt_in_source
     *
     * @param string|null $opt_in_source Describes who opted-in the email_address; valid values are Contact or Account. Your integration must accurately identify <code>opt_in_source</code> for compliance reasons; value is set on POST, and is read-only going forward.
     *
     * @return self
     */
    public function setOptInSource($opt_in_source)
    {
        if (is_null($opt_in_source)) {
            throw new \InvalidArgumentException('non-nullable opt_in_source cannot be null');
        }
        $this->container['opt_in_source'] = $opt_in_source;

        return $this;
    }

    /**
     * Gets opt_in_date
     *
     * @return \DateTime|null
     */
    public function getOptInDate()
    {
        return $this->container['opt_in_date'];
    }

    /**
     * Sets opt_in_date
     *
     * @param \DateTime|null $opt_in_date Date and time that the email_address was opted-in to receive email from the account, in ISO-8601 format. System generated.
     *
     * @return self
     */
    public function setOptInDate($opt_in_date)
    {
        if (is_null($opt_in_date)) {
            throw new \InvalidArgumentException('non-nullable opt_in_date cannot be null');
        }
        $this->container['opt_in_date'] = $opt_in_date;

        return $this;
    }

    /**
     * Gets opt_out_source
     *
     * @return string|null
     */
    public function getOptOutSource()
    {
        return $this->container['opt_out_source'];
    }

    /**
     * Sets opt_out_source
     *
     * @param string|null $opt_out_source Describes the source of the unsubscribed/opt-out action: either Account or Contact. If the Contact opted-out, then the account cannot send any campaigns to this contact until the contact opts back in. If the Account, then the account can add the contact back to any lists and send to them. Displayed only if contact has been unsubscribed/opt-out.
     *
     * @return self
     */
    public function setOptOutSource($opt_out_source)
    {
        if (is_null($opt_out_source)) {
            throw new \InvalidArgumentException('non-nullable opt_out_source cannot be null');
        }
        $this->container['opt_out_source'] = $opt_out_source;

        return $this;
    }

    /**
     * Gets opt_out_date
     *
     * @return \DateTime|null
     */
    public function getOptOutDate()
    {
        return $this->container['opt_out_date'];
    }

    /**
     * Sets opt_out_date
     *
     * @param \DateTime|null $opt_out_date Date and time that the contact unsubscribed/opted-out of receiving email from the account, in ISO-8601 format. Displayed only if contact has been unsubscribed/opt-out. System generated.
     *
     * @return self
     */
    public function setOptOutDate($opt_out_date)
    {
        if (is_null($opt_out_date)) {
            throw new \InvalidArgumentException('non-nullable opt_out_date cannot be null');
        }
        $this->container['opt_out_date'] = $opt_out_date;

        return $this;
    }

    /**
     * Gets opt_out_reason
     *
     * @return string|null
     */
    public function getOptOutReason()
    {
        return $this->container['opt_out_reason'];
    }

    /**
     * Sets opt_out_reason
     *
     * @param string|null $opt_out_reason The reason, as provided by the contact, that they unsubscribed/opted-out of receiving email campaigns.
     *
     * @return self
     */
    public function setOptOutReason($opt_out_reason)
    {
        if (is_null($opt_out_reason)) {
            throw new \InvalidArgumentException('non-nullable opt_out_reason cannot be null');
        }
        if ((mb_strlen($opt_out_reason) > 255)) {
            throw new \InvalidArgumentException('invalid length for $opt_out_reason when calling EmailAddress., must be smaller than or equal to 255.');
        }

        $this->container['opt_out_reason'] = $opt_out_reason;

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
     * @param string|null $confirm_status Indicates if the contact confirmed their email address after they subscribed to receive emails. Possible values: pending, confirmed, off.
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


