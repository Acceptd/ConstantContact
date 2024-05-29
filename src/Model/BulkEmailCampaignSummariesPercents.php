<?php
/**
 * BulkEmailCampaignSummariesPercents
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
 * BulkEmailCampaignSummariesPercents Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BulkEmailCampaignSummariesPercents implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BulkEmailCampaignSummariesPercents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'click' => 'float',
        'open' => 'float',
        'did_not_open' => 'float',
        'bounce' => 'float',
        'unsubscribe' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'click' => null,
        'open' => null,
        'did_not_open' => null,
        'bounce' => null,
        'unsubscribe' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'click' => false,
        'open' => false,
        'did_not_open' => false,
        'bounce' => false,
        'unsubscribe' => false
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
        'click' => 'click',
        'open' => 'open',
        'did_not_open' => 'did_not_open',
        'bounce' => 'bounce',
        'unsubscribe' => 'unsubscribe'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'click' => 'setClick',
        'open' => 'setOpen',
        'did_not_open' => 'setDidNotOpen',
        'bounce' => 'setBounce',
        'unsubscribe' => 'setUnsubscribe'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'click' => 'getClick',
        'open' => 'getOpen',
        'did_not_open' => 'getDidNotOpen',
        'bounce' => 'getBounce',
        'unsubscribe' => 'getUnsubscribe'
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
        $this->setIfExists('click', $data ?? [], null);
        $this->setIfExists('open', $data ?? [], null);
        $this->setIfExists('did_not_open', $data ?? [], null);
        $this->setIfExists('bounce', $data ?? [], null);
        $this->setIfExists('unsubscribe', $data ?? [], null);
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
     * Gets click
     *
     * @return float|null
     */
    public function getClick()
    {
        return $this->container['click'];
    }

    /**
     * Sets click
     *
     * @param float|null $click Aggregated click rate for campaigns on the current page.
     *
     * @return self
     */
    public function setClick($click)
    {
        if (is_null($click)) {
            throw new \InvalidArgumentException('non-nullable click cannot be null');
        }
        $this->container['click'] = $click;

        return $this;
    }

    /**
     * Gets open
     *
     * @return float|null
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     *
     * @param float|null $open Aggregated open rate for campaigns on the current page.
     *
     * @return self
     */
    public function setOpen($open)
    {
        if (is_null($open)) {
            throw new \InvalidArgumentException('non-nullable open cannot be null');
        }
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets did_not_open
     *
     * @return float|null
     */
    public function getDidNotOpen()
    {
        return $this->container['did_not_open'];
    }

    /**
     * Sets did_not_open
     *
     * @param float|null $did_not_open Aggregated did-not-open rate for campaigns on the current page.
     *
     * @return self
     */
    public function setDidNotOpen($did_not_open)
    {
        if (is_null($did_not_open)) {
            throw new \InvalidArgumentException('non-nullable did_not_open cannot be null');
        }
        $this->container['did_not_open'] = $did_not_open;

        return $this;
    }

    /**
     * Gets bounce
     *
     * @return float|null
     */
    public function getBounce()
    {
        return $this->container['bounce'];
    }

    /**
     * Sets bounce
     *
     * @param float|null $bounce Aggregated bounce rate for campaigns on the current page.
     *
     * @return self
     */
    public function setBounce($bounce)
    {
        if (is_null($bounce)) {
            throw new \InvalidArgumentException('non-nullable bounce cannot be null');
        }
        $this->container['bounce'] = $bounce;

        return $this;
    }

    /**
     * Gets unsubscribe
     *
     * @return float|null
     */
    public function getUnsubscribe()
    {
        return $this->container['unsubscribe'];
    }

    /**
     * Sets unsubscribe
     *
     * @param float|null $unsubscribe Aggregated unsubscribe (optout) rate for campaigns on the current page.
     *
     * @return self
     */
    public function setUnsubscribe($unsubscribe)
    {
        if (is_null($unsubscribe)) {
            throw new \InvalidArgumentException('non-nullable unsubscribe cannot be null');
        }
        $this->container['unsubscribe'] = $unsubscribe;

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

