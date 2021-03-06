<?php
/**
 * HotelConfirmationRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Algebratec API
 *
 * Learn and test our api with ease
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@algebratec.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * HotelConfirmationRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HotelConfirmationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HotelConfirmationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'language' => 'string',
'arrival_time' => 'string',
'comment' => 'string',
'holder' => '\Swagger\Client\Model\HotelConfirmationRequestHolder',
'payment' => '\Swagger\Client\Model\HotelConfirmationRequestPayment',
'rooms' => '\Swagger\Client\Model\HotelConfirmationRequestRooms[]',
'extras' => 'int[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'language' => null,
'arrival_time' => null,
'comment' => null,
'holder' => null,
'payment' => null,
'rooms' => null,
'extras' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'language' => 'language',
'arrival_time' => 'arrivalTime',
'comment' => 'comment',
'holder' => 'holder',
'payment' => 'payment',
'rooms' => 'rooms',
'extras' => 'extras'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
'arrival_time' => 'setArrivalTime',
'comment' => 'setComment',
'holder' => 'setHolder',
'payment' => 'setPayment',
'rooms' => 'setRooms',
'extras' => 'setExtras'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
'arrival_time' => 'getArrivalTime',
'comment' => 'getComment',
'holder' => 'getHolder',
'payment' => 'getPayment',
'rooms' => 'getRooms',
'extras' => 'getExtras'    ];

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
        return self::$swaggerModelName;
    }

    const LANGUAGE_EN = 'EN';
const LANGUAGE_FR = 'FR';
const LANGUAGE_AR = 'AR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_EN,
self::LANGUAGE_FR,
self::LANGUAGE_AR,        ];
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['arrival_time'] = isset($data['arrival_time']) ? $data['arrival_time'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['holder'] = isset($data['holder']) ? $data['holder'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['rooms'] = isset($data['rooms']) ? $data['rooms'] : null;
        $this->container['extras'] = isset($data['extras']) ? $data['extras'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($language) && !in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets arrival_time
     *
     * @return string
     */
    public function getArrivalTime()
    {
        return $this->container['arrival_time'];
    }

    /**
     * Sets arrival_time
     *
     * @param string $arrival_time arrival_time
     *
     * @return $this
     */
    public function setArrivalTime($arrival_time)
    {
        $this->container['arrival_time'] = $arrival_time;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets holder
     *
     * @return \Swagger\Client\Model\HotelConfirmationRequestHolder
     */
    public function getHolder()
    {
        return $this->container['holder'];
    }

    /**
     * Sets holder
     *
     * @param \Swagger\Client\Model\HotelConfirmationRequestHolder $holder holder
     *
     * @return $this
     */
    public function setHolder($holder)
    {
        $this->container['holder'] = $holder;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Swagger\Client\Model\HotelConfirmationRequestPayment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Swagger\Client\Model\HotelConfirmationRequestPayment $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets rooms
     *
     * @return \Swagger\Client\Model\HotelConfirmationRequestRooms[]
     */
    public function getRooms()
    {
        return $this->container['rooms'];
    }

    /**
     * Sets rooms
     *
     * @param \Swagger\Client\Model\HotelConfirmationRequestRooms[] $rooms rooms
     *
     * @return $this
     */
    public function setRooms($rooms)
    {
        $this->container['rooms'] = $rooms;

        return $this;
    }

    /**
     * Gets extras
     *
     * @return int[]
     */
    public function getExtras()
    {
        return $this->container['extras'];
    }

    /**
     * Sets extras
     *
     * @param int[] $extras extras
     *
     * @return $this
     */
    public function setExtras($extras)
    {
        $this->container['extras'] = $extras;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
