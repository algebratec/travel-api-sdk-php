<?php
/**
 * FlightAvailabilityFareDetails
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
 * FlightAvailabilityFareDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightAvailabilityFareDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlightAvailabilityFareDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_status' => 'string',
'cabin' => 'string',
'fares' => '\Swagger\Client\Model\FlightAvailabilityFareDetailsFares',
'reservation_class' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available_status' => null,
'cabin' => null,
'fares' => null,
'reservation_class' => null    ];

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
        'available_status' => 'availableStatus',
'cabin' => 'cabin',
'fares' => 'fares',
'reservation_class' => 'reservationClass'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_status' => 'setAvailableStatus',
'cabin' => 'setCabin',
'fares' => 'setFares',
'reservation_class' => 'setReservationClass'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_status' => 'getAvailableStatus',
'cabin' => 'getCabin',
'fares' => 'getFares',
'reservation_class' => 'getReservationClass'    ];

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
        $this->container['available_status'] = isset($data['available_status']) ? $data['available_status'] : null;
        $this->container['cabin'] = isset($data['cabin']) ? $data['cabin'] : null;
        $this->container['fares'] = isset($data['fares']) ? $data['fares'] : null;
        $this->container['reservation_class'] = isset($data['reservation_class']) ? $data['reservation_class'] : null;
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
     * Gets available_status
     *
     * @return string
     */
    public function getAvailableStatus()
    {
        return $this->container['available_status'];
    }

    /**
     * Sets available_status
     *
     * @param string $available_status available_status
     *
     * @return $this
     */
    public function setAvailableStatus($available_status)
    {
        $this->container['available_status'] = $available_status;

        return $this;
    }

    /**
     * Gets cabin
     *
     * @return string
     */
    public function getCabin()
    {
        return $this->container['cabin'];
    }

    /**
     * Sets cabin
     *
     * @param string $cabin cabin
     *
     * @return $this
     */
    public function setCabin($cabin)
    {
        $this->container['cabin'] = $cabin;

        return $this;
    }

    /**
     * Gets fares
     *
     * @return \Swagger\Client\Model\FlightAvailabilityFareDetailsFares
     */
    public function getFares()
    {
        return $this->container['fares'];
    }

    /**
     * Sets fares
     *
     * @param \Swagger\Client\Model\FlightAvailabilityFareDetailsFares $fares fares
     *
     * @return $this
     */
    public function setFares($fares)
    {
        $this->container['fares'] = $fares;

        return $this;
    }

    /**
     * Gets reservation_class
     *
     * @return string
     */
    public function getReservationClass()
    {
        return $this->container['reservation_class'];
    }

    /**
     * Sets reservation_class
     *
     * @param string $reservation_class reservation_class
     *
     * @return $this
     */
    public function setReservationClass($reservation_class)
    {
        $this->container['reservation_class'] = $reservation_class;

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
