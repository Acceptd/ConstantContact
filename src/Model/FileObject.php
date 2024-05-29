<?php
/**
 * FileObject
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
 * FileObject Class Doc Comment
 *
 * @category Class
 * @package  ConstantContact\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FileObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FileObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'height' => 'int',
        'width' => 'int',
        'size' => 'int',
        'url' => 'string',
        'description' => 'string',
        'folder' => 'string',
        'source' => 'string',
        'type' => 'string',
        'status' => 'string',
        'thumbnail' => '\ConstantContact\Client\Model\MyLibraryFileCollectionInnerThumbnail',
        'image' => 'bool',
        'folder_id' => 'int',
        'external_url' => 'string',
        'modified_date' => 'string',
        'added_date' => 'string',
        'external_file_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'height' => null,
        'width' => null,
        'size' => null,
        'url' => null,
        'description' => null,
        'folder' => null,
        'source' => null,
        'type' => null,
        'status' => null,
        'thumbnail' => null,
        'image' => null,
        'folder_id' => 'int32',
        'external_url' => null,
        'modified_date' => null,
        'added_date' => null,
        'external_file_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'height' => false,
        'width' => false,
        'size' => false,
        'url' => false,
        'description' => false,
        'folder' => false,
        'source' => false,
        'type' => false,
        'status' => false,
        'thumbnail' => false,
        'image' => false,
        'folder_id' => false,
        'external_url' => false,
        'modified_date' => false,
        'added_date' => false,
        'external_file_id' => false
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
        'id' => 'id',
        'name' => 'name',
        'height' => 'height',
        'width' => 'width',
        'size' => 'size',
        'url' => 'url',
        'description' => 'description',
        'folder' => 'folder',
        'source' => 'source',
        'type' => 'type',
        'status' => 'status',
        'thumbnail' => 'thumbnail',
        'image' => 'image',
        'folder_id' => 'folder_id',
        'external_url' => 'external_url',
        'modified_date' => 'modified_date',
        'added_date' => 'added_date',
        'external_file_id' => 'external_file_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'size' => 'setSize',
        'url' => 'setUrl',
        'description' => 'setDescription',
        'folder' => 'setFolder',
        'source' => 'setSource',
        'type' => 'setType',
        'status' => 'setStatus',
        'thumbnail' => 'setThumbnail',
        'image' => 'setImage',
        'folder_id' => 'setFolderId',
        'external_url' => 'setExternalUrl',
        'modified_date' => 'setModifiedDate',
        'added_date' => 'setAddedDate',
        'external_file_id' => 'setExternalFileId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'size' => 'getSize',
        'url' => 'getUrl',
        'description' => 'getDescription',
        'folder' => 'getFolder',
        'source' => 'getSource',
        'type' => 'getType',
        'status' => 'getStatus',
        'thumbnail' => 'getThumbnail',
        'image' => 'getImage',
        'folder_id' => 'getFolderId',
        'external_url' => 'getExternalUrl',
        'modified_date' => 'getModifiedDate',
        'added_date' => 'getAddedDate',
        'external_file_id' => 'getExternalFileId'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('folder', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('thumbnail', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('folder_id', $data ?? [], null);
        $this->setIfExists('external_url', $data ?? [], null);
        $this->setIfExists('modified_date', $data ?? [], null);
        $this->setIfExists('added_date', $data ?? [], null);
        $this->setIfExists('external_file_id', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Identifies the MyLibrary file.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The file name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height The image height.
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width The image width.
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size The image size.
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The image URL.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The image description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return string|null
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param string|null $folder The image folder
     *
     * @return self
     */
    public function setFolder($folder)
    {
        if (is_null($folder)) {
            throw new \InvalidArgumentException('non-nullable folder cannot be null');
        }
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source The application that uploaded this image.
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The image format.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status THe image status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return 'ConstantContact\Client\Model\MyLibraryFileCollectionInnerThumbnail|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param 'ConstantContact\Client\Model\MyLibraryFileCollectionInnerThumbnail|null $thumbnail thumbnail
     *
     * @return self
     */
    public function setThumbnail($thumbnail)
    {
        if (is_null($thumbnail)) {
            throw new \InvalidArgumentException('non-nullable thumbnail cannot be null');
        }
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets image
     *
     * @return bool|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param bool|null $image Boolean indicating if this file is an image.
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return int|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param int|null $folder_id Identifies a folder in MyLibrary.
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        if (is_null($folder_id)) {
            throw new \InvalidArgumentException('non-nullable folder_id cannot be null');
        }
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets external_url
     *
     * @return string|null
     */
    public function getExternalUrl()
    {
        return $this->container['external_url'];
    }

    /**
     * Sets external_url
     *
     * @param string|null $external_url The external url for the file.
     *
     * @return self
     */
    public function setExternalUrl($external_url)
    {
        if (is_null($external_url)) {
            throw new \InvalidArgumentException('non-nullable external_url cannot be null');
        }
        $this->container['external_url'] = $external_url;

        return $this;
    }

    /**
     * Gets modified_date
     *
     * @return string|null
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     *
     * @param string|null $modified_date Identifies the time a user last modified the file.
     *
     * @return self
     */
    public function setModifiedDate($modified_date)
    {
        if (is_null($modified_date)) {
            throw new \InvalidArgumentException('non-nullable modified_date cannot be null');
        }
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets added_date
     *
     * @return string|null
     */
    public function getAddedDate()
    {
        return $this->container['added_date'];
    }

    /**
     * Sets added_date
     *
     * @param string|null $added_date Identifies the time a user originally added the file to MyLibrary.
     *
     * @return self
     */
    public function setAddedDate($added_date)
    {
        if (is_null($added_date)) {
            throw new \InvalidArgumentException('non-nullable added_date cannot be null');
        }
        $this->container['added_date'] = $added_date;

        return $this;
    }

    /**
     * Gets external_file_id
     *
     * @return string|null
     */
    public function getExternalFileId()
    {
        return $this->container['external_file_id'];
    }

    /**
     * Sets external_file_id
     *
     * @param string|null $external_file_id External identifier for the file.
     *
     * @return self
     */
    public function setExternalFileId($external_file_id)
    {
        if (is_null($external_file_id)) {
            throw new \InvalidArgumentException('non-nullable external_file_id cannot be null');
        }
        $this->container['external_file_id'] = $external_file_id;

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


