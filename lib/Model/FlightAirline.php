<?php
/**
 * FlightAirline
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
 * FlightAirline Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightAirline implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlightAirline';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'airline' => 'string',
'best_price' => 'int',
'callsign' => 'string',
'code' => 'string',
'country_of_origin' => 'string',
'iata' => 'string',
'icao' => 'string',
'name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'airline' => null,
'best_price' => null,
'callsign' => null,
'code' => null,
'country_of_origin' => null,
'iata' => null,
'icao' => null,
'name' => null    ];

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
        'airline' => 'airline',
'best_price' => 'bestPrice',
'callsign' => 'callsign',
'code' => 'code',
'country_of_origin' => 'country_of_Origin',
'iata' => 'iata',
'icao' => 'icao',
'name' => 'name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'airline' => 'setAirline',
'best_price' => 'setBestPrice',
'callsign' => 'setCallsign',
'code' => 'setCode',
'country_of_origin' => 'setCountryOfOrigin',
'iata' => 'setIata',
'icao' => 'setIcao',
'name' => 'setName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'airline' => 'getAirline',
'best_price' => 'getBestPrice',
'callsign' => 'getCallsign',
'code' => 'getCode',
'country_of_origin' => 'getCountryOfOrigin',
'iata' => 'getIata',
'icao' => 'getIcao',
'name' => 'getName'    ];

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
        $this->container['airline'] = isset($data['airline']) ? $data['airline'] : null;
        $this->container['best_price'] = isset($data['best_price']) ? $data['best_price'] : null;
        $this->container['callsign'] = isset($data['callsign']) ? $data['callsign'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['country_of_origin'] = isset($data['country_of_origin']) ? $data['country_of_origin'] : null;
        $this->container['iata'] = isset($data['iata']) ? $data['iata'] : null;
        $this->container['icao'] = isset($data['icao']) ? $data['icao'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
     * Gets airline
     *
     * @return string
     */
    public function getAirline()
    {
        return $this->container['airline'];
    }

    /**
     * Sets airline
     *
     * @param string $airline airline
     *
     * @return $this
     */
    public function setAirline($airline)
    {
        $this->container['airline'] = $airline;

        return $this;
    }

    /**
     * Gets best_price
     *
     * @return int
     */
    public function getBestPrice()
    {
        return $this->container['best_price'];
    }

    /**
     * Sets best_price
     *
     * @param int $best_price best_price
     *
     * @return $this
     */
    public function setBestPrice($best_price)
    {
        $this->container['best_price'] = $best_price;

        return $this;
    }

    /**
     * Gets callsign
     *
     * @return string
     */
    public function getCallsign()
    {
        return $this->container['callsign'];
    }

    /**
     * Sets callsign
     *
     * @param string $callsign callsign
     *
     * @return $this
     */
    public function setCallsign($callsign)
    {
        $this->container['callsign'] = $callsign;

        return $this;
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
     * Gets country_of_origin
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->container['country_of_origin'];
    }

    /**
     * Sets country_of_origin
     *
     * @param string $country_of_origin country_of_origin
     *
     * @return $this
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        $this->container['country_of_origin'] = $country_of_origin;

        return $this;
    }

    /**
     * Gets iata
     *
     * @return string
     */
    public function getIata()
    {
        return $this->container['iata'];
    }

    /**
     * Sets iata
     *
     * @param string $iata iata
     *
     * @return $this
     */
    public function setIata($iata)
    {
        $this->container['iata'] = $iata;

        return $this;
    }

    /**
     * Gets icao
     *
     * @return string
     */
    public function getIcao()
    {
        return $this->container['icao'];
    }

    /**
     * Sets icao
     *
     * @param string $icao icao
     *
     * @return $this
     */
    public function setIcao($icao)
    {
        $this->container['icao'] = $icao;

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
