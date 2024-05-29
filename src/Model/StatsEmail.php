<?php
/**
 * StatsEmail
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

namespace ConstantContact\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * StatsEmail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StatsEmail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatsEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'em_bounces' => 'int',
        'em_clicks' => 'int',
        'em_clicks_all' => 'int',
        'em_clicks_all_computer' => 'int',
        'em_clicks_all_mobile' => 'int',
        'em_clicks_all_tablet' => 'int',
        'em_clicks_all_other' => 'int',
        'em_clicks_all_none' => 'int',
        'em_forwards' => 'int',
        'em_not_opened' => 'int',
        'em_opens' => 'int',
        'em_opens_all' => 'int',
        'em_opens_all_computer' => 'int',
        'em_opens_all_mobile' => 'int',
        'em_opens_all_tablet' => 'int',
        'em_opens_all_other' => 'int',
        'em_opens_all_none' => 'int',
        'em_optouts' => 'int',
        'em_sends' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'em_bounces' => 'int32',
        'em_clicks' => 'int32',
        'em_clicks_all' => 'int32',
        'em_clicks_all_computer' => 'int32',
        'em_clicks_all_mobile' => 'int32',
        'em_clicks_all_tablet' => 'int32',
        'em_clicks_all_other' => 'int32',
        'em_clicks_all_none' => 'int32',
        'em_forwards' => 'int32',
        'em_not_opened' => 'int32',
        'em_opens' => 'int32',
        'em_opens_all' => 'int32',
        'em_opens_all_computer' => 'int32',
        'em_opens_all_mobile' => 'int32',
        'em_opens_all_tablet' => 'int32',
        'em_opens_all_other' => 'int32',
        'em_opens_all_none' => 'int32',
        'em_optouts' => 'int32',
        'em_sends' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'em_bounces' => false,
        'em_clicks' => false,
        'em_clicks_all' => false,
        'em_clicks_all_computer' => false,
        'em_clicks_all_mobile' => false,
        'em_clicks_all_tablet' => false,
        'em_clicks_all_other' => false,
        'em_clicks_all_none' => false,
        'em_forwards' => false,
        'em_not_opened' => false,
        'em_opens' => false,
        'em_opens_all' => false,
        'em_opens_all_computer' => false,
        'em_opens_all_mobile' => false,
        'em_opens_all_tablet' => false,
        'em_opens_all_other' => false,
        'em_opens_all_none' => false,
        'em_optouts' => false,
        'em_sends' => false
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
        'em_bounces' => 'em_bounces',
        'em_clicks' => 'em_clicks',
        'em_clicks_all' => 'em_clicks_all',
        'em_clicks_all_computer' => 'em_clicks_all_computer',
        'em_clicks_all_mobile' => 'em_clicks_all_mobile',
        'em_clicks_all_tablet' => 'em_clicks_all_tablet',
        'em_clicks_all_other' => 'em_clicks_all_other',
        'em_clicks_all_none' => 'em_clicks_all_none',
        'em_forwards' => 'em_forwards',
        'em_not_opened' => 'em_not_opened',
        'em_opens' => 'em_opens',
        'em_opens_all' => 'em_opens_all',
        'em_opens_all_computer' => 'em_opens_all_computer',
        'em_opens_all_mobile' => 'em_opens_all_mobile',
        'em_opens_all_tablet' => 'em_opens_all_tablet',
        'em_opens_all_other' => 'em_opens_all_other',
        'em_opens_all_none' => 'em_opens_all_none',
        'em_optouts' => 'em_optouts',
        'em_sends' => 'em_sends'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'em_bounces' => 'setEmBounces',
        'em_clicks' => 'setEmClicks',
        'em_clicks_all' => 'setEmClicksAll',
        'em_clicks_all_computer' => 'setEmClicksAllComputer',
        'em_clicks_all_mobile' => 'setEmClicksAllMobile',
        'em_clicks_all_tablet' => 'setEmClicksAllTablet',
        'em_clicks_all_other' => 'setEmClicksAllOther',
        'em_clicks_all_none' => 'setEmClicksAllNone',
        'em_forwards' => 'setEmForwards',
        'em_not_opened' => 'setEmNotOpened',
        'em_opens' => 'setEmOpens',
        'em_opens_all' => 'setEmOpensAll',
        'em_opens_all_computer' => 'setEmOpensAllComputer',
        'em_opens_all_mobile' => 'setEmOpensAllMobile',
        'em_opens_all_tablet' => 'setEmOpensAllTablet',
        'em_opens_all_other' => 'setEmOpensAllOther',
        'em_opens_all_none' => 'setEmOpensAllNone',
        'em_optouts' => 'setEmOptouts',
        'em_sends' => 'setEmSends'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'em_bounces' => 'getEmBounces',
        'em_clicks' => 'getEmClicks',
        'em_clicks_all' => 'getEmClicksAll',
        'em_clicks_all_computer' => 'getEmClicksAllComputer',
        'em_clicks_all_mobile' => 'getEmClicksAllMobile',
        'em_clicks_all_tablet' => 'getEmClicksAllTablet',
        'em_clicks_all_other' => 'getEmClicksAllOther',
        'em_clicks_all_none' => 'getEmClicksAllNone',
        'em_forwards' => 'getEmForwards',
        'em_not_opened' => 'getEmNotOpened',
        'em_opens' => 'getEmOpens',
        'em_opens_all' => 'getEmOpensAll',
        'em_opens_all_computer' => 'getEmOpensAllComputer',
        'em_opens_all_mobile' => 'getEmOpensAllMobile',
        'em_opens_all_tablet' => 'getEmOpensAllTablet',
        'em_opens_all_other' => 'getEmOpensAllOther',
        'em_opens_all_none' => 'getEmOpensAllNone',
        'em_optouts' => 'getEmOptouts',
        'em_sends' => 'getEmSends'
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
        $this->setIfExists('em_bounces', $data ?? [], null);
        $this->setIfExists('em_clicks', $data ?? [], null);
        $this->setIfExists('em_clicks_all', $data ?? [], null);
        $this->setIfExists('em_clicks_all_computer', $data ?? [], null);
        $this->setIfExists('em_clicks_all_mobile', $data ?? [], null);
        $this->setIfExists('em_clicks_all_tablet', $data ?? [], null);
        $this->setIfExists('em_clicks_all_other', $data ?? [], null);
        $this->setIfExists('em_clicks_all_none', $data ?? [], null);
        $this->setIfExists('em_forwards', $data ?? [], null);
        $this->setIfExists('em_not_opened', $data ?? [], null);
        $this->setIfExists('em_opens', $data ?? [], null);
        $this->setIfExists('em_opens_all', $data ?? [], null);
        $this->setIfExists('em_opens_all_computer', $data ?? [], null);
        $this->setIfExists('em_opens_all_mobile', $data ?? [], null);
        $this->setIfExists('em_opens_all_tablet', $data ?? [], null);
        $this->setIfExists('em_opens_all_other', $data ?? [], null);
        $this->setIfExists('em_opens_all_none', $data ?? [], null);
        $this->setIfExists('em_optouts', $data ?? [], null);
        $this->setIfExists('em_sends', $data ?? [], null);
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
     * Gets em_bounces
     *
     * @return int|null
     */
    public function getEmBounces()
    {
        return $this->container['em_bounces'];
    }

    /**
     * Sets em_bounces
     *
     * @param int|null $em_bounces Number of unique email bounces.
     *
     * @return self
     */
    public function setEmBounces($em_bounces)
    {
        if (is_null($em_bounces)) {
            throw new \InvalidArgumentException('non-nullable em_bounces cannot be null');
        }
        $this->container['em_bounces'] = $em_bounces;

        return $this;
    }

    /**
     * Gets em_clicks
     *
     * @return int|null
     */
    public function getEmClicks()
    {
        return $this->container['em_clicks'];
    }

    /**
     * Sets em_clicks
     *
     * @param int|null $em_clicks Number of unique recipients who clicked any link in the email.
     *
     * @return self
     */
    public function setEmClicks($em_clicks)
    {
        if (is_null($em_clicks)) {
            throw new \InvalidArgumentException('non-nullable em_clicks cannot be null');
        }
        $this->container['em_clicks'] = $em_clicks;

        return $this;
    }

    /**
     * Gets em_clicks_all
     *
     * @return int|null
     */
    public function getEmClicksAll()
    {
        return $this->container['em_clicks_all'];
    }

    /**
     * Sets em_clicks_all
     *
     * @param int|null $em_clicks_all Total number of non-unique email clicks.
     *
     * @return self
     */
    public function setEmClicksAll($em_clicks_all)
    {
        if (is_null($em_clicks_all)) {
            throw new \InvalidArgumentException('non-nullable em_clicks_all cannot be null');
        }
        $this->container['em_clicks_all'] = $em_clicks_all;

        return $this;
    }

    /**
     * Gets em_clicks_all_computer
     *
     * @return int|null
     */
    public function getEmClicksAllComputer()
    {
        return $this->container['em_clicks_all_computer'];
    }

    /**
     * Sets em_clicks_all_computer
     *
     * @param int|null $em_clicks_all_computer Number of non-unique email clicks on a standard desktop or laptop computer.
     *
     * @return self
     */
    public function setEmClicksAllComputer($em_clicks_all_computer)
    {
        if (is_null($em_clicks_all_computer)) {
            throw new \InvalidArgumentException('non-nullable em_clicks_all_computer cannot be null');
        }
        $this->container['em_clicks_all_computer'] = $em_clicks_all_computer;

        return $this;
    }

    /**
     * Gets em_clicks_all_mobile
     *
     * @return int|null
     */
    public function getEmClicksAllMobile()
    {
        return $this->container['em_clicks_all_mobile'];
    }

    /**
     * Sets em_clicks_all_mobile
     *
     * @param int|null $em_clicks_all_mobile Number of non-unique email clicks on a mobile phone or similar small mobile device (e.g. iPhone).
     *
     * @return self
     */
    public function setEmClicksAllMobile($em_clicks_all_mobile)
    {
        if (is_null($em_clicks_all_mobile)) {
            throw new \InvalidArgumentException('non-nullable em_clicks_all_mobile cannot be null');
        }
        $this->container['em_clicks_all_mobile'] = $em_clicks_all_mobile;

        return $this;
    }

    /**
     * Gets em_clicks_all_tablet
     *
     * @return int|null
     */
    public function getEmClicksAllTablet()
    {
        return $this->container['em_clicks_all_tablet'];
    }

    /**
     * Sets em_clicks_all_tablet
     *
     * @param int|null $em_clicks_all_tablet Number of non-unique email clicks on a small tablet type computer (e.g. iPad).
     *
     * @return self
     */
    public function setEmClicksAllTablet($em_clicks_all_tablet)
    {
        if (is_null($em_clicks_all_tablet)) {
            throw new \InvalidArgumentException('non-nullable em_clicks_all_tablet cannot be null');
        }
        $this->container['em_clicks_all_tablet'] = $em_clicks_all_tablet;

        return $this;
    }

    /**
     * Gets em_clicks_all_other
     *
     * @return int|null
     */
    public function getEmClicksAllOther()
    {
        return $this->container['em_clicks_all_other'];
    }

    /**
     * Sets em_clicks_all_other
     *
     * @param int|null $em_clicks_all_other Number of non-unique email clicks on an unknown device (e.g. Game Console or Wearable).
     *
     * @return self
     */
    public function setEmClicksAllOther($em_clicks_all_other)
    {
        if (is_null($em_clicks_all_other)) {
            throw new \InvalidArgumentException('non-nullable em_clicks_all_other cannot be null');
        }
        $this->container['em_clicks_all_other'] = $em_clicks_all_other;

        return $this;
    }

    /**
     * Gets em_clicks_all_none
     *
     * @return int|null
     */
    public function getEmClicksAllNone()
    {
        return $this->container['em_clicks_all_none'];
    }

    /**
     * Sets em_clicks_all_none
     *
     * @param int|null $em_clicks_all_none Number of non-unique email clicks for which the device type was not captured. This will account for any clicks prior to when device type was collected and stored.
     *
     * @return self
     */
    public function setEmClicksAllNone($em_clicks_all_none)
    {
        if (is_null($em_clicks_all_none)) {
            throw new \InvalidArgumentException('non-nullable em_clicks_all_none cannot be null');
        }
        $this->container['em_clicks_all_none'] = $em_clicks_all_none;

        return $this;
    }

    /**
     * Gets em_forwards
     *
     * @return int|null
     */
    public function getEmForwards()
    {
        return $this->container['em_forwards'];
    }

    /**
     * Sets em_forwards
     *
     * @param int|null $em_forwards Number of unique recipients who forwarded the email using the forward to a friend feature (not available for all types of emails).
     *
     * @return self
     */
    public function setEmForwards($em_forwards)
    {
        if (is_null($em_forwards)) {
            throw new \InvalidArgumentException('non-nullable em_forwards cannot be null');
        }
        $this->container['em_forwards'] = $em_forwards;

        return $this;
    }

    /**
     * Gets em_not_opened
     *
     * @return int|null
     */
    public function getEmNotOpened()
    {
        return $this->container['em_not_opened'];
    }

    /**
     * Sets em_not_opened
     *
     * @param int|null $em_not_opened Number of unique recipients who did not open the email. This is calculated as follows: <code>em_not_opened</code> is equal to <code>em_sends - em_opens - em_bounces</code>. This value is reported as zero if the calculation results in a negative value.
     *
     * @return self
     */
    public function setEmNotOpened($em_not_opened)
    {
        if (is_null($em_not_opened)) {
            throw new \InvalidArgumentException('non-nullable em_not_opened cannot be null');
        }
        $this->container['em_not_opened'] = $em_not_opened;

        return $this;
    }

    /**
     * Gets em_opens
     *
     * @return int|null
     */
    public function getEmOpens()
    {
        return $this->container['em_opens'];
    }

    /**
     * Sets em_opens
     *
     * @param int|null $em_opens Number of unique recipients who opened the email.
     *
     * @return self
     */
    public function setEmOpens($em_opens)
    {
        if (is_null($em_opens)) {
            throw new \InvalidArgumentException('non-nullable em_opens cannot be null');
        }
        $this->container['em_opens'] = $em_opens;

        return $this;
    }

    /**
     * Gets em_opens_all
     *
     * @return int|null
     */
    public function getEmOpensAll()
    {
        return $this->container['em_opens_all'];
    }

    /**
     * Sets em_opens_all
     *
     * @param int|null $em_opens_all Total number of non-unique email opens.
     *
     * @return self
     */
    public function setEmOpensAll($em_opens_all)
    {
        if (is_null($em_opens_all)) {
            throw new \InvalidArgumentException('non-nullable em_opens_all cannot be null');
        }
        $this->container['em_opens_all'] = $em_opens_all;

        return $this;
    }

    /**
     * Gets em_opens_all_computer
     *
     * @return int|null
     */
    public function getEmOpensAllComputer()
    {
        return $this->container['em_opens_all_computer'];
    }

    /**
     * Sets em_opens_all_computer
     *
     * @param int|null $em_opens_all_computer Number of non-unique email opens on a standard desktop or laptop computer.
     *
     * @return self
     */
    public function setEmOpensAllComputer($em_opens_all_computer)
    {
        if (is_null($em_opens_all_computer)) {
            throw new \InvalidArgumentException('non-nullable em_opens_all_computer cannot be null');
        }
        $this->container['em_opens_all_computer'] = $em_opens_all_computer;

        return $this;
    }

    /**
     * Gets em_opens_all_mobile
     *
     * @return int|null
     */
    public function getEmOpensAllMobile()
    {
        return $this->container['em_opens_all_mobile'];
    }

    /**
     * Sets em_opens_all_mobile
     *
     * @param int|null $em_opens_all_mobile Number of non-unique email opens on a mobile phone or similar small mobile device (e.g. iPhone).
     *
     * @return self
     */
    public function setEmOpensAllMobile($em_opens_all_mobile)
    {
        if (is_null($em_opens_all_mobile)) {
            throw new \InvalidArgumentException('non-nullable em_opens_all_mobile cannot be null');
        }
        $this->container['em_opens_all_mobile'] = $em_opens_all_mobile;

        return $this;
    }

    /**
     * Gets em_opens_all_tablet
     *
     * @return int|null
     */
    public function getEmOpensAllTablet()
    {
        return $this->container['em_opens_all_tablet'];
    }

    /**
     * Sets em_opens_all_tablet
     *
     * @param int|null $em_opens_all_tablet Number of non-unique email opens on a small tablet type computer (e.g. iPad).
     *
     * @return self
     */
    public function setEmOpensAllTablet($em_opens_all_tablet)
    {
        if (is_null($em_opens_all_tablet)) {
            throw new \InvalidArgumentException('non-nullable em_opens_all_tablet cannot be null');
        }
        $this->container['em_opens_all_tablet'] = $em_opens_all_tablet;

        return $this;
    }

    /**
     * Gets em_opens_all_other
     *
     * @return int|null
     */
    public function getEmOpensAllOther()
    {
        return $this->container['em_opens_all_other'];
    }

    /**
     * Sets em_opens_all_other
     *
     * @param int|null $em_opens_all_other Number of non-unique email opens on an unknown device (e.g. Game Console or Wearable).
     *
     * @return self
     */
    public function setEmOpensAllOther($em_opens_all_other)
    {
        if (is_null($em_opens_all_other)) {
            throw new \InvalidArgumentException('non-nullable em_opens_all_other cannot be null');
        }
        $this->container['em_opens_all_other'] = $em_opens_all_other;

        return $this;
    }

    /**
     * Gets em_opens_all_none
     *
     * @return int|null
     */
    public function getEmOpensAllNone()
    {
        return $this->container['em_opens_all_none'];
    }

    /**
     * Sets em_opens_all_none
     *
     * @param int|null $em_opens_all_none Number of non-unique email opens for which the device type was not captured. This will account for any opens prior to when device type was collected and stored.
     *
     * @return self
     */
    public function setEmOpensAllNone($em_opens_all_none)
    {
        if (is_null($em_opens_all_none)) {
            throw new \InvalidArgumentException('non-nullable em_opens_all_none cannot be null');
        }
        $this->container['em_opens_all_none'] = $em_opens_all_none;

        return $this;
    }

    /**
     * Gets em_optouts
     *
     * @return int|null
     */
    public function getEmOptouts()
    {
        return $this->container['em_optouts'];
    }

    /**
     * Sets em_optouts
     *
     * @param int|null $em_optouts Number of unique recipients who unsubscribed due to this email.
     *
     * @return self
     */
    public function setEmOptouts($em_optouts)
    {
        if (is_null($em_optouts)) {
            throw new \InvalidArgumentException('non-nullable em_optouts cannot be null');
        }
        $this->container['em_optouts'] = $em_optouts;

        return $this;
    }

    /**
     * Gets em_sends
     *
     * @return int|null
     */
    public function getEmSends()
    {
        return $this->container['em_sends'];
    }

    /**
     * Sets em_sends
     *
     * @param int|null $em_sends Number of unique email sends.
     *
     * @return self
     */
    public function setEmSends($em_sends)
    {
        if (is_null($em_sends)) {
            throw new \InvalidArgumentException('non-nullable em_sends cannot be null');
        }
        $this->container['em_sends'] = $em_sends;

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


