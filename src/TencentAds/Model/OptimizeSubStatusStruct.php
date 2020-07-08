<?php
/**
 * OptimizeSubStatusStruct
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
 * OptimizeSubStatusStruct Class Doc Comment
 *
 * @category Class
 * @description 优化状态（0: 无需优化 &#39;OPTIMIZE_STATUS_NONE&#39;, 1: 待优化 &#39;OPTIMIZE_STATUS_PENDING&#39;, 2: 已优化 &#39;OPTIMIZE_STATUS_FINISHED&#39;）
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OptimizeSubStatusStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'optimize_sub_status_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'targeting' => '\TencentAds\Model\OptimizeStatus',
        'targetingExpand' => '\TencentAds\Model\OptimizeStatus',
        'targetingLocard' => '\TencentAds\Model\OptimizeStatus',
        'bid' => '\TencentAds\Model\OptimizeStatus',
        'bidStrategy' => '\TencentAds\Model\OptimizeStatus',
        'bidAmount' => '\TencentAds\Model\OptimizeStatus',
        'budget' => '\TencentAds\Model\OptimizeStatus',
        'dailyBudget' => '\TencentAds\Model\OptimizeStatus',
        'accountBalance' => '\TencentAds\Model\OptimizeStatus',
        'targetingStatusDesc' => 'string',
        'targetingExpandStatusDesc' => 'string',
        'targetingLocardStatusDesc' => 'string',
        'bidStatusDesc' => 'string',
        'bidStrategyStatusDesc' => 'string',
        'bidAmountStatusDesc' => 'string',
        'budgetStatusDesc' => 'string',
        'dailyBudgetStatusDesc' => 'string',
        'accountBalanceStatusDesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'targeting' => null,
        'targetingExpand' => null,
        'targetingLocard' => null,
        'bid' => null,
        'bidStrategy' => null,
        'bidAmount' => null,
        'budget' => null,
        'dailyBudget' => null,
        'accountBalance' => null,
        'targetingStatusDesc' => null,
        'targetingExpandStatusDesc' => null,
        'targetingLocardStatusDesc' => null,
        'bidStatusDesc' => null,
        'bidStrategyStatusDesc' => null,
        'bidAmountStatusDesc' => null,
        'budgetStatusDesc' => null,
        'dailyBudgetStatusDesc' => null,
        'accountBalanceStatusDesc' => null
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
        'targeting' => 'targeting',
        'targetingExpand' => 'targeting_expand',
        'targetingLocard' => 'targeting_locard',
        'bid' => 'bid',
        'bidStrategy' => 'bid_strategy',
        'bidAmount' => 'bid_amount',
        'budget' => 'budget',
        'dailyBudget' => 'daily_budget',
        'accountBalance' => 'account_balance',
        'targetingStatusDesc' => 'targeting_status_desc',
        'targetingExpandStatusDesc' => 'targeting_expand_status_desc',
        'targetingLocardStatusDesc' => 'targeting_locard_status_desc',
        'bidStatusDesc' => 'bid_status_desc',
        'bidStrategyStatusDesc' => 'bid_strategy_status_desc',
        'bidAmountStatusDesc' => 'bid_amount_status_desc',
        'budgetStatusDesc' => 'budget_status_desc',
        'dailyBudgetStatusDesc' => 'daily_budget_status_desc',
        'accountBalanceStatusDesc' => 'account_balance_status_desc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'targeting' => 'setTargeting',
        'targetingExpand' => 'setTargetingExpand',
        'targetingLocard' => 'setTargetingLocard',
        'bid' => 'setBid',
        'bidStrategy' => 'setBidStrategy',
        'bidAmount' => 'setBidAmount',
        'budget' => 'setBudget',
        'dailyBudget' => 'setDailyBudget',
        'accountBalance' => 'setAccountBalance',
        'targetingStatusDesc' => 'setTargetingStatusDesc',
        'targetingExpandStatusDesc' => 'setTargetingExpandStatusDesc',
        'targetingLocardStatusDesc' => 'setTargetingLocardStatusDesc',
        'bidStatusDesc' => 'setBidStatusDesc',
        'bidStrategyStatusDesc' => 'setBidStrategyStatusDesc',
        'bidAmountStatusDesc' => 'setBidAmountStatusDesc',
        'budgetStatusDesc' => 'setBudgetStatusDesc',
        'dailyBudgetStatusDesc' => 'setDailyBudgetStatusDesc',
        'accountBalanceStatusDesc' => 'setAccountBalanceStatusDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'targeting' => 'getTargeting',
        'targetingExpand' => 'getTargetingExpand',
        'targetingLocard' => 'getTargetingLocard',
        'bid' => 'getBid',
        'bidStrategy' => 'getBidStrategy',
        'bidAmount' => 'getBidAmount',
        'budget' => 'getBudget',
        'dailyBudget' => 'getDailyBudget',
        'accountBalance' => 'getAccountBalance',
        'targetingStatusDesc' => 'getTargetingStatusDesc',
        'targetingExpandStatusDesc' => 'getTargetingExpandStatusDesc',
        'targetingLocardStatusDesc' => 'getTargetingLocardStatusDesc',
        'bidStatusDesc' => 'getBidStatusDesc',
        'bidStrategyStatusDesc' => 'getBidStrategyStatusDesc',
        'bidAmountStatusDesc' => 'getBidAmountStatusDesc',
        'budgetStatusDesc' => 'getBudgetStatusDesc',
        'dailyBudgetStatusDesc' => 'getDailyBudgetStatusDesc',
        'accountBalanceStatusDesc' => 'getAccountBalanceStatusDesc'
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
        $this->container['targeting'] = isset($data['targeting']) ? $data['targeting'] : null;
        $this->container['targetingExpand'] = isset($data['targetingExpand']) ? $data['targetingExpand'] : null;
        $this->container['targetingLocard'] = isset($data['targetingLocard']) ? $data['targetingLocard'] : null;
        $this->container['bid'] = isset($data['bid']) ? $data['bid'] : null;
        $this->container['bidStrategy'] = isset($data['bidStrategy']) ? $data['bidStrategy'] : null;
        $this->container['bidAmount'] = isset($data['bidAmount']) ? $data['bidAmount'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
        $this->container['accountBalance'] = isset($data['accountBalance']) ? $data['accountBalance'] : null;
        $this->container['targetingStatusDesc'] = isset($data['targetingStatusDesc']) ? $data['targetingStatusDesc'] : null;
        $this->container['targetingExpandStatusDesc'] = isset($data['targetingExpandStatusDesc']) ? $data['targetingExpandStatusDesc'] : null;
        $this->container['targetingLocardStatusDesc'] = isset($data['targetingLocardStatusDesc']) ? $data['targetingLocardStatusDesc'] : null;
        $this->container['bidStatusDesc'] = isset($data['bidStatusDesc']) ? $data['bidStatusDesc'] : null;
        $this->container['bidStrategyStatusDesc'] = isset($data['bidStrategyStatusDesc']) ? $data['bidStrategyStatusDesc'] : null;
        $this->container['bidAmountStatusDesc'] = isset($data['bidAmountStatusDesc']) ? $data['bidAmountStatusDesc'] : null;
        $this->container['budgetStatusDesc'] = isset($data['budgetStatusDesc']) ? $data['budgetStatusDesc'] : null;
        $this->container['dailyBudgetStatusDesc'] = isset($data['dailyBudgetStatusDesc']) ? $data['dailyBudgetStatusDesc'] : null;
        $this->container['accountBalanceStatusDesc'] = isset($data['accountBalanceStatusDesc']) ? $data['accountBalanceStatusDesc'] : null;
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
     * Gets targeting
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \TencentAds\Model\OptimizeStatus $targeting targeting
     *
     * @return $this
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets targetingExpand
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getTargetingExpand()
    {
        return $this->container['targetingExpand'];
    }

    /**
     * Sets targetingExpand
     *
     * @param \TencentAds\Model\OptimizeStatus $targetingExpand targetingExpand
     *
     * @return $this
     */
    public function setTargetingExpand($targetingExpand)
    {
        $this->container['targetingExpand'] = $targetingExpand;

        return $this;
    }

    /**
     * Gets targetingLocard
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getTargetingLocard()
    {
        return $this->container['targetingLocard'];
    }

    /**
     * Sets targetingLocard
     *
     * @param \TencentAds\Model\OptimizeStatus $targetingLocard targetingLocard
     *
     * @return $this
     */
    public function setTargetingLocard($targetingLocard)
    {
        $this->container['targetingLocard'] = $targetingLocard;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param \TencentAds\Model\OptimizeStatus $bid bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets bidStrategy
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getBidStrategy()
    {
        return $this->container['bidStrategy'];
    }

    /**
     * Sets bidStrategy
     *
     * @param \TencentAds\Model\OptimizeStatus $bidStrategy bidStrategy
     *
     * @return $this
     */
    public function setBidStrategy($bidStrategy)
    {
        $this->container['bidStrategy'] = $bidStrategy;

        return $this;
    }

    /**
     * Gets bidAmount
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getBidAmount()
    {
        return $this->container['bidAmount'];
    }

    /**
     * Sets bidAmount
     *
     * @param \TencentAds\Model\OptimizeStatus $bidAmount bidAmount
     *
     * @return $this
     */
    public function setBidAmount($bidAmount)
    {
        $this->container['bidAmount'] = $bidAmount;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \TencentAds\Model\OptimizeStatus $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets dailyBudget
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getDailyBudget()
    {
        return $this->container['dailyBudget'];
    }

    /**
     * Sets dailyBudget
     *
     * @param \TencentAds\Model\OptimizeStatus $dailyBudget dailyBudget
     *
     * @return $this
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->container['dailyBudget'] = $dailyBudget;

        return $this;
    }

    /**
     * Gets accountBalance
     *
     * @return \TencentAds\Model\OptimizeStatus
     */
    public function getAccountBalance()
    {
        return $this->container['accountBalance'];
    }

    /**
     * Sets accountBalance
     *
     * @param \TencentAds\Model\OptimizeStatus $accountBalance accountBalance
     *
     * @return $this
     */
    public function setAccountBalance($accountBalance)
    {
        $this->container['accountBalance'] = $accountBalance;

        return $this;
    }

    /**
     * Gets targetingStatusDesc
     *
     * @return string
     */
    public function getTargetingStatusDesc()
    {
        return $this->container['targetingStatusDesc'];
    }

    /**
     * Sets targetingStatusDesc
     *
     * @param string $targetingStatusDesc targetingStatusDesc
     *
     * @return $this
     */
    public function setTargetingStatusDesc($targetingStatusDesc)
    {
        $this->container['targetingStatusDesc'] = $targetingStatusDesc;

        return $this;
    }

    /**
     * Gets targetingExpandStatusDesc
     *
     * @return string
     */
    public function getTargetingExpandStatusDesc()
    {
        return $this->container['targetingExpandStatusDesc'];
    }

    /**
     * Sets targetingExpandStatusDesc
     *
     * @param string $targetingExpandStatusDesc targetingExpandStatusDesc
     *
     * @return $this
     */
    public function setTargetingExpandStatusDesc($targetingExpandStatusDesc)
    {
        $this->container['targetingExpandStatusDesc'] = $targetingExpandStatusDesc;

        return $this;
    }

    /**
     * Gets targetingLocardStatusDesc
     *
     * @return string
     */
    public function getTargetingLocardStatusDesc()
    {
        return $this->container['targetingLocardStatusDesc'];
    }

    /**
     * Sets targetingLocardStatusDesc
     *
     * @param string $targetingLocardStatusDesc targetingLocardStatusDesc
     *
     * @return $this
     */
    public function setTargetingLocardStatusDesc($targetingLocardStatusDesc)
    {
        $this->container['targetingLocardStatusDesc'] = $targetingLocardStatusDesc;

        return $this;
    }

    /**
     * Gets bidStatusDesc
     *
     * @return string
     */
    public function getBidStatusDesc()
    {
        return $this->container['bidStatusDesc'];
    }

    /**
     * Sets bidStatusDesc
     *
     * @param string $bidStatusDesc bidStatusDesc
     *
     * @return $this
     */
    public function setBidStatusDesc($bidStatusDesc)
    {
        $this->container['bidStatusDesc'] = $bidStatusDesc;

        return $this;
    }

    /**
     * Gets bidStrategyStatusDesc
     *
     * @return string
     */
    public function getBidStrategyStatusDesc()
    {
        return $this->container['bidStrategyStatusDesc'];
    }

    /**
     * Sets bidStrategyStatusDesc
     *
     * @param string $bidStrategyStatusDesc bidStrategyStatusDesc
     *
     * @return $this
     */
    public function setBidStrategyStatusDesc($bidStrategyStatusDesc)
    {
        $this->container['bidStrategyStatusDesc'] = $bidStrategyStatusDesc;

        return $this;
    }

    /**
     * Gets bidAmountStatusDesc
     *
     * @return string
     */
    public function getBidAmountStatusDesc()
    {
        return $this->container['bidAmountStatusDesc'];
    }

    /**
     * Sets bidAmountStatusDesc
     *
     * @param string $bidAmountStatusDesc bidAmountStatusDesc
     *
     * @return $this
     */
    public function setBidAmountStatusDesc($bidAmountStatusDesc)
    {
        $this->container['bidAmountStatusDesc'] = $bidAmountStatusDesc;

        return $this;
    }

    /**
     * Gets budgetStatusDesc
     *
     * @return string
     */
    public function getBudgetStatusDesc()
    {
        return $this->container['budgetStatusDesc'];
    }

    /**
     * Sets budgetStatusDesc
     *
     * @param string $budgetStatusDesc budgetStatusDesc
     *
     * @return $this
     */
    public function setBudgetStatusDesc($budgetStatusDesc)
    {
        $this->container['budgetStatusDesc'] = $budgetStatusDesc;

        return $this;
    }

    /**
     * Gets dailyBudgetStatusDesc
     *
     * @return string
     */
    public function getDailyBudgetStatusDesc()
    {
        return $this->container['dailyBudgetStatusDesc'];
    }

    /**
     * Sets dailyBudgetStatusDesc
     *
     * @param string $dailyBudgetStatusDesc dailyBudgetStatusDesc
     *
     * @return $this
     */
    public function setDailyBudgetStatusDesc($dailyBudgetStatusDesc)
    {
        $this->container['dailyBudgetStatusDesc'] = $dailyBudgetStatusDesc;

        return $this;
    }

    /**
     * Gets accountBalanceStatusDesc
     *
     * @return string
     */
    public function getAccountBalanceStatusDesc()
    {
        return $this->container['accountBalanceStatusDesc'];
    }

    /**
     * Sets accountBalanceStatusDesc
     *
     * @param string $accountBalanceStatusDesc accountBalanceStatusDesc
     *
     * @return $this
     */
    public function setAccountBalanceStatusDesc($accountBalanceStatusDesc)
    {
        $this->container['accountBalanceStatusDesc'] = $accountBalanceStatusDesc;

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


