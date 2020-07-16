<?php
/**
 * TaskType
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
 * TaskType Class Doc Comment
 *
 * @category Class
 * @description 任务类型（部分任务待废弃）具体请参考
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskType
{
    /**
     * Possible values of this enum
     */
    const TASK_TYPE_REPORT_AGENCY_ADVERTISER_HOURLY = 'TASK_TYPE_REPORT_AGENCY_ADVERTISER_HOURLY';
    const TASK_TYPE_TSA_IMEI = 'TASK_TYPE_TSA_IMEI';
    const TASK_TYPE_CREATIVE_PICTURE_REPORT = 'TASK_TYPE_CREATIVE_PICTURE_REPORT';
    const TASK_TYPE_AD_HOURLY_REPORT = 'TASK_TYPE_AD_HOURLY_REPORT';
    const TASK_TYPE_ADGROUP_HOURLY_REPORT = 'TASK_TYPE_ADGROUP_HOURLY_REPORT';
    const TASK_TYPE_WECHAT_MOMENTS_ADGROUP_HOURLY_REPORT = 'TASK_TYPE_WECHAT_MOMENTS_ADGROUP_HOURLY_REPORT';
    const TASK_TYPE_ADGROUP_DAILY_REPORT = 'TASK_TYPE_ADGROUP_DAILY_REPORT';
    const TASK_TYPE_INDUSTRY_CREATIVE_TEMPLATE_REPORT = 'TASK_TYPE_INDUSTRY_CREATIVE_TEMPLATE_REPORT';
    const TASK_TYPE_WECHAT_ADGROUP_HOURLY_REPORT = 'TASK_TYPE_WECHAT_ADGROUP_HOURLY_REPORT';
    const TASK_TYPE_WECHAT_ADGROUP_DAILY_REPORT = 'TASK_TYPE_WECHAT_ADGROUP_DAILY_REPORT';
    const TASK_TYPE_WECHAT_AD_HOURLY_REPORT = 'TASK_TYPE_WECHAT_AD_HOURLY_REPORT';
    const TASK_TYPE_WECHAT_AD_DAILY_REPORT = 'TASK_TYPE_WECHAT_AD_DAILY_REPORT';
    const TASK_TYPE_WECHAT_ADVERTISING_DATA = 'TASK_TYPE_WECHAT_ADVERTISING_DATA';
    const TASK_TYPE_POI_HOURLY_REPORT = 'TASK_TYPE_POI_HOURLY_REPORT';
    const TASK_TYPE_WECHAT_POI_HOURLY_REPORT = 'TASK_TYPE_WECHAT_POI_HOURLY_REPORT';
    const TASK_TYPE_ENCRYPTED_CUSTOM_IMEI = 'TASK_TYPE_ENCRYPTED_CUSTOM_IMEI';
    const TASK_TYPE_ENCRYPTED_TENCENT_IMEI = 'TASK_TYPE_ENCRYPTED_TENCENT_IMEI';
    const TASK_TYPE_CLEAR_TENCENT_IMEI = 'TASK_TYPE_CLEAR_TENCENT_IMEI';
    const TASK_TYPE_DEVICE_INFO = 'TASK_TYPE_DEVICE_INFO';
    const TASK_TYPE_REBATE_DETAIL = 'TASK_TYPE_REBATE_DETAIL';
    const TASK_TYPE_DEVICE_DETAIL_CPC = 'TASK_TYPE_DEVICE_DETAIL_CPC';
    const TASK_TYPE_OM_ADVERTISING_INFO = 'TASK_TYPE_OM_ADVERTISING_INFO';
    const TASK_TYPE_CREATE_ANDROID_CHANNEL_PACKAGE = 'TASK_TYPE_CREATE_ANDROID_CHANNEL_PACKAGE';
    const TASK_TYPE_UPDATE_ANDROID_CHANNEL_PACKAGE = 'TASK_TYPE_UPDATE_ANDROID_CHANNEL_PACKAGE';
    const TASK_TYPE_CREATE_ANDROID_UNION_CHANNEL_PACKAGE = 'TASK_TYPE_CREATE_ANDROID_UNION_CHANNEL_PACKAGE';
    const TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE = 'TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE';
    const TASK_TYPE_UNION_POSITION_REPORT = 'TASK_TYPE_UNION_POSITION_REPORT';
    const TASK_TYPE_BATCH_REQUEST = 'TASK_TYPE_BATCH_REQUEST';
    const TASK_TYPE_CLICK_FORWARDED_DATA = 'TASK_TYPE_CLICK_FORWARDED_DATA';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TASK_TYPE_REPORT_AGENCY_ADVERTISER_HOURLY,
            self::TASK_TYPE_TSA_IMEI,
            self::TASK_TYPE_CREATIVE_PICTURE_REPORT,
            self::TASK_TYPE_AD_HOURLY_REPORT,
            self::TASK_TYPE_ADGROUP_HOURLY_REPORT,
            self::TASK_TYPE_WECHAT_MOMENTS_ADGROUP_HOURLY_REPORT,
            self::TASK_TYPE_ADGROUP_DAILY_REPORT,
            self::TASK_TYPE_INDUSTRY_CREATIVE_TEMPLATE_REPORT,
            self::TASK_TYPE_WECHAT_ADGROUP_HOURLY_REPORT,
            self::TASK_TYPE_WECHAT_ADGROUP_DAILY_REPORT,
            self::TASK_TYPE_WECHAT_AD_HOURLY_REPORT,
            self::TASK_TYPE_WECHAT_AD_DAILY_REPORT,
            self::TASK_TYPE_WECHAT_ADVERTISING_DATA,
            self::TASK_TYPE_POI_HOURLY_REPORT,
            self::TASK_TYPE_WECHAT_POI_HOURLY_REPORT,
            self::TASK_TYPE_ENCRYPTED_CUSTOM_IMEI,
            self::TASK_TYPE_ENCRYPTED_TENCENT_IMEI,
            self::TASK_TYPE_CLEAR_TENCENT_IMEI,
            self::TASK_TYPE_DEVICE_INFO,
            self::TASK_TYPE_REBATE_DETAIL,
            self::TASK_TYPE_DEVICE_DETAIL_CPC,
            self::TASK_TYPE_OM_ADVERTISING_INFO,
            self::TASK_TYPE_CREATE_ANDROID_CHANNEL_PACKAGE,
            self::TASK_TYPE_UPDATE_ANDROID_CHANNEL_PACKAGE,
            self::TASK_TYPE_CREATE_ANDROID_UNION_CHANNEL_PACKAGE,
            self::TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE,
            self::TASK_TYPE_UNION_POSITION_REPORT,
            self::TASK_TYPE_BATCH_REQUEST,
            self::TASK_TYPE_CLICK_FORWARDED_DATA,
            self::UNKNOWN,
        ];
    }
}

