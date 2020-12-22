<?php
/**
 * AgencyInnerTransferAddResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * AgencyInnerTransferAddResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgencyInnerTransferAddResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgencyInnerTransferAddResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fundTypeFrom' => '\TencentAds\Model\AccountTypeMapInnerTransfer',
        'fundTypeTo' => '\TencentAds\Model\AccountTypeMapInnerTransfer',
        'amount' => 'int',
        'externalBillNo' => 'string',
        'isRepeated' => '\TencentAds\Model\Boolean',
        'time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fundTypeFrom' => null,
        'fundTypeTo' => null,
        'amount' => 'int64',
        'externalBillNo' => null,
        'isRepeated' => null,
        'time' => 'int64'
    ];

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
        'fundTypeFrom' => 'fund_type_from',
        'fundTypeTo' => 'fund_type_to',
        'amount' => 'amount',
        'externalBillNo' => 'external_bill_no',
        'isRepeated' => 'is_repeated',
        'time' => 'time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fundTypeFrom' => 'setFundTypeFrom',
        'fundTypeTo' => 'setFundTypeTo',
        'amount' => 'setAmount',
        'externalBillNo' => 'setExternalBillNo',
        'isRepeated' => 'setIsRepeated',
        'time' => 'setTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fundTypeFrom' => 'getFundTypeFrom',
        'fundTypeTo' => 'getFundTypeTo',
        'amount' => 'getAmount',
        'externalBillNo' => 'getExternalBillNo',
        'isRepeated' => 'getIsRepeated',
        'time' => 'getTime'
    ];

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
        $this->container['fundTypeFrom'] = isset($data['fundTypeFrom']) ? $data['fundTypeFrom'] : null;
        $this->container['fundTypeTo'] = isset($data['fundTypeTo']) ? $data['fundTypeTo'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['externalBillNo'] = isset($data['externalBillNo']) ? $data['externalBillNo'] : null;
        $this->container['isRepeated'] = isset($data['isRepeated']) ? $data['isRepeated'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
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
     * Gets fundTypeFrom
     *
     * @return \TencentAds\Model\AccountTypeMapInnerTransfer
     */
    public function getFundTypeFrom()
    {
        return $this->container['fundTypeFrom'];
    }

    /**
     * Sets fundTypeFrom
     *
     * @param \TencentAds\Model\AccountTypeMapInnerTransfer $fundTypeFrom fundTypeFrom
     *
     * @return $this
     */
    public function setFundTypeFrom($fundTypeFrom)
    {
        $this->container['fundTypeFrom'] = $fundTypeFrom;

        return $this;
    }

    /**
     * Gets fundTypeTo
     *
     * @return \TencentAds\Model\AccountTypeMapInnerTransfer
     */
    public function getFundTypeTo()
    {
        return $this->container['fundTypeTo'];
    }

    /**
     * Sets fundTypeTo
     *
     * @param \TencentAds\Model\AccountTypeMapInnerTransfer $fundTypeTo fundTypeTo
     *
     * @return $this
     */
    public function setFundTypeTo($fundTypeTo)
    {
        $this->container['fundTypeTo'] = $fundTypeTo;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets externalBillNo
     *
     * @return string
     */
    public function getExternalBillNo()
    {
        return $this->container['externalBillNo'];
    }

    /**
     * Sets externalBillNo
     *
     * @param string $externalBillNo externalBillNo
     *
     * @return $this
     */
    public function setExternalBillNo($externalBillNo)
    {
        $this->container['externalBillNo'] = $externalBillNo;

        return $this;
    }

    /**
     * Gets isRepeated
     *
     * @return \TencentAds\Model\Boolean
     */
    public function getIsRepeated()
    {
        return $this->container['isRepeated'];
    }

    /**
     * Sets isRepeated
     *
     * @param \TencentAds\Model\Boolean $isRepeated isRepeated
     *
     * @return $this
     */
    public function setIsRepeated($isRepeated)
    {
        $this->container['isRepeated'] = $isRepeated;

        return $this;
    }

    /**
     * Gets time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

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


