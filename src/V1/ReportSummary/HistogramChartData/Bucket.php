<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\ReportSummary\HistogramChartData;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A histogram bucket with a lower and upper bound, and a count of items
 * with a field value between those bounds.
 * The lower bound is inclusive and the upper bound is exclusive.
 * Lower bound may be -infinity and upper bound may be infinity.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ReportSummary.HistogramChartData.Bucket</code>
 */
class Bucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Lower bound - inclusive.
     *
     * Generated from protobuf field <code>int64 lower_bound = 1;</code>
     */
    protected $lower_bound = 0;
    /**
     * Upper bound - exclusive.
     *
     * Generated from protobuf field <code>int64 upper_bound = 2;</code>
     */
    protected $upper_bound = 0;
    /**
     * Count of items in the bucket.
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     */
    protected $count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $lower_bound
     *           Lower bound - inclusive.
     *     @type int|string $upper_bound
     *           Upper bound - exclusive.
     *     @type int|string $count
     *           Count of items in the bucket.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Lower bound - inclusive.
     *
     * Generated from protobuf field <code>int64 lower_bound = 1;</code>
     * @return int|string
     */
    public function getLowerBound()
    {
        return $this->lower_bound;
    }

    /**
     * Lower bound - inclusive.
     *
     * Generated from protobuf field <code>int64 lower_bound = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLowerBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->lower_bound = $var;

        return $this;
    }

    /**
     * Upper bound - exclusive.
     *
     * Generated from protobuf field <code>int64 upper_bound = 2;</code>
     * @return int|string
     */
    public function getUpperBound()
    {
        return $this->upper_bound;
    }

    /**
     * Upper bound - exclusive.
     *
     * Generated from protobuf field <code>int64 upper_bound = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpperBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->upper_bound = $var;

        return $this;
    }

    /**
     * Count of items in the bucket.
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Count of items in the bucket.
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

}


