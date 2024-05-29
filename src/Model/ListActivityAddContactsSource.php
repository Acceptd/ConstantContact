<?php
/**
 * ListActivityAddContactsSource
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
 * ListActivityAddContactsSource Class Doc Comment
 *
 * @category Class
 * @description The &lt;code&gt;source&lt;/code&gt; object specifies which contacts you are adding to your targeted lists using one of four mutually exclusive properties.
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListActivityAddContactsSource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListActivityAddContacts_source';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'list_ids' => 'string[]',
        'all_active_contacts' => 'bool',
        'contact_ids' => 'string[]',
        'segment_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'list_ids' => 'uuid',
        'all_active_contacts' => null,
        'contact_ids' => 'uuid',
        'segment_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'list_ids' => false,
        'all_active_contacts' => false,
        'contact_ids' => false,
        'segment_id' => false
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
        'list_ids' => 'list_ids',
        'all_active_contacts' => 'all_active_contacts',
        'contact_ids' => 'contact_ids',
        'segment_id' => 'segment_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_ids' => 'setListIds',
        'all_active_contacts' => 'setAllActiveContacts',
        'contact_ids' => 'setContactIds',
        'segment_id' => 'setSegmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_ids' => 'getListIds',
        'all_active_contacts' => 'getAllActiveContacts',
        'contact_ids' => 'getContactIds',
        'segment_id' => 'getSegmentId'
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
        $this->setIfExists('list_ids', $data ?? [], null);
        $this->setIfExists('all_active_contacts', $data ?? [], false);
        $this->setIfExists('contact_ids', $data ?? [], null);
        $this->setIfExists('segment_id', $data ?? [], null);
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

        if (!is_null($this->container['list_ids']) && (count($this->container['list_ids']) > 50)) {
            $invalidProperties[] = "invalid value for 'list_ids', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['contact_ids']) && (count($this->container['contact_ids']) > 500)) {
            $invalidProperties[] = "invalid value for 'contact_ids', number of items must be less than or equal to 500.";
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
     * Gets list_ids
     *
     * @return string[]|null
     */
    public function getListIds()
    {
        return $this->container['list_ids'];
    }

    /**
     * Sets list_ids
     *
     * @param string[]|null $list_ids Specifies which contacts you are adding to lists as an array of up to 50 contact <code>list_id</code> values. This property is mutually exclusive with <code>contact_ids</code>, <code>all_active_contacts</code>, and <code>segment_id</code>.
     *
     * @return self
     */
    public function setListIds($list_ids)
    {
        if (is_null($list_ids)) {
            throw new \InvalidArgumentException('non-nullable list_ids cannot be null');
        }

        if ((count($list_ids) > 50)) {
            throw new \InvalidArgumentException('invalid value for $list_ids when calling ListActivityAddContactsSource., number of items must be less than or equal to 50.');
        }
        $this->container['list_ids'] = $list_ids;

        return $this;
    }

    /**
     * Gets all_active_contacts
     *
     * @return bool|null
     */
    public function getAllActiveContacts()
    {
        return $this->container['all_active_contacts'];
    }

    /**
     * Sets all_active_contacts
     *
     * @param bool|null $all_active_contacts Adds all active contacts to your targeted lists. This property is mutually exclusive with <code>contact_ids</code>, <code>list_ids</code>, and <code>segment_id</code>.
     *
     * @return self
     */
    public function setAllActiveContacts($all_active_contacts)
    {
        if (is_null($all_active_contacts)) {
            throw new \InvalidArgumentException('non-nullable all_active_contacts cannot be null');
        }
        $this->container['all_active_contacts'] = $all_active_contacts;

        return $this;
    }

    /**
     * Gets contact_ids
     *
     * @return string[]|null
     */
    public function getContactIds()
    {
        return $this->container['contact_ids'];
    }

    /**
     * Sets contact_ids
     *
     * @param string[]|null $contact_ids Specifies which contacts (up to 500) you are adding to lists as an array of <code>contact_id</code> values. This property is mutually exclusive with <code>list_ids</code>, <code>all_active_contacts</code>, and <code>segment_id</code>.
     *
     * @return self
     */
    public function setContactIds($contact_ids)
    {
        if (is_null($contact_ids)) {
            throw new \InvalidArgumentException('non-nullable contact_ids cannot be null');
        }

        if ((count($contact_ids) > 500)) {
            throw new \InvalidArgumentException('invalid value for $contact_ids when calling ListActivityAddContactsSource., number of items must be less than or equal to 500.');
        }
        $this->container['contact_ids'] = $contact_ids;

        return $this;
    }

    /**
     * Gets segment_id
     *
     * @return int|null
     */
    public function getSegmentId()
    {
        return $this->container['segment_id'];
    }

    /**
     * Sets segment_id
     *
     * @param int|null $segment_id Specifies which contacts you are adding to lists as a single <code>segment_id</code> value. This property is mutually exclusive with <code>list_ids</code>, <code>all_active_contacts</code>, and <code>contact_ids</code>.
     *
     * @return self
     */
    public function setSegmentId($segment_id)
    {
        if (is_null($segment_id)) {
            throw new \InvalidArgumentException('non-nullable segment_id cannot be null');
        }
        $this->container['segment_id'] = $segment_id;

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


