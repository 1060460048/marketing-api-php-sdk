<?php
/**
 * UserIdType
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
 * UserIdType Class Doc Comment
 *
 * @category Class
 * @description 号码包用户ID类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserIdType
{
    /**
     * Possible values of this enum
     */
    const GDT_OPENID = 'GDT_OPENID';
    const HASH_IDFA = 'HASH_IDFA';
    const HASH_IMEI = 'HASH_IMEI';
    const HASH_MAC = 'HASH_MAC';
    const HASH_MOBILE_PHONE = 'HASH_MOBILE_PHONE';
    const HASH_QQ = 'HASH_QQ';
    const IDFA = 'IDFA';
    const IMEI = 'IMEI';
    const MAC = 'MAC';
    const MOBILE_QQ_OPENID = 'MOBILE_QQ_OPENID';
    const QQ = 'QQ';
    const WX_OPENID = 'WX_OPENID';
    const WECHAT_OPENID = 'WECHAT_OPENID';
    const SALTED_HASH_IMEI = 'SALTED_HASH_IMEI';
    const SALTED_HASH_IDFA = 'SALTED_HASH_IDFA';
    const OAID = 'OAID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GDT_OPENID,
            self::HASH_IDFA,
            self::HASH_IMEI,
            self::HASH_MAC,
            self::HASH_MOBILE_PHONE,
            self::HASH_QQ,
            self::IDFA,
            self::IMEI,
            self::MAC,
            self::MOBILE_QQ_OPENID,
            self::QQ,
            self::WX_OPENID,
            self::WECHAT_OPENID,
            self::SALTED_HASH_IMEI,
            self::SALTED_HASH_IDFA,
            self::OAID,
        ];
    }
}


