<?php
/**
 * PageType
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
 * PageType Class Doc Comment
 *
 * @category Class
 * @description 蹊径落地页类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageType
{
    /**
     * Possible values of this enum
     */
    const DEFAULT_H5 = 'XJ_DEFAULT_H5';
    const ANDROID_APP_H5 = 'XJ_ANDROID_APP_H5';
    const IOS_APP_H5 = 'XJ_IOS_APP_H5';
    const WEBSITE_H5 = 'XJ_WEBSITE_H5';
    const ANDROID_APP_NATIVE = 'XJ_ANDROID_APP_NATIVE';
    const IOS_APP_NATIVE = 'XJ_IOS_APP_NATIVE';
    const WEBSITE_NATIVE = 'XJ_WEBSITE_NATIVE';
    const FENGLING_LBS = 'XJ_FENGLING_LBS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEFAULT_H5,
            self::ANDROID_APP_H5,
            self::IOS_APP_H5,
            self::WEBSITE_H5,
            self::ANDROID_APP_NATIVE,
            self::IOS_APP_NATIVE,
            self::WEBSITE_NATIVE,
            self::FENGLING_LBS,
        ];
    }
}

