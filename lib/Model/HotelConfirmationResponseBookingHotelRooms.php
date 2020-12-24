<?php
/**
 * HotelConfirmationResponseBookingHotelRooms
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
 * HotelConfirmationResponseBookingHotelRooms Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HotelConfirmationResponseBookingHotelRooms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HotelConfirmationResponse_booking_hotel_rooms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'name' => 'string',
'rate_key' => 'string',
'board_name' => 'string',
'board_code' => 'string',
'price' => 'int',
'adults' => 'int',
'children' => 'int',
'cancellation_policies' => '\Swagger\Client\Model\CancellationPolicy[]',
'paxes' => '\Swagger\Client\Model\HotelConfirmationResponseBookingHotelPaxes[]',
'extras' => '\Swagger\Client\Model\HotelConfirmationResponseBookingHotelExtras[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'name' => null,
'rate_key' => null,
'board_name' => null,
'board_code' => null,
'price' => 'double',
'adults' => null,
'children' => null,
'cancellation_policies' => null,
'paxes' => null,
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
        'code' => 'code',
'name' => 'name',
'rate_key' => 'rateKey',
'board_name' => 'boardName',
'board_code' => 'boardCode',
'price' => 'price',
'adults' => 'adults',
'children' => 'children',
'cancellation_policies' => 'cancellationPolicies',
'paxes' => 'paxes',
'extras' => 'Extras'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'name' => 'setName',
'rate_key' => 'setRateKey',
'board_name' => 'setBoardName',
'board_code' => 'setBoardCode',
'price' => 'setPrice',
'adults' => 'setAdults',
'children' => 'setChildren',
'cancellation_policies' => 'setCancellationPolicies',
'paxes' => 'setPaxes',
'extras' => 'setExtras'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'name' => 'getName',
'rate_key' => 'getRateKey',
'board_name' => 'getBoardName',
'board_code' => 'getBoardCode',
'price' => 'getPrice',
'adults' => 'getAdults',
'children' => 'getChildren',
'cancellation_policies' => 'getCancellationPolicies',
'paxes' => 'getPaxes',
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rate_key'] = isset($data['rate_key']) ? $data['rate_key'] : null;
        $this->container['board_name'] = isset($data['board_name']) ? $data['board_name'] : null;
        $this->container['board_code'] = isset($data['board_code']) ? $data['board_code'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['adults'] = isset($data['adults']) ? $data['adults'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['cancellation_policies'] = isset($data['cancellation_policies']) ? $data['cancellation_policies'] : null;
        $this->container['paxes'] = isset($data['paxes']) ? $data['paxes'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rate_key
     *
     * @return string
     */
    public function getRateKey()
    {
        return $this->container['rate_key'];
    }

    /**
     * Sets rate_key
     *
     * @param string $rate_key rate_key
     *
     * @return $this
     */
    public function setRateKey($rate_key)
    {
        $this->container['rate_key'] = $rate_key;

        return $this;
    }

    /**
     * Gets board_name
     *
     * @return string
     */
    public function getBoardName()
    {
        return $this->container['board_name'];
    }

    /**
     * Sets board_name
     *
     * @param string $board_name board_name
     *
     * @return $this
     */
    public function setBoardName($board_name)
    {
        $this->container['board_name'] = $board_name;

        return $this;
    }

    /**
     * Gets board_code
     *
     * @return string
     */
    public function getBoardCode()
    {
        return $this->container['board_code'];
    }

    /**
     * Sets board_code
     *
     * @param string $board_code board_code
     *
     * @return $this
     */
    public function setBoardCode($board_code)
    {
        $this->container['board_code'] = $board_code;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets adults
     *
     * @return int
     */
    public function getAdults()
    {
        return $this->container['adults'];
    }

    /**
     * Sets adults
     *
     * @param int $adults adults
     *
     * @return $this
     */
    public function setAdults($adults)
    {
        $this->container['adults'] = $adults;

        return $this;
    }

    /**
     * Gets children
     *
     * @return int
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param int $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets cancellation_policies
     *
     * @return \Swagger\Client\Model\CancellationPolicy[]
     */
    public function getCancellationPolicies()
    {
        return $this->container['cancellation_policies'];
    }

    /**
     * Sets cancellation_policies
     *
     * @param \Swagger\Client\Model\CancellationPolicy[] $cancellation_policies cancellation_policies
     *
     * @return $this
     */
    public function setCancellationPolicies($cancellation_policies)
    {
        $this->container['cancellation_policies'] = $cancellation_policies;

        return $this;
    }

    /**
     * Gets paxes
     *
     * @return \Swagger\Client\Model\HotelConfirmationResponseBookingHotelPaxes[]
     */
    public function getPaxes()
    {
        return $this->container['paxes'];
    }

    /**
     * Sets paxes
     *
     * @param \Swagger\Client\Model\HotelConfirmationResponseBookingHotelPaxes[] $paxes paxes
     *
     * @return $this
     */
    public function setPaxes($paxes)
    {
        $this->container['paxes'] = $paxes;

        return $this;
    }

    /**
     * Gets extras
     *
     * @return \Swagger\Client\Model\HotelConfirmationResponseBookingHotelExtras[]
     */
    public function getExtras()
    {
        return $this->container['extras'];
    }

    /**
     * Sets extras
     *
     * @param \Swagger\Client\Model\HotelConfirmationResponseBookingHotelExtras[] $extras extras
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
