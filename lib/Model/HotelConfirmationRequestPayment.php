<?php
/**
 * HotelConfirmationRequestPayment
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
 * HotelConfirmationRequestPayment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HotelConfirmationRequestPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HotelConfirmationRequest_payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'method' => 'string',
'cc_type' => 'string',
'cc_number' => 'string',
'cc_code' => 'string',
'cc_ecp_month' => 'string',
'cc_exp_year' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'method' => null,
'cc_type' => null,
'cc_number' => null,
'cc_code' => null,
'cc_ecp_month' => null,
'cc_exp_year' => null    ];

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
        'method' => 'method',
'cc_type' => 'ccType',
'cc_number' => 'ccNumber',
'cc_code' => 'ccCode',
'cc_ecp_month' => 'ccEcpMonth',
'cc_exp_year' => 'ccExpYear'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method' => 'setMethod',
'cc_type' => 'setCcType',
'cc_number' => 'setCcNumber',
'cc_code' => 'setCcCode',
'cc_ecp_month' => 'setCcEcpMonth',
'cc_exp_year' => 'setCcExpYear'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method' => 'getMethod',
'cc_type' => 'getCcType',
'cc_number' => 'getCcNumber',
'cc_code' => 'getCcCode',
'cc_ecp_month' => 'getCcEcpMonth',
'cc_exp_year' => 'getCcExpYear'    ];

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

    const METHOD_CC = 'cc';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_CC,        ];
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
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['cc_type'] = isset($data['cc_type']) ? $data['cc_type'] : null;
        $this->container['cc_number'] = isset($data['cc_number']) ? $data['cc_number'] : null;
        $this->container['cc_code'] = isset($data['cc_code']) ? $data['cc_code'] : null;
        $this->container['cc_ecp_month'] = isset($data['cc_ecp_month']) ? $data['cc_ecp_month'] : null;
        $this->container['cc_exp_year'] = isset($data['cc_exp_year']) ? $data['cc_exp_year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'method', must be one of '%s'",
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
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($method) && !in_array($method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets cc_type
     *
     * @return string
     */
    public function getCcType()
    {
        return $this->container['cc_type'];
    }

    /**
     * Sets cc_type
     *
     * @param string $cc_type cc_type
     *
     * @return $this
     */
    public function setCcType($cc_type)
    {
        $this->container['cc_type'] = $cc_type;

        return $this;
    }

    /**
     * Gets cc_number
     *
     * @return string
     */
    public function getCcNumber()
    {
        return $this->container['cc_number'];
    }

    /**
     * Sets cc_number
     *
     * @param string $cc_number cc_number
     *
     * @return $this
     */
    public function setCcNumber($cc_number)
    {
        $this->container['cc_number'] = $cc_number;

        return $this;
    }

    /**
     * Gets cc_code
     *
     * @return string
     */
    public function getCcCode()
    {
        return $this->container['cc_code'];
    }

    /**
     * Sets cc_code
     *
     * @param string $cc_code cc_code
     *
     * @return $this
     */
    public function setCcCode($cc_code)
    {
        $this->container['cc_code'] = $cc_code;

        return $this;
    }

    /**
     * Gets cc_ecp_month
     *
     * @return string
     */
    public function getCcEcpMonth()
    {
        return $this->container['cc_ecp_month'];
    }

    /**
     * Sets cc_ecp_month
     *
     * @param string $cc_ecp_month cc_ecp_month
     *
     * @return $this
     */
    public function setCcEcpMonth($cc_ecp_month)
    {
        $this->container['cc_ecp_month'] = $cc_ecp_month;

        return $this;
    }

    /**
     * Gets cc_exp_year
     *
     * @return string
     */
    public function getCcExpYear()
    {
        return $this->container['cc_exp_year'];
    }

    /**
     * Sets cc_exp_year
     *
     * @param string $cc_exp_year cc_exp_year
     *
     * @return $this
     */
    public function setCcExpYear($cc_exp_year)
    {
        $this->container['cc_exp_year'] = $cc_exp_year;

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
