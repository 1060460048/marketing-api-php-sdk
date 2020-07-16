<?php
/**
 * ActionAggregationRule
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
 * ActionAggregationRule Class Doc Comment
 *
 * @category Class
 * @description 行为和参数聚合规则
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActionAggregationRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'action_aggregation_rule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actionType' => '\TencentAds\Model\ActionType',
        'customAction' => 'string',
        'aggregationGroup' => '\TencentAds\Model\AggregationMatcherGroup[]',
        'filterGroup' => '\TencentAds\Model\MiniParamMatcherGroup[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actionType' => null,
        'customAction' => null,
        'aggregationGroup' => null,
        'filterGroup' => null
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
        'actionType' => 'action_type',
        'customAction' => 'custom_action',
        'aggregationGroup' => 'aggregation_group',
        'filterGroup' => 'filter_group'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionType' => 'setActionType',
        'customAction' => 'setCustomAction',
        'aggregationGroup' => 'setAggregationGroup',
        'filterGroup' => 'setFilterGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionType' => 'getActionType',
        'customAction' => 'getCustomAction',
        'aggregationGroup' => 'getAggregationGroup',
        'filterGroup' => 'getFilterGroup'
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
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['customAction'] = isset($data['customAction']) ? $data['customAction'] : null;
        $this->container['aggregationGroup'] = isset($data['aggregationGroup']) ? $data['aggregationGroup'] : null;
        $this->container['filterGroup'] = isset($data['filterGroup']) ? $data['filterGroup'] : null;
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
     * Gets actionType
     *
     * @return \TencentAds\Model\ActionType
     */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
     * Sets actionType
     *
     * @param \TencentAds\Model\ActionType $actionType actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;

        return $this;
    }

    /**
     * Gets customAction
     *
     * @return string
     */
    public function getCustomAction()
    {
        return $this->container['customAction'];
    }

    /**
     * Sets customAction
     *
     * @param string $customAction customAction
     *
     * @return $this
     */
    public function setCustomAction($customAction)
    {
        $this->container['customAction'] = $customAction;

        return $this;
    }

    /**
     * Gets aggregationGroup
     *
     * @return \TencentAds\Model\AggregationMatcherGroup[]
     */
    public function getAggregationGroup()
    {
        return $this->container['aggregationGroup'];
    }

    /**
     * Sets aggregationGroup
     *
     * @param \TencentAds\Model\AggregationMatcherGroup[] $aggregationGroup aggregationGroup
     *
     * @return $this
     */
    public function setAggregationGroup($aggregationGroup)
    {
        $this->container['aggregationGroup'] = $aggregationGroup;

        return $this;
    }

    /**
     * Gets filterGroup
     *
     * @return \TencentAds\Model\MiniParamMatcherGroup[]
     */
    public function getFilterGroup()
    {
        return $this->container['filterGroup'];
    }

    /**
     * Sets filterGroup
     *
     * @param \TencentAds\Model\MiniParamMatcherGroup[] $filterGroup filterGroup
     *
     * @return $this
     */
    public function setFilterGroup($filterGroup)
    {
        $this->container['filterGroup'] = $filterGroup;

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

