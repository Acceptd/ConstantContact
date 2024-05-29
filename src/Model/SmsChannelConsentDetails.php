<?php
/**
 * SmsChannelConsentDetails
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
 * SmsChannelConsentDetails Class Doc Comment
 *
 * @category Class
 * @description Provides SMS consent details.
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SmsChannelConsentDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmsChannelConsentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sms_consent_permission' => 'string',
        'consent_type' => 'string',
        'opt_in_date' => '\DateTime',
        'opt_out_date' => '\DateTime',
        'advertised_frequency' => 'string',
        'advertised_interval' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sms_consent_permission' => null,
        'consent_type' => null,
        'opt_in_date' => 'date-time',
        'opt_out_date' => 'date-time',
        'advertised_frequency' => null,
        'advertised_interval' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sms_consent_permission' => false,
        'consent_type' => false,
        'opt_in_date' => false,
        'opt_out_date' => false,
        'advertised_frequency' => false,
        'advertised_interval' => false,
        'created_at' => false,
        'updated_at' => false
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
        'sms_consent_permission' => 'sms_consent_permission',
        'consent_type' => 'consent_type',
        'opt_in_date' => 'opt_in_date',
        'opt_out_date' => 'opt_out_date',
        'advertised_frequency' => 'advertised_frequency',
        'advertised_interval' => 'advertised_interval',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sms_consent_permission' => 'setSmsConsentPermission',
        'consent_type' => 'setConsentType',
        'opt_in_date' => 'setOptInDate',
        'opt_out_date' => 'setOptOutDate',
        'advertised_frequency' => 'setAdvertisedFrequency',
        'advertised_interval' => 'setAdvertisedInterval',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sms_consent_permission' => 'getSmsConsentPermission',
        'consent_type' => 'getConsentType',
        'opt_in_date' => 'getOptInDate',
        'opt_out_date' => 'getOptOutDate',
        'advertised_frequency' => 'getAdvertisedFrequency',
        'advertised_interval' => 'getAdvertisedInterval',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('sms_consent_permission', $data ?? [], null);
        $this->setIfExists('consent_type', $data ?? [], null);
        $this->setIfExists('opt_in_date', $data ?? [], null);
        $this->setIfExists('opt_out_date', $data ?? [], null);
        $this->setIfExists('advertised_frequency', $data ?? [], null);
        $this->setIfExists('advertised_interval', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * Gets sms_consent_permission
     *
     * @return string|null
     */
    public function getSmsConsentPermission()
    {
        return $this->container['sms_consent_permission'];
    }

    /**
     * Sets sms_consent_permission
     *
     * @param string|null $sms_consent_permission Identifies the current permission status for the SMS channel.
     *
     * @return self
     */
    public function setSmsConsentPermission($sms_consent_permission)
    {
        if (is_null($sms_consent_permission)) {
            throw new \InvalidArgumentException('non-nullable sms_consent_permission cannot be null');
        }
        $this->container['sms_consent_permission'] = $sms_consent_permission;

        return $this;
    }

    /**
     * Gets consent_type
     *
     * @return string|null
     */
    public function getConsentType()
    {
        return $this->container['consent_type'];
    }

    /**
     * Sets consent_type
     *
     * @param string|null $consent_type consent_type
     *
     * @return self
     */
    public function setConsentType($consent_type)
    {
        if (is_null($consent_type)) {
            throw new \InvalidArgumentException('non-nullable consent_type cannot be null');
        }
        $this->container['consent_type'] = $consent_type;

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
     * @param \DateTime|null $opt_in_date Date and time, in ISO-8601 format, that the contact subscribed/opted-in to receiving SMS from the account. Displays only if the contact subscribes/opts-in. System generated.
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
     * @param \DateTime|null $opt_out_date Date and time, in ISO-8601 format, that the contact unsubscribed/opted-out of receiving SMS from the account. Displays only if the contact unsubscribed/opted-out. System generated.
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
     * Gets advertised_frequency
     *
     * @return string|null
     */
    public function getAdvertisedFrequency()
    {
        return $this->container['advertised_frequency'];
    }

    /**
     * Sets advertised_frequency
     *
     * @param string|null $advertised_frequency The numeric used to set how often to send SMS advertisements during a specified time interval (<code>advertised_interval</code>). For example, if the <code>advertised_frequency</code> is set to <code>2</code> and the  <code>advertised_interval</code> is set to <code>monthly</code>, the contact can receive up to two advertisements per month.
     *
     * @return self
     */
    public function setAdvertisedFrequency($advertised_frequency)
    {
        if (is_null($advertised_frequency)) {
            throw new \InvalidArgumentException('non-nullable advertised_frequency cannot be null');
        }
        $this->container['advertised_frequency'] = $advertised_frequency;

        return $this;
    }

    /**
     * Gets advertised_interval
     *
     * @return string|null
     */
    public function getAdvertisedInterval()
    {
        return $this->container['advertised_interval'];
    }

    /**
     * Sets advertised_interval
     *
     * @param string|null $advertised_interval Identifies the unit of time used by Constant Contact to send SMS advertisements as a string enum. For example, if the <code>advertised_frequency</code> is set to <code>2</code> and the <code>advertised_interval</code> is set to <code>monthly</code>, the contact can receive up to two advertisements per month.
     *
     * @return self
     */
    public function setAdvertisedInterval($advertised_interval)
    {
        if (is_null($advertised_interval)) {
            throw new \InvalidArgumentException('non-nullable advertised_interval cannot be null');
        }
        $this->container['advertised_interval'] = $advertised_interval;

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
     * @param \DateTime|null $created_at Date and time that the SMS stats were created, in ISO-8601 format. System generated.
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
     * @param \DateTime|null $updated_at Date and time that the SMS stats were updated, in ISO-8601 format. System generated.
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


