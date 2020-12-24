<?php
/**
 * FlightBookingSegments
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
 * FlightBookingSegments Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightBookingSegments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlightBooking_segments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arrival_terminal' => 'string',
'arrival_date' => 'string',
'arrival_location' => '\Swagger\Client\Model\FlightBookingArrivalLocation',
'arrival_time' => 'string',
'baggage_info' => 'string',
'booking_class' => 'string',
'bound_id' => 'int',
'carrier' => 'string',
'departure_terminal' => 'string',
'departure_date' => 'string',
'departure_location' => '\Swagger\Client\Model\FlightBookingArrivalLocation',
'departure_time' => 'string',
'flight_equipment' => 'string',
'flight_number' => 'string',
'id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arrival_terminal' => null,
'arrival_date' => null,
'arrival_location' => null,
'arrival_time' => null,
'baggage_info' => null,
'booking_class' => null,
'bound_id' => null,
'carrier' => null,
'departure_terminal' => null,
'departure_date' => null,
'departure_location' => null,
'departure_time' => null,
'flight_equipment' => null,
'flight_number' => null,
'id' => null    ];

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
        'arrival_terminal' => 'arrivalTerminal',
'arrival_date' => 'arrival_date',
'arrival_location' => 'arrival_location',
'arrival_time' => 'arrival_time',
'baggage_info' => 'baggage_info',
'booking_class' => 'booking_class',
'bound_id' => 'bound_id',
'carrier' => 'carrier',
'departure_terminal' => 'departureTerminal',
'departure_date' => 'departure_date',
'departure_location' => 'departure_location',
'departure_time' => 'departure_time',
'flight_equipment' => 'flight_equipment',
'flight_number' => 'flight_number',
'id' => 'id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrival_terminal' => 'setArrivalTerminal',
'arrival_date' => 'setArrivalDate',
'arrival_location' => 'setArrivalLocation',
'arrival_time' => 'setArrivalTime',
'baggage_info' => 'setBaggageInfo',
'booking_class' => 'setBookingClass',
'bound_id' => 'setBoundId',
'carrier' => 'setCarrier',
'departure_terminal' => 'setDepartureTerminal',
'departure_date' => 'setDepartureDate',
'departure_location' => 'setDepartureLocation',
'departure_time' => 'setDepartureTime',
'flight_equipment' => 'setFlightEquipment',
'flight_number' => 'setFlightNumber',
'id' => 'setId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrival_terminal' => 'getArrivalTerminal',
'arrival_date' => 'getArrivalDate',
'arrival_location' => 'getArrivalLocation',
'arrival_time' => 'getArrivalTime',
'baggage_info' => 'getBaggageInfo',
'booking_class' => 'getBookingClass',
'bound_id' => 'getBoundId',
'carrier' => 'getCarrier',
'departure_terminal' => 'getDepartureTerminal',
'departure_date' => 'getDepartureDate',
'departure_location' => 'getDepartureLocation',
'departure_time' => 'getDepartureTime',
'flight_equipment' => 'getFlightEquipment',
'flight_number' => 'getFlightNumber',
'id' => 'getId'    ];

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
        $this->container['arrival_terminal'] = isset($data['arrival_terminal']) ? $data['arrival_terminal'] : null;
        $this->container['arrival_date'] = isset($data['arrival_date']) ? $data['arrival_date'] : null;
        $this->container['arrival_location'] = isset($data['arrival_location']) ? $data['arrival_location'] : null;
        $this->container['arrival_time'] = isset($data['arrival_time']) ? $data['arrival_time'] : null;
        $this->container['baggage_info'] = isset($data['baggage_info']) ? $data['baggage_info'] : null;
        $this->container['booking_class'] = isset($data['booking_class']) ? $data['booking_class'] : null;
        $this->container['bound_id'] = isset($data['bound_id']) ? $data['bound_id'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['departure_terminal'] = isset($data['departure_terminal']) ? $data['departure_terminal'] : null;
        $this->container['departure_date'] = isset($data['departure_date']) ? $data['departure_date'] : null;
        $this->container['departure_location'] = isset($data['departure_location']) ? $data['departure_location'] : null;
        $this->container['departure_time'] = isset($data['departure_time']) ? $data['departure_time'] : null;
        $this->container['flight_equipment'] = isset($data['flight_equipment']) ? $data['flight_equipment'] : null;
        $this->container['flight_number'] = isset($data['flight_number']) ? $data['flight_number'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets arrival_terminal
     *
     * @return string
     */
    public function getArrivalTerminal()
    {
        return $this->container['arrival_terminal'];
    }

    /**
     * Sets arrival_terminal
     *
     * @param string $arrival_terminal arrival_terminal
     *
     * @return $this
     */
    public function setArrivalTerminal($arrival_terminal)
    {
        $this->container['arrival_terminal'] = $arrival_terminal;

        return $this;
    }

    /**
     * Gets arrival_date
     *
     * @return string
     */
    public function getArrivalDate()
    {
        return $this->container['arrival_date'];
    }

    /**
     * Sets arrival_date
     *
     * @param string $arrival_date arrival_date
     *
     * @return $this
     */
    public function setArrivalDate($arrival_date)
    {
        $this->container['arrival_date'] = $arrival_date;

        return $this;
    }

    /**
     * Gets arrival_location
     *
     * @return \Swagger\Client\Model\FlightBookingArrivalLocation
     */
    public function getArrivalLocation()
    {
        return $this->container['arrival_location'];
    }

    /**
     * Sets arrival_location
     *
     * @param \Swagger\Client\Model\FlightBookingArrivalLocation $arrival_location arrival_location
     *
     * @return $this
     */
    public function setArrivalLocation($arrival_location)
    {
        $this->container['arrival_location'] = $arrival_location;

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
     * Gets baggage_info
     *
     * @return string
     */
    public function getBaggageInfo()
    {
        return $this->container['baggage_info'];
    }

    /**
     * Sets baggage_info
     *
     * @param string $baggage_info baggage_info
     *
     * @return $this
     */
    public function setBaggageInfo($baggage_info)
    {
        $this->container['baggage_info'] = $baggage_info;

        return $this;
    }

    /**
     * Gets booking_class
     *
     * @return string
     */
    public function getBookingClass()
    {
        return $this->container['booking_class'];
    }

    /**
     * Sets booking_class
     *
     * @param string $booking_class booking_class
     *
     * @return $this
     */
    public function setBookingClass($booking_class)
    {
        $this->container['booking_class'] = $booking_class;

        return $this;
    }

    /**
     * Gets bound_id
     *
     * @return int
     */
    public function getBoundId()
    {
        return $this->container['bound_id'];
    }

    /**
     * Sets bound_id
     *
     * @param int $bound_id bound_id
     *
     * @return $this
     */
    public function setBoundId($bound_id)
    {
        $this->container['bound_id'] = $bound_id;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets departure_terminal
     *
     * @return string
     */
    public function getDepartureTerminal()
    {
        return $this->container['departure_terminal'];
    }

    /**
     * Sets departure_terminal
     *
     * @param string $departure_terminal departure_terminal
     *
     * @return $this
     */
    public function setDepartureTerminal($departure_terminal)
    {
        $this->container['departure_terminal'] = $departure_terminal;

        return $this;
    }

    /**
     * Gets departure_date
     *
     * @return string
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     *
     * @param string $departure_date departure_date
     *
     * @return $this
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
    }

    /**
     * Gets departure_location
     *
     * @return \Swagger\Client\Model\FlightBookingArrivalLocation
     */
    public function getDepartureLocation()
    {
        return $this->container['departure_location'];
    }

    /**
     * Sets departure_location
     *
     * @param \Swagger\Client\Model\FlightBookingArrivalLocation $departure_location departure_location
     *
     * @return $this
     */
    public function setDepartureLocation($departure_location)
    {
        $this->container['departure_location'] = $departure_location;

        return $this;
    }

    /**
     * Gets departure_time
     *
     * @return string
     */
    public function getDepartureTime()
    {
        return $this->container['departure_time'];
    }

    /**
     * Sets departure_time
     *
     * @param string $departure_time departure_time
     *
     * @return $this
     */
    public function setDepartureTime($departure_time)
    {
        $this->container['departure_time'] = $departure_time;

        return $this;
    }

    /**
     * Gets flight_equipment
     *
     * @return string
     */
    public function getFlightEquipment()
    {
        return $this->container['flight_equipment'];
    }

    /**
     * Sets flight_equipment
     *
     * @param string $flight_equipment flight_equipment
     *
     * @return $this
     */
    public function setFlightEquipment($flight_equipment)
    {
        $this->container['flight_equipment'] = $flight_equipment;

        return $this;
    }

    /**
     * Gets flight_number
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->container['flight_number'];
    }

    /**
     * Sets flight_number
     *
     * @param string $flight_number flight_number
     *
     * @return $this
     */
    public function setFlightNumber($flight_number)
    {
        $this->container['flight_number'] = $flight_number;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
