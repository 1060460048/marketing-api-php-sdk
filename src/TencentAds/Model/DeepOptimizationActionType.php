<?php
/**
 * DeepOptimizationActionType
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
use \TencentAds\ObjectSerializer;

/**
 * DeepOptimizationActionType Class Doc Comment
 *
 * @category Class
 * @description oCPC/oCPM深度优化方式配置 当深度优化类型&#x3D;优化深度转化行为时，此前支持选择“优化方式”；目前深度优化能力升级，两阶段/双目标优化方式已进行合并，因此优化方式字段即将下线，可以不再输入。如调用该字段，系统会默认按两阶段优化方式进行创建， &lt;a href&#x3D;&#39;https://e.qq.com/ads/learning/data/optimization/skill/012/&#39; target&#x3D;&#39;_blank&#39;&gt;了解更多&lt;/a&gt;
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeepOptimizationActionType
{
    /**
     * Possible values of this enum
     */
    const DOUBLE_GOAL_BID = 'DEEP_OPTIMIZATION_ACTION_TYPE_DOUBLE_GOAL_BID';
    const TWO_STAGE_BID = 'DEEP_OPTIMIZATION_ACTION_TYPE_TWO_STAGE_BID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOUBLE_GOAL_BID,
            self::TWO_STAGE_BID,
        ];
    }
}


