<?php
/**
 * HotelCancellationResponseBookingHotel
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
 * HotelCancellationResponseBookingHotel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HotelCancellationResponseBookingHotel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HotelCancellationResponse_booking_hotel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'name' => 'string',
'description' => 'string',
'provider_name' => 'string',
'address' => 'string',
'country' => 'string',
'phone' => 'string',
'mail' => 'string',
'fax' => 'string',
'image' => 'string',
'category' => 'string',
'zone_code' => 'string',
'latitude' => 'string',
'longitude' => 'string',
'zone_name' => 'string',
'rooms' => '\Swagger\Client\Model\HotelCancellationResponseBookingHotelRooms[]',
'extras' => '\Swagger\Client\Model\HotelConfirmationResponseBookingHotelExtras[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'name' => null,
'description' => null,
'provider_name' => null,
'address' => null,
'country' => null,
'phone' => null,
'mail' => null,
'fax' => null,
'image' => null,
'category' => null,
'zone_code' => null,
'latitude' => null,
'longitude' => null,
'zone_name' => null,
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
        'code' => 'code',
'name' => 'name',
'description' => 'description',
'provider_name' => 'providerName',
'address' => 'address',
'country' => 'country',
'phone' => 'phone',
'mail' => 'mail',
'fax' => 'fax',
'image' => 'image',
'category' => 'category',
'zone_code' => 'zoneCode',
'latitude' => 'latitude',
'longitude' => 'longitude',
'zone_name' => 'zoneName',
'rooms' => 'rooms',
'extras' => 'Extras'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'name' => 'setName',
'description' => 'setDescription',
'provider_name' => 'setProviderName',
'address' => 'setAddress',
'country' => 'setCountry',
'phone' => 'setPhone',
'mail' => 'setMail',
'fax' => 'setFax',
'image' => 'setImage',
'category' => 'setCategory',
'zone_code' => 'setZoneCode',
'latitude' => 'setLatitude',
'longitude' => 'setLongitude',
'zone_name' => 'setZoneName',
'rooms' => 'setRooms',
'extras' => 'setExtras'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'name' => 'getName',
'description' => 'getDescription',
'provider_name' => 'getProviderName',
'address' => 'getAddress',
'country' => 'getCountry',
'phone' => 'getPhone',
'mail' => 'getMail',
'fax' => 'getFax',
'image' => 'getImage',
'category' => 'getCategory',
'zone_code' => 'getZoneCode',
'latitude' => 'getLatitude',
'longitude' => 'getLongitude',
'zone_name' => 'getZoneName',
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

    const CATEGORY__1EST = '1est';
const CATEGORY__2EST = '2est';
const CATEGORY__3SET = '3set';
const CATEGORY__4EST = '4est';
const CATEGORY__5EST = '5est';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY__1EST,
self::CATEGORY__2EST,
self::CATEGORY__3SET,
self::CATEGORY__4EST,
self::CATEGORY__5EST,        ];
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['provider_name'] = isset($data['provider_name']) ? $data['provider_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mail'] = isset($data['mail']) ? $data['mail'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['zone_code'] = isset($data['zone_code']) ? $data['zone_code'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['zone_name'] = isset($data['zone_name']) ? $data['zone_name'] : null;
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

        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets provider_name
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->container['provider_name'];
    }

    /**
     * Sets provider_name
     *
     * @param string $provider_name provider_name
     *
     * @return $this
     */
    public function setProviderName($provider_name)
    {
        $this->container['provider_name'] = $provider_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     *
     * @param string $mail mail
     *
     * @return $this
     */
    public function setMail($mail)
    {
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($category) && !in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets zone_code
     *
     * @return string
     */
    public function getZoneCode()
    {
        return $this->container['zone_code'];
    }

    /**
     * Sets zone_code
     *
     * @param string $zone_code zone_code
     *
     * @return $this
     */
    public function setZoneCode($zone_code)
    {
        $this->container['zone_code'] = $zone_code;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets zone_name
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->container['zone_name'];
    }

    /**
     * Sets zone_name
     *
     * @param string $zone_name zone_name
     *
     * @return $this
     */
    public function setZoneName($zone_name)
    {
        $this->container['zone_name'] = $zone_name;

        return $this;
    }

    /**
     * Gets rooms
     *
     * @return \Swagger\Client\Model\HotelCancellationResponseBookingHotelRooms[]
     */
    public function getRooms()
    {
        return $this->container['rooms'];
    }

    /**
     * Sets rooms
     *
     * @param \Swagger\Client\Model\HotelCancellationResponseBookingHotelRooms[] $rooms rooms
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
