<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\ReportConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a combination of a group with a preference set.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ReportConfig.GroupPreferenceSetAssignment</code>
 */
class GroupPreferenceSetAssignment extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the group.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $group = '';
    /**
     * Required. Name of the Preference Set.
     *
     * Generated from protobuf field <code>string preference_set = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $preference_set = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group
     *           Required. Name of the group.
     *     @type string $preference_set
     *           Required. Name of the Preference Set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the group.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Required. Name of the group.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * Required. Name of the Preference Set.
     *
     * Generated from protobuf field <code>string preference_set = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPreferenceSet()
    {
        return $this->preference_set;
    }

    /**
     * Required. Name of the Preference Set.
     *
     * Generated from protobuf field <code>string preference_set = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPreferenceSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->preference_set = $var;

        return $this;
    }

}


