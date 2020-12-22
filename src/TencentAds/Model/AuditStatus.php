<?php
/**
 * AuditStatus
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
 * AuditStatus Class Doc Comment
 *
 * @category Class
 * @description 商品审核状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuditStatus
{
    /**
     * Possible values of this enum
     */
    const AUDITSTATUS_NORMAL = 'AUDITSTATUS_NORMAL';
    const AUDITSTATUS_PENDING = 'AUDITSTATUS_PENDING';
    const PRODUCT_STATUS_PENDING = 'PRODUCT_STATUS_PENDING';
    const PRODUCT_STATUS_AUDITING = 'PRODUCT_STATUS_AUDITING';
    const PRODUCT_STATUS_PASS = 'PRODUCT_STATUS_PASS';
    const PRODUCT_STATUS_REJECTED = 'PRODUCT_STATUS_REJECTED';
    const RESOURCE_AUDIT_STATUS_UNKNOWN = 'RESOURCE_AUDIT_STATUS_UNKNOWN';
    const RESOURCE_AUDIT_STATUS_APPROVED = 'RESOURCE_AUDIT_STATUS_APPROVED';
    const RESOURCE_AUDIT_STATUS_PENDING = 'RESOURCE_AUDIT_STATUS_PENDING';
    const RESOURCE_AUDIT_STATUS_REJECTED = 'RESOURCE_AUDIT_STATUS_REJECTED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUDITSTATUS_NORMAL,
            self::AUDITSTATUS_PENDING,
            self::PRODUCT_STATUS_PENDING,
            self::PRODUCT_STATUS_AUDITING,
            self::PRODUCT_STATUS_PASS,
            self::PRODUCT_STATUS_REJECTED,
            self::RESOURCE_AUDIT_STATUS_UNKNOWN,
            self::RESOURCE_AUDIT_STATUS_APPROVED,
            self::RESOURCE_AUDIT_STATUS_PENDING,
            self::RESOURCE_AUDIT_STATUS_REJECTED,
        ];
    }
}


