<?php
/**
 * PContactClickTrackingActivity
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
 * PContactClickTrackingActivity Class Doc Comment
 *
 * @category Class
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PContactClickTrackingActivity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PContactClickTrackingActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_id' => 'string',
        'campaign_activity_id' => 'string',
        'tracking_activity_type' => 'string',
        'email_address' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'device_type' => 'string',
        'url_id' => 'string',
        'link_url' => 'string',
        'created_time' => '\DateTime',
        'deleted_at' => '\DateTime',
        'sms_channel' => '\ConstantContact\Client\Model\TrackingActivitySmsChannelDTO'
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
        'campaign_activity_id' => 'uuid',
        'tracking_activity_type' => null,
        'email_address' => null,
        'first_name' => null,
        'last_name' => null,
        'device_type' => null,
        'url_id' => null,
        'link_url' => null,
        'created_time' => 'date-time',
        'deleted_at' => 'date',
        'sms_channel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contact_id' => false,
        'campaign_activity_id' => false,
        'tracking_activity_type' => false,
        'email_address' => false,
        'first_name' => false,
        'last_name' => false,
        'device_type' => false,
        'url_id' => false,
        'link_url' => false,
        'created_time' => false,
        'deleted_at' => false,
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
        'campaign_activity_id' => 'campaign_activity_id',
        'tracking_activity_type' => 'tracking_activity_type',
        'email_address' => 'email_address',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'device_type' => 'device_type',
        'url_id' => 'url_id',
        'link_url' => 'link_url',
        'created_time' => 'created_time',
        'deleted_at' => 'deleted_at',
        'sms_channel' => 'sms_channel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'campaign_activity_id' => 'setCampaignActivityId',
        'tracking_activity_type' => 'setTrackingActivityType',
        'email_address' => 'setEmailAddress',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'device_type' => 'setDeviceType',
        'url_id' => 'setUrlId',
        'link_url' => 'setLinkUrl',
        'created_time' => 'setCreatedTime',
        'deleted_at' => 'setDeletedAt',
        'sms_channel' => 'setSmsChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'campaign_activity_id' => 'getCampaignActivityId',
        'tracking_activity_type' => 'getTrackingActivityType',
        'email_address' => 'getEmailAddress',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'device_type' => 'getDeviceType',
        'url_id' => 'getUrlId',
        'link_url' => 'getLinkUrl',
        'created_time' => 'getCreatedTime',
        'deleted_at' => 'getDeletedAt',
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
        $this->setIfExists('campaign_activity_id', $data ?? [], null);
        $this->setIfExists('tracking_activity_type', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('device_type', $data ?? [], null);
        $this->setIfExists('url_id', $data ?? [], null);
        $this->setIfExists('link_url', $data ?? [], null);
        $this->setIfExists('created_time', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
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

        if ($this->container['contact_id'] === null) {
            $invalidProperties[] = "'contact_id' can't be null";
        }
        if ($this->container['campaign_activity_id'] === null) {
            $invalidProperties[] = "'campaign_activity_id' can't be null";
        }
        if ($this->container['tracking_activity_type'] === null) {
            $invalidProperties[] = "'tracking_activity_type' can't be null";
        }
        if ($this->container['email_address'] === null) {
            $invalidProperties[] = "'email_address' can't be null";
        }
        if ($this->container['link_url'] === null) {
            $invalidProperties[] = "'link_url' can't be null";
        }
        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
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
     * @return string
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string $contact_id The unique ID that identifies the contact.
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
     * Gets campaign_activity_id
     *
     * @return string
     */
    public function getCampaignActivityId()
    {
        return $this->container['campaign_activity_id'];
    }

    /**
     * Sets campaign_activity_id
     *
     * @param string $campaign_activity_id The unique ID that identifies of the campaign activity to use.
     *
     * @return self
     */
    public function setCampaignActivityId($campaign_activity_id)
    {
        if (is_null($campaign_activity_id)) {
            throw new \InvalidArgumentException('non-nullable campaign_activity_id cannot be null');
        }
        $this->container['campaign_activity_id'] = $campaign_activity_id;

        return $this;
    }

    /**
     * Gets tracking_activity_type
     *
     * @return string
     */
    public function getTrackingActivityType()
    {
        return $this->container['tracking_activity_type'];
    }

    /**
     * Sets tracking_activity_type
     *
     * @param string $tracking_activity_type The tracked activity event type.
     *
     * @return self
     */
    public function setTrackingActivityType($tracking_activity_type)
    {
        if (is_null($tracking_activity_type)) {
            throw new \InvalidArgumentException('non-nullable tracking_activity_type cannot be null');
        }
        $this->container['tracking_activity_type'] = $tracking_activity_type;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address The email address for the contact and tracking activity.
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
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets device_type
     *
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string|null $device_type The type of device that was used to click the link.
     *
     * @return self
     */
    public function setDeviceType($device_type)
    {
        if (is_null($device_type)) {
            throw new \InvalidArgumentException('non-nullable device_type cannot be null');
        }
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets url_id
     *
     * @return string|null
     */
    public function getUrlId()
    {
        return $this->container['url_id'];
    }

    /**
     * Sets url_id
     *
     * @param string|null $url_id The ID used to uniquely identify the link.
     *
     * @return self
     */
    public function setUrlId($url_id)
    {
        if (is_null($url_id)) {
            throw new \InvalidArgumentException('non-nullable url_id cannot be null');
        }
        $this->container['url_id'] = $url_id;

        return $this;
    }

    /**
     * Gets link_url
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->container['link_url'];
    }

    /**
     * Sets link_url
     *
     * @param string $link_url The URL link text.
     *
     * @return self
     */
    public function setLinkUrl($link_url)
    {
        if (is_null($link_url)) {
            throw new \InvalidArgumentException('non-nullable link_url cannot be null');
        }
        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime $created_time The time the tracking activity occurred.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        if (is_null($created_time)) {
            throw new \InvalidArgumentException('non-nullable created_time cannot be null');
        }
        $this->container['created_time'] = $created_time;

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
     * @param \DateTime|null $deleted_at The time the Contact was deleted
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
     * Gets sms_channel
     *
     * @return 'ConstantContact\Client\Model\TrackingActivitySmsChannelDTO|null
     */
    public function getSmsChannel()
    {
        return $this->container['sms_channel'];
    }

    /**
     * Sets sms_channel
     *
     * @param 'ConstantContact\Client\Model\TrackingActivitySmsChannelDTO|null $sms_channel sms_channel
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


