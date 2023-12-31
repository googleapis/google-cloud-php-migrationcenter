<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\VmwareEnginePreferences;

use UnexpectedValueException;

/**
 * Type of committed use discount.
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.VmwareEnginePreferences.CommitmentPlan</code>
 */
class CommitmentPlan
{
    /**
     * Unspecified commitment plan.
     *
     * Generated from protobuf enum <code>COMMITMENT_PLAN_UNSPECIFIED = 0;</code>
     */
    const COMMITMENT_PLAN_UNSPECIFIED = 0;
    /**
     * No commitment plan (on-demand usage).
     *
     * Generated from protobuf enum <code>ON_DEMAND = 1;</code>
     */
    const ON_DEMAND = 1;
    /**
     * 1 year commitment (monthly payments).
     *
     * Generated from protobuf enum <code>COMMITMENT_1_YEAR_MONTHLY_PAYMENTS = 2;</code>
     */
    const COMMITMENT_1_YEAR_MONTHLY_PAYMENTS = 2;
    /**
     * 3 year commitment (monthly payments).
     *
     * Generated from protobuf enum <code>COMMITMENT_3_YEAR_MONTHLY_PAYMENTS = 3;</code>
     */
    const COMMITMENT_3_YEAR_MONTHLY_PAYMENTS = 3;
    /**
     * 1 year commitment (upfront payment).
     *
     * Generated from protobuf enum <code>COMMITMENT_1_YEAR_UPFRONT_PAYMENT = 4;</code>
     */
    const COMMITMENT_1_YEAR_UPFRONT_PAYMENT = 4;
    /**
     * 3 years commitment (upfront payment).
     *
     * Generated from protobuf enum <code>COMMITMENT_3_YEAR_UPFRONT_PAYMENT = 5;</code>
     */
    const COMMITMENT_3_YEAR_UPFRONT_PAYMENT = 5;

    private static $valueToName = [
        self::COMMITMENT_PLAN_UNSPECIFIED => 'COMMITMENT_PLAN_UNSPECIFIED',
        self::ON_DEMAND => 'ON_DEMAND',
        self::COMMITMENT_1_YEAR_MONTHLY_PAYMENTS => 'COMMITMENT_1_YEAR_MONTHLY_PAYMENTS',
        self::COMMITMENT_3_YEAR_MONTHLY_PAYMENTS => 'COMMITMENT_3_YEAR_MONTHLY_PAYMENTS',
        self::COMMITMENT_1_YEAR_UPFRONT_PAYMENT => 'COMMITMENT_1_YEAR_UPFRONT_PAYMENT',
        self::COMMITMENT_3_YEAR_UPFRONT_PAYMENT => 'COMMITMENT_3_YEAR_UPFRONT_PAYMENT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


