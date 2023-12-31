<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Guest OS config information.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.GuestConfigDetails</code>
 */
class GuestConfigDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * OS issue (typically /etc/issue in Linux).
     *
     * Generated from protobuf field <code>string issue = 1;</code>
     */
    protected $issue = '';
    /**
     * Mount list (Linux fstab).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FstabEntryList fstab = 2;</code>
     */
    protected $fstab = null;
    /**
     * Hosts file (/etc/hosts).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.HostsEntryList hosts = 3;</code>
     */
    protected $hosts = null;
    /**
     * NFS exports.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NfsExportList nfs_exports = 4;</code>
     */
    protected $nfs_exports = null;
    /**
     * Security-Enhanced Linux (SELinux) mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestConfigDetails.SeLinuxMode selinux_mode = 5;</code>
     */
    protected $selinux_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issue
     *           OS issue (typically /etc/issue in Linux).
     *     @type \Google\Cloud\MigrationCenter\V1\FstabEntryList $fstab
     *           Mount list (Linux fstab).
     *     @type \Google\Cloud\MigrationCenter\V1\HostsEntryList $hosts
     *           Hosts file (/etc/hosts).
     *     @type \Google\Cloud\MigrationCenter\V1\NfsExportList $nfs_exports
     *           NFS exports.
     *     @type int $selinux_mode
     *           Security-Enhanced Linux (SELinux) mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * OS issue (typically /etc/issue in Linux).
     *
     * Generated from protobuf field <code>string issue = 1;</code>
     * @return string
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * OS issue (typically /etc/issue in Linux).
     *
     * Generated from protobuf field <code>string issue = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIssue($var)
    {
        GPBUtil::checkString($var, True);
        $this->issue = $var;

        return $this;
    }

    /**
     * Mount list (Linux fstab).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FstabEntryList fstab = 2;</code>
     * @return \Google\Cloud\MigrationCenter\V1\FstabEntryList|null
     */
    public function getFstab()
    {
        return $this->fstab;
    }

    public function hasFstab()
    {
        return isset($this->fstab);
    }

    public function clearFstab()
    {
        unset($this->fstab);
    }

    /**
     * Mount list (Linux fstab).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FstabEntryList fstab = 2;</code>
     * @param \Google\Cloud\MigrationCenter\V1\FstabEntryList $var
     * @return $this
     */
    public function setFstab($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\FstabEntryList::class);
        $this->fstab = $var;

        return $this;
    }

    /**
     * Hosts file (/etc/hosts).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.HostsEntryList hosts = 3;</code>
     * @return \Google\Cloud\MigrationCenter\V1\HostsEntryList|null
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    public function hasHosts()
    {
        return isset($this->hosts);
    }

    public function clearHosts()
    {
        unset($this->hosts);
    }

    /**
     * Hosts file (/etc/hosts).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.HostsEntryList hosts = 3;</code>
     * @param \Google\Cloud\MigrationCenter\V1\HostsEntryList $var
     * @return $this
     */
    public function setHosts($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\HostsEntryList::class);
        $this->hosts = $var;

        return $this;
    }

    /**
     * NFS exports.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NfsExportList nfs_exports = 4;</code>
     * @return \Google\Cloud\MigrationCenter\V1\NfsExportList|null
     */
    public function getNfsExports()
    {
        return $this->nfs_exports;
    }

    public function hasNfsExports()
    {
        return isset($this->nfs_exports);
    }

    public function clearNfsExports()
    {
        unset($this->nfs_exports);
    }

    /**
     * NFS exports.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NfsExportList nfs_exports = 4;</code>
     * @param \Google\Cloud\MigrationCenter\V1\NfsExportList $var
     * @return $this
     */
    public function setNfsExports($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\NfsExportList::class);
        $this->nfs_exports = $var;

        return $this;
    }

    /**
     * Security-Enhanced Linux (SELinux) mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestConfigDetails.SeLinuxMode selinux_mode = 5;</code>
     * @return int
     */
    public function getSelinuxMode()
    {
        return $this->selinux_mode;
    }

    /**
     * Security-Enhanced Linux (SELinux) mode.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestConfigDetails.SeLinuxMode selinux_mode = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSelinuxMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\GuestConfigDetails\SeLinuxMode::class);
        $this->selinux_mode = $var;

        return $this;
    }

}

