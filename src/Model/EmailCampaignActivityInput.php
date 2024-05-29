<?php
/**
 * EmailCampaignActivityInput
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
 * EmailCampaignActivityInput Class Doc Comment
 *
 * @category Class
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailCampaignActivityInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailCampaignActivityInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'format_type' => 'int',
        'from_name' => 'string',
        'from_email' => 'string',
        'reply_to_email' => 'string',
        'subject' => 'string',
        'preheader' => 'string',
        'html_content' => 'string',
        'physical_address_in_footer' => '\ConstantContact\Client\Model\EmailPhysicalAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'format_type' => 'int32',
        'from_name' => null,
        'from_email' => null,
        'reply_to_email' => null,
        'subject' => null,
        'preheader' => null,
        'html_content' => null,
        'physical_address_in_footer' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'format_type' => false,
        'from_name' => false,
        'from_email' => false,
        'reply_to_email' => false,
        'subject' => false,
        'preheader' => false,
        'html_content' => false,
        'physical_address_in_footer' => false
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
        'format_type' => 'format_type',
        'from_name' => 'from_name',
        'from_email' => 'from_email',
        'reply_to_email' => 'reply_to_email',
        'subject' => 'subject',
        'preheader' => 'preheader',
        'html_content' => 'html_content',
        'physical_address_in_footer' => 'physical_address_in_footer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format_type' => 'setFormatType',
        'from_name' => 'setFromName',
        'from_email' => 'setFromEmail',
        'reply_to_email' => 'setReplyToEmail',
        'subject' => 'setSubject',
        'preheader' => 'setPreheader',
        'html_content' => 'setHtmlContent',
        'physical_address_in_footer' => 'setPhysicalAddressInFooter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format_type' => 'getFormatType',
        'from_name' => 'getFromName',
        'from_email' => 'getFromEmail',
        'reply_to_email' => 'getReplyToEmail',
        'subject' => 'getSubject',
        'preheader' => 'getPreheader',
        'html_content' => 'getHtmlContent',
        'physical_address_in_footer' => 'getPhysicalAddressInFooter'
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
        $this->setIfExists('format_type', $data ?? [], null);
        $this->setIfExists('from_name', $data ?? [], null);
        $this->setIfExists('from_email', $data ?? [], null);
        $this->setIfExists('reply_to_email', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('preheader', $data ?? [], null);
        $this->setIfExists('html_content', $data ?? [], null);
        $this->setIfExists('physical_address_in_footer', $data ?? [], null);
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

        if ($this->container['format_type'] === null) {
            $invalidProperties[] = "'format_type' can't be null";
        }
        if ($this->container['from_name'] === null) {
            $invalidProperties[] = "'from_name' can't be null";
        }
        if ((mb_strlen($this->container['from_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'from_name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['from_email'] === null) {
            $invalidProperties[] = "'from_email' can't be null";
        }
        if ((mb_strlen($this->container['from_email']) > 80)) {
            $invalidProperties[] = "invalid value for 'from_email', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['reply_to_email'] === null) {
            $invalidProperties[] = "'reply_to_email' can't be null";
        }
        if ((mb_strlen($this->container['reply_to_email']) > 80)) {
            $invalidProperties[] = "invalid value for 'reply_to_email', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['html_content'] === null) {
            $invalidProperties[] = "'html_content' can't be null";
        }
        if ((mb_strlen($this->container['html_content']) > 150000)) {
            $invalidProperties[] = "invalid value for 'html_content', the character length must be smaller than or equal to 150000.";
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
     * Gets format_type
     *
     * @return int
     */
    public function getFormatType()
    {
        return $this->container['format_type'];
    }

    /**
     * Sets format_type
     *
     * @param int $format_type The email format you are using to create the email campaign activity. The V3 API supports creating emails using <code>format_type</code> 5 (custom code emails).
     *
     * @return self
     */
    public function setFormatType($format_type)
    {
        if (is_null($format_type)) {
            throw new \InvalidArgumentException('non-nullable format_type cannot be null');
        }
        $this->container['format_type'] = $format_type;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string $from_name The email sender's name to display for the email campaign activity.
     *
     * @return self
     */
    public function setFromName($from_name)
    {
        if (is_null($from_name)) {
            throw new \InvalidArgumentException('non-nullable from_name cannot be null');
        }
        if ((mb_strlen($from_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $from_name when calling EmailCampaignActivityInput., must be smaller than or equal to 100.');
        }

        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string $from_email The sender's email address to use for the email campaign activity. You must use a confirmed Constant Contact account email address. Make a GET call to <code>/account/emails</code> to return a collection of account emails and their confirmation status.
     *
     * @return self
     */
    public function setFromEmail($from_email)
    {
        if (is_null($from_email)) {
            throw new \InvalidArgumentException('non-nullable from_email cannot be null');
        }
        if ((mb_strlen($from_email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $from_email when calling EmailCampaignActivityInput., must be smaller than or equal to 80.');
        }

        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets reply_to_email
     *
     * @return string
     */
    public function getReplyToEmail()
    {
        return $this->container['reply_to_email'];
    }

    /**
     * Sets reply_to_email
     *
     * @param string $reply_to_email The sender's email address to use if the contact replies to the email campaign activity. You must use a confirmed Constant Contact account email address. Make a GET call to <code>/account/emails</code> to return a collection of account emails and their confirmation status.
     *
     * @return self
     */
    public function setReplyToEmail($reply_to_email)
    {
        if (is_null($reply_to_email)) {
            throw new \InvalidArgumentException('non-nullable reply_to_email cannot be null');
        }
        if ((mb_strlen($reply_to_email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $reply_to_email when calling EmailCampaignActivityInput., must be smaller than or equal to 80.');
        }

        $this->container['reply_to_email'] = $reply_to_email;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject The text to display in the subject line that describes the email campaign activity.
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets preheader
     *
     * @return string|null
     */
    public function getPreheader()
    {
        return $this->container['preheader'];
    }

    /**
     * Sets preheader
     *
     * @param string|null $preheader The email preheader for the email campaign activity. Contacts will view your preheader as a short summary that follows the subject line in their email client. Only <code>format_type</code> 3, 4, and 5 email campaign activities use the preheader property.
     *
     * @return self
     */
    public function setPreheader($preheader)
    {
        if (is_null($preheader)) {
            throw new \InvalidArgumentException('non-nullable preheader cannot be null');
        }
        $this->container['preheader'] = $preheader;

        return $this;
    }

    /**
     * Gets html_content
     *
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['html_content'];
    }

    /**
     * Sets html_content
     *
     * @param string $html_content The HTML content for the email campaign activity. Only <code>format_type</code> 5 (custom code emails) can contain <code>html_content</code>. When creating a <code>format_type</code> 5 custom code email, make sure that you include <code>[[trackingImage]]</code> in the <code>&lt;body&gt;</code> element of your HTML.
     *
     * @return self
     */
    public function setHtmlContent($html_content)
    {
        if (is_null($html_content)) {
            throw new \InvalidArgumentException('non-nullable html_content cannot be null');
        }
        if ((mb_strlen($html_content) > 150000)) {
            throw new \InvalidArgumentException('invalid length for $html_content when calling EmailCampaignActivityInput., must be smaller than or equal to 150000.');
        }

        $this->container['html_content'] = $html_content;

        return $this;
    }

    /**
     * Gets physical_address_in_footer
     *
     * @return 'ConstantContact\Client\Model\EmailPhysicalAddress|null
     */
    public function getPhysicalAddressInFooter()
    {
        return $this->container['physical_address_in_footer'];
    }

    /**
     * Sets physical_address_in_footer
     *
     * @param ConstantContact\Client\Model\EmailPhysicalAddress|null $physical_address_in_footer physical_address_in_footer
     *
     * @return self
     */
    public function setPhysicalAddressInFooter($physical_address_in_footer)
    {
        if (is_null($physical_address_in_footer)) {
            throw new \InvalidArgumentException('non-nullable physical_address_in_footer cannot be null');
        }
        $this->container['physical_address_in_footer'] = $physical_address_in_footer;

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


