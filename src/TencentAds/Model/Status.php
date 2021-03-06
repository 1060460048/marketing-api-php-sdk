<?php
/**
 * Status
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
 * Status Class Doc Comment
 *
 * @category Class
 * @description 任务状态枚举
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Status
{
    /**
     * Possible values of this enum
     */
    const PROCESSING = 'TASK_STATUS_PROCESSING';
    const SUCCESS = 'TASK_STATUS_SUCCESS';
    const FAIL = 'TASK_STATUS_FAIL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROCESSING,
            self::SUCCESS,
            self::FAIL,
        ];
    }
}


