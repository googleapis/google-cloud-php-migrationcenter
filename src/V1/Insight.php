<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An insight about an asset.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.Insight</code>
 */
class Insight extends \Google\Protobuf\Internal\Message
{
    protected $insight;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\MigrationCenter\V1\MigrationInsight $migration_insight
     *           Output only. An insight about potential migrations for an asset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. An insight about potential migrations for an asset.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MigrationInsight migration_insight = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\MigrationCenter\V1\MigrationInsight|null
     */
    public function getMigrationInsight()
    {
        return $this->readOneof(1);
    }

    public function hasMigrationInsight()
    {
        return $this->hasOneof(1);
    }

    /**
     * Output only. An insight about potential migrations for an asset.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MigrationInsight migration_insight = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\MigrationCenter\V1\MigrationInsight $var
     * @return $this
     */
    public function setMigrationInsight($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\MigrationInsight::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInsight()
    {
        return $this->whichOneof("insight");
    }

}

