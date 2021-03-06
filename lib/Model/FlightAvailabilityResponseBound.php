<?php
/**
 * FlightAvailabilityResponseBound
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
 * FlightAvailabilityResponseBound Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightAvailabilityResponseBound implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlightAvailabilityResponseBound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'eft' => 'string',
'airlines' => 'string[]',
'arrival' => '\Swagger\Client\Model\FlightDepartureAndArrivale',
'day_difference' => 'int',
'departure' => '\Swagger\Client\Model\FlightDepartureAndArrivale',
'flight_duration' => 'int',
'flight_id' => 'int',
'nb_stops' => 'int',
'segments' => '\Swagger\Client\Model\FlightAvailabilitySegment[]',
'stop_duration' => 'int',
'stopover_airports' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'eft' => null,
'airlines' => null,
'arrival' => null,
'day_difference' => null,
'departure' => null,
'flight_duration' => null,
'flight_id' => null,
'nb_stops' => null,
'segments' => null,
'stop_duration' => null,
'stopover_airports' => null    ];

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
        'eft' => 'EFT',
'airlines' => 'airlines',
'arrival' => 'arrival',
'day_difference' => 'dayDifference',
'departure' => 'departure',
'flight_duration' => 'flightDuration',
'flight_id' => 'flightId',
'nb_stops' => 'nbStops',
'segments' => 'segments',
'stop_duration' => 'stopDuration',
'stopover_airports' => 'stopoverAirports'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eft' => 'setEft',
'airlines' => 'setAirlines',
'arrival' => 'setArrival',
'day_difference' => 'setDayDifference',
'departure' => 'setDeparture',
'flight_duration' => 'setFlightDuration',
'flight_id' => 'setFlightId',
'nb_stops' => 'setNbStops',
'segments' => 'setSegments',
'stop_duration' => 'setStopDuration',
'stopover_airports' => 'setStopoverAirports'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eft' => 'getEft',
'airlines' => 'getAirlines',
'arrival' => 'getArrival',
'day_difference' => 'getDayDifference',
'departure' => 'getDeparture',
'flight_duration' => 'getFlightDuration',
'flight_id' => 'getFlightId',
'nb_stops' => 'getNbStops',
'segments' => 'getSegments',
'stop_duration' => 'getStopDuration',
'stopover_airports' => 'getStopoverAirports'    ];

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
        $this->container['eft'] = isset($data['eft']) ? $data['eft'] : null;
        $this->container['airlines'] = isset($data['airlines']) ? $data['airlines'] : null;
        $this->container['arrival'] = isset($data['arrival']) ? $data['arrival'] : null;
        $this->container['day_difference'] = isset($data['day_difference']) ? $data['day_difference'] : null;
        $this->container['departure'] = isset($data['departure']) ? $data['departure'] : null;
        $this->container['flight_duration'] = isset($data['flight_duration']) ? $data['flight_duration'] : null;
        $this->container['flight_id'] = isset($data['flight_id']) ? $data['flight_id'] : null;
        $this->container['nb_stops'] = isset($data['nb_stops']) ? $data['nb_stops'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['stop_duration'] = isset($data['stop_duration']) ? $data['stop_duration'] : null;
        $this->container['stopover_airports'] = isset($data['stopover_airports']) ? $data['stopover_airports'] : null;
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
     * Gets eft
     *
     * @return string
     */
    public function getEft()
    {
        return $this->container['eft'];
    }

    /**
     * Sets eft
     *
     * @param string $eft eft
     *
     * @return $this
     */
    public function setEft($eft)
    {
        $this->container['eft'] = $eft;

        return $this;
    }

    /**
     * Gets airlines
     *
     * @return string[]
     */
    public function getAirlines()
    {
        return $this->container['airlines'];
    }

    /**
     * Sets airlines
     *
     * @param string[] $airlines airlines
     *
     * @return $this
     */
    public function setAirlines($airlines)
    {
        $this->container['airlines'] = $airlines;

        return $this;
    }

    /**
     * Gets arrival
     *
     * @return \Swagger\Client\Model\FlightDepartureAndArrivale
     */
    public function getArrival()
    {
        return $this->container['arrival'];
    }

    /**
     * Sets arrival
     *
     * @param \Swagger\Client\Model\FlightDepartureAndArrivale $arrival arrival
     *
     * @return $this
     */
    public function setArrival($arrival)
    {
        $this->container['arrival'] = $arrival;

        return $this;
    }

    /**
     * Gets day_difference
     *
     * @return int
     */
    public function getDayDifference()
    {
        return $this->container['day_difference'];
    }

    /**
     * Sets day_difference
     *
     * @param int $day_difference day_difference
     *
     * @return $this
     */
    public function setDayDifference($day_difference)
    {
        $this->container['day_difference'] = $day_difference;

        return $this;
    }

    /**
     * Gets departure
     *
     * @return \Swagger\Client\Model\FlightDepartureAndArrivale
     */
    public function getDeparture()
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param \Swagger\Client\Model\FlightDepartureAndArrivale $departure departure
     *
     * @return $this
     */
    public function setDeparture($departure)
    {
        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets flight_duration
     *
     * @return int
     */
    public function getFlightDuration()
    {
        return $this->container['flight_duration'];
    }

    /**
     * Sets flight_duration
     *
     * @param int $flight_duration flight_duration
     *
     * @return $this
     */
    public function setFlightDuration($flight_duration)
    {
        $this->container['flight_duration'] = $flight_duration;

        return $this;
    }

    /**
     * Gets flight_id
     *
     * @return int
     */
    public function getFlightId()
    {
        return $this->container['flight_id'];
    }

    /**
     * Sets flight_id
     *
     * @param int $flight_id flight_id
     *
     * @return $this
     */
    public function setFlightId($flight_id)
    {
        $this->container['flight_id'] = $flight_id;

        return $this;
    }

    /**
     * Gets nb_stops
     *
     * @return int
     */
    public function getNbStops()
    {
        return $this->container['nb_stops'];
    }

    /**
     * Sets nb_stops
     *
     * @param int $nb_stops nb_stops
     *
     * @return $this
     */
    public function setNbStops($nb_stops)
    {
        $this->container['nb_stops'] = $nb_stops;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \Swagger\Client\Model\FlightAvailabilitySegment[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \Swagger\Client\Model\FlightAvailabilitySegment[] $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets stop_duration
     *
     * @return int
     */
    public function getStopDuration()
    {
        return $this->container['stop_duration'];
    }

    /**
     * Sets stop_duration
     *
     * @param int $stop_duration stop_duration
     *
     * @return $this
     */
    public function setStopDuration($stop_duration)
    {
        $this->container['stop_duration'] = $stop_duration;

        return $this;
    }

    /**
     * Gets stopover_airports
     *
     * @return string[]
     */
    public function getStopoverAirports()
    {
        return $this->container['stopover_airports'];
    }

    /**
     * Sets stopover_airports
     *
     * @param string[] $stopover_airports stopover_airports
     *
     * @return $this
     */
    public function setStopoverAirports($stopover_airports)
    {
        $this->container['stopover_airports'] = $stopover_airports;

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
