<?php
/**
 * FlightBaggageAllowance
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
 * FlightBaggageAllowance Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightBaggageAllowance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlightBaggageAllowance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'free_allowance' => 'int',
'quantity_code' => 'string',
'unit_qualifier' => 'string',
'with_baggage' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'free_allowance' => null,
'quantity_code' => null,
'unit_qualifier' => null,
'with_baggage' => null    ];

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
        'free_allowance' => 'freeAllowance',
'quantity_code' => 'quantityCode',
'unit_qualifier' => 'unitQualifier',
'with_baggage' => 'withBaggage'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'free_allowance' => 'setFreeAllowance',
'quantity_code' => 'setQuantityCode',
'unit_qualifier' => 'setUnitQualifier',
'with_baggage' => 'setWithBaggage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'free_allowance' => 'getFreeAllowance',
'quantity_code' => 'getQuantityCode',
'unit_qualifier' => 'getUnitQualifier',
'with_baggage' => 'getWithBaggage'    ];

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
        $this->container['free_allowance'] = isset($data['free_allowance']) ? $data['free_allowance'] : null;
        $this->container['quantity_code'] = isset($data['quantity_code']) ? $data['quantity_code'] : null;
        $this->container['unit_qualifier'] = isset($data['unit_qualifier']) ? $data['unit_qualifier'] : null;
        $this->container['with_baggage'] = isset($data['with_baggage']) ? $data['with_baggage'] : null;
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
     * Gets free_allowance
     *
     * @return int
     */
    public function getFreeAllowance()
    {
        return $this->container['free_allowance'];
    }

    /**
     * Sets free_allowance
     *
     * @param int $free_allowance free_allowance
     *
     * @return $this
     */
    public function setFreeAllowance($free_allowance)
    {
        $this->container['free_allowance'] = $free_allowance;

        return $this;
    }

    /**
     * Gets quantity_code
     *
     * @return string
     */
    public function getQuantityCode()
    {
        return $this->container['quantity_code'];
    }

    /**
     * Sets quantity_code
     *
     * @param string $quantity_code quantity_code
     *
     * @return $this
     */
    public function setQuantityCode($quantity_code)
    {
        $this->container['quantity_code'] = $quantity_code;

        return $this;
    }

    /**
     * Gets unit_qualifier
     *
     * @return string
     */
    public function getUnitQualifier()
    {
        return $this->container['unit_qualifier'];
    }

    /**
     * Sets unit_qualifier
     *
     * @param string $unit_qualifier unit_qualifier
     *
     * @return $this
     */
    public function setUnitQualifier($unit_qualifier)
    {
        $this->container['unit_qualifier'] = $unit_qualifier;

        return $this;
    }

    /**
     * Gets with_baggage
     *
     * @return bool
     */
    public function getWithBaggage()
    {
        return $this->container['with_baggage'];
    }

    /**
     * Sets with_baggage
     *
     * @param bool $with_baggage with_baggage
     *
     * @return $this
     */
    public function setWithBaggage($with_baggage)
    {
        $this->container['with_baggage'] = $with_baggage;

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
