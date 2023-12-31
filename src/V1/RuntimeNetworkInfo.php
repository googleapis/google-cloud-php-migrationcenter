<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Runtime networking information.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.RuntimeNetworkInfo</code>
 */
class RuntimeNetworkInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Time of the last network scan.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scan_time = 1;</code>
     */
    protected $scan_time = null;
    /**
     * Network connections.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkConnectionList connections = 2;</code>
     */
    protected $connections = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $scan_time
     *           Time of the last network scan.
     *     @type \Google\Cloud\MigrationCenter\V1\NetworkConnectionList $connections
     *           Network connections.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Time of the last network scan.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scan_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScanTime()
    {
        return $this->scan_time;
    }

    public function hasScanTime()
    {
        return isset($this->scan_time);
    }

    public function clearScanTime()
    {
        unset($this->scan_time);
    }

    /**
     * Time of the last network scan.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scan_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScanTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->scan_time = $var;

        return $this;
    }

    /**
     * Network connections.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkConnectionList connections = 2;</code>
     * @return \Google\Cloud\MigrationCenter\V1\NetworkConnectionList|null
     */
    public function getConnections()
    {
        return $this->connections;
    }

    public function hasConnections()
    {
        return isset($this->connections);
    }

    public function clearConnections()
    {
        unset($this->connections);
    }

    /**
     * Network connections.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkConnectionList connections = 2;</code>
     * @param \Google\Cloud\MigrationCenter\V1\NetworkConnectionList $var
     * @return $this
     */
    public function setConnections($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\NetworkConnectionList::class);
        $this->connections = $var;

        return $this;
    }

}

