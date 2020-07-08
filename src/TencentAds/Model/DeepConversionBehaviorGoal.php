<?php
/**
 * DeepConversionBehaviorGoal
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
 * DeepConversionBehaviorGoal Class Doc Comment
 *
 * @category Class
 * @description 优化转化行为目标。
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeepConversionBehaviorGoal
{
    /**
     * Possible values of this enum
     */
    const ONE_DAY_RETENTION = 'OPTIMIZATIONGOAL_ONE_DAY_RETENTION';
    const APP_PURCHASE = 'OPTIMIZATIONGOAL_APP_PURCHASE';
    const ECOMMERCE_ORDER = 'OPTIMIZATIONGOAL_ECOMMERCE_ORDER';
    const ECOMMERCE_CHECKOUT = 'OPTIMIZATIONGOAL_ECOMMERCE_CHECKOUT';
    const PROMOTION_CLICK_KEY_PAGE = 'OPTIMIZATIONGOAL_PROMOTION_CLICK_KEY_PAGE';
    const ONLINE_CONSULTATION = 'OPTIMIZATIONGOAL_ONLINE_CONSULTATION';
    const TELEPHONE_CONSULTATION = 'OPTIMIZATIONGOAL_TELEPHONE_CONSULTATION';
    const DELIVERY = 'OPTIMIZATIONGOAL_DELIVERY';
    const PAGE_CONFIRM_EFFECTIVE_LEADS = 'OPTIMIZATIONGOAL_PAGE_CONFIRM_EFFECTIVE_LEADS';
    const FIRST_PURCHASE = 'OPTIMIZATIONGOAL_FIRST_PURCHASE';
    const VIEW_COMMODITY_PAGE = 'OPTIMIZATIONGOAL_VIEW_COMMODITY_PAGE';
    const CREDIT = 'OPTIMIZATIONGOAL_CREDIT';
    const WITHDRAW_DEPOSITS = 'OPTIMIZATIONGOAL_WITHDRAW_DEPOSITS';
    const APPLY = 'OPTIMIZATIONGOAL_APPLY';
    const PRE_CREDIT = 'OPTIMIZATIONGOAL_PRE_CREDIT';
    const APP_REGISTER = 'OPTIMIZATIONGOAL_APP_REGISTER';
    const LEADS = 'OPTIMIZATIONGOAL_LEADS';
    const PAGE_RESERVATION = 'OPTIMIZATIONGOAL_PAGE_RESERVATION';
    const CONFIRM_EFFECTIVE_LEADS_CONSULT = 'OPTIMIZATIONGOAL_CONFIRM_EFFECTIVE_LEADS_CONSULT';
    const CONFIRM_EFFECTIVE_LEADS_PHONE = 'OPTIMIZATIONGOAL_CONFIRM_EFFECTIVE_LEADS_PHONE';
    const PURCHASE_MEMBER_CARD = 'OPTIMIZATIONGOAL_PURCHASE_MEMBER_CARD';
    const CONFIRM_EFFECTIVE_LEADS_RESERVATION = 'OPTIMIZATIONGOAL_CONFIRM_EFFECTIVE_LEADS_RESERVATION';
    const LEADS_COLLECT = 'OPTIMIZATIONGOAL_LEADS_COLLECT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONE_DAY_RETENTION,
            self::APP_PURCHASE,
            self::ECOMMERCE_ORDER,
            self::ECOMMERCE_CHECKOUT,
            self::PROMOTION_CLICK_KEY_PAGE,
            self::ONLINE_CONSULTATION,
            self::TELEPHONE_CONSULTATION,
            self::DELIVERY,
            self::PAGE_CONFIRM_EFFECTIVE_LEADS,
            self::FIRST_PURCHASE,
            self::VIEW_COMMODITY_PAGE,
            self::CREDIT,
            self::WITHDRAW_DEPOSITS,
            self::APPLY,
            self::PRE_CREDIT,
            self::APP_REGISTER,
            self::LEADS,
            self::PAGE_RESERVATION,
            self::CONFIRM_EFFECTIVE_LEADS_CONSULT,
            self::CONFIRM_EFFECTIVE_LEADS_PHONE,
            self::PURCHASE_MEMBER_CARD,
            self::CONFIRM_EFFECTIVE_LEADS_RESERVATION,
            self::LEADS_COLLECT,
        ];
    }
}


