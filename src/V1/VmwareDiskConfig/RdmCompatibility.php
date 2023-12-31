<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\VmwareDiskConfig;

use UnexpectedValueException;

/**
 * RDM compatibility mode.
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.VmwareDiskConfig.RdmCompatibility</code>
 */
class RdmCompatibility
{
    /**
     * Compatibility mode unspecified or unknown.
     *
     * Generated from protobuf enum <code>RDM_COMPATIBILITY_UNSPECIFIED = 0;</code>
     */
    const RDM_COMPATIBILITY_UNSPECIFIED = 0;
    /**
     * Physical compatibility mode.
     *
     * Generated from protobuf enum <code>PHYSICAL_COMPATIBILITY = 1;</code>
     */
    const PHYSICAL_COMPATIBILITY = 1;
    /**
     * Virtual compatibility mode.
     *
     * Generated from protobuf enum <code>VIRTUAL_COMPATIBILITY = 2;</code>
     */
    const VIRTUAL_COMPATIBILITY = 2;

    private static $valueToName = [
        self::RDM_COMPATIBILITY_UNSPECIFIED => 'RDM_COMPATIBILITY_UNSPECIFIED',
        self::PHYSICAL_COMPATIBILITY => 'PHYSICAL_COMPATIBILITY',
        self::VIRTUAL_COMPATIBILITY => 'VIRTUAL_COMPATIBILITY',
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


