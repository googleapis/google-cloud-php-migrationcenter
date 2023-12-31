<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\AggregationResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of a count aggregation.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.AggregationResult.Count</code>
 */
class Count extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 value = 1;</code>
     */
    protected $value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 value = 1;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>int64 value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

}


