<?php
/**
 * FlightAvailabilitySubRecommendation
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
 * FlightAvailabilitySubRecommendation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightAvailabilitySubRecommendation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlightAvailabilitySubRecommendation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'baggage' => '\Swagger\Client\Model\FlightBaggageAllowance',
'bounds' => '\Swagger\Client\Model\FlightAvailabilitySubRecommendationBounds[]',
'fare_rules' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'baggage' => null,
'bounds' => null,
'fare_rules' => null    ];

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
        'baggage' => 'baggage',
'bounds' => 'bounds',
'fare_rules' => 'fareRules'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'baggage' => 'setBaggage',
'bounds' => 'setBounds',
'fare_rules' => 'setFareRules'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'baggage' => 'getBaggage',
'bounds' => 'getBounds',
'fare_rules' => 'getFareRules'    ];

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
        $this->container['baggage'] = isset($data['baggage']) ? $data['baggage'] : null;
        $this->container['bounds'] = isset($data['bounds']) ? $data['bounds'] : null;
        $this->container['fare_rules'] = isset($data['fare_rules']) ? $data['fare_rules'] : null;
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
     * Gets baggage
     *
     * @return \Swagger\Client\Model\FlightBaggageAllowance
     */
    public function getBaggage()
    {
        return $this->container['baggage'];
    }

    /**
     * Sets baggage
     *
     * @param \Swagger\Client\Model\FlightBaggageAllowance $baggage baggage
     *
     * @return $this
     */
    public function setBaggage($baggage)
    {
        $this->container['baggage'] = $baggage;

        return $this;
    }

    /**
     * Gets bounds
     *
     * @return \Swagger\Client\Model\FlightAvailabilitySubRecommendationBounds[]
     */
    public function getBounds()
    {
        return $this->container['bounds'];
    }

    /**
     * Sets bounds
     *
     * @param \Swagger\Client\Model\FlightAvailabilitySubRecommendationBounds[] $bounds bounds
     *
     * @return $this
     */
    public function setBounds($bounds)
    {
        $this->container['bounds'] = $bounds;

        return $this;
    }

    /**
     * Gets fare_rules
     *
     * @return string[]
     */
    public function getFareRules()
    {
        return $this->container['fare_rules'];
    }

    /**
     * Sets fare_rules
     *
     * @param string[] $fare_rules fare_rules
     *
     * @return $this
     */
    public function setFareRules($fare_rules)
    {
        $this->container['fare_rules'] = $fare_rules;

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
