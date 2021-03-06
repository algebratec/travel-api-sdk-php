<?php
/**
 * HotelAvailabilityResponseHotelsHotels
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
 * HotelAvailabilityResponseHotelsHotels Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HotelAvailabilityResponseHotelsHotels implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HotelAvailabilityResponse_hotels_hotels';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'provider_code' => 'string',
'contract_code' => 'string',
'supplier_code' => 'string',
'country' => 'string',
'name' => 'string',
'description' => 'string',
'provider_name' => 'string',
'address' => 'string',
'phone' => 'string',
'mail' => 'string',
'fax' => 'string',
'image' => 'string',
'images' => '\Swagger\Client\Model\HotelAvailabilityResponseHotelsImages[]',
'zone_code' => 'string',
'category' => 'string',
'zone_name' => 'string',
'comments' => 'string',
'latitude' => 'string',
'longitude' => 'string',
'rooms' => '\Swagger\Client\Model\HotelAvailabilityResponseHotelsRooms[]',
'accommodations' => '\Swagger\Client\Model\HotelAvailabilityResponseHotelsAccommodations[]',
'themes' => '\Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[]',
'facilities' => '\Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[]',
'prohibitions' => '\Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[]',
'extras' => '\Swagger\Client\Model\HotelAvailabilityResponseHotelsExtras[]',
'combinations' => '\Swagger\Client\Model\HotelAvailabilityResponseHotelsCombinations[]',
'currency' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'provider_code' => null,
'contract_code' => null,
'supplier_code' => null,
'country' => null,
'name' => null,
'description' => null,
'provider_name' => null,
'address' => null,
'phone' => null,
'mail' => null,
'fax' => null,
'image' => null,
'images' => null,
'zone_code' => null,
'category' => null,
'zone_name' => null,
'comments' => null,
'latitude' => null,
'longitude' => null,
'rooms' => null,
'accommodations' => null,
'themes' => null,
'facilities' => null,
'prohibitions' => null,
'extras' => null,
'combinations' => null,
'currency' => null    ];

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
'provider_code' => 'providerCode',
'contract_code' => 'contractCode',
'supplier_code' => 'supplierCode',
'country' => 'country',
'name' => 'name',
'description' => 'description',
'provider_name' => 'providerName',
'address' => 'address',
'phone' => 'phone',
'mail' => 'mail',
'fax' => 'fax',
'image' => 'image',
'images' => 'images',
'zone_code' => 'zoneCode',
'category' => 'category',
'zone_name' => 'zoneName',
'comments' => 'comments',
'latitude' => 'latitude',
'longitude' => 'longitude',
'rooms' => 'rooms',
'accommodations' => 'accommodations',
'themes' => 'themes',
'facilities' => 'facilities',
'prohibitions' => 'prohibitions',
'extras' => 'Extras',
'combinations' => 'Combinations',
'currency' => 'currency'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'provider_code' => 'setProviderCode',
'contract_code' => 'setContractCode',
'supplier_code' => 'setSupplierCode',
'country' => 'setCountry',
'name' => 'setName',
'description' => 'setDescription',
'provider_name' => 'setProviderName',
'address' => 'setAddress',
'phone' => 'setPhone',
'mail' => 'setMail',
'fax' => 'setFax',
'image' => 'setImage',
'images' => 'setImages',
'zone_code' => 'setZoneCode',
'category' => 'setCategory',
'zone_name' => 'setZoneName',
'comments' => 'setComments',
'latitude' => 'setLatitude',
'longitude' => 'setLongitude',
'rooms' => 'setRooms',
'accommodations' => 'setAccommodations',
'themes' => 'setThemes',
'facilities' => 'setFacilities',
'prohibitions' => 'setProhibitions',
'extras' => 'setExtras',
'combinations' => 'setCombinations',
'currency' => 'setCurrency'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'provider_code' => 'getProviderCode',
'contract_code' => 'getContractCode',
'supplier_code' => 'getSupplierCode',
'country' => 'getCountry',
'name' => 'getName',
'description' => 'getDescription',
'provider_name' => 'getProviderName',
'address' => 'getAddress',
'phone' => 'getPhone',
'mail' => 'getMail',
'fax' => 'getFax',
'image' => 'getImage',
'images' => 'getImages',
'zone_code' => 'getZoneCode',
'category' => 'getCategory',
'zone_name' => 'getZoneName',
'comments' => 'getComments',
'latitude' => 'getLatitude',
'longitude' => 'getLongitude',
'rooms' => 'getRooms',
'accommodations' => 'getAccommodations',
'themes' => 'getThemes',
'facilities' => 'getFacilities',
'prohibitions' => 'getProhibitions',
'extras' => 'getExtras',
'combinations' => 'getCombinations',
'currency' => 'getCurrency'    ];

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
const CURRENCY_DZD = 'DZD';
const CURRENCY_EUR = 'EUR';
const CURRENCY_DTN = 'DTN';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_DZD,
self::CURRENCY_EUR,
self::CURRENCY_DTN,        ];
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
        $this->container['provider_code'] = isset($data['provider_code']) ? $data['provider_code'] : null;
        $this->container['contract_code'] = isset($data['contract_code']) ? $data['contract_code'] : null;
        $this->container['supplier_code'] = isset($data['supplier_code']) ? $data['supplier_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['provider_name'] = isset($data['provider_name']) ? $data['provider_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mail'] = isset($data['mail']) ? $data['mail'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['zone_code'] = isset($data['zone_code']) ? $data['zone_code'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['zone_name'] = isset($data['zone_name']) ? $data['zone_name'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['rooms'] = isset($data['rooms']) ? $data['rooms'] : null;
        $this->container['accommodations'] = isset($data['accommodations']) ? $data['accommodations'] : null;
        $this->container['themes'] = isset($data['themes']) ? $data['themes'] : null;
        $this->container['facilities'] = isset($data['facilities']) ? $data['facilities'] : null;
        $this->container['prohibitions'] = isset($data['prohibitions']) ? $data['prohibitions'] : null;
        $this->container['extras'] = isset($data['extras']) ? $data['extras'] : null;
        $this->container['combinations'] = isset($data['combinations']) ? $data['combinations'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
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
     * Gets provider_code
     *
     * @return string
     */
    public function getProviderCode()
    {
        return $this->container['provider_code'];
    }

    /**
     * Sets provider_code
     *
     * @param string $provider_code provider_code
     *
     * @return $this
     */
    public function setProviderCode($provider_code)
    {
        $this->container['provider_code'] = $provider_code;

        return $this;
    }

    /**
     * Gets contract_code
     *
     * @return string
     */
    public function getContractCode()
    {
        return $this->container['contract_code'];
    }

    /**
     * Sets contract_code
     *
     * @param string $contract_code contract_code
     *
     * @return $this
     */
    public function setContractCode($contract_code)
    {
        $this->container['contract_code'] = $contract_code;

        return $this;
    }

    /**
     * Gets supplier_code
     *
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->container['supplier_code'];
    }

    /**
     * Sets supplier_code
     *
     * @param string $supplier_code supplier_code
     *
     * @return $this
     */
    public function setSupplierCode($supplier_code)
    {
        $this->container['supplier_code'] = $supplier_code;

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
     * Gets images
     *
     * @return \Swagger\Client\Model\HotelAvailabilityResponseHotelsImages[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Swagger\Client\Model\HotelAvailabilityResponseHotelsImages[] $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

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
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

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
     * Gets rooms
     *
     * @return \Swagger\Client\Model\HotelAvailabilityResponseHotelsRooms[]
     */
    public function getRooms()
    {
        return $this->container['rooms'];
    }

    /**
     * Sets rooms
     *
     * @param \Swagger\Client\Model\HotelAvailabilityResponseHotelsRooms[] $rooms rooms
     *
     * @return $this
     */
    public function setRooms($rooms)
    {
        $this->container['rooms'] = $rooms;

        return $this;
    }

    /**
     * Gets accommodations
     *
     * @return \Swagger\Client\Model\HotelAvailabilityResponseHotelsAccommodations[]
     */
    public function getAccommodations()
    {
        return $this->container['accommodations'];
    }

    /**
     * Sets accommodations
     *
     * @param \Swagger\Client\Model\HotelAvailabilityResponseHotelsAccommodations[] $accommodations accommodations
     *
     * @return $this
     */
    public function setAccommodations($accommodations)
    {
        $this->container['accommodations'] = $accommodations;

        return $this;
    }

    /**
     * Gets themes
     *
     * @return \Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[]
     */
    public function getThemes()
    {
        return $this->container['themes'];
    }

    /**
     * Sets themes
     *
     * @param \Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[] $themes themes
     *
     * @return $this
     */
    public function setThemes($themes)
    {
        $this->container['themes'] = $themes;

        return $this;
    }

    /**
     * Gets facilities
     *
     * @return \Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[]
     */
    public function getFacilities()
    {
        return $this->container['facilities'];
    }

    /**
     * Sets facilities
     *
     * @param \Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[] $facilities facilities
     *
     * @return $this
     */
    public function setFacilities($facilities)
    {
        $this->container['facilities'] = $facilities;

        return $this;
    }

    /**
     * Gets prohibitions
     *
     * @return \Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[]
     */
    public function getProhibitions()
    {
        return $this->container['prohibitions'];
    }

    /**
     * Sets prohibitions
     *
     * @param \Swagger\Client\Model\HotelAvailabilityResponseHotelsThemes[] $prohibitions prohibitions
     *
     * @return $this
     */
    public function setProhibitions($prohibitions)
    {
        $this->container['prohibitions'] = $prohibitions;

        return $this;
    }

    /**
     * Gets extras
     *
     * @return \Swagger\Client\Model\HotelAvailabilityResponseHotelsExtras[]
     */
    public function getExtras()
    {
        return $this->container['extras'];
    }

    /**
     * Sets extras
     *
     * @param \Swagger\Client\Model\HotelAvailabilityResponseHotelsExtras[] $extras extras
     *
     * @return $this
     */
    public function setExtras($extras)
    {
        $this->container['extras'] = $extras;

        return $this;
    }

    /**
     * Gets combinations
     *
     * @return \Swagger\Client\Model\HotelAvailabilityResponseHotelsCombinations[]
     */
    public function getCombinations()
    {
        return $this->container['combinations'];
    }

    /**
     * Sets combinations
     *
     * @param \Swagger\Client\Model\HotelAvailabilityResponseHotelsCombinations[] $combinations combinations
     *
     * @return $this
     */
    public function setCombinations($combinations)
    {
        $this->container['combinations'] = $combinations;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($currency) && !in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

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
